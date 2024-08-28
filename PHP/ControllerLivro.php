<?php 
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;
    require_once('Livro.php');//Conexão esteja completa
    use Projeto\ProjetoLivrariaTINT01T\PHP\ControllerLivro;
    use Projeto\ProjetoLivrariaTINT01T\PHP\Livro;

?>
<Doctype HTML>
<HTML lang="PT-BR">
    <head>
        <meta charset="UTF-8">
    </head>    
    <body>
        <form method="POST">
            <label>ISBN</label>
            <input type="text" id="isbn" name="isbn"/><br><br>

            <label>Título</label>
            <input type="text" id="titulo" name="titulo"/><br><br>

            <label>Autor</label>
            <input type="text" id="autor" name="autor"/><br><br>

            <label>Edição</label>
            <input type="text" id="edicao" name="edicao"/><br><br>

            <label>Data de Lançamento</label>
            <input type="text" id="dtLancamento" name="dtLancamento"/><br><br>

            <label>Quantidade</label>
            <input type="number" id="quantidade" name="quantidade"/><br><br>

            <label>Preço Unitário</label>
            <input type="text" id="precoUnitario" name="precoUnitario"/><br><br>

            <label>Preço Total</label>
            <input type="text" id="precoTotal" name="precoTotal"/><br><br>

            <button>Cadastrar
            <?php
                session_start();
                try{ 
                    $_SESSION['isbn']   = $_POST['isbn'];
                    $_SESSION['titulo'] = $_POST['titulo'];
                    $_SESSION['autor']  = $_POST['autor'];
                    $_SESSION['edicao'] = $_POST['edicao'];
                    $_SESSION['dtLancamento'] = $_POST['dtLancamento'];
                    $_SESSION['quantidade']   = $_POST['quantidade'];
                    $_SESSION['precoUnitario'] = $_POST['precoUnitario'];
                    $_SESSION['precoTotal']    = $_POST['precoTotal'];
                    
                }catch(Exception $erro){
                    echo $erro;
                }//fim do try_catch
            ?>
            </button><br><br>

        </form>
    </body>
</HTML>