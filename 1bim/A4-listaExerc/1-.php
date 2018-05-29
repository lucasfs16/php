<?php

//servidor
class Teste {

    public function testar(){

           
        $c = new Churrasco($_POST['nome'],
        $_POST['sexo'],$_POST['idade'],$_POST['veg']);
        
        $c->verificarConsumo();


    }    
}


        include_once "1.php";
        $t = new Teste();
        $t->testar();

?>

