<?php
    session_start();
    if(!isset($_SESSION['login_id'])) {
        header("Location: ../views/login.php");
    } 
    require_once('../resources/config.php');
    $name  = $_POST['name'];
    $username  = $_POST['username'];
    $password = $_POST['password'];
    $email= $_POST['email'];
    $dob = $_POST['dob'];
    $address  = $_POST['address'];
    $district  = $_POST['district'];
    $area  = $_POST['area'];
    $phone  = $_POST['phone'];
    $last_logged_in  = $_POST['last_logged_in'];
    $login_attempts  = $_POST['login_attempts'];
    $registration_date = $_POST['registration_date'];
    $role = $_POST['role'];

    

    $query = "INSERT INTO tbl_user (username, password, email, dob, address, district, area, phone, last_logged_in, login_attempts registration_date, role) 
                VALUES('$username', '$password', '$email', '$dob', '$address', '$district', '$area', '$phone', '$last_looged_in', '$login_attempts',$registration_date', '$role')";
    $run = mysqli_query($con, $query);

    if($run) {
        echo 200;
    } else {
        echo 201;
    }

?>    
