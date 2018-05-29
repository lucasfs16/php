<?php
    class Churrasco {
        public 
            $nome,
            $sexo,
            $idade,
            $veg;
        
        function __construct($nome,$sexo,$idade,$veg) {
            $this->nome = $nome;
            $this->sexo = $sexo;
            $this->idade = $idade;
            $this->veg = $veg;
        }
       
        public function verificarConsumo() {
            $qtdCarne;
            
            if ($this->veg == "s") {
                $qtdCarne = 0;
                echo "A quantidade de carne consumida = $qtdCarne kg";
            
            }else{
                
                if ($this->idade <= 3) {
                $qtdCarne = 0;
                echo "A quantidade de carne consumida = $qtdCarne kg";
                
                }else{
                    
                    if ($this->idade >= 4 && $this->idade <=12) {
                        $qtdCarne = 1;
                        echo "A quantidade de carne consumida = $qtdCarne kg";
            
                    }else{
                       $qtdCarne = 2;
                       echo "A quantidade de carne consumida = $qtdCarne kg";
                    }
                }
            }    
        }
    }  

?>