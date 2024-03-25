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
                $fValor = $_POST["valor"];
                echo "O valor $fValor foi enviado por formulario HTML atraves
                       do método POST<br>";
            ?>
        </div>
    </body>
</html>