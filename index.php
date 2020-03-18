<?php

session_start();
if (isset($_SESSION["ID"])) {
  header('Location: home');
}

?>
<!DOCTYPE html>
<html lang="en">

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

  <!--    HEADER      -->
  <container class="columns is-mobile is-centered">
    <img class="column is-one-fifth" src="img/ama_scholarly_copy.png" alt="AMA Scholarly Icon">
  </container>

  <!--    FORM    -->
  <container class="columns is-mobile is-centered">
    <form class="column is-one-third" action="includes/process.inc.php" method="post">
      <fieldset class="columns" style="border: 0;">

        <!--    USN FIELD   -->
        <field class="field">
          <control class="control has-icons-left">
            <input class="input" type="text" name="USN" placeholder="USN" maxlength="11">
            <span class="icon is-small is-left"><i class="far fa-user"></i></span>
          </control>
        </field>

        <!--    Password    -->
        <field class="field">
          <control class="control has-icons-left">
            <input class="input" type="password" name="password" placeholder="password">
            <span class="icon is-small is-left"><i class="fas fa-lock-open"></i></span>
          </control>
        </field>

        <!--    BUTTON     -->
        <field class="field is-grouped">
          <control class="column control is-grouped">
            <button class="button is-link" type="submit" name="btnsubmit">Login</button>
            <a class="button is-text" href="signup.php">Signup</a>
          </control>
        </field>

      </fieldset>
    </form>
  </container>

</body>

</html>
