<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">    
    </head>
    
<body>

<?php

    class Produto {
        private $preco, 
                $vendido;
     
        public function setPreco($preco){
            $this->preco = $preco;        
        }
        
        public function __construct($preco){
            $this->preco = $preco;
            $this->vendido = false;
        }
        
        public function aumentarPreco(){
            if(!$this->vendido){
                $this->preco = 1.1* $this->preco;
            }
        }
        
        public function vender(){
            $this->vendido = true;
        }
        
        public function mostrarDados(){
            echo json_encode(get_object_vars($this)); // mostra todos os dados em json
        }
    }

    $p = new Produto(50);
    $p->aumentarPreco();
    $p->vender();
    $p->aumentarPreco();
    
    $p->setPreco(62); //furou a regra de negocio, aumentou um valor q nao pode aumentar
                        //pq o preço nao pode mais ser aumentado
    
    $p->mostrarDados();
    //resultado = {"preco":55,"vendido":true}
    //ate aqui, a classe Produto é dona de si

?>

</body>

</html>