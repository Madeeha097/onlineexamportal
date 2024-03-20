<?php
    session_start();
    if(!isset($_SESSION['login_id'])) {
        header("Location: ../views/login.php");
    } 
    require_once('../resources/config.php');
    $stream_name  = $_POST['stream_name'];
    $stream_code = $_POST['stream_code'];
    

    $query = "INSERT INTO tbl_stream (stream_name, stream_code) 
                VALUES('$stream_name', '$stream_code')";
    $run = mysqli_query($con, $query);

    if($run) {
        echo 200;
    } else {
        echo 201;
    }

?>    
