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
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="icon" href="../img/amau_logo.png">
    <script defer src="fontawesome/js/all.js"></script>
  </head>
  <body>
    <?php include 'nav.adm.php'; ?>
    
    <main>
      <?php include 'upload.dashboard.adm.php'; ?>
    </main>
    
    <!-- "Get wrecked this javascript code that I made" -(Dale) -->
    <script defer src="../js/select.js"></script>
    <script defer src="../js/citation.js"></script>
    
    <!-- Javascript magic for the upload form -->
    <script type="text/javascript">
      var file = document.getElementById("file");
      file.onchange = function() {
        if(file.files.length > 0) {
            document.getElementById('filename').innerHTML = file.files[0].name;
        }
      }
    </script>

    <?php include 'footer.adm.php' ?>

  </body>
</html>
