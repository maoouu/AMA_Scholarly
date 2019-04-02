<?php
    include 'dbh.inc.php';

    $url = $_SERVER['REQUEST_URI'];
    //echo $url;
    $id = $_GET['id'];
    //$_SESSION['preview_ID'] = $id;

    // simple hit/view mechanic
    $view_sql = "UPDATE Metadata SET db_views = db_views+1 WHERE db_ID = '$id'";
    mysqli_query($conn, $view_sql);
    
    $sql = "SELECT * FROM Metadata WHERE db_ID = '$id'";

    $query = mysqli_query($conn, $sql);

    session_start();
    
    while ($row = mysqli_fetch_array($query)) {
       $_SESSION["preview_ID"] = $row['db_ID'];
       $_SESSION["preview_title"] = $row['db_title'];
       $_SESSION["author_quantity"] = $row['db_authorQuantity'];
       $_SESSION["preview_category"] = $row['db_category'];
       $_SESSION["preview_date_created"] = $row['db_date'];
       $_SESSION["preview_file"] = $row['db_fileName'];
    }
    header('Location: ../preview.php');
    //echo $_SESSION['preview_ID'];
    //header('Location: ../preview.php');
    /*
    $sql = "SELECT * FROM Metadata";
    $query = mysqli_query($conn, $sql);
    
    while ($row = mysqli_fetch_array($query)) {
        if ($row['db_ID'] == $id) {
            $_SESSION['preview_ID'] = $id;
        }
    }
    */
?>
