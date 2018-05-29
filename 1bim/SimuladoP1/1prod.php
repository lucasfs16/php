<!DOCTYPE html>
<html>
<body>
    <?php
        class Produto{
            public $preco,$valorestoq;
                
            public function __construct($preco,$valorestoq){
                $this->preco = $preco;
                $this->valorestoq = $valorestoq;
            }
            public function vender($qtdvendida){
                if($this->valorestoq >= $qtdvendida){
                    $this->valorestoq -= $qtdvendida;
                    echo "Vendeu!! $this->preco";
                }else{
                    echo "Nao tem nd no estoque";
                }
            }
            
        }
        class Eletro extends Produto{
             public function __construct($preco,$valorestoq){
                 parent::__construct($preco,$valorestoq);
             }
             public function promocao(){
               $this->preco = $this->preco - ($this->preco * 0.2);
            }
            public function imposto($valorimposto){
                $this->preco = $this->preco +($this-preco *$valorimposto);
                
            }
          
        }
        class Moveis extends Produto{
             public function __construct($preco,$valorestoq){
                 parent::__construct($preco,$valorestoq);
             }
             
             public function promocao(){
              $this->preco = $this->preco - ($this->preco * 0.125);
            }
            
        }
        class Roupas extends Produto{
              public function __construct($preco,$valorestoq){
                 parent::__construct($preco,$valorestoq);
             }
             public function promocao(){
                $this->preco = $this->preco - ($this->preco * 0.15);
            }
        }
        $vestido = new Roupas(100,50);
        echo $vestido->vender(51);
        echo "<br>";
       
    ?>
</body>
</html>