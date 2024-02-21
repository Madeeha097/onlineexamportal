<?php
    session_start();
    include('../resources/config.php');
    $us= $_POST['user'];
    $pw = md5($_POST['pwd']);
    $withoutEncryption = $_POST['pwd'];


    $get_data = "SELECT COUNT(*) as 'cnt' FROM tbl_login WHERE username = '$us' AND password = '$pw'";

    $run_data   = mysqli_query($con, $get_data);
    $row_data = mysqli_fetch_array($run_data);
    $count = $row_data['cnt'];

    if($count > 0) {
        $get_data1 = "SELECT * FROM tbl_login WHERE username = '$us' AND password = '$pw'";

        $run_data1 = mysqli_query($con, $get_data1);
        $row_data1 = mysqli_fetch_array($run_data1);
        $_SESSION['username'] = $us;
        $_SESSION['password'] = $pw;
        $_SESSION['withoutEncryption'] = $withoutEncryption;
        $_SESSION['login_id'] = $row_data1['id'];
        $_SESSION['profilePic'] = $row_data1['image'];
        echo 200;
    } else {
        $query = "UPDATE tbl_login SET login_attempts = login_attempts + 1 WHERE username = '$us'";
        $run = mysqli_query($con, $query);
        echo 201;      
    }
