<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Variável em PHP</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>

<body>
    <h1>Verificação de Variável em PHP</h1>

    <?php
    $var1 = 42;
    ?>

    <div class="container">
        <div class="check-box <?php echo isset($var1) ? 'highlighted' : ''; ?>">
            <p>isset($var1)</p>
            <p class="result"><?php echo isset($var1) ? 'A variável está definida' : 'A variável não está definida'; ?></p>
        </div>

        <div class="check-box <?php echo empty($var1) ? 'highlighted' : ''; ?>">
            <p>empty($var1)</p>
            <p class="result"><?php echo empty($var1) ? 'A variável está vazia ou não está definida' : 'A variável não está vazia'; ?></p>
        </div>

        <div class="check-box <?php echo !is_null($var1) ? 'highlighted' : ''; ?>">
            <p>!is_null($var1)</p>
            <p class="result"><?php echo !is_null($var1) ? 'A variável não é nula' : 'A variável é nula'; ?></p>
        </div>
    </div>
</body>

</html>