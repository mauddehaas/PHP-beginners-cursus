<?php 
$leeftijd = 2;
$kosten = 10;


if ($leeftijd < 3){
    $kosten = 0;
    echo "De kosten zijn: ". $kosten .  "euro";
}
else if ($leeftijd > 65){
    $kosten = $kosten / 100 *50;
echo "De kosten zijn ". $kosten . "euro";

}
else if  ($leeftijd <= 12 ){
    $kosten = $kosten / 100 *50;
    echo "De kosten zijn ". $kosten . "euro";
}
else {
    echo "De kosten zijn ". $kosten . "euro";
}
?>