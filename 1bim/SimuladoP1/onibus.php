
<!DOCTYPE html>
<html>
    <body>
        <?php
            class Onibus{
                private $tarifa, $listaPassageiros, $totalPass;
                
                public function __construct($tarifa){
                    $this->tarifa = $tarifa;
                    $this->listaPassageiros = array();
                }
                
                public function comprarPassagem(Passageiro $pass){
                     $this->listaPassageiros[] = $pass;
                     $this->totalPass = $this->totalPass + $this->tarifa;
                     
                 }
                 
                 public function mostrarDados(){
                     foreach($this->listaPassageiros as $passageiro){
                         $passageiro->mostrarInfo();
                     }
                     echo "<p>Valor Total: R$$this->totalPass</p>";
                 }
            
                
            }
            class Passageiro{
                private $nome, $sexo, $origem;
                
                public function __construct($nome, $sexo, $origem){
                    $this->nome = $nome;
                    $this->sexo = $sexo;
                    $this->origem = $origem;
                }
                
                public function getSexo(){
                    return $this->getSexo;
                }
                
                public function mostrarInfo(){
                    echo "<p>Nome: $this->nome </p>";
                    echo "<p>Sexo: $this->sexo </p>";
                }
                
            }
            
            
            //IMPLEMENTAR CLASSE PARA CONTAR QNTS PASSAGEIROS SAO HOMENS E QNTS SAO MULHERES
            
            $p1 = new Passageiro("Lucas", "M", "Santos");
           // $p2 = new Passageiro("Maria", "F", "São Vicente");
            //$p3 = new Passageiro("Matheus", "M", "Santos");
            //$p4 = new Passageiro("Mariana", "F", "Praia Grande");
            $o1 = new Onibus(50);
            $o1->comprarPassagem($p1);
            //$o1->comprarPassagem($p2);
            //$o1->comprarPassagem($p3);
            //$o1->comprarPassagem($p4);
            $o1->mostrarDados();
        ?>
    </body>
</html>


--------------------------------------------------------------------------------------------------------------



Um Passageiro possui informacoes de
nome, sexo e cidade origem.
Em um onbibus que faz viagens pelo Brasil, pode ter
até 50 passageiros. Cada onibus possui uma tarifa de embarque. 
Implemente funcionalidades de listagem de passageiros 
que compraram uma passagem, o valor total ganho com a tarifa
de embarque e quantos passageiros são mulheres e homens.







