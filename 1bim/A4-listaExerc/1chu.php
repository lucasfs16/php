<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">    
    </head>
    
<body>
<!-- 
1.1 - dada a classe Pessoa que possui atributos:
    String nome
    String sexo
    int idade
    boolean vegetariana     booleana=bool
fazer uma classe Churrasco que possua:
    atributos: qtdCarne(double)        double=float
    método: verificarConsumo() que recebe via parametro uma Pessoa e com isto
        define a consumação media de carne (qtd de carne consumida),
        pessoas de 0 a 3 anos e vegetarianos nao consomem,
        pessoas de 4 a 12 anos consomem 1kg de carne e 
        de 13 anos em diante 2kg de carne

>>> 
    obj: verificar consumo de cada pessoa a partir da idade e do atributo vegetariano


SOLUÇÃO: usar formulario html para pegar idade e veg (T ou F)
    nome sera passado como parametro pela function verificar...
    
    criar ifs para calcular a qtd de carne consumida
    
    function mostrar para informar qtd de carne consumida
    
    informar qtd consumida depois q apertar botao do formulario
-->

<?php

class Pessoa {
    public 
        $nome, //str
        $sexo, //str
        $idade, //int
        $veg;   //bool
 
    /*
 
 //metodo construtor:
  
public function __construct($nome, $sexo, $idade, $veg){
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->idade = $idade;
        $this->veg = $veg;
    }
    
  
    //TESTAR VEG:
   public function mostrar_quem(){
       if($this->veg == true){
            $vegano = "vegetariano";
       }else{ 
            $vegano = "Não é vegetariano";
        }
        echo "$this->nome <br> $this->idade <br> $this->sexo <br> $vegano <br><br>";
   }
   */
}

class Churrasco {

    public $qtdTotal ;
    
    public function verificarConsumo($pessoa){
        $qtdCarneP;
    //define a qtd de carne consumida
    //condições:
    //idade entre 0 e 3 nao consomem
    //veg nao consomem
    //idade entre 4 e 12 consomem 1kg
    //idade >= 13 consome 2kg

        
        if ($pessoa->idade <= 3 || $pessoa->veg == "s") {
            $this->qtdCarneP = 0;
            //echo "A quantidade de carne consumida por $nome é $this->qtdCarneP kg";
            echo "A quantidade de carne consumida é $this->qtdCarneP kg";
            echo  "<br>";
        } elseif ($pessoa->idade >= 4 && $pessoa->idade <= 12){
            $this->qtdCarneP = 1;
            echo "A quantidade de carne consumida é $this->qtdCarneP kg";
            echo  "<br>";
        } else{
            $this->qtdCarneP = 2;  
            echo "A quantidade de carne consumida é $this->qtdCarneP kg";
            echo "<br>";
        }
    
       //calculo do total de carne
       $this->qtdTotal = $this->qtdTotal + (int) $this->qtdCarneP;
    
    }
        
        public function mostrar(){
            echo "<h2> A quantidade total de carne consumida = $this->qtdTotal kg <h2>";
            echo "<br>";
        }
}

/*
// para testar calculos:

$Jack = new Pessoa(); 
$Pam = new Pessoa();
$Jere= new Pessoa();
$Neemias = new Pessoa();
$Josh= new Pessoa();
$Peter= new Pessoa();

$ChurrasDia26 = new Churrasco();

$Jack->nome = "jack";
$Jack->idade = "12";
$Jack->sexo = "masculino";
$Jack->veg = "n";
//$Jack->mostrar_quem();

$Pam->nome = "Pam";
$Pam->idade = "23";
$Pam->sexo = "Feminino";
$Pam->veg = "s";
//$Pam->mostrar_quem();

$Jere->nome = "Jere";
$Jere->idade = "03";
$Jere->sexo = "Masculino";
$Jere->veg = "n";
//$Jere->mostrar_quem();

$Neemias->nome = "Neemias";
$Neemias->idade = "30";
$Neemias->sexo = "Masculino";
$Neemias->veg = "n";
//$Neemias->mostrar_quem();

$Josh->nome = "Josh";
$Josh->idade = "10";
$Josh->sexo = "Masculino";
$Josh->veg = "n";


$Peter->nome = "Peter";
$Peter->idade = "22";
$Peter->sexo = "Feminino";
$Peter->veg = "n";

$ChurrasDia26->verificarConsumo($Jack); //ou $x->verificarConsumo($nome)
$ChurrasDia26->verificarConsumo($Pam);
$ChurrasDia26->verificarConsumo($Jere);
$ChurrasDia26->verificarConsumo($Neemias);
$ChurrasDia26->verificarConsumo($Josh);
$ChurrasDia26->verificarConsumo($Peter);

$ChurrasDia26->mostrar();
*/

?>

</body>

</html>

