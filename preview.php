<?php
  include 'includes/session.inc.php';
  require 'includes/dbh.inc.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_SESSION['preview_title']; ?> | AMA Scholarly</title> <!-- Pangalan ng Document sa PHP -->
    <link rel="stylesheet" href="css/bulma.css"> <!-- use min.css at the final -->
    <link rel="stylesheet" href="css/manual.css">
    <link rel="icon" href="img/amau_logo.png">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
    <?php include 'nav.php'; ?>
    
    <main>
      <?php include 'preview_body.php'; ?>
    </main>

    <script>
      // This function copies the set citation for convenience of the user
      function copyText() {
        /* Need to get the text field */
        var copiedText = document.getElementById("copyText");

        /* Selecting the text field */
        copiedText.select();

        /* Copy text inside the text field */
        document.execCommand("copy");

        /* Alert the user that the text is copied */
        alert("Copied to clipboard!");
      }
    </script>
  </body>
</html>
