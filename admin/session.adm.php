<?php
  session_start();

  if (!isset($_SESSION["ID"])) {
      header('Location: ../');
  } elseif (!($_SESSION['USN'] == 'Admin')) {
      header('Location: ../home'); //prevents user to enter Admin dashboard
  }
 ?>
