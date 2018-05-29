<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">    
    </head>
<body>
<?php
/*
1) Um revolver possui uma quantidade máxima de
munição. Ele pode atirar, uma bala por vez, ou
recarregar, uma por vez. Um revolver só atira
se houver munição e recarrega se a quantidade
de munição não for a máxima.
Implemente esta situação.
*/

class  Revolver{
    public $munic, $cheio;
    
    //metodo construtor, q é chamado pelo comando "new", permite inicializar 
        //meus atributos ou fazer rotinas iniciais
    //construtor nesse caso ta auxiliando na inicialização dos atributos
        //e é executado somente após o uso do "new"
        //cada obj pode chamar o construtor apenas uma vez 
    public function __construct($munic, $cheio){
        $this->munic = $munic;
        $this->cheio = $cheio;
    }
    
    
    public function atira(){
        
        if($this->munic > 0) {
            $this->munic = $this->munic - 1;
            echo "<h1> Munição atual: $this->munic </h1>";
            echo "<br>";
        } else {
            echo "RECARREGUE! ARMA SEM BALA";    
            echo "<br>";
        }
    }
    
    public function carrega(){
        
        echo "";
        echo "<br>";
    }
    
    public function recarrega(){
        
        if($this->munic < $cheio){
            $this->munic = $this->munic + 1;
            
            echo "<br>";
        echo "";    
        echo "<br>";    
        } else {
            echo "É SÓ ATIRAR!";
            echo "<br>";
        }
    }
    
}

$tiros1 = new Revolver();

//definição da qtmunic e qtcheio usando construtor:
$tiros1 = new Revolver($_POST["municao"], $_POST["maxima"]);

/*
//definir cheio como 10 e munic como 2:
$tiros1->cheio = 10;
$tiros->munic = 2;

ou

//munic maxima e qtmunic definidos pelo metodo GET:
// metodo inserido na URL: https://php-anajuliabl.c9users.io/A2-Contador-Calc/exec-revolver.php
    $tiros1->cheio = $_GET["maxima"];
    $tiros1->munic = $_GET["municao"];
*/  

//munic maxima e qtmunic definidos pelo metodo POST, usando formulario:
    $tiros1->cheio = $_POST["maxima"];
    $tiros1->munic = $_POST["municao"];


    $tiros1->atira();
    $tiros1->atira();
    $tiros1->atira();
    $tiros1->atira();
    $tiros1->atira();
    $tiros1->recarrega();

?>

