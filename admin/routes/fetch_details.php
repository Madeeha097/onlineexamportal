<?php
    session_start();
    include('../resources/config.php');
    $id = $_SESSION['login_id'];

    $get_data = "SELECT * FROM  tbl_login WHERE id = '$id'";
    $run_data = mysqli_query($con, $get_data);
    $row_data = mysqli_fetch_array($run_data);
    echo json_encode($row_data);

?>