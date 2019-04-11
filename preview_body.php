<div class="section">
    <div class="container">
        <div class="columns level">

            <div class="column level-left">
                <!-- Paper Review -->
                <div class="card">
                    
                    <div class="card-content">
                        <!-- Title -->
                        <p class="title is-6"><?php echo $_SESSION["preview_title"]; ?></p> <hr><!-- Insert php document title -->
                        <!-- Placeholder Thumbnail -->
                        <figure class="image is-1by1">
                            <a href="pdfs/<?php echo $_SESSION["preview_file"] . "#toolbar=0&navpanes=0";?>"><img src="img/100x150.png"></a> <!-- Add document location soon -->
                        </figure> <br>
                        
                    </div>

                </div>
            </div>

            <div class="column level-right">
                <!-- Page-Info -->
                <div class="card">
                    <div class="card-content">
                        <!-- Details -->
                        <p class="title is-6 has-text-left">About</p> <hr>
                        <p class="is-6 has-text-left">Presented By: 
                        <?php 

                            include 'includes/dbh.inc.php';
                            $id = $_SESSION['preview_ID'];
                            $sql = "SELECT db_authorFirstName1, db_authorLastName1,
                            db_authorFirstName2, db_authorLastName2,
                            db_authorFirstName3, db_authorLastName3,
                            db_authorFirstName4, db_authorLastName4,
                            db_authorFirstName5, db_authorLastName5,
                            db_authorFirstName6, db_authorLastName6, db_citationInput, db_views FROM Metadata WHERE db_ID = '$id'";
                            $query = mysqli_query($conn, $sql);
                            
                            while ($row = mysqli_fetch_array($query)) {
                                $views = $row['db_views'];
                                $citation = $row['db_citationInput'];
                                switch ($_SESSION["author_quantity"]) {
                                    case '1':
                                    echo $row['db_authorFirstName1'] . " " . $row['db_authorLastName1'];
                                    break;
                                    case '2':
                                    echo $row['db_authorFirstName1'] . " " . $row['db_authorLastName1'] . " and " .
                                    $row['db_authorFirstName2'] . " " . $row['db_authorLastName2'];
                                    break;
                                    case '3':
                                    echo $row['db_authorFirstName1'] . " " . $row['db_authorLastName1'] . ", " .
                                    $row['db_authorFirstName2'] . " " . $row['db_authorLastName2'] . " and " .
                                    $row['db_authorFirstName3'] . " " . $row['db_authorLastName3'];
                                    break;
                                    case '4':
                                    echo $row['db_authorFirstName1'] . " " . $row['db_authorLastName1'] . ", " .
                                    $row['db_authorFirstName2'] . " " . $row['db_authorLastName2'] . ", " .
                                    $row['db_authorFirstName3'] . " " . $row['db_authorLastName3'] . " and " .
                                    $row['db_authorFirstName4'] ." " . $row['db_authorLastName4'];
                                    break;
                                    case '5':
                                    echo $row['db_authorFirstName1'] . " " . $row['db_authorLastName1'] . ", " .
                                    $row['db_authorFirstName2'] . " " . $row['db_authorLastName2'] . ", " .
                                    $row['db_authorFirstName3'] . " " . $row['db_authorLastName3'] . ", " .
                                    $row['db_authorFirstName4'] . " " . $row['db_authorLastName4'] . " and " .
                                    $row['db_authorFirstName5'] . " " . $row['db_authorLastName5'];
                                    break;
                                    case '6':
                                    echo $row['db_authorFirstName1'] . " " . $row['db_authorLastName1'] . ", " .
                                    $row['db_authorFirstName2'] . " " . $row['db_authorLastName2'] . ", " .
                                    $row['db_authorFirstName3'] . " " . $row['db_authorLastName3'] . ", " .
                                    $row['db_authorFirstName4'] . " " . $row['db_authorLastName4'] . ", " .
                                    $row['db_authorFirstName5'] . " " . $row['db_authorLastName5'] . " and " .
                                    $row['db_authorFirstName6'] . " " . $row['db_authorLastName6'];
                                    break;
                                
                                default:
                                    echo "N/A";
                                    break;
                                }
                             }
                             
                        ?>    
                        </p> 
                        <p class="is-6 has-text-left">Category: <?php echo $_SESSION["preview_category"]; ?></p>
                        <p class="is-6 has-text-left">Date Published: <?php $dateTime = new DateTime($_SESSION["preview_date_created"]); echo date_format($dateTime, "M. d, Y"); ?></p>
                        <hr>
                        <div class="field is-grouped">
                            <p class="is-6 has-text-left" style="padding-right:5px;">Citation:</p>
                            <input class="input is-small is-rounded is-disabled" type="text" id="copyText" value="<?php echo $citation; ?>" readonly> <!-- Sa ngayon, di pa magawa ng automatic, kase di pa nahihiwalay ang first name, at last name, etc. -->
                            <button class="button is-small"  onclick="copyText()">Copy Text</button>
                        </div> 
                        <br>
                        <?php if($views == 1) {echo $views . " view";} else {echo $views . " views";} ?> 
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
