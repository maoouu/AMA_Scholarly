<?php

  session_start();
  if (isset($_SESSION["ID"])) {
    header('Location: home.php');
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AMA Scholarly | Make Research, accessible!</title>
    <link rel="stylesheet" href="css/bulma.css"> <!-- use min.css at the final -->
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="icon" href="img/amau_logo.png">
    <script defer src="fontawesome/js/all.js"></script>
  </head>
  <body>
    <!-- Form -->
    <div class="level">

      <div class="level-left column" style="padding: 100px 0px;">
        <section class="section">
          <form action="includes/process.inc.php" method="post">
            <!-- USN -->
            <div class="field">
              <div class="control has-icons-left">
                <input class="input" type="text" name="USN" placeholder="USN" maxlength="11">
                <span class="icon is-small is-left">
                  <i class="far fa-user"></i>
                </span>
              </div>
            </div>
            <!-- Password -->
            <div class="field">
              <div class="control has-icons-left">
                <input class="input" type="password" name="password" placeholder="password">
                <span class="icon is-small is-left">
                  <i class="fas fa-lock-open"></i>
                </span>
              </div>
            </div>
            <!-- Button -->
            <div class="field is-grouped">
              <div class="control">
                <button class="button is-link" type="submit" name="btnsubmit">Login</button>
              </div>
              <div class="control">
                <a class="button is-text"href="signup.php">Signup</a>
              </div>
            </div>

          </form>
        </section>
      </div>

      <!-- AMA Scholarly Logo -->
      <img class="level-right column is-three-fifths" src="img/ama_scholarly_copy.png" alt="AMA Scholarly Icon">

      

    </div>

  </body>
</html>
