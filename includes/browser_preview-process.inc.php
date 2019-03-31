<?php
    //include
    include 'dbh.inc.php';

    //initializing data
    session_start();
    $_SESSION["title"] = $_SESSION["category"] = $_SESSION["author"] = "";

    //if condition
    if ($_GET['title']) {
        $_SESSION["title"] = mysqli_real_escape_string($conn, $_GET['title']);
    }

    if ($_GET['category']) {
        $_SESSION["category"] = mysqli_real_escape_string($conn, $_GET['category']);
    }

    if ($_GET['author']) {
        $_SESSION["author"] = mysqli_real_escape_string($conn, $_GET['author']);
    }

    header('Location: ../browser_list.php');
?>
