<?php
    include_once("../dbConnection/mysqlconfig_connection.php");

    $id = $_GET["id"];

    $result = mysqli_query($dbc,"SELECT * FROM tblsubjects WHERE subject_id=$id");
    while($res = mysqli_fetch_array($result)) {
        $code = $res["Subject_Code"];
        $name = $res["Subject_Name"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
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
        }
        a:hover {
            color: #630000; 
        }
        table {
            width: 80%;
            margin: 20px auto;
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
        .edit-button {
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
    <h1>Edit Subject</h1>
    <a href="../index.php">Home</a>
    <form action="../functions/edit.php" method="post" name="form1">
        <table>
            <tr>
                <th>Subject Name</th>
                <th>Subject Code</th>
                <th></th>
                <th>Action</th>
            </tr>
            <tr>
                <td><input type="text" name="code" value="<?php echo $code;?>" class="your-input-class"></td>
                <td><input type="text" name="name" value="<?php echo $name;?>" class="your-input-class"></td>
                <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>" class="your-input-class"></td>
                <td><input type="submit" name="update" value="Update" class="edit-button"></td>
            
            </tr>
            
        </table>
    </form>
</body>
</html>
