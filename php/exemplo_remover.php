<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso da função unset() em PHP</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>

<body>
    <h1>Uso da função unset() em PHP</h1>
    <div class="instructions">
        <p>
            Esta página demonstra o uso da função <strong>unset()</strong> em PHP para remover uma variável.
        </p>
        <pre>

        unset($variavel1);
        </pre>
        <p>
            Digite os valores das variáveis abaixo e clique no botão "Definir Variáveis" para configurá-las.
        </p>
    </div>

    <?php
    $variavel1 = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["setVariables"])) {
        $variavel1 = $_POST["variavel1"];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["unsetVariable"])) {
        unset($variavel1);
    }
    ?>

    <form method="post">
        <div class="button-container">
            <label for="variavel1">Variável 1:</label>
            <input type="text" id="variavel1" name="variavel1" value="<?php echo isset($variavel1) ? $variavel1 : ''; ?>">

            <input type="submit" name="setVariables" value="Definir Variável">
            <input type="submit" name="unsetVariable" value="Remover Variável">

            <div class="container">
                <div class="variable-box">
                    <p><b>Valor da Variável 1:</b> <?php echo isset($variavel1) ? $variavel1 : 'Variável não está definida';?></p>
                </div>
            </div>
        </div>
    </form>
</body>
</html>