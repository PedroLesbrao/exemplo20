<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
            <?php
                echo "Envio  de valores e dados atraves de formulario utilizando POST<br><br>";
            ?>
            <form method="post" action="exemplo20.php" name="formulario">
                <p>VALOR:<input type="text" name="valor"></p>
                <p><input type="submit" value="ENVIAR"></p>
                <p><input type="reset" value="LIMPAR"></p>
            </form>
        </div>
    </body>
</html>