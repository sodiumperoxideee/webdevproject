<?php 
    include_once("dbConnection/mysqlconfig_connection.php");
    include_once("functions/fetch.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | My Subjects</title>
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
            padding: 20px;
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
        tr:hover {
            background-color: #D8B6A4;
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
        .delete-button {
            background-color: #e74c3c; 
            color: #fff;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>My Subjects</h1>
    <a href="forms/addform.php">Add Subject</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Subject Code</th>
            <th>Subject Name</th>
            <th>Action</th>
        </tr>
        <?php
            while ($res = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$res['Subject_ID']."</td>";
                echo "<td>".$res['Subject_Code']."</td>";
                echo "<td>".$res['Subject_Name']."</td>";
                echo '<td><button class="edit-button" onclick="location.href=\'forms/editform.php?id='.$res['Subject_ID'].'\'">Edit</button> |
                      <button class="delete-button" onclick="if(confirm(\'Are you sure you want to delete?\')){ location.href=\'functions/delete.php?id='.$res['Subject_ID'].'\'; }">Delete</button></td>';
                echo "</tr>";
            }    
        ?>
    </table>
</body>
</html>

