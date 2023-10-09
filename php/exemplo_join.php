<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo SQL - INNER JOIN e LEFT JOIN</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>

<body>
    <h1>Exemplo SQL - INNER JOIN e LEFT JOIN</h1>

    <h2>Exemplo Prático</h2>
    <p>
        Vamos considerar duas tabelas: "Clientes" e "Pedidos", as tabela contem a seguinte estrutura:
    </p>

    <pre>

        CREATE TABLE Clientes (
            id INT PRIMARY KEY,
            nome VARCHAR(50)
        );

        CREATE TABLE Pedidos (
            id INT PRIMARY KEY,
            cliente_id INT,
            descricao VARCHAR(100)
        );
    </pre>

    <p>
        Suponhamos que queremos recuperar as informações sobre os clientes e seus pedidos correspondentes.
    </p>



    <h3>Consulta com INNER JOIN</h3>
    <pre>

        SELECT Clientes.nome, Pedidos.descricao
        FROM Clientes
        INNER JOIN Pedidos ON Clientes.id = Pedidos.cliente_id;
    </pre>

    <p>
        O resultado desta consulta será:
    </p>
    <table>
        <thead>
            <tr>
                <th>nome</th>
                <th>descricao</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pedro</td>
                <td>Pedido 1 de pedro</td>
            </tr>
            <tr>
                <td>Pedro</td>
                <td>Pedido 2 de pedro</td>
            </tr>
            <tr>
                <td>Carlos</td>
                <td>Pedido 1 de carlos</td>
            </tr>
        </tbody>
    </table>

    <h3>Consulta com LEFT JOIN</h3>
    <pre>

        SELECT Clientes.nome, Pedidos.descricao
        FROM Clientes
        LEFT JOIN Pedidos ON Clientes.id = Pedidos.cliente_id;
    </pre>
    <p>
        O resultado desta consulta será:
    </p>
    <table>
        <thead>
            <tr>
                <th>nome</th>
                <th>descricao</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pedro</td>
                <td>Pedido 1 de pedro</td>
            </tr>
            <tr>
                <td>Pedro</td>
                <td>Pedido 2 de pedro</td>
            </tr>
            <tr>
                <td>Carlos</td>
                <td>Pedido 1 de carlos</td>
            </tr>
            <tr>
                <td>NULL</td>
                <td>NULL</td>
            </tr>
        </tbody>
    </table>

</body>

</html>