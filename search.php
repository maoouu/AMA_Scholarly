<?php
    include 'includes/session.inc.php';
    require 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Search Results | AMA Scholarly</title>
   <link rel="stylesheet" href="css/bulma.css"> <!-- use min.css at the final -->
   <link rel="stylesheet" href="css/manual.css">
   <link rel="icon" href="img/amau_logo.png">
   <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>

    <?php include 'nav.php' ?>

    <main style="margin-top:5.5em;">
    <div class="container">
    <div class="columns">
    <div class="column">
        <?php 
            if (isset($_POST['btnsearch'])) {
                $search = mysqli_real_escape_string($conn, $_POST['search']);
                $sql = "SELECT * FROM Metadata WHERE db_title LIKE '%$search%' OR 
                db_authorFirstName1 LIKE '%$search%' OR db_authorLastName1 LIKE '%search%' OR
                db_authorFirstName2 LIKE '%$search%' OR db_authorLastName2 LIKE '%search%' OR
                db_authorFirstName3 LIKE '%$search%' OR db_authorLastName3 LIKE '%search%' OR
                db_authorFirstName4 LIKE '%$search%' OR db_authorLastName4 LIKE '%search%' OR
                db_authorFirstName5 LIKE '%$search%' OR db_authorLastName5 LIKE '%search%' OR
                db_authorFirstName6 LIKE '%$search%' OR db_authorLastName6 LIKE '%search%' OR
                db_category LIKE '%$search%'";
                $result = mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($result);

                if ($queryResult > 0) {
                    echo "About " . "<strong>" .$queryResult . "</strong>" . " result/s." . "<br>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        $row_ID = $row['db_ID'];
                        $row_Title = $row['db_title'];
                        $row_Category = $row['db_category'];
                        $row_Date = new DateTime($row['db_date']);
                        $document_date = date_format($row_Date, "M. Y");

                        echo 
                        "
                        <div class='column card is-one-quarter has-text-centered'>
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
                        </div> <br>
                        ";
                    }
                } else {
                    echo "There are no results matching your search.";
                }
            }
            
        ?>
    </div>
    </div>
    </div>
    </main>

    <?php include 'footer.php' ?>

</body>
