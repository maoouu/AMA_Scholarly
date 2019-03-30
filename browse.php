<?php
  include 'includes/session.inc.php';
  require 'includes/dbh.inc.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Browse | AMA Scholarly</title>
    <link rel="stylesheet" href="css/bulma.css"> <!-- use min.css at the final -->
    <link rel="stylesheet" href="css/manual.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="icon" href="img/amau_logo.png">
    <script defer src="fontawesome/js/all.js"></script>
  </head>
  <body>
    <?php include 'nav.php' ?>
    
    <div class="section">
        <div class="container">
            <div class="columns">
                
                <div class="column is-main-content">
                    <!-- Main content -->
                    <div class="column">
                        <h1 class="title is-4">Browse</h1> <br>
                        <div class="columns is-multiline" style="padding-top:2%; padding-bottom:2%; padding-left:5%; padding-right:5%; background-color:white;">
                          <!-- Title (From A-Z) -->
                          <div class="column is-half">
                            <p class="title is-6">Title</p>
                            <a class="link" href="#">A</a>
                            <a class="link" href="#">B</a>
                            <a class="link" href="#">C</a>
                            <a class="link" href="#">D</a>
                            <a class="link" href="#">E</a>
                            <a class="link" href="#">F</a>
                            <a class="link" href="#">G</a>
                            <a class="link" href="#">H</a>
                            <a class="link" href="#">I</a>
                            <a class="link" href="#">J</a>
                            <a class="link" href="#">K</a>
                            <a class="link" href="#">L</a>
                            <a class="link" href="#">M</a>
                            <a class="link" href="#">N</a>
                            <a class="link" href="#">O</a>
                            <a class="link" href="#">P</a>
                            <a class="link" href="#">Q</a>
                            <a class="link" href="#">R</a>
                            <a class="link" href="#">S</a>
                            <a class="link" href="#">T</a>
                            <a class="link" href="#">U</a>
                            <a class="link" href="#">V</a>
                            <a class="link" href="#">W</a>
                            <a class="link" href="#">X</a>
                            <a class="link" href="#">Y</a>
                            <a class="link" href="#">Z</a>
                          </div>

                          <!-- Authors (From A-Z) -->
                          <div class="column is-half">
                            <p class="title is-6">Authors</p>
                            <a class="link" href="#">A</a>
                            <a class="link" href="#">B</a>
                            <a class="link" href="#">C</a>
                            <a class="link" href="#">D</a>
                            <a class="link" href="#">E</a>
                            <a class="link" href="#">F</a>
                            <a class="link" href="#">G</a>
                            <a class="link" href="#">H</a>
                            <a class="link" href="#">I</a>
                            <a class="link" href="#">J</a>
                            <a class="link" href="#">K</a>
                            <a class="link" href="#">L</a>
                            <a class="link" href="#">M</a>
                            <a class="link" href="#">N</a>
                            <a class="link" href="#">O</a>
                            <a class="link" href="#">P</a>
                            <a class="link" href="#">Q</a>
                            <a class="link" href="#">R</a>
                            <a class="link" href="#">S</a>
                            <a class="link" href="#">T</a>
                            <a class="link" href="#">U</a>
                            <a class="link" href="#">V</a>
                            <a class="link" href="#">W</a>
                            <a class="link" href="#">X</a>
                            <a class="link" href="#">Y</a>
                            <a class="link" href="#">Z</a>
                          </div>

                          <!-- Categories (In Alphabetical Order) -->
                          <div class="column is-half">
                            <p class="title is-6">Categories</p>
                            <ul style="list-style-type:disc; padding-left:5%;">
                              <?php 
                                $sql = "SELECT db_category FROM Metadata ORDER BY db_category ASC";
                                $query = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_array($query)) {
                                  $categories = $row['db_category'];
                                  echo "<li><a class='link' href=''>" . $categories . "</a></li>";
                                }
                              ?>
                            </ul>
                          </div>

                          <div class="column is-half">
                            <p class="subtitle is-6">(More browsing options in future updates)</p>
                          </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
  </body>
</html>
