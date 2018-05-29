<!DOCTYPE html>
<html>
    <body>
        <?php
            class Aluno{
                private $nomeAluno, $disciplina, $notaP1, $notaP2;
                
                public function __construct($nomeAluno, $disciplina, $notaP1, $notaP2){
                    $this->nomeAluno = $nomeAluno;
                    $this->disciplina = $disciplina;
                    $this->notaP1 = $notaP1;
                    $this->notaP2 = $notaP2;
                }
                
                public function estaAprovado(){
                    $media = 0.5*($this->notaP1 + $this->notaP2);
                    if ($media >= 6)
                        return "true";
                    else
                        return "false";
                }
                
                public function toJSON(){
                    $status = $this->estaAprovado();
                    echo "{nomeAluno: $this->nomeAluno,
                           disciplina: $this->disciplina,
                           notaP1: $this->notaP1,
                           notaP2: $this->notaP2,
                           aprovado: $status
                    }";
                }
            }
        ?>
    </body>
</html>