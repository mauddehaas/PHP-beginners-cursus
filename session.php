<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<?php if(!isset($_POST['knop'])) { ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
       
        email <input type="text" name="email" value=""   ></input></br>
        Wachtwoord <input type="password" name="wachtwoord" value=""></input></br>
        <input type="submit" name="knop" value="verstuur" ></input></br> 
        
    </form>
    <?php 
} else {
    print_r($_POST);
    if (login($_POST['Inlog'],$_POST['Password'])== true){
        echo "ok";}
        else{
            echo "fout";
        }
}
?>

</body>
</html>
<?php
function login($email, $wachtwoord){
    $login = false;
    if ($email == "piet@worldonline.nl" && $wachtwoord == "doetje123"){
        return true;
    }
    else if($email == "klaas@carpets.nl" && $wachtwoord == "snoepje777"){
        
        return true;
    }
    else if($email == "truushendriks@wegweg.nl" && $wachtwoord == "arkiearkie201"){
       
        return true;
    }
    else if($email == "hey" && $wachtwoord == "hi"){
       
        return true;
    }
}

?>