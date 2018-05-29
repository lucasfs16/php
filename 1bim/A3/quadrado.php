<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">    
    </head>
    
<body>

<?php
/*
2) Faça uma classe chamada Quadrado. Todo Quadrado pode calcular área
e perímetro. Monte uma página, single page, que mostre o resultado
do cálculo de área ou perímetro a partir de um botão (Um botão para cada).

uma chamada ajax pra cada botão
...

pegar o valor do lado do quadrado - 4 iguais

calcular perimetro
calcular area

*/

class Quadrado {
    public $lado;
    
    public function __construct($lado){
        $this->lado = $lado;
    }
 
     public function area() {
        
        if($this->lado > 0) {
            $this->lado = $this->lado * $this->lado;   
            echo "<h1> Area do quadrado = $this->lado </h1>";
            echo "<br>";
        } else {
            echo "Digite um valor valido para o lado do quadrado";
        }
     }
    
    public function perimetro() {
        
        if($this->lado > 0) {
            $this->lado = $this->lado * 4;   
            echo "<h1> Perimetro do quadrado = $this->lado </h1>";
            echo "<br>";
        } else {
            echo "Digite um valor valido para o lado do quadrado";
        }
    }
   
   
 /*
 no resp.php:
    $quad = new Quadrado($_POST["lado"]);
 
    $quad->area();
    $quad->perimetro();
 */
 
}

?>

</body>

</html>