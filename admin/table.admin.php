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

    <!-- Javascript for edit -->
    <script>

      function showDetails($document_ID) {
        var elementID = "show_" + $document_ID;
        // This will open and close the modal
        document.getElementById(elementID).classList.toggle("is-active");
      }

      function showEdit($document_ID) {
        var elementID = "edit_" + $document_ID;
        // This will open and close the modal
        document.getElementById(elementID).classList.toggle("is-active");
      }

      function showDelete($document_ID) {
        var elementID = "delete_" + $document_ID;
        // This will open and close the modal
        document.getElementById(elementID).classList.toggle("is-active");
      }
    </script>
  </body>
</html>
