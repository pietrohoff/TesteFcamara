<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logger em Ação</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>

<body>
    <h1>Logger em Ação</h1>

    <?php
    class Logger
    {
        private $logFile;

        public function __construct($logFile)
        {
            $this->logFile = $logFile;
        }

        public function log($message)
        {
            $timestamp = date("Y-m-d H:i:s");
            $logEntry = "[$timestamp] $message\n";
            file_put_contents($this->logFile, $logEntry, FILE_APPEND);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["message"])) {
        $message = $_POST["message"];

        $logger = new Logger("log.txt");
        $logger->log($message);
    }
    ?>

    <form method="post">
        <label for="message">Digite uma mensagem para o log:</label><br>
        <textarea name="message" id="message" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Registrar no Log">
    </form>

    <h2>Log de Mensagens:</h2>
    <pre>

        <?php
        $logContent = file_get_contents("log.txt");
        echo htmlspecialchars($logContent);
        ?>
    </pre>

    <a href="log.txt" download>
        <button>Fazer Download do Log</button>
    </a>
</body>

</html>