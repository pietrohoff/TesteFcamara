<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo GET</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <h1>Exemplo GET</h1>

    <?php
    if (isset($_GET['produto'])) {
        $produto = $_GET['produto'];
        echo "<p>Você está visualizando detalhes do produto: $produto</p>";
    } else {
        echo "<p>Nenhum produto especificado.</p>";
    }
    ?>
</body>
</html>
