<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spotitube</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<form action="mail.php" method="POST">
       <p>
           <label>Naam:</label>
           <input class="form-control" type="text" id="naam" name="naam" value=""></input>
       </p>
       <p>
        <label>email adress:</label>
        <input class="form-control" type="text" id="mail" name="mail" value=""></input>
    </p>
       <p>
        <label>bericht:</label>
        <input class="form-control" type="text" id="message" name="message" value=""></input>
    </p>
        <input class="btn btn-default" type="submit" id="btn" name="knop" value="verstuur"></input></br>
    </form>
</body>
</html>




<?php
// Please specify your Mail Server - Example: mail.example.com.
ini_set("SMTP","maud@vierhazen.nl");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","8889");

// Please specify the return address to use
ini_set('sendmail_from', 'maud@vierhazen.nl');

$to = 'maud@vierhazen.nl';
$subject = 'receive news';
$from = $_POST['mail'];
$message = $_POST['message'];
 

 
// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>