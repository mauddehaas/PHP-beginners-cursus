<?php


?>

<!DOCTYPE html>
<html>
<head>
<title>PHP Opdracht</title>
<style>
    body{
        text-align: center;
    }
    .rood{
        border:red solid 5px;
    }
    .groen{
        border:green solid 5px;
    }
</style>
</head>
<body>
    <?php
    
         for ($i=1; $i<=9; $i++){
             if ($i % 2 == 0){
                 $kleur = "groen";
             }else{
               $kleur = "rood";
             }
             echo "<img class=".$kleur." src='image/stokstaartje".$i.".jpg'>";
         }
        
    ?>
</body>
</html>