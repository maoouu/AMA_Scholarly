<?php
  include 'includes/session.inc.php';
  require 'includes/dbh.inc.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | AMA Scholarly</title>
    <link rel="stylesheet" href="css/bulma.css"> <!-- use min.css at the final -->
    <link rel="stylesheet" href="css/manual.css">
    <link rel="icon" href="img/amau_logo.png">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
    <?php include 'nav.php' ?>
    
    <main>
      <?php include 'page-content.php' ?>
    </main>
  </body>
</html>
