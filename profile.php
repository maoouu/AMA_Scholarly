<?php
  include 'includes/session.inc.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $_SESSION['fullname'];?> | AMA Scholarly</title>
  <link rel="stylesheet" href="css/bulma.css"> <!-- use min.css at the final -->
  <link rel="stylesheet" href="css/manual.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <link rel="icon" href="img/amau_logo.png">
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
  <body>
    <?php include 'nav.php'; ?>
    
    <main>
      <?php include 'profile_body.php'; ?>
    </main>

    <?php include 'footer.php'; ?>
  </body>
</html>
