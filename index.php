<?php 
    include_once("dbConnection/mysqlconfig_connection.php");
    include_once("functions/fetch.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #CCCCCC;
        }
    </style>
</head>
<body>
    <h1>My Subjects</h1>
    <a href="forms/addform.php">Add Subject</a>
    <br><br>
    <table>
        <tr>
            <td>ID</td>
            <td>Subject Code</td>
            <td>Subject Name</td>
            <td>Action</td>
        </tr>
        <?php
            while($res = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$res['Subject_ID']."</td>";
                echo "<td>".$res['Subject_Code']."</td>";
                echo "<td>".$res['Subject_Name']."</td>";
                echo "<td><a href=\"forms/editform.php?id=".$res['Subject_ID']."\">Edit</a> |
                        <a href=\"forms/delete.php?id=".$res['Subject_ID']."\"
                        onclick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                echo "</tr>";
            }    
        ?>
    </table>
</body>
</html>