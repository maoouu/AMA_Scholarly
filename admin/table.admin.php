<?php
  include 'session.adm.php';
  require '../includes/dbh.inc.php';
 ?>
<!-- test commit -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | AMA Scholarly</title>
    <link rel="stylesheet" href="../css/bulma.css"> <!-- use min.css at the final -->
    <link rel="stylesheet" href="../css/manual.css">
    <link rel="icon" href="../img/amau_logo.png">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
    <?php include 'nav.adm.php'; ?>
    
    <?php include 'table.dashboard.adm.php'; ?>

    <!-- Modal for edit button -->
    <div class="modal">
      <div class="modal-background"></div>
      <div class="modal-content">
        <!-- Bulma element goes here -->
      </div>
      <button class="modal-close is-large" aria-aria-label="close"></button>
    </div>

    <script>
      
    </script>
  </body>
</html>
