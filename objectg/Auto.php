<?php
class Radioprogramma {
    
    public $programma_naam;
    public $omschrijving;
    public $Liedjes = array();
    public $programma = array();


    public function getLiedjes() {
            $this->Liedjes= array('hello'.'hey soul sister'. 'sorry');
            
        }	

    public function getProgramma ( ) {
            $this->programma_naam="Sky Radio";
            $this->omschrijving="nu gratis!";
            $this->programma = Array($programma_naam. $omschrijving);
            //print("test");
            //return $programma;
        }
}

class RadioProgramma_new extends  Radioprogramma
{
    public $programma_naam2;
}

$radio = NEW Radioprogramma;

print_r($radio->getLiedjes());
print_r($radio->Liedjes);


$radio->getProgramma();
print_r($radio->programma);


?>