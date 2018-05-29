<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">    
    </head>
    
<body>

<?php
/*

EXERCICIO P1:

CRIE A CLASSE BIBLIOTECA BASEADA EM livro.php (classes já criadas: Estante, Livro, Categoria) QUE POSSUI NOME E 
VARIAS ESTANTES. FAÇA OS METODOS:

0) inserirEstante($estante): Insere uma Estante  

a) listarFilosofia(): Lista todos os livros de filosofia

b) listarTudo(): Lista todos os livros de todas as estantes

c) contarFiccao(): Conta quantos livros há de ficcao

>>>

na biblio: varias estantes com varios livros

*/

            class Biblioteca{
                private $nome,$estantes;
                
                public function __construct($nome){
                    $this->nome = $nome;
                    $this->estante = array();
                }
                
                public function InserirEstante($estante){
                    $this->estantes[]=$estante;
                }
                
                public function mostrarNome(){
                    echo "<h1>$this->nome</h1>";
                }
                
                public function ListarFilosofia(){
                    foreach ($this->estantes as $estante) {
                        if ($estante->getCategoria() == "FILOSOFIA") {
                            $estante->listarLivros();
                        }
                    }
                }
                
                public function ListarTudo(){
                    foreach ($this->estantes as $estante) {
                        foreach ($estante->getLivros() as $livro) {
                            $livro->mostrarDados();
                        }
                    }
                }
                
                public function ContarFiccao(){
                     -$qtFiccao=0;
                    echo "<h1>FICCAO</h1>";
                    foreach ($this->estantes as $estante) {
                        if ($estante->getCategoria() == "FICCAO" ) {
                            foreach ($estante->getLivros() as $livro) {
                                $qtFiccao +=1;
                            }
                        }
                    }
                    echo "Existem $qtFiccao livros de Ficcao na biblioteca.";
                }

            }
        
            //CLASSE CRIADA NA PRIMEIRA PARTE:        
            class Estante{
               private $id, $categoria, $livros, $qt, $qtMax; 
               
               public function __construct($id,$categoria,$qtMax){
                   $this->id = $id;
                   $this->categoria = $categoria;
                   $this->livros = array();
                   $this->qtMax = $qtMax;
                   $this->qt    = 0;
               }
               
               public function colocarLivro($livro){
                    if($this->categoria == $livro->getCategoria()
                       && $this->qt < $this->qtMax){
                       $this->livros[] = $livro;
                       $this->qt++;
                    }
               }
               
               public function listarLivros(){
                   echo "<h1> ESTANTE </h1>";
                   echo "<h2> $this->categoria </h2>";
                   foreach($this->livros as $livro){
                       $livro->mostrarDados();
                   }
               }
               
               public function getLivros(){
                   return $this->livros;
               }
               
               public function getCategoria(){
                   return $this->categoria;
               }
               
            }
            
            //CLASSE CRIADA NA PRIMEIRA PARTE:
            class Livro{
               private $nome, $autor, $categoria;
               
               public function __construct($nome, $autor, $categoria){
                   $this->nome = $nome;
                   $this->autor = $autor;
                   $this->categoria = $categoria;
               }
               
               public function mostrarDados(){
                   echo "<ul> <li> Nome: $this->nome </li>";
                   echo "<li> Autor: $this->autor </li>";
                   echo "<li> Categoria: $this->categoria </li></ul>";
               }
               
               public function getCategoria(){
                   return $this->categoria;
               }
               
            }
            
            //CLASSE CRIADA NA PRIMEIRA PARTE:
            //ENUM
            class Categoria{
                const COMEDIA = "COMEDIA";
                const AUTOAJUDA = "AUTO-AJUDA";
                const FILOSOFIA = "FILOSOFIA";
                const FICCAO    = "FICCAO";
            }
            
            
            //BIBLIOTECA
            $Saraiva = new Biblioteca("Saraiva");
            
            //ESTANTES
                //FILO 4
            $e1 = new Estante(1,Categoria::FILOSOFIA,3);
            $e2 = new Estante(2,Categoria::FILOSOFIA,3);
                //FICCAO 2
            $e3 = new Estante(3,Categoria::FICCAO,3);
                //COMEDIA 2
            $e4 = new Estante(4,Categoria::COMEDIA,3);
                //AUTOAJUDA 2
            $e5 = new Estante(5,Categoria::AUTOAJUDA,3);
            
            //LIVROS
            $l1 = new Livro("CRITICA DA RAZAO PURA","KANT",Categoria::FILOSOFIA);
            $l2 = new Livro("A DIVINA COMEDIA","DANTE ALIGHIERI",Categoria::FICCAO);
            $l3 = new Livro("GAIA CIENCIA","NIETZSCHE",Categoria::FILOSOFIA);
            $l4 = new Livro("O CREPUSCULO DOS IDOLOS","NIETZSCHE",Categoria::FILOSOFIA);
            //$l5 = new Livro("O CAPITAL","KARL MARX",Categoria::FILOSOFIA);
            //$l6 = new Livro("BOBO DA CORTE","KANT",Categoria::COMEDIA);
            $l7 = new Livro("SARRO","ARI TOLEDO",Categoria::COMEDIA);
            //$l8 = new Livro("AUTOESTIMA FEITICEIRA","SERGIO BRAVO",Categoria::AUTOAJUDA);
            //$l9 = new Livro("A POLITICA BRASILEIRA QUE FUNCIONA","JESO PADILLE",Categoria::FICCAO);
            $l10 = new Livro("O MELHOR E O PREFERIDO","PIPO",Categoria::AUTOAJUDA);
            
            $e1->colocarLivro($l1);
            $e1->colocarLivro($l3);
            $e1->colocarLivro($l4);
            //$e2->colocarLivro($l5);
            $e3->colocarLivro($l2);
            //$e3->colocarLivro($l9);
            //$e4->colocarLivro($l6);
            $e4->colocarLivro($l7);
            //$e5->colocarLivro($l8);
            $e5->colocarLivro($l10);
            
            $Saraiva->InserirEstante($e1);
            $Saraiva->InserirEstante($e2);
            $Saraiva->InserirEstante($e3);
            $Saraiva->InserirEstante($e4);
            $Saraiva->InserirEstante($e5);
            
            $Saraiva->mostrarNome();
            echo "<BR><BR><h1>EX1</h1><BR><BR>";
            $Saraiva->ListarFilosofia();
            echo "<BR><BR><h1>EX2</h1><BR><BR>";
            $Saraiva->ListarTudo();
            echo "<BR><BR><h1>EX3</h1><BR><BR>";
            $Saraiva->ContarFiccao();
                 
?>

</body>

</html>