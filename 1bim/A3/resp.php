<?php
    //servidor
    class Teste{

        public function testar(){
            $quad = new Quadrado($_POST["lado"]);
              
            if ($_POST["operacao"] == "a"){ 
            $quad->area();}
            if ($_POST["operacao"] == "p"){
            $quad->perimetro();}
           
        }
    }

    
    //Import do modulo quadrado
    include_once "quadrado.php";
    $t = new Teste();
    $t->testar();
    
?>