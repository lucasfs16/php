<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">    
    </head>
    
<body>

<?php


class Contador {

    public $qtPessoas;

    public function incrementar(){
        $this->qtPessoas = $this->qtPessoas + 1;    
    }

    public function decrementar(){
        $this->qtPessoas = $this->qtPessoas - 1;                
    }

    public function resetar(){
        $this->qtPessoas = 0;
        //this é referencia ao atributo
    }
    
    //metodo para exibir na tela
    public function mostrar(){
        echo "<h1> Número de pessoas = $this->qtPessoas </h1>";
    }
    
}

    $k = new Contador();
    $c = new Contador();
    
    $k->resetar();
    $c->resetar();
    
    /*
    $k->incrementar();
    $c->incrementar();
    
    $k->decrementar();
    $c->decrementar();
    */
    
    //$k e o $c representam o $this nas classes acima
    //ao executar o incrementar no $k, ele pode se tornar o $this sem alterar as outras classes 
    $k->incrementar();
    $k->incrementar();
    $k->incrementar();
    $c->incrementar();
    $k->decrementar();
    
    //MOSTRAR NA TELA:
    $k->mostrar();
    $c->mostrar();
    
    /*
    //só modifica o obj [no Java isso nao acontece]
    $k->inventado = 5;
    print_r($k); //mostra os dados do objeto
    print_r($c);
    
    */

?>

</body>

</html>