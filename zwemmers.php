<?php

$zwemclubs= array(
   array("naam"=>"kuikens" , "waarde"=> 15),
   array("naam"=>"buffels" , "waarde"=> 32),
   array("naam"=>"plonsmderin" , "waarde"=> 11),
   array("naam"=>"bommetje" , "waarde"=> 23)
);

foreach ($zwemclubs as $zwemclub){
    echo $zwemclub["naam"];
    echo $zwemclub["waarde"];

    // $zwemclub["waarde"] = $zwemclub["waarde"] / 5;

    if($zwemclub["waarde"] % 5 == 0){

        $zwemclub["waarde"] = $zwemclub["waarde"] / 5;

    for($i = 0; $i < $zwemclub["waarde"] ;$i++){
      
        echo '<img src="image/zwemmen.jpg"/>';
    }
} else {
        $zwemclub["waarde"] = $zwemclub["waarde"] / 5;

        for($i = 1; $i < $zwemclub["waarde"] ;$i++){

            echo '<img src="image/zwemmen.jpg"/>';
            
        }
    }
}

?>