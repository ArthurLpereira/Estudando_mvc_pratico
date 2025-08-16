<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Colaborador</title>
    <link rel="stylesheet" href="/arthur/estudando_mvc_pratico/public/css/style.css">

    <style>
        /* Estilos para o link de voltar na página de edição/visualização */
        .back-link {
            display: inline-block;
            margin-top: 1.5em;
            padding: 0.8em 1.5em;
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            text-align: center;
        }

        .back-link:hover {
            background-color: #5a6268;
        }

        /* Estilos para a página de edição (se você quiser centralizar) */
        body.edit-page {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .edit-container {
            background-color: #fff;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2.edit-title {
            color: #4CAF50;
            margin-bottom: 1em;
        }

        form.edit-form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .edit-form label {
            margin-top: 1em;
            font-weight: bold;
        }

        .edit-form input[type="text"],
        .edit-form input[type="number"],
        .edit-form input[type="email"] {
            width: 100%;
            padding: 0.8em;
            margin-top: 0.5em;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .edit-form button[type="submit"] {
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

        .edit-form button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Editar Colaborador</h2>
        <form action="/arthur/estudando_mvc_pratico/colaboradores/update/<?php echo htmlspecialchars($colaborador['id_colaborador']); ?>"
            method="POST">

            <label for="nome_colaborador">Nome:</label>
            <input type="text" id="nome_colaborador" name="nome_colaborador" required
                value="<?php echo htmlspecialchars($colaborador['nome_colaborador']); ?>">

            <label for="telefone_colaborador">Telefone:</label>
            <input type="text" id="telefone_colaborador" name="telefone_colaborador" required
                value="<?php echo htmlspecialchars($colaborador['telefone_colaborador']); ?>">

            <label for="email_colaborador">Email:</label>
            <input type="email" id="email_colaborador" name="email_colaborador" required
                value="<?php echo htmlspecialchars($colaborador['email_colaborador']); ?>">

            <button type="submit">Salvar Alterações</button>
        </form>

        <a class="back-link" href="/arthur/estudando_mvc_pratico/colaboradores/visualizar/<?php echo htmlspecialchars($colaborador['id_colaborador']); ?>">
            Voltar
        </a>
    </div>
</body>

</html>