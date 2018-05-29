<?php
    class Churrasco {
        public $name,$sexo,$idade,$vege;
        
        function __construct($name,$sexo,$idade,$vege) {
            $this->name = $name;
            $this->sexo = $sexo;
            $this->idade = $idade;
            $this->veg = $veg;
        }
        
        public function verificarConsumo() {
            $qtdCarne;
            if ($this->vege == "sim") {
                $qtdCarne = 0;
                echo "A quantidade de Carne Consumida é $qtdCarne kg";
            
            }else{
                
                if ($this->idade <= 3) {
                $qtdCarne = 0;
                echo "A quantidade de Carne Consumida é $qtdCarne kg";
                
                }else{
                    
                    if ($this->idade >= 4 && $this->idade <=12) {
                        $qtdCarne = 1;
                        echo "A quantidade de Carne Consumida é $qtdCarne kg";
            
                    }else{
                       $qtdCarne = 2;
                       echo "A quantidade de Carne Consumida é $qtdCarne kg";
                    }
                }
            }    
        }
    }  

    $c = new Churrasco($_POST['name'],
    $_POST['sexo'],$_POST['idade'],$_POST['vege']);
    
    $c->verificarConsumo();
?>
