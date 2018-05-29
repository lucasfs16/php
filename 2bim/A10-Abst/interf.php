<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">    
    </head>
    
<body>

<?php

    //transformação do abst.php para interface:
    //na interface, uma classe pode ter varias implementações
    //todos os metodos sao abstratos e publicos
    //é parecido com herança multipla
    //interface é usada qnd nao tenho atributo
    
    //uso de:
    //SOBRESCRITA: deu um jeito de manipular o checar() para qq animal
    //ABSTRAÇÃO: criou uma forma minima para se mexer com animais checaveis
    //POLMORFISMO: permitiu com que o metodo checar() da classe Zoo aceitasse apenas animais checaveis
    //o metodo chamado depende da instancia e nao do nome

interface Checavel{
                function checar();
            }
            interface Animal{
                
                const nome = "ALGO";
                
                public function emitirSom();
            }
            
            interface Pulavel{
                function pular();
            }
            
            class Cachorro implements Animal, Checavel{
                public function emitirSom(){
                    echo "<h1> AUAUA </h1>";
                }
                
                public function checar(){
                    echo "EH CACHORRO";
                }
            }
            
            class Gato implements Animal, Pulavel, Checavel{
                public function emitirSom(){
                    echo "<h1> MIAU </h1>";
                }
                
                public function pular(){
                    echo "<h1> Pulou como gato... </h1>";
                }
                
                public function checar(){
                    echo "EH GATO";
                }
                
            }
            class Zoo{
            
                public function checar(Checavel $animal){
                    $animal->checar();
                }
            }
            
            
            /*-------------------------------------- ANTI-EXEMPLO:
            class Zoo{
                //AQUI IMITAMOS O POLIMORFISMO DO JAVA: restingir o q quero trabalhar
                public function checar(Animal $animal){
                    if ($animal instanceof Gato){
                        echo "EH GATO...";
                    }
                    if ($animal instanceof Cachorro){
                        echo "EH Cachorro...";
                    }
                }
            }
            FIM ANTIEXEMPLO --------------------------------------*/
       
                }
            }
            $a = new Cachorro("???");
            //O METODO emitirSom sera escolhido baseado em qual instancia
            //foi provida.
            $a->emitirSom();
            echo $a::nome;

?>

</body>

</html>