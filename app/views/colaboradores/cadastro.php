<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Colaboradores</title>
    <link rel="stylesheet" href="/arthur/estudando_mvc_pratico/public/css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            color: #4CAF50;
            margin-bottom: 1em;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        label {
            margin-top: 1em;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"] {
            width: 100%;
            padding: 0.8em;
            margin-top: 0.5em;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 0.8em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 2em;
            font-size: 1em;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Cadastro de Colaboradores</h2>
        <form action="/arthur/estudando_mvc_pratico/colaboradores/criar" method="POST">
            <label for="nome_colaborador">Nome:</label>
            <input type="text" id="nome_colaborador" name="nome_colaborador" required>
            <br><br>
            <label for="telefone_colaborador">Telefone:</label>
            <input type="number" id="telefone_colaborador" name="telefone_colaborador" required>
            <label for="email_colaborador">Email:</label>
            <input type="email" id="email_colaborador" name="email_colaborador" required>
            <br><br>
            <button type="submit">Cadastrar</button>
        </form>
        <br>
        <a href="/arthur/estudando_mvc_pratico/colaboradores/lista">Listar Colaboradores</a>
    </div>
</body>

</html>