<?php
    $query = "SELECT * FROM tblsubjects LEFT JOIN tblsyllabus ON tblsyllabus.subjectid = tblsyllabus.subjectid";
    $result = mysqli_query($dbc, $query);
?>