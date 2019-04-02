<?php
    include '../includes/dbh.inc.php';

    $url = $_SERVER['REQUEST_URI'];
    //echo $url; //was only used for systems check
    $id = $_GET['id'];
    //$_SESSION['preview_ID'] = $id;

    $sql = "SELECT * FROM Metadata WHERE db_ID = '$id'";

    $query = mysqli_query($conn, $sql);

    session_start();

    while ($row = mysqli_fetch_array($query)) {
       $_SESSION["preview_ID"] = $row['db_ID'];
       $_SESSION["preview_title"] = $row['db_title'];
       $_SESSION["preview_author"] = $row['db_author'];
       $_SESSION["preview_category"] = $row['db_category'];
       $_SESSION["preview_date_created"] = $row['db_date'];

       
    }
    header('Location: preview.adm');
?>
