<!DOCTYPE html>
<html>
<body>
    <?php
        class Jogador{
            private $nome,$numcamisa,$salario,$timejogador;
            
            public function __construct(){
                $this->nome = $nome;
                $this->numcamisa =$numcamisa;
                $this->salario = $salario;
                $this->timejogador = $timejogador;
            }
            public function salarioAcrescimo($porcentagem){
                // pega o valor atual e calcula com a % que veio via parametro GG
                $this->salario += $this->salario * ($porcentagem / 100); //ou $porcentagem = *0.95
            }
            public function getNome(){
                return $this->nome;
            }
            public function getSalario(){
                return $this->salario;
            }
            public function getNumcamisa(){
                return $this->Numcamisa;
            }
            
        }
        class Time{
            private $nomejogador,$lista;
        
            public function __construct($nomejogador){
                $this->nomejogador = $nomejogador;
                // vai receber uma lista , logo um vetor(array) WP
                $this->lista = array();
            }    
            public function listarJogadores(){
                foreach($this->lista as $jogador){
                    echo $jogador->getNome();
                    echo "<br>";
                    echo $jogador->getNumcamisa();
                    echo "<br>";
                }
            }
            public function calcularTotal(){
                $cont = 0;
                foreach($this->lista as $jogadores){
                $cont += $jogadores->getSalario();    //ou sum(salario)
                }
                echo $cont;
            }
            
        }
        
        $j1 = new Jogador("Neymar", 10, 1000000, "PSG");
        $j2 = new Jogador("Bruno Henrique", 7, 250000, "Saaaaaaantooooos");
        $j1->listarJogadores();
        $j1->calcularTotal();
        
        
        
        
        
    ?>
</body>
</html>