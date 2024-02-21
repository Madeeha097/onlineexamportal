<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header("Location: ../views/login.php");
    }
    include('config.php');
?>    
<html>
    <head>
        <title> My Admin Panel </title>

        <link rel="stylesheet" href="../assets/css/custom.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">    
    
    </head>

