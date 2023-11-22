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
        h1 {
            background-color: #950101; 
            color: #fff;
            text-align: center;
            padding: 15px;
            margin: 0;
        }
        a {
            text-decoration: none;
            color: #e74c3c; 
            font-size: 1.5em;
            font-weight: 700;
            font-family: 'Helvetica', sans-serif; 
            transition: 0.3s;
            display: block;
            text-align: center;
            padding: 15px; 
        }
        a:hover {
            color: #630000; 
        }
        table {
            width: 80%;
            margin: 0 auto; /* Adjusted the margin to remove whitespace */
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        th, td {
            padding: 12px 15px;
            text-align: center;
        }
        th {
            background-color: #BD1616;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        td:last-child {
            text-align: center;
        }
        .add-button {
            background-color: #27ae60;
            color: #fff;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Add Syllabus</h1>
    <a href="../index.php">Home</a>
    <form action="../functions/add.php" method="post" name="form1">
        <table>
            <tr>
                <th>Syllabus Code</th>
                <th>Syllabus Author</th>
                <th>Subject</th>
            </tr>
            <tr>
                <td><input type="text" name="code"></td>
                <td><input type="text" name="author"></td>
                <td>
                    <select name="subject" id="subject">
                        <?php
                            include_once ("../dbConnection/mysqlconfig_connection.php");
                            $query = "SELECT * FROM tblsubjects";
                            $result = mysqli_query ($dbc, $query);
                            while ($res = mysqli_fetch_array($result)) {
                                echo "<option value=\"".$res['Subject_ID']."\">";
                                echo $res['Subject_Name'];
                                echo "</option>";
                            }
                        ?>
                    </select>
                </td>
                <td><input type="submit" name="Submit" value="Add" class="add-button"></td>
            </tr>
        </table>
    </form>
</body>
</html>