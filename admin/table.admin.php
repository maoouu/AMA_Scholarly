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
    
    <main>
      <?php include 'table.dashboard.adm.php'; ?>
    </main>
    <!-- Javascript for edit -->
    <script>

      function showDetails($document_ID) {
        let modal    = document.getElementById('show_document');
        // if is not null generate the modal
        if ($document_ID>0) {
          let table = document.getElementById('document_' + $document_ID);
          let table_title = table.querySelector('.document-title').innerText;
          let table_authors = table.querySelector('.document-authors').innerText;
          let table_category = table.querySelector('.document-category').innerText;
          let table_date = table.querySelector('.document-date').innerText;
          //
          modal.querySelector('.document-title').innerText = table_title;
          modal.querySelector('.document-authors').innerText = table_authors;
          modal.querySelector('.document-category').innerText = table_category;
          modal.querySelector('.document-date').innerText = table_date;
        }
        // This will open and close the modal
        modal.classList.toggle("is-active");
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

    <?php include 'footer.adm.php' ?>

  </body>
</html>
