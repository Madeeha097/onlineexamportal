<?php
    session_start();
    if(!isset($_SESSION['login_id'])) {
        header("Location: ../views/login.php");
    } 
    require_once('../resources/config.php');
    $subject_name  = $_POST['subject_name'];
    $subject_code  = $_POST['subject_code'];
    
    
    

    $query = "INSERT INTO tbl_subject (subject_name, subject_code) 
                VALUES('$subject_name', '$subject_code')";
    $run = mysqli_query($con, $query);

    if($run) {
        echo 200;
    } else {
        echo 201;
    }

?>    
