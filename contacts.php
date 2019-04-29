<?php
  include 'includes/session.inc.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contacts | AMA Scholarly</title>
  <link rel="stylesheet" href="css/bulma.css"> <!-- use min.css at the final -->
  <link rel="stylesheet" href="css/manual.css">
  <link rel="icon" href="img/amau_logo.png">
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
  <body>
    <?php include 'nav.php' ?>

    <!-- Contacts Section -->
    <main class="section">
      <div class="container">
        <div class="column is-main-content">
          <nav class="breadcrumb" aria-label="breadcrumbs">
            <ul>
              <li><a href="home">Home</a></li>
              <li class="is-active"><a>Contacts</a></li>
            </ul>
          </nav> <br>

          <div class="columns is-multiline" style="padding-top:2%; padding-bottom:2%; padding-left:5%; padding-right:5%; background-color:white;">
            <!-- Message -->  
            <div class="column is-full">
              <!-- Message info -->
              <article class="message is-dark">
                <!-- Header -->
                <div class="message-header">
                  <p>Contact Us!</p>
                </div>
                <!-- Message body -->
                <div class="message-body">
                  Please send a message to us! This website is still in development and we'd love to hear a feedback to our users.
                </div>
              </article>
            </div>
            
            <!-- Message form -->
            <div class="column" style="padding-left:5%;">
              <form action="includes/messageprocess.inc.php" method="POST">
                <!-- Subject -->
                <div class="label">Subject</div>
                <div class="field">
                  <input class="input is-normal" name="subject" type="text" style="width: 15em;">
                </div>
                <!-- Text box -->
                <div class="label">Message</div>
                <div class="field is-grouped">
                  <div class="control">
                    <textarea class="textarea has-fixed-size" name="message"></textarea>
                  </div>
                </div>
                <!-- Button -->
                <div class="control">
                  <button class="button is-small is-link is-outlined" type="submit" name="btnsubmit">Send</button>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </main>

    <?php include 'footer.php' ?>

  </body>
</html>
