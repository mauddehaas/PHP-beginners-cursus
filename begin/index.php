<?php

$servername = "localhost";
$username = "newuser";
$password = "root";
$dbname = "spotitube";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM playlist";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($row)
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Spotitube</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Spotitube</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="">Home</a></li>
                    <li class="active"><a href="">Playlists</a></li>
                    <li class="active"><a href="inloggen.php">inloggen</a></li>
                    </ul></div>
        </div>
    </nav>
    <div class="jumbotron text-center" id="tekstjumbotron">
        <h1>Spotitube</h1>
        <p>This is a website were you can find and play music!!</p>
    </div>
</header>
<div class="container">
    <h3 style="margin-top: 2%; margin-bottom: 2%;"> Playlist from DB</h3>
    <div class="row">


        <section class="col-sm-4">
            <h4>Let's Rock</h4>
            <a href=""><img src="img/rock.jpg" alt="2" class="img-thumbnail"></a>
        </section>

        <section class="col-sm-4">
            <h4>Jazz it all the way</h4>
            <a href=""><img src="img/jazz.jpg" alt="2" class="img-thumbnail"></a>
        </section>

        <section class="col-sm-4">
            <h4>Down with the Blues</h4>
            <a href=""><img src="img/blues.jpg" alt="2" class="img-thumbnail"></a>
        </section>

    </div>
</div>



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html