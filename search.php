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

    <main>
    <div class="container">
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
                        echo "<br><div>
                            <h3>".$row['db_title']."</h3>
                            <p>".$row['db_category']."</p>
                        </div> <br>";
                    }
                } else {
                    echo "There are no results matching your search.";
                }
            }
            
        ?>
    </div>
    </main>

    <?php include 'footer.php' ?>

</body>
