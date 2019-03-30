<?php
    require 'dbh.inc.php';
    session_start();

    if (!(isset($_POST['btnsubmit']))) {
        header('Location: ../contacts.php?btn_error');
    } else {
        // Initialize
        $subject = mysqli_real_escape_string($conn, $_POST['subject']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        $mailTo = "dale.reyes@hotmail.com";
        $from = $_SESSION["fullname"];

        // Sending email (check)
        //echo "Subject: " . $subject . "<br>";
        //echo "message: " . $message . "<br>";
        //echo "mail to: " . $mailTo . "<br>";
        //echo "from: " . $from; 

        // Header
        $header = '==AMA_SCHOLARLY==' . "\r\n" .
        'Message from: ' . $from . "\r\n" . 'Date Sent: ' . 
        "\r\n" . 'X-Mailer: PHP/' . phpversion();

        // Sending email
        if (mail($mailTo, $subject, $message, $header)) {
            echo "<script>alert('Message successfully sent!'); 
            location.href='../contacts.php?success';</script>";
        } else {
            echo "<script>alert('Message failed to send / Website has not setup a mail server yet.'); 
            location.href='../contacts.php?failed';</script>";
        }
        
        //Need to setup

    }

?>