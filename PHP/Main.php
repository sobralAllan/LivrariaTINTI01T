<?php
    //Conectando a classe ao projeto
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;
    //Colocar qual classe eu utilizar
    require_once("Pessoa.php");
    require_once("Livro.php");
    require_once("Compra.php");
    require_once("Funcionario.php");
    require_once("Reserva.php");
    //Mostrar quem eu vou usar - reforço
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Pessoa;
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Livro;
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Compra;
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Funcionario;
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Reserva;


    //Instanciando um objeto da classe pessoa / Cadastrando
    $pessoa1 = new Pessoa("12345678910", 
                              "Claudio", 
                           "1199999999", 
            "Avenida Senador Vergueiro");

    echo $pessoa1->imprimir();

    $pessoa2 = new Pessoa("123564799",
                          "Allan",
                          "11313133",
                          "rua jeri");

    echo $pessoa2->imprimir();

    //Instanciar o livro = Dar o valor inicial
    $livro1 = new Livro(1234,
                        "Romeu e Julieta",
                        "Shakespeare", 
                        1,
                        "29/02/1989",
                        100,
                        15,
                        1500);

    echo $livro1->imprimir();

    $compra1 = new Compra(
        1,
        "Livro Romeu e Julieta",
        10,
        150
    );

    echo $compra1->imprimir();

    $func1 = new Funcionario(
                    1,
                    "Allan",
                    "Vendedor",
                    2500,
                    "Comercial"
                    );
    echo $func1->imprimir();

    $reserva1 = new Reserva(
                    1,
                    "Romeu e Julieta",
                    "Allan",
                    2
    );//fim do método

    echo $reserva1->imprimir();





?>