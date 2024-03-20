<?php
    session_start();
    if(!isset($_SESSION['login_id'])) {
        header("Location: ../views/login.php");
    } 
    require_once('../resources/config.php');
    $question_text = $_POST['question_text'];
    //$question_type = $_POST['question_type'];
    $correct_answer = $_POST['correct_answer'];
    $subject_id = $_POST['subject_id'];
    

    $query = "INSERT INTO tbl_question (question_text,  correct_answer, subject_id) 
                VALUES('$question_text',  '$correct_answer', '$subject_id')";
    $run = mysqli_query($con, $query);

    if($run) {
        echo 200;
    } else {
        echo 201;
    }

?>    
