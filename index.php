<?php 
    include_once("dbConnection/mysqlconfig_connection.php");
    include_once("functions/fetch.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>CRUD | My Subjects</title>
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

