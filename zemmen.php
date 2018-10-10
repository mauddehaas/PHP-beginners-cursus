<?php
$zwemclubs = array(15,32,11,23
//    "kuiken" => 15,
//    "buffels" => 32,
//    "plonsmerin" => 11,
//    "bommetje" => 23
    );

foreach ($zwemclubs as $zwemclub){
echo $zwemclub;

if($zwemclub % 5 == 0){

    $zwemclub = $zwemclub / 5;

for($i = 0; $i < $zwemclub ;$i++){
  
    echo '<img src="image/zwemmen.jpg"/>';
}
} else {
    $zwemclub = $zwemclub / 5;

    for($i = 1; $i < $zwemclub ;$i++){

        echo '<img src="image/zwemmen.jpg"/>';
        
    }
}
}
?>

<!DOCTYPE html>
<html>
<title>Page title</title>
<body>
    
    <h1>De spartelkuikens</h1>
    <h1>De waterbuffels</h1>
    <h1>Plonsmderin</h1>
    <h1>Bommetje</h1>





</body>
</html>