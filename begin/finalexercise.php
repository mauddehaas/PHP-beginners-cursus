<?php
// //get it from formeven.html
 
 ?>

<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="form.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<title>Page title</title>
<body>
<header>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
            <div class="navbar-header">
            <p class="navbar-brand">loginpagina</p>
            </div>
            </div>
        </nav>
</header>
<div class="container">
    <div class="starter-template">
    <h1>Welkom</h1>
       
       <?php
        echo $msg . "<br>";
        echo "Ga naar " . $user_link;
        ?>
<br>
<a href='formeven.php'>Uitloggen</a>
</div>
</div>



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 </body>
 </html>