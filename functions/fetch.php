<?php
    //fetching data
    $query ="SELECT * FROM tblsyllabus
    INNER JOIN tblsubjects ON tblsyllabus.subject_id = tblsubjects.subject_id;
    ";
    $result = mysqli_query($dbc, $query);//using mysqli_query
?>