<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">    
    </head>
    
<body>

<?php
/*

--------------------------- RESPOSTA: .../lucasfs16/php1/aula5/aula6.php

EXERCICIO P1:

CRIE A CLASSE BIBLIOTECA BASEADA EM livro.php QUE POSSUI NOME E 
VARIAS ESTANTES. FAÇA OS METODOS:

0) inserirEstante($estante): Insere uma Estante  

a) listarFilosofia(): Lista todos os livros de filosofia

b) listarTudo(): Lista todos os livros de todas as estantes

c) contarFiccao(): Conta quantos livros há de ficcao

>>>

na biblio: varias estantes com varios livros

*/
    
    class Biblioteca {
        private $nome, $estantes;    
        
        public function __construct($nome){
            $this->nome = $nome;
            $this->estantes = array();
            //$this->estante = $estante;
        }
        
        //0:
        public function inserirEstante($estante){
            $this->estantes[] = $estante;
            $this->estante++;
            
            echo "<p> Qtd de estantes atualmente: $this->estante </p>";
        }
    
        //a)percorrer todos os livros e listar apenas os de filosofia 
            //usar o mesmo recurso de repeticao para listar todos
        public function listarFilosofia(){
            
            //percorrer estantes pelas categorias para eliminar a categ desnecessaria
            foreach ($this->estante as $this->) {
                // code...
            
                if ($this->getCategoria() == "FILOSOFIA"){
                    echo "<h2> LIVROS DE FILOSOFIA </h2>";
                    echo "";
                    //listar todos os livros:
                    foreach ($this->livros as $livro){
                        $livro->mostrarDados();    
                    }
                } else {
                    echo "NENHUM LIVRO DE FILOSOFIA";
                }
        
            }        
        }
    }
    
    class Estante{
                   private $categoria, $livros, $qt, $qtMax; 
                   
                   public function __construct($categoria,$qtMax){
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
                   
                }
                
                class Livro {
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
                
                class Categoria{
                    const COMEDIA = "COMEDIA";
                    const AUTOAJUDA = "AUTO-AJUDA";
                    const FILOSOFIA = "FILOSOFIA";
                    const FICCAO    = "FICCAO";
                }
                
                /*
                $l1 = new Livro("CRITICA DA RAZAO PURA","KANT",Categoria::FILOSOFIA);
                $l2 = new Livro("A DIVINA COMEDIA","DANTE ALIGHIERI",Categoria::FICCAO);
                $l3 = new Livro("GAIA CIENCIA","NIETZSCHE",Categoria::FILOSOFIA);
                $l4 = new Livro("O CREPUSCULO DOS IDOLOS","NIETZSCHE",Categoria::FILOSOFIA);
                $l5 = new Livro("O CAPITAL","KARL MARX",Categoria::FILOSOFIA);
                $e = new Estante(Categoria::FILOSOFIA,3);
                $e->colocarLivro($l1);
                $e->colocarLivro($l2);
                $e->colocarLivro($l3);
                $e->colocarLivro($l4);
                $e->colocarLivro($l5);
                $e->listarLivros();
                */
                
                inserirEstante();
                inserirEstante();
                //qtd de estantes = 2
                
                
?>

</body>

</html>