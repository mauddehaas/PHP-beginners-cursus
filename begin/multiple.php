<?php

//--------------------------------------------------------------------------------------//
//-----dynamische website opdracht

// if ($_POST['inlognaam']== ""){
//     echo "inlognaam is verplicht";
//     echo "<a href= \"form.html\" >Terug naar het formulier</a>";
// }
// else if($_POST['inlognaam'] != "" && $_POST['adres']!= "" ){
//     echo $_POST['inlognaam'];
// };

// if ($_POST['email']== ""){
//     echo "email is verplicht";
//     echo "<a href= \"form.html\" >Terug naar het formulier</a>";
// }
// else if($_POST['inlognaam'] != "" && $_POST['adres']!= "" ){
//     echo $_POST['email'];
// };

// if ($_POST['adres']== ""){
//     echo "adres is verplicht";
//     echo "<a href= \"form.html\" >Terug naar het formulier</a>";
// }
// else if($_POST['inlognaam'] != "" && $_POST['adres']!= "" ){
//     echo $_POST['adres'];
// };

//--------------------------------------------------------------------------------------//

//-----Beasties

// foreach($_POST['stokstaartje'] as $stokstaart){
// echo "<img src='image/".$stokstaart.".jpg'>";
// };
//--------------------------------------------------------------------------------------//

//-----login formulier

// if ($_POST['email'] == "piet@worldonline.nl" && $_POST['wachtwoord'] == "doetje123"){
//     echo "WELKOM";
// }
// else if($_POST['email'] == "klaas@carpets.nl" && $_POST['wachtwoord'] == "snoepje777"){
//     echo "WELKOM";
// }
// else if($_POST['email'] == "truushendriks@wegweg.nl" && $_POST['wachtwoord'] == "arkiearkie201"){
//     echo "WELKOM";
// }else{
//     echo "sorry geen toegang!";
// };

//--------------------------------------------------------------------------------------//
?>
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
    if (login($_POST['email'],$_POST['wachtwoord'])== true){
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