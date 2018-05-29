<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">    
    </head>
    
<body>

<?php

class Calculadora {
    public $n1, $n2;
    
    public function somar(){
        $res = $this->n1 + $this->n2; 
        echo "A soma é: $res";
        echo "<br>";
    }
    
    public function subtrair(){
        $res = $this->n1 - $this->n2; 
        echo "A sub é: $res";
        echo "<br>";
    }
    
    public function multiplicar(){
        $res = $this->n1 * $this->n2; 
        echo "A mult é: $res";
        echo "<br>";
    }
    
    public function dividir(){
        if($this->n2 != 0){
            $res = $this->n1 / $this->n2; 
            echo "A divisão é: $res";    
            echo "<br>";
        }else{
            echo "Nao é possível realizar esta operação";
            echo "<br>";
        }
        
    }

}

    $calc1 = new Calculadora();
    
    $calc2 = new Calculadora();
    
    
    $calc1->n1 = 2;
    $calc1->n2 = 3;
    
    $calc1->somar();
    //resultado do calc1 =  5;
    
    $calc2->n1 = 4;
    $calc2->n2 = 5;
    
    $calc2->somar();
    //resultado do calc2 = 9;
    
    $calc2->subtrair();
    //resultado do calc2 = -1;
    
    $calc2->multiplicar();
    //resultado do calc2 = 20;
    
    $calc2->dividir();
    //resultado do calc2 = ;

?>

</body>

</html>