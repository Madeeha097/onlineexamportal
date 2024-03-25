<?php
    session_start();
    if(!isset($_SESSION['login_id'])) {
        header("Location: ../views/login.php");
    } 
    require_once('../resources/config.php');
    $sem_name  = $_POST['semester_name'];
    // $stream_id = $_POST['stream_id'];
    

    $query = "INSERT INTO tbl_semester (semester_name) 
                VALUES('$sem_name')";
    $run = mysqli_query($con, $query);

    if($run) {
        echo 200;
    } else {
        echo 201;
    }

?>    
