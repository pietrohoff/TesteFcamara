<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo POST</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <h1>Exemplo POST</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['produto']) && !empty($_POST['produto'])) {
            $produto = $_POST['produto'];
            echo "<p>Você está visualizando detalhes do produto: $produto</p>";
        } else {
            echo "<p>Nenhum produto especificado.</p>";
        }
    } else {
        echo "<p>O formulário não foi submetido.</p>";
    }
    ?>
</body>
</html>
