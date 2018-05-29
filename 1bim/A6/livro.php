<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">    
    </head>
<body>
<?php

    class Estante {
        private $categoria, $livros, $qt, $qtMax;
        //livros: array de livros
        //qt = qt atual de livros
        //qtMax = qt maxima de livros
        
        public function __construct($categoria, $qtMax){
            $this->categoria = $categoria;
            $livros = array(); //array para percorrer os livros
            $this->qtMax = $qtMax; //nao pode ser nula
            $this->qt = 0;
        }
        
        public function colocarLivro($livro){
            
            if ($this->categoria == $livro->getCategoria() &&
            $this->qt < $this->qtMax) {
                    $this->livros[] = $livro;
                    $qt++;
            }
        }
        
        public function listarLivros(){
            echo "<h1> LIVROS NA ESTANTE </h1>";
            echo "<h2> $this->categoria </h2>";
            
            //pra cada livro mostra os dados
            foreach ($this->livros as $livro) { 
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
            echo "<ul><li> Nome: </li></ul>";
            echo "<li> Autor: </li>";
            echo "<li> Categoria: </li></ul>";
            
        }
        
        public function getCategoria(){
            return $this->categoria;
        }
        
    }
    
    //ENUM [no Java]: dar tipos para valores inteiros
    class Categoria {
        //variavel q nao vai mudar nunca, por isso pode ser publico e
         //nao precisa ser instanciado

        const COMÉDIA = "COMÉDIA"; //pode ser = str ou int
        const AUTOAJUDA = "AUTOAJUDA";
        const FILOSOFIA = "FILOSOFIA";
        const FICÇÃO = "FICÇÃO";
    }
    
    $l1 = new Livro("CRITICA DA RAZAO PURA", "KANT", Categoria::FILOSOFIA);
    $l2 = new Livro("A DIVINA COMEDIA", "DANTE ALIGHIERI", Categoria::FICÇÃO);
    $l3 = new Livro("GAIA CIÊNCIA", "NIETZSCHE", Categoria::FILOSOFIA);
    $e = new Estante(Categoria::FILOSOFIA);
    $e->colocarLivro($l1);
    $e->colocarLivro($l2);
    $e->colocarLivro($l3);
    $e->listarLivros();
    
?>

</body>

</html>