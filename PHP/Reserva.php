<?php 
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;

    use Projeto\ProjetoLivrariaTINT01T\PHP\Reserva;

    class Reserva{
        private int $codigo;
        private string $livro;
        private string $pessoa;
        private int $quantidade;

        public function __construct(
            int $codigo,
            string $livro,
            string $pessoa,
            int $quantidade
        ){
            $this->codigo     = $codigo;
            $this->livro      = $livro;
            $this->pessoa     = $pessoa;
            $this->quantidade = $quantidade;
        }//fim do construtor

        public function __get(string $name):mixed{
            return $this->name;
        }//fim do get

        public function __set(string $name, mixed $value):void
        {
            $this->name = $value;
        }//fim do set

        public function imprimir():string
        {
            return "<br><br>Código: ".$this->codigo.
                   "<br>Livro: ".$this->livro.
                   "<br>Pessoa: ".$this->pessoa.
                   "<br>Quantidade: ".$this->quantidade;
        }//fim do imprimir
    }//fim da classe
?>