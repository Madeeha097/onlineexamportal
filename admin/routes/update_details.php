<?php
    session_start();
    require_once('../resources/config.php');
    
    $filename = $_POST['filename'];

    if($filename == 'update_user') {
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
    }
    else if($filename == 'update_questions') {
//This section updates question details
    $question_text = $_POST['question_text'];
    $correct_answer = $_POST['correct_answer'];

    $query = "UPDATE tbl_question  SET question_text = '$question_text' ,  correct_answer = '$correct_answer' WHERE id = '$data_id' "; 
    $run = mysqli_query($con, $query);
        if($run) {
            echo 200;
        } else {
            echo mysqli_error($con);
    }

}  
    else if($filename == 'update_quiz') {
//This section updates quiz details
    $title  = $_POST['title'];  
    $query = "UPDATE tbl_quiz SET title = '$title' WHERE id = '$data_id'";
    $run = mysqli_query($con, $query);
        if($run) {
            echo 200;
        } else {
            echo mysqli_error($con);
    }
}

//This section updates user details    
   /* $name  = $_POST['name'];
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

    $query = "UPDATE tbl_user SET '$username', '$password', '$email', '$dob', '$address', '$district', '$area','$phone', '$last_logged_in', '$login_attempts', '$registration_date', '$role' WHERE id = '$data_id'";
    $run = mysqli_query($con, $query);
        if($run) {
            echo 200;
        } else {
            echo mysqli_error($con);
    }*/

    else if($filename == 'update_subject'){
//This section updates subject details 
    $subject_name  = $_POST['subject_name'];
    $subject_code  = $_POST['subject_code'];

    $query = "UPDATE tbl_subject SET subject_name = '$subject_name', subject_code' = $subject_code' WHERE id = '$data_id'";
    $run = mysqli_query($con, $query);
        if($run) {
            echo 200;
        } else {
            echo mysqli_error($con);
    }
}

else if($filename == 'update_stream'){
//This section updates stream details

    $stream_name  = $_POST['stream_name'];
    $stream_code = $_POST['stream_code'];   

    $query = "UPDATE tbl_stream SET stream_name = '$stream_name', stream_code = '$stream_code' WHERE id = '$data_id'";
    $run = mysqli_query($con, $query);

        if($run) {
            echo 200;
        } else {
            echo 201;
    }
}

else if($filename == 'update_semester') {
//This section updates semester details    

    $sem_name  = $_POST['semester_name'];

    $query = "UPDATE tbl_semester SET sem_name = '$sem_name' WHERE id = '$data_id'";
    $run = mysqli_query($con, $query);

        if($run) {
            echo 200;
        } else {
            echo 201;
    }
}     
?>



