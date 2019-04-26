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
    
    <main class="section">
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
                            <a class="link" href="includes/browser_preview-process.inc.php?title=A">A</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=B">B</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=C">C</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=D">D</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=E">E</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=F">F</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=G">G</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=H">H</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=I">I</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=J">J</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=K">K</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=L">L</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=M">M</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=N">N</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=O">O</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=P">P</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=Q">Q</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=R">R</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=S">S</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=T">T</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=U">U</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=V">V</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=W">W</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=X">X</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=Y">Y</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?title=Z">Z</a>
                          </div>

                          <!-- Authors (From A-Z) -->
                          <div class="column is-half">
                            <p class="title is-6">Authors</p>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=A">A</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=B">B</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=C">C</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=D">D</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=E">E</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=F">F</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=G">G</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=H">H</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=I">I</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=J">J</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=K">K</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=L">L</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=M">M</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=N">N</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=O">O</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=P">P</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=Q">Q</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=R">R</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=S">S</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=T">T</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=U">U</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=V">V</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=W">W</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=X">X</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=Y">Y</a>
                            <a class="link" href="includes/browser_preview-process.inc.php?author=Z">Z</a>
                          </div>

                          <?php /*<!-- Categories (In Alphabetical Order) -->
                          <div class="column is-half">
                            <p class="title is-6">Categories</p>
                            <ul style="list-style-type:disc; padding-left:5%;">
                              <?php 
                                $sql = "SELECT db_category FROM Metadata ORDER BY db_category ASC";
                                $query = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_array($query)) { //add a counting feature
                                  $categories = $row['db_category'];
                                  echo "<li><a class='link' href='includes/browser_preview-process.inc.php?category=$categories'>" . $categories . "</a></li>";
                                }
                              ?>
                            </ul>
                          </div>
                          */ ?>
                          <div class="column is-half">
                            <p class="subtitle is-6">(More browsing options in future updates)</p>
                          </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </main>
  </body>
</html>
