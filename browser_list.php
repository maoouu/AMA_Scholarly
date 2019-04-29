<?php
    include 'includes/dbh.inc.php';

    session_start();
    $sql = "";
    //echo $_SESSION["title"] . "<br>";
    //echo $_SESSION["category"] . "<br>";
    //echo $_SESSION["author"] . "<br>";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Results | AMA Scholarly</title>
    <link rel="stylesheet" href="css/bulma.css"> <!-- use min.css at the final -->
    <link rel="stylesheet" href="css/manual.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="icon" href="img/amau_logo.png">
    <script defer src="fontawesome/js/all.js"></script>
  </head>
  <body>  
    <?php
        include 'nav.php';
    ?>

    <main class="section">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column">
                <?php
                    if ($_SESSION["title"]) {
                        $title = $_SESSION["title"]."%";
                        $sql = "SELECT * FROM Metadata WHERE db_title LIKE '$title'";
                        $query = mysqli_query($conn, $sql);
                        $numRows = mysqli_num_rows($query);
                        
                        
                        /*
                        if ($numRows > 0) {
                            while ($row = mysqli_fetch_array($query)) {
                                $row_Title = $row['db_title'];
                                echo $row_Title;
                                echo ", it works";
                            } //(to be fckn continued)
                        } else {
                            echo "error";
                        } */
                        

                        
                        if (!($numRows > 0)) {
                            echo "<p class='title'>No results found</p> <br>
                            Click <a href='browse'>here</a> to go back to browse";
                        } else {
                           // echo "it works";
                            
                            while ($row = mysqli_fetch_array($query)) {
                                //echo "while loop works as well";

                                $row_ID = $row['db_ID'];
                                $row_Title = $row['db_title'];
                                $row_Category = $row['db_category'];
                                $row_Date = new DateTime($row['db_date']);
                                $document_date = date_format($row_Date, "M. Y");

                                //echo "this loads fine";

                                echo 
                                "
                                <div class='column card is-two-fifths has-text-centered'>
                                    <div class='card-content'>

                                            <figure class='image is-1by1'>
                                                <a href='includes/previewprocess.inc.php?id=$row_ID'><img src='https://via.placeholder.com/100x150.png'></a>
                                            </figure> <br>

                                            <a class='title is-6' href='includes/previewprocess.inc.php?id=$row_ID'>
                                                $row_Title
                                            </a>
                                    </div>

                                    <footer class='card-footer'>
                                            <p class='card-footer-item'>
                                                Category: <a href='#'>$row_Category</a>
                                            </p>
                                            <p class='card-footer-item'>"
                                                
                                            . $document_date .
                                                
                                            "</p>
                                    </footer>
                                </div>
                                ";
                            } 
                        } 
                    }

                    if ($_SESSION["category"]) {
                        $category = $_SESSION["category"];
                        $sql = "SELECT * FROM Metadata WHERE db_category = '$category'";
                        $query = mysqli_query($conn, $sql);
                        $numRows = mysqli_num_rows($query);

                        if (!($numRows > 0)) {
                            echo "<p class='title'>No results found</p> <br>
                            Click <a href='browse'>here</a> to go back to browse";
                        } else {
                            while ($row = mysqli_fetch_array($query)) {
                                $row_ID = $row['db_ID'];
                                $row_Title = $row['db_title'];
                                $row_Category = $row['db_category'];
                                $row_Date = new DateTime($row['db_date']);
                                $document_date = date_format($row_Date, "M. Y");

                                echo 
                                "
                                <div class='column card is-two-fifths has-text-centered'>
                                    <div class='card-content'>

                                            <figure class='image is-1by1'>
                                                <a href='includes/previewprocess.inc.php?id=$row_ID'><img src='https://via.placeholder.com/100x150.png'></a>
                                            </figure> <br>

                                            <a class='title is-6' href='includes/previewprocess.inc.php?id=$row_ID'>
                                                $row_Title
                                            </a>
                                    </div>

                                    <footer class='card-footer'>
                                            <p class='card-footer-item'>
                                                Category: <a href='#'>$row_Category</a>
                                            </p>
                                            <p class='card-footer-item'>"
                                                
                                            . $document_date .
                                                
                                            "</p>
                                    </footer>
                                </div>
                                ";
                            }
                        }
                    }

                    if ($_SESSION["author"]) {
                        $author = $_SESSION["author"]."%";
                        $sql = "SELECT * FROM Metadata WHERE db_authorFirstName1 LIKE '$author'";
                        $query = mysqli_query($conn, $sql);

                        if (!(mysqli_fetch_array($query))) {
                            echo "<p class='title'>No results found</p> <br>
                            Click <a href='browse'>here</a> to go back to browse";
                        } else {
                            //echo "else works";
                            while ($row = mysqli_fetch_array($query)) {
                                //echo "while loop works";
                                $row_ID = $row['db_ID'];
                                $row_Title = $row['db_title'];
                                $row_Category = $row['db_category'];
                                $row_Date = new DateTime($row['db_date']);
                                $document_date = date_format($row_Date, "M. Y");

                                //echo "variables loaded properly";
                                echo 
                                "
                                <div class='column card is-two-fifths has-text-centered'>
                                    <div class='card-content'>

                                            <figure class='image is-1by1'>
                                                <a href='includes/previewprocess.inc.php?id=$row_ID'><img src='https://via.placeholder.com/100x150.png'></a>
                                            </figure> <br>

                                            <a class='title is-6' href='includes/previewprocess.inc.php?id=$row_ID'>
                                                $row_Title
                                            </a>
                                    </div>

                                    <footer class='card-footer'>
                                            <p class='card-footer-item'>
                                                Category: <a href='#'>$row_Category</a>
                                            </p>
                                            <p class='card-footer-item'>"
                                                
                                            . $document_date .
                                                
                                            "</p>
                                    </footer>
                                </div>
                                ";
                            }
                        }
                    }
                ?>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php' ?>

    
  </body>  
