<?php
    //Conectando a classe ao projeto
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;
    //Colocar qual classe eu utilizar
    require_once("Pessoa.php");
    require_once("Livro.php");
    //Mostrar quem eu vou usar - reforço
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Pessoa;
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Livro;

    //Parei AQUI - INSTACIAR LIVRO

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
?>