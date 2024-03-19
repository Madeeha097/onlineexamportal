<?php
    session_start();
    if(!isset($_SESSION['login_id'])) {
        header("Location: ../views/login.php");
    } 
    require_once('../resources/config.php');
    $title  = $_POST['title'];
    $creator_id = $_POST['creator_id'];
    $creation_date  = $_POST['creation_date'];
    $start_date  = $_POST['start_date'];
    $end_date  = $_POST['end_date'];
    $stream_id  = $_POST['stream_id'];
    $semester_id  = $_POST['semester_id'];
    $subject_id  = $_POST['subject_id'];
    

    $query = "INSERT INTO tbl_quiz (title, creator_id, creation_date, start_date, end_date, stream_id, semester_id, subject_id) 
                VALUES('$title', '$creator_id', '$creation_date', '$start_date', '$end_date', '$stream_id', '$semester_id', '$subject_id')";
    $run = mysqli_query($con, $query);

    if($run) {
        echo 200;
    } else {
        echo 201;
    }

?>    
