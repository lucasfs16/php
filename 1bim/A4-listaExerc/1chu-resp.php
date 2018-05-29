
<?php

//servidor
class Teste {

    public function testar(){


        $c = new Pessoa();
        $c = new Churrasco();
        $c->nome = ($_POST['nome']);
        $c->sexo = ($_POST['sexo']);
        $c->idade = ($_POST['idade']);
        $c->veg = ($_POST['veg']);
        
/*
        $c-> qtdCarneP = ($_POST["qtdCarneP"]);
        $c->qtdTotal = ($_POST["qtdTotal"]);
*/
          
            
        $c->verificarConsumo("Jack");
        //$c->verificarConsumo($pessoa);

    }    
}


        include_once "1chu.php";
        $t = new Teste();
        $t->testar();

?>

