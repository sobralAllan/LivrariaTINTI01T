<?php
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;
    require_once('Cliente.php');
    require_once('Livro.php');
    require_once('Funcionario.php');
    require_once('ControllerCompra.php');
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Cliente;
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Livro;
    Use Projeto\ProjetoLivrariaTINT01T\PHP\Funcionario;
    Use Projeto\ProjetoLivrariaTINT01T\PHP\ControllerCompra;
    session_start();
?>
<Doctype HTML>
<HTML>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="POST">
            <label>Código Compra</label>
            <input type="number" id="codCompra" name="codCompra"/><br><br>

            <label>Livro</label>
            <input type="text" id="livro" name="livro" value="<?php echo $_SESSION['titulo']?>" readonly/><br><br>

            <label>Total</label>
            <input type="number" id="total" name="total"/><br><br>

            <label>Cliente</label>
            <input type="text" id="cliente" name="cliente"/><br><br>

            <label>Funcionário</label>
            <input type="text" id="funcionario" name="funcionario"/><br><br>

            <button>Comprar
                <?php
                    
                    $livro1 = new Livro($_SESSION['isbn'],
                                        $_SESSION['titulo'],
                                        $_SESSION['autor'],
                                        (int)$_SESSION['edicao'],
                                        $_SESSION['dtLancamento'],
                                        (int)$_SESSION['quantidade'],
                                        (float)$_SESSION['precoUnitario'],
                                        (float)$_SESSION['precoTotal']);
                    $_POST['livro'] = $_SESSION['titulo'];
                    
                    
                ?>
            </button>
            <?php 
                
                echo $livro1->imprimir(); 
            ?>
        </form>
    </body>
</HTML>