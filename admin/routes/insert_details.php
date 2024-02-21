<?php

    session_start();
    require_once('../resources/config.php');
    $id = $_SESSION['login_id'];
    $us = $_SESSION['username'];
    // This code is for images
    $org_name = $_FILES['fileInput']['name'];
    $temp_name = $_FILES['fileInput']['tmp_name'];
    
    $fileData = fopen($temp_name, 'r');
    while($rowData = fgetcsv($fileData)) {

        $sn = mysqli_real_escape_string($con, $rowData[0]);
        $sc = mysqli_real_escape_string($con, $rowData[1]);
        $query = "INSERT INTO tbl_stream (stream_name, stream_code, uploaded_by) VALUES('$sn', '$sc', '$us')";
        $run = mysqli_query($con, $query);
    }

    if($run) {
        echo 200;
    }else {
        echo mysqli_error($con);
    }

?>    
