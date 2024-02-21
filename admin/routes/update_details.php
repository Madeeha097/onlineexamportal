<?php
    session_start();
    require_once('../resources/config.php');
    $id = $_SESSION['login_id'];
    $nn = $_POST['new_name'];
    $ne = $_POST['new_email'];
    $nc = $_POST['new_cell'];
    $np = md5($_POST['new_password']);

    // This code is for images
    $org_name = $_FILES['new_image']['name'];
    $temp_name = $_FILES['new_image']['tmp_name'];
    $ext = $_FILES['new_image']['type'];
    $size = $_FILES['new_image']['size'];

    if($size > 0) {
        unlink('../assets/images/' . $_SESSION['profilePic']);
        $path = '../assets/images/' . $org_name;
        move_uploaded_file($temp_name, $path);
        $query = "UPDATE tbl_user SET name = '$nn', email = '$ne' , password = '$np' , image = '$org_name', phone = '$nc' WHERE id= '$id'";
    }else {
        $query = "UPDATE tbl_login SET name = '$nn', email = '$ne', password = '$np', phone = '$nc' WHERE id= '$id'";
    }
    $run = mysqli_query($con, $query);
    if($run) {
        echo 200;
    } else {
        echo mysqli_error($con);
    }
    

    
?>
