<?php
// o php tem controle total sobre html, js.. pois ele roda antes de todas essas coisas funcionarem
#$js = "<script>alert('oi')</script>";
$elsejs = "<script>alert('morreu mas passa bem')</script>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokas</title>
</head>
<body>
    <h1><?php echo $js; ?></h1>
</body>
</html>

<?php /*
// misturando html, php, js
$phpativo = "sim"; ?>
<?php if ($phpativo == "sim"){ ?>
    <h1> Está ativo </h1>
<?php }else{ ?>
    <h2> <?php echo $elsejs; ?> </h2>
<?php } */

class Carro{

    public $cor;
    public $modelo;
    public $montadora;

    public function __construct ($cor,$modelo,$montadora){

        $this->cor = $cor;
        $this->modelo = $modelo;
        $this->montadora = $montadora;

    }

    public function mensagem(){

        return "O carro é $this->cor, é o modelo $this->modelo e é vendido pela $this->montadora.";

    }
}

$carro1 = new carro ("Vermelho", "Fusca", "Volkswagen");
$carro2 = new carro ("Preto", "Lambo", "num sei");

echo $carro1->mensagem();
echo "<br>";
echo $carro2->mensagem();

?> 