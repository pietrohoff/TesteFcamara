<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saída do código PHP</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>

<body>
    <h1>Saída do código PHP</h1>

    <p>Resposta à Pergunta 2:</p>
    <strong>Código:</strong>
    <pre>
        $x = 5;
        $y = 10;
        echo $x + $y . "10";
    </pre>

    <p>Clique no botão "Executar" para ver o resultado:</p>

    <form method="post">
        <input type="submit" name="execute" value="Executar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["execute"])) {
        $x = 5;
        $y = 10;
        $resultado = $x + $y . "10";

        echo "<p>Resultado: $resultado</p>";
    }
    ?>
</body>

</html>