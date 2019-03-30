<?php
  session_start();

  if (!isset($_SESSION["ID"])) {
      header('Location: ../index.php');
  } elseif (!($_SESSION['USN'] == 'Admin')) {
      header('Location: ../home.php'); //prevents user to enter Admin dashboard
  }
 ?>
