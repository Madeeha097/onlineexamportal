<?php
    session_start();
    include('../resources/config.php');
    $id = $_SESSION['login_id'];

    $filename = $_POST['filename'];

    if($filename == 'fetch_user') {
        $get_data = "SELECT * FROM  tbl_login WHERE id = '$id'";
        $run_data = mysqli_query($con, $get_data);
        $row_data = mysqli_fetch_array($run_data);
        echo json_encode($row_data);
    }
    else if($filename == 'fetch_semester')
    //This section fetches semester details
    $get_data = "SELECT * FROM  tbl_semester WHERE id = '$data_id'";
    $run_data = mysqli_query($con, $get_data);
    $row_data = mysqli_fetch_array($run_data);
    echo json_encode($row_data);

    //This section fetches stream details
    $get_data = "SELECT * FROM  tbl_stream WHERE id = '$data_id'";
    $run_data = mysqli_query($con, $get_data);
    $row_data = mysqli_fetch_array($run_data);
    echo json_encode($row_data);

    //This section fetches subject details
    $get_data = "SELECT * FROM  tbl_subject WHERE id = '$data_id'";
    $run_data = mysqli_query($con, $get_data);
    $row_data = mysqli_fetch_array($run_data);
    echo json_encode($row_data);

    //This section fetches quiz details
    $get_data = "SELECT * FROM  tbl_quiz WHERE id = '$data_id'";
    $run_data = mysqli_query($con, $get_data);
    $row_data = mysqli_fetch_array($run_data);
    echo json_encode($row_data);

    //This section fetches question details
    $get_data = "SELECT * FROM  tbl_question WHERE id = '$data_id'";
    $run_data = mysqli_query($con, $get_data);
    $row_data = mysqli_fetch_array($run_data);
    echo json_encode($row_data);

    //This section fetches user details
    $get_data = "SELECT * FROM  tbl_user WHERE id = '$data_id'";
    $run_data = mysqli_query($con, $get_data);
    $row_data = mysqli_fetch_array($run_data);
    echo json_encode($row_data);








?>