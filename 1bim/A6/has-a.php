<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">    
    </head>
    
<body>

<?php

//has-a de 1 pra 1

//usando a otica: cada aluno tem um curso
//A classe Aluno tem um curso e sua referencia $curso possui 
//acesso a todos os membros públicos da classe Curso

class Curso {
    //cada curso tem N alunos
    private $nome, $duracao;
                
        public function __construct($nome, $duracao){
            $this->nome = $nome;
            $this->duracao = $duracao;
        }
        
        public function getDuracao(){
            return $this->duracao;
        }
        
        public function mostrarDados(){
            echo "<h1> CURSO <h1>
                    <ul>
                        <li> Nome: $this->nome </li> 
                        <li> Duração: $this->duracao </li> 
                    </ul>";
        }
}


class Aluno {
    //cada aluno só pode cursar 1 curso
    private $nome, $curso;
    public $chcompleta; 
    
    public function __construct($nome,$curso,$chcompleta) {
        $this->nome = $nome;
        $this->curso = $curso;
        $this->chcompleta = $chcompleta;
    }
    
    public function mostrarDados(){
        echo "<h1> ALUNO </h1>";
        echo "<ul> 
                <li> Nome: $this->nome </li>
                <li> Carga Horaria Completa: $this->chcompleta </li>
              </ul>";
        
        $this->curso->mostrarDados(); //mostra os dados referentes ao curso
    }
    
    //implementar o metodo estaFormado:
        //chcompleta deve bater com duracao
    public function estaFormado(){
        
        if($this->chcompleta == $this->curso->getDuracao()){
            echo "<h3> Aluno formado! </h3>";
        }else{
            echo "<h3> Aluno não formado! </h3>";
        }
    }

/*
        if ($this->chcompleta == $this->curso->getDuracao()) {
            echo "<h3> Aluno $this->aluno formado! PARABÉNS! </h3>";
            echo "<p> Aluno $this->aluno completou as $this->curso->getDuracao() horas </p>";
        } else {
            echo "<p> Aluno $this->aluno só completou $this->curso->getDuracao horas do total de $this->chcompleta </p>";
        }
    }
*/ 

}
    $curso = new Curso("SI",2800);
    $aluno = new Aluno("Jonathan",$curso,1400);
    $aluno->mostrarDados();
    $aluno->estaFormado();

?>

</body>

</html>