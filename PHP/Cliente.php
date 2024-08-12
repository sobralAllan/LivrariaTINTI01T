<?php
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;

    require_once("Pessoa.php");
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Cliente;
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Pessoa;

    class Cliente extends Pessoa{
        protected int $codigoCliente;
        protected float $totalCompra;

        function __construct(int $codigo,
                            string $cpf, 
                            string $nome, 
                        string $telefone, 
                        string $endereco,
                        float $totalCompra)
        {
            parent::__construct($cpf, $nome, $telefone, $endereco);
            $this->codigo      = $codigo;
            $this->totalcompra = $total;
        }//fim do construtor

        public function __get(string $name):mixed
        {
            return $this->name;
        }//fim do get

        public function __set(string $name, mixed $value):void
        {
            $this->name = $value;
        }//fim do set

        public function imprimir():string
        {
            parent::imprimir();
            return  "<br>Código: ".$this->codigo.
                    "<br>Total de Compras: ".$this->totalCompra;
        }//fim do imprimir

    }//fim da classe Cliente
?>