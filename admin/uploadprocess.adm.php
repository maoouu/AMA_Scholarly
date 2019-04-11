<?php
include '../includes/dbh.inc.php';
// Sanitizing data first
$tempDocumentName = mysqli_real_escape_string($conn, $_POST['document_title']);
$tempCategoryName = mysqli_real_escape_string($conn, $_POST['document_category']);
$documentName = $tempDocumentName;
$documentCategory = $tempCategoryName;
$author_firstname1 = $author_firstname2 = $author_firstname3 = $author_firstname4 = $author_firstname5 = $author_firstname6 ="";
$author_lastname1 = $author_lastname2 = $author_lastname3 = $author_lastname4 = $author_lastname5 = $author_lastname6 ="";

// Data check
// echo $documentName;
// echo $documentCategory;

// Initialize other data
$author_count = $_POST['author_quantity'];
$citation_mode = $_POST['citation_mode']; // APA, MLA or Manual
$citation_input = ""; // the input goes here




switch ($author_count) {
    case '1':
        $author_firstname1 = $_POST['author_firstname1'];
        
        $author_lastname1 = $_POST['author_lastname1'];

        switch ($citation_mode) {
            case '1': // APA
                $citation_input = $author_lastname1 . ", " . substr(ltrim($author_firstname1), 0, 1) .
                ". (" . date("Y") . "). " . $_POST['document_title'] . ". " . 
                "AMA Computer College Lucena, Lucena City, Philippines.";
                break;
            case '2': // MLA Last, First M. Title. MA or MS Thesis. Name of University, Year Published. Web. Date accessed.
                $citation_input = $author_lastname1 . ", " . ltrim($author_firstname1) . ". " . 
                $_POST['document_title'] . " " . "Thesis. AMA Computer College Lucena, " . 
                date("Y") . ".";
                break;
            case '3': // Manual 
                $citation_input = mysqli_real_escape_string($conn, $_POST['citation_input']);
                break;
            
            default:
                break;
        }
        break;
    case '2':
        $author_firstname1 = $_POST['author_firstname1'];
        $author_firstname2 = $_POST['author_firstname2'];
        
        $author_lastname1 = $_POST['author_lastname1'];
        $author_lastname2 = $_POST['author_lastname2'];

        switch ($citation_mode) {
            case '1':
                $citation_input = $author_lastname1 . ", " . substr(ltrim($author_firstname1), 0, 1) .
                "., " . $author_lastname2 . ", " . substr(ltrim($author_firstname2), 0, 1) .
                ". (" . date("Y") . "). " . $_POST['document_title'] . ". " . 
                "AMA Computer College Lucena, Lucena City, Philippines.";
                break;
            case '2':
                $citation_input = $author_lastname1 . ", " . substr(ltrim($author_firstname1), 0, 1) . 
                "., " . $author_lastname2 . ", " . substr(ltrim($author_firstname2), 0, 1) . ". " .
                $_POST['document_title'] . " " . "Thesis. AMA Computer College Lucena, " . 
                date("Y") . ".";
                break;
            case '3':
                $citation_input = mysqli_real_escape_string($conn, $_POST['citation_input']);
                break;
            
            default:
                break;
        }
        break;
    case '3': // note: put "et al." in MLA
        $author_firstname1 = $_POST['author_firstname1'];
        $author_firstname2 = $_POST['author_firstname2'];
        $author_firstname3 = $_POST['author_firstname3'];
        
        $author_lastname1 = $_POST['author_lastname1'];
        $author_lastname2 = $_POST['author_lastname2'];
        $author_lastname3 = $_POST['author_lastname3'];

        switch ($citation_mode) {
            case '1':
                $citation_input = $author_lastname1 . ", " . substr(ltrim($author_firstname1), 0, 1) .
                "., " . $author_lastname2 . ", " . substr(ltrim($author_firstname2), 0, 1) .
                ". " . $author_lastname3 . ", " .substr(ltrim($author_firstname3), 0, 1) . ". (" . date("Y") . "). " . $_POST['document_title'] . ". " . 
                "AMA Computer College Lucena, Lucena City, Philippines.";
                break;
            case '2':
                $citation_input = $author_lastname1 . ", " . substr(ltrim($author_firstname1), 0, 1) . 
                "., " . $author_lastname2 . ", " . substr(ltrim($author_firstname2), 0, 1) . ". " .
                "et al. " . $_POST['document_title'] . " " . "Thesis. AMA Computer College Lucena, " . 
                date("Y") . ".";
                break;
            case '3':
                $citation_input = mysqli_real_escape_string($conn, $_POST['citation_input']);
                break;
            
            default:
                break;
        }
        break;
    case '4':
        $author_firstname1 = $_POST['author_firstname1'];
        $author_firstname2 = $_POST['author_firstname2'];
        $author_firstname3 = $_POST['author_firstname3'];
        $author_firstname4 = $_POST['author_firstname4'];
        
        $author_lastname1 = $_POST['author_lastname1'];
        $author_lastname2 = $_POST['author_lastname2'];
        $author_lastname3 = $_POST['author_lastname3'];
        $author_lastname4 = $_POST['author_lastname4'];

        switch ($citation_mode) {
            case '1': // APA
                $citation_input = $author_lastname1 . ", " . substr(ltrim($author_firstname1), 0, 1) .
                "., " . $author_lastname2 . ", " . substr(ltrim($author_firstname2), 0, 1) .
                ". " . $author_lastname3 . ", " .substr(ltrim($author_firstname3), 0, 1) . 
                ". " . $author_lastname4 . ", " .substr(ltrim($author_firstname4), 0, 1) .". (" . date("Y") . "). " . $_POST['document_title'] . ". " . 
                "AMA Computer College Lucena, Lucena City, Philippines.";
                break;
            case '2': // MLA
                $citation_input = $author_lastname1 . ", " . substr(ltrim($author_firstname1), 0, 1) . 
                "., " . $author_lastname2 . ", " . substr(ltrim($author_firstname2), 0, 1) . ". " .
                "et al. " . $_POST['document_title'] . " " . "Thesis. AMA Computer College Lucena, " . 
                date("Y") . ".";
                break;
            case '3':
                $citation_input = mysqli_real_escape_string($conn, $_POST['citation_input']);
                break;
            
            default:
                break;
        }
        break;
    case '5':
        $author_firstname1 = $_POST['author_firstname1'];
        $author_firstname2 = $_POST['author_firstname2'];
        $author_firstname3 = $_POST['author_firstname3'];
        $author_firstname4 = $_POST['author_firstname4'];
        $author_firstname5 = $_POST['author_firstname5'];

        $author_lastname1 = $_POST['author_lastname1'];
        $author_lastname2 = $_POST['author_lastname2'];
        $author_lastname3 = $_POST['author_lastname3'];
        $author_lastname4 = $_POST['author_lastname4'];
        $author_lastname5 = $_POST['author_lastname5'];

        switch ($citation_mode) {
            case '1':
                $citation_input = $author_lastname1 . ", " . substr(ltrim($author_firstname1), 0, 1) .
                "., " . $author_lastname2 . ", " . substr(ltrim($author_firstname2), 0, 1) .
                ". " . $author_lastname3 . ", " .substr(ltrim($author_firstname3), 0, 1) . 
                ". " . $author_lastname4 . ", " .substr(ltrim($author_firstname4), 0, 1) .
                ". " . $author_lastname5 . ", " .substr(ltrim($author_firstname5), 0, 1) . ". (" . date("Y") . "). " . $_POST['document_title'] . ". " . 
                "AMA Computer College Lucena, Lucena City, Philippines.";
                break;
            case '2':
                $citation_input = $author_lastname1 . ", " . substr(ltrim($author_firstname1), 0, 1) . 
                "., " . $author_lastname2 . ", " . substr(ltrim($author_firstname2), 0, 1) . ". " .
                "et al. " . $_POST['document_title'] . " " . "Thesis. AMA Computer College Lucena, " . 
                date("Y") . ".";
                break;
            case '3':
                $citation_input = mysqli_real_escape_string($conn, $_POST['citation_input']);
                break;
            
            default:
                break;
        }
        break;
    case '6':
        $author_firstname1 = $_POST['author_firstname1'];
        $author_firstname2 = $_POST['author_firstname2'];
        $author_firstname3 = $_POST['author_firstname3'];
        $author_firstname4 = $_POST['author_firstname4'];
        $author_firstname5 = $_POST['author_firstname5'];
        $author_firstname6 = $_POST['author_firstname6'];

        $author_lastname1 = $_POST['author_lastname1'];
        $author_lastname2 = $_POST['author_lastname2'];
        $author_lastname3 = $_POST['author_lastname3'];
        $author_lastname4 = $_POST['author_lastname4'];
        $author_lastname5 = $_POST['author_lastname5'];
        $author_lastname6 = $_POST['author_lastname6'];

        switch ($citation_mode) {
            case '1':
                $citation_input = $author_lastname1 . ", " . substr(ltrim($author_firstname1), 0, 1) .
                "., " . $author_lastname2 . ", " . substr(ltrim($author_firstname2), 0, 1) .
                ". " . $author_lastname3 . ", " .substr(ltrim($author_firstname3), 0, 1) . 
                ". " . $author_lastname4 . ", " .substr(ltrim($author_firstname4), 0, 1) .
                ". " . $author_lastname5 . ", " .substr(ltrim($author_firstname5), 0, 1) . 
                ". " . $author_lastname6 . ", " .substr(ltrim($author_firstname6), 0, 1) . ". (" . date("Y") . "). " . $_POST['document_title'] . ". " . 
                "AMA Computer College Lucena, Lucena City, Philippines.";
                break;
            case '2':
                $citation_input = $author_lastname1 . ", " . substr(ltrim($author_firstname1), 0, 1) . 
                "., " . $author_lastname2 . ", " . substr(ltrim($author_firstname2), 0, 1) . ". " .
                "et al. " . $_POST['document_title'] . " " . "Thesis. AMA Computer College Lucena, " . 
                date("Y") . ".";
                break;
            case '3':
                $citation_input = mysqli_real_escape_string($conn, $_POST['citation_input']);
                break;
            
            default:
                break;
        }
        break;
    default:
        echo "<script>alert('Unknown Number of Authors:'); //location.href='upload.dashboard.adm.php';</script>";
        break;
}




// Set the file
$fileName = $_FILES['upload_document']['name'];
$fileTmpName = $_FILES['upload_document']['tmp_name'];
$fileSize = $_FILES['upload_document']['size'];
$fileError = $_FILES['upload_document']['error'];
$fileType = $_FILES['upload_document']['type'];
$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

// Lists an array of file extensions allowed in the website
// Restricting to pdf only because no browser supports,
// document viewing other than pdf files.
$allowedExt = array('pdf');

// Checks the file's extension and size.
// If the file conforms to all of the checks, it will be uploaded.
if (in_array($fileActualExt, $allowedExt)) {
    if ($fileError == 0) {
        if ($fileSize < 10000000000) {

            $fileNameNew = $documentName . "." . $fileActualExt;
            $fileDestination = '../pdfs/' . $fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            

            $sql = "INSERT INTO Metadata (db_title, db_authorFirstName1, db_authorLastName1, 
            db_authorFirstName2, db_authorLastName2, db_authorFirstName3, db_authorLastName3, 
            db_authorFirstName4, db_authorLastName4, db_authorFirstName5, db_authorLastName5, 
            db_authorFirstName6, db_authorLastName6, db_category, db_authorQuantity, db_citationMode, db_citationInput, db_fileName)
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo "<script>alert('An error occurred: SQL Statement Failed');
                location.href='upload.adm.php'</script>";
              } else {
                mysqli_stmt_bind_param($stmt, "ssssssssssssssiiss", $documentName, $author_firstname1, $author_lastname1, $author_firstname2, $author_lastname2, $author_firstname3, $author_lastname3, $author_firstname4, $author_lastname4, $author_firstname5, $author_lastname5, $author_firstname6, $author_lastname6, $documentCategory, $author_count, $citation_mode, $citation_input, $fileNameNew);
                mysqli_stmt_execute($stmt);
                echo "<script>alert('Research paper successfully added to the database!');
                location.href='upload.admin.php?success'</script>";
              }

            //header("Location: ../index.php?upload=success");

        } else {
            echo "Your file is too big.";
        }
    } else {
        echo "There was an error uploading your file. " . $fileError;
    }
} else {
    echo "Error: You cannot upload files of this type. Please upload <strong>.pdf</strong> files";
}
    
    
?>
