<?php
class Rassen
{
	public $rassen = array();
	
	public function addRas($ras)
	{
		$this->rassen[$ras] = "https://www.google.nl/search?q=$ras&tbm=isch";
	}
	
	public function findRasByUrl($url)
	{
		return array_search($url, $this->rassen);
    }
    public function findAapByFirst()
    {
        $first = $_POST['firstletter']; 
        $first = ucfirst ( $first );

        $bestaat = false;
        $msg = true;
        foreach($this->rassen as $key => $ras)
        {
            if($bestaat == false)
            {
                $letter = $key[0];
 
                if($letter == $first)
                {
                    $urlname = $this->rassen[$key];
                    $rasNaam = $this->findRasByUrl($urlname);
                    echo  "<a class='aap' href='https://www.google.nl/search?q=$rasNaam&tbm=isch'>$rasNaam</a><br>";
                    $msg = false;
                }
                else
                {
                    $bestaat = false;
                }   
            }
        } 
    }   

    public function findAapByName()
    {
        $subject = $_POST['subject']; 
        $subject = ucfirst ( $subject );

        $bestaat = false;
        $this->msg = true;
        foreach($this->rassen as $key => $ras){
        if($_POST['subject'])
            if($bestaat == false){
                if($key == $subject){
                    $bestaat = true;
                    $this->msg = false;
                }else{
                    $bestaat = false;
                }
            }
        }    
   
        if($bestaat == true){
            $urlname = $this->rassen[$subject];
            $rasNaam = $this->findRasByUrl($urlname);
            $this->msg = "<a class='aap' href='https://www.google.nl/search?q=$rasNaam&tbm=isch'>$rasNaam</a><br>";
        }else{
            $this->msg = "<div class='alert alert-danger'>This monkey doesn't exist</div>";
        }
        echo $this->msg;
    
    }
}


class Ras
{
	public $ras;
	
	public function __construct($ras)
	{
		$this->ras = $ras;
	}
	
	public function getRas()
	{
		return $this->ras;
	}
}

$rassen = new Rassen();

$rassen->addRas((new Ras('Baviaan'))->getRas());
$rassen->addRas((new Ras('Guereza'))->getRas());
$rassen->addRas((new Ras('Langoer'))->getRas());
$rassen->addRas((new Ras('Neusaap'))->getRas());
$rassen->addRas((new Ras('Tamarin'))->getRas());
$rassen->addRas((new Ras('Brulaap'))->getRas());
$rassen->addRas((new Ras('Halfaap'))->getRas());
$rassen->addRas((new Ras('Mandril'))->getRas());
$rassen->addRas((new Ras('Oeakari'))->getRas());
$rassen->addRas((new Ras('Faunaap'))->getRas());
$rassen->addRas((new Ras('Hoelman'))->getRas());
$rassen->addRas((new Ras('Meerkat'))->getRas());
$rassen->addRas((new Ras('Oormaki'))->getRas());
$rassen->addRas((new Ras('Kuifaap'))->getRas());
$rassen->addRas((new Ras('Mensaap'))->getRas());
$rassen->addRas((new Ras('Spinaap'))->getRas());

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Monkey Business</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="monkey.css">
        <link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container text-center">
            <img src="img/monkey-business.jpg">
            <p>select your monkey!</p>
            <img src="img/monkey_swings.png"><br>
            <form name="form" action="" method="POST">
                <input style="width:300px; margin:auto;" class="form-control" type="text" name="subject" id="subject" placeholder = "Zoek uw aap....">
            </form>
            <form name="form" action="" method="POST">
               <input style="width:300px; margin:auto;" class="form-control" type="text" name="firstletter" id="firstletter" placeholder = "Zoek uw aap op eerste letter....">
            </form>
            <a href="monkey.php"><button style="width:300px; margin:auto;" class="form-control" type="button" name="all monkeys" id="subject" placeholder = "All monkeys">All monkey's</button></a>

                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if (isset($_POST['firstletter'])){
                        $rassen->findAapByFirst();
                    }
                    if (isset($_POST['subject'])){
                        $rassen->findAapByName();
                    }
                }else
                {
                    foreach($rassen->rassen as $key => $ras){
                             echo "<a class='aap' href='https://www.google.nl/search?q=$key&tbm=isch'>$key</a><br>";    
                         }
                }

                ?>
        </div>
        <script>
</script>
    </body>
</html>
            