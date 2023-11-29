<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .modal-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .message-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .error-message {
            color: red;
        }

        .success-message {
            color: green;
        }
    </style>
</head>
<body>
    <div class="modal-container">
        <?php
            include_once("../dbConnection/mysqlconfig_connection.php");

            if(isset($_POST['Submit'])){
                $code = $_POST['code'];
                $author = $_POST['author'];
                $subject = $_POST['subject'];

                if(empty($code) || empty($author)) {
                    $errorMessages = array();
                    if(empty($code)) {
                        $errorMessages[] = "Syllabus Code field is empty.";
                    }
                    if(empty($author)) {
                        $errorMessages[] = "Syllabus Author field is empty.";
                    }

                    echo '<div class="message-container">';
                    foreach ($errorMessages as $errorMessage) {
                        echo '<p class="error-message">' . $errorMessage . '</p>';
                    }
                    echo '<br/><a href="javascript:self.history.back();">Go Back</a>';
                    echo '</div>';
                } 
                else {
                    $result = mysqli_query($dbc, "INSERT INTO tblsubjects(syllabus_code, syllabus_author) VALUES('$code','$author')");
                    echo '<div class="message-container">';
                    echo '<p class="success-message">Data added successfully.</p>';
                    echo '<br/><a href="../index.php">View Result</a>';
                    echo '</div>';
                }   
            }    
        ?>
    </div>
</body>
</html>
