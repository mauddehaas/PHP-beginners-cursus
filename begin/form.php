<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];
    //connect met de database
    $servername = "localhost";
    $user = "inloguser";
    $pass = "root";
    $dbname = "inloggen";

    //Create connection
    $conn = new mysqli($servername, $user, $pass, $dbname);
    //Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 


    $sql = "SELECT * from inlog where email = '$email' and wachtwoord = '$wachtwoord'";
    $result = $conn->query($sql);
    if (!$result) {
        
        trigger_error('Invalid query: ' . $conn->error);
    }
    if ($result->num_rows > 0) {    
        $_SESSION['logged_in'] = 1;

        // als er eenrecord is dan bestaat de gebruiker
        while($row = $result->fetch_assoc()) {
        
            
            if ($row["IsAdmin"]==1)
            {
                $_SESSION['logged_admin'] = 1;
                $_SESSION['usr_link'] = "<A HREF='admin.html'>deze zwaar beveiligde pagina</a>";
                $_SESSION['msg'] = "U bent ingelogd als admin";

            }
            else
            {
                $_SESSION['logged_admin'] = 0;
                $_SESSION['usr_link'] = "<A HREF='gebruiker.html'>deze zwaar beveiligde pagina</a>";
                $_SESSION['msg'] = "U bent ingelogd als gebruiker";
            }
            }
            
        }
    else {
        $_SESSION['msg'] = "Foutieve username/wachtwoord";
        $_SESSION['logged_in'] = 0;        
        
    }

    $conn->close();
}
else
{
    if(isset($_GET["logout"]))
    {
    if ($_GET["logout"] == 1){
       $_SESSION['logged_in'] = 0;
       $_SESSION['msg'] = '';
    }
}
 }
?>

<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="form.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<title>form</title>
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
<?php
if (isset($_GET['logout']) == NULL){
    ?>
    <div class="starter-template">
    <h1>Index</h1>
    <a href='form.php?logout=1'>ga naar het formulier</a>
       <?php
        $_SESSION['msg']="";
        $_SESSION['usr_link']="";
        ?>
    <?php
}
else if ($_SESSION['logged_in'] == 0) {
?>
    <div class="starter-template">
        <h2>Login Opdracht</h2><br>
        <p>test@test.nl / test = administrator</p>
        <p>klaas@test.nl / test = gebruiker</p><br>
    <form action="form.php?logout=2" method="POST">
       <p><?php echo $_SESSION['msg'] ?>
       <p>
           <label>Login:</label>
           <input class="form-control" type="text" id="email" name="email" value="">
       </p>
       <p>
        <label>Password:</label>
        <input class="form-control" type="password" id="wachtwoord" name="wachtwoord" value="">
    </p>
        <input class="btn btn-default" type="submit" id="btn" name="knop" value="verstuur"><br>
    </form>
</div>
<?php 
}
else if ($_GET['logout']==2)
{
?>
    <div class="starter-template">
    <h1>Welkom</h1>
       
       <?php
        echo $_SESSION['msg'] . "<br>";
        echo "Ga naar " . $_SESSION['usr_link'];
        ?>
<br>
<a href='form.php?logout=1'>Uitloggen</a>
</div>
<?php } ?>

</div>

    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>