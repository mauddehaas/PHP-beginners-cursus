<?php

//string
//stringdoorelkaar();//<=moet aangeroepen worden als gebruikt wil worden;

function stringdoorelkaar(){
    $woord = "halloikbenmaud";
    $shuffled = str_shuffle($woord);
    
    // This will echo something like: bfdaec
    echo $shuffled;
}

//----------------------------------------------------------------------------------------------//


//deelbaar door drie

$getal= 5;

//deelbaardrie ($getal);//<=moet aangeroepen worden als gebruikt wil worden;

function deelbaardrie($getal){
    if ($getal % 3 == 0 ){
        echo "TRUE";
    } else{
        echo "FALSE";
    }
}

//----------------------------------------------------------------------------------------------//


//graden
$gradencel = 50;

 // fatocel ($gradencel){ //<=moet aangeroepen worden als gebruikt wil worden;

function fatocel($gradencel){
   
    $fahr = $gradencel * 1.8 + 32;
    echo "De graden Celsius =  ".$gradencel."  dan is de Fahrenheit =  ". $fahr."<br>";
    echo "De berekening is dan  ". $gradencel ." * 1.8 + 23 = ".$fahr;
}




?>