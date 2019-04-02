<?php
    // Initialize the variables from $_GET
    $sort = mysqli_real_escape_string($conn, $_GET['sort']);
    $order = mysqli_real_escape_string($conn, $_GET['order']);
    //Test the variables if they work
    //echo $sort . "<br>";
    //echo $order;

    $sql = "SELECT * FROM Metadata";
    // Switch statement for the statement
    switch ($sort) {
        case 'Title':
        ##############################################
        // Ascending or descending
        if ($order == "ASC") {
            $sql .= " ORDER BY db_title ASC";
        } else if ($order == "DESC") {
            $sql .= " ORDER BY db_title DESC";
        } else {
            // Error
            echo "Error: unknown" . "\"" . $order . "\"" . "order <br>";
            echo "Please go back to this <a href='table.admin.php?sort=Title&order=ASC'>page</a>";
        }
        ##############################################
        break;
        case 'Author':
        ##############################################
        // Ascending or descending
            if ($order == "ASC") {
                $sql .= " ORDER BY db_authorFirstName1 ASC";
            } else if ($order == "DESC") {
                $sql .= " ORDER BY db_authorFirstName1 DESC";
            } else {
                // Error
                echo "Error: unknown" . "\"" . $order . "\"" . "order <br>";
                echo "Please go back to this <a href='table.admin.php?sort=Title&order=ASC'>page</a>";
            }
            ##############################################
        break;
        case 'Category':
            ##############################################
            // Ascending or descending
            if ($order == "ASC") {
                $sql .= " ORDER BY db_category ASC";
            } else if ($order == "DESC") {
                $sql .= " ORDER BY db_category DESC";
            } else {
                // Error
                echo "Error: unknown" . "\"" . $order . "\"" . "order <br>";
                echo "Please go back to this <a href='table.admin.php?sort=Title&order=ASC'>page</a>";
            }
            ##############################################
        break;
        case "Date":
            ##############################################
            // Ascending or descending
            if ($order == "ASC") {
                $sql .= " ORDER BY db_date ASC";
            } else if ($order == "DESC") {
                $sql .= " ORDER BY db_date DESC";
            } else {
                // Error
                echo "Error: unknown" . "\"" . $order . "\"" . "order <br>";
                echo "Please go back to this <a href='table.admin.php?sort=Title&order=ASC'>page</a>";
            }
            ##############################################
        break;
        default:
            // Error handling
            echo "<script>alert('Error occurred: no such " . "\"".$sort. "\"" . " results.'); location.href='table.admin.php?sort=Title&order=ASC';</script>";
        break;
    }

    $query = mysqli_query($conn, $sql);

    $rowCount = mysqli_num_rows($query);

    
    // Table header
    $counter_order = "";

    if ($order == "ASC") {
        $counter_order = "DESC";
        $sort_arrow = "<span class='icon'><i class='fas fa-sort-up'></i></span>";
    } elseif ($order == "DESC") {
        $counter_order = "ASC";
        $sort_arrow = "<span class='icon'><i class='fas fa-sort-down'></i></span>";
    } else {
        $counter_order = "unknown";
    }

    

    switch ($sort) {
        case 'Title':
            echo 
            "<thead>
            <tr>
            <th><a href='table.admin.php?sort=Title&order=".$counter_order."'>Title</a> ".$sort_arrow."</th>
            <th><a href='table.admin.php?sort=Author&order=ASC'>Author/s</a></th>
            <th><a href='table.admin.php?sort=Category&order=ASC'>Categories</a></th>
            <th><a href='table.admin.php?sort=Date&order=ASC'>Date Published</a></th>
            <th></th> <!-- Just a line -->
            <th></th> <!-- Just a line -->
            </tr>
            </thead>";
            break;
        case 'Author':
            echo 
            "<thead>
            <tr>
            <th><a href='table.admin.php?sort=Title&order=ASC'>Title</a></th>
            <th><a href='table.admin.php?sort=Author&order=".$counter_order."'>Author/s</a>".$sort_arrow."</th>
            <th><a href='table.admin.php?sort=Category&order=ASC'>Categories</a></th>
            <th><a href='table.admin.php?sort=Date&order=ASC'>Date Published</a></th>
            <th></th> <!-- Just a line -->
            <th></th> <!-- Just a line -->
            </tr>
            </thead>";
            break;
        case 'Category':
            echo 
            "<thead>
            <tr>
            <th><a href='table.admin.php?sort=Title&order=ASC'>Title</a></th>
            <th><a href='table.admin.php?sort=Author&order=ASC'>Author/s</a></th>
            <th><a href='table.admin.php?sort=Category&order=".$counter_order."'>Categories</a>".$sort_arrow."</th>
            <th><a href='table.admin.php?sort=Date&order=ASC'>Date Published</a></th>
            <th></th> <!-- Just a line -->
            <th></th> <!-- Just a line -->
            </tr>
            </thead>";
            break;
        case 'Date':
            echo 
            "<thead>
            <tr>
            <th><a href='table.admin.php?sort=Title&order=ASC'>Title</a></th>
            <th><a href='table.admin.php?sort=Author&order=ASC'>Author/s</a></th>
            <th><a href='table.admin.php?sort=Category&order=ASC'>Categories</a></th>
            <th><a href='table.admin.php?sort=Date&order=".$counter_order."'>Date Published</a>".$sort_arrow."</th>
            <th></th> <!-- Just a line -->
            <th></th> <!-- Just a line -->
            </tr>
            </thead>";
            break;
        default:
            echo "Error handling the table head";
            break;
    }


    if ($rowCount >  0) {
        while ($row = mysqli_fetch_array($query)) {

            $document_ID = $row['db_ID'];
            $document_title = $row['db_title'];
            $document_author = $row['db_authorFirstName1'] ." ". $row['db_authorLastName1'];
            $document_category = $row['db_category'];
            
            // switch for authors


            // Table Content
            echo 
            "<tbody><tr>
            <td><a href='previewprocess.adm.php?id=".$row['db_ID']."'>" . $row['db_title'] . "</a></td>" .
            "<td>" . $row['db_authorFirstName1'] ." ". $row['db_authorLastName1'] . ", " . $row['db_authorFirstName2']. " ". $row['db_authorLastName2'] . ", " . $row['db_authorFirstName3'] . " " . $row['db_authorLastName3'] . ",..." ."</td>" . 
            "<td>" . $row['db_category'] . "</td>". 
            "<td>" . $row['db_date'] ."</td>". 
            "<td><a onclick='showEdit($document_ID)'>" . "Edit" . "</a></td>" . 
            "<td><a onclick='showDelete($document_ID)'>" . "Delete" . "</a></td>
            </tr></tbody>";

            // Edit
            echo 
            "
            <!-- Modal for edit button -->
            <div id='edit_$document_ID' class='modal'>
            <div class='modal-background'></div>
            <div class='modal-content'>
                <!-- Bulma element goes here -->
                <div class='card'>
                <div class='card-content'>
                    <form action='edit.adm.php?edit_id='$document_ID' method='POST'>
                    <!-- Edit Title -->
                    <div class='control'>
                        <label class='label'>Edit Title:</label>
                        <div class='field'>
                            <div class='control'>
                                <input type='text' class='input' name='edit_title' placeholder='$document_title'>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Edit Author/s -->
                    <div class='control'>
                        <label class='label'>Edit Author (Will be available in future updates)</label>
                        <div class='field'>
                            <div class='control'>
                                <input type='text' class='input' name='edit_author' placeholder='$document_author' disabled>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Edit Category -->
                    <div class='control'>
                        <label class='label'>Edit Category:</label>
                        <div class='field'>
                            <div class='control'>
                                <input type='text' class='input' name='edit_category' placeholder='$document_category'>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Buttons -->
                    <div class='field is-grouped'>
                        <div class='control'>
                            <button id='submit' class='button is-link' type='submit' name='btnsubmit' disabled>Submit</button>
                        </div>
                        <div class='control'>
                            <a class='button is-text' onclick='showEdit($document_ID)'>Cancel</a>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
                <!--#########################-->
            </div>
            <button class='modal-close is-large' aria-aria-label='close' onclick='showEdit($document_ID)'></button>
            </div>
            <!--#########################-->
            ";

            //Delete
            echo "
            
            <!-- Modal for delete button -->
            <div id='delete_$document_ID' class='modal'>
            <div class='modal-background'></div>
            <div class='modal-content'>
                <!-- Bulma element goes here -->
                <div class='card'>
                <div class='card-content'>
                    
                </div>
                </div>
                <!--#########################-->
            </div>
            <button class='modal-close is-large' aria-aria-label='close' onclick='showDelete($document_ID)'></button>
            </div>
            <!--#########################-->
            ";
        }
    } else {
        echo "<tr><td>No results found</td></tr>";
    }
?>
