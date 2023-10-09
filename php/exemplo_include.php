<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Inclusão de Arquivo PHP</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>

<body>
    <h1>Exemplo de Inclusão de Arquivo PHP</h1>

    <p>Podemos icluir um arquivo desta maneira utilizando <code>include()</code></p>
    <pre>

    include('conteudo.php');
    </pre>

    <p>Clique no botão abaixo para incluir o arquivo "conteudo.php" em tempo real:</p>

    <form method="post">
        <input type="submit" name="includeFile" value="Incluir Arquivo">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["includeFile"])) {
        include('conteudo.php');
    }
    ?>
</body>

</html>