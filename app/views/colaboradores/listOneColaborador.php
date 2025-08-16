<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Colaborador</title>
    <link rel="stylesheet" href="/arthur/estudando_mvc_pratico/public/css/style.css">
    <style>
        /* Estilos gerais do corpo (se ainda não tiver) */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 2em;
        }

        /* Estilo do container principal */
        .card-container {
            background-color: #fff;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            text-align: left;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
            margin-bottom: 1em;
        }

        .details-list {
            list-style: none;
            padding: 0;
        }

        .details-list li {
            background-color: #f9f9f9;
            padding: 1em;
            border-radius: 4px;
            margin-bottom: 1em;
            border-left: 4px solid #4CAF50;
            font-size: 1.1em;
        }

        .details-label {
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 0.3em;
        }

        /* Estilo para o link de voltar */
        .back-link {
            display: block;
            text-align: center;
            margin-top: 2em;
            padding: 0.8em 1.5em;
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .back-link:hover {
            background-color: #5a6268;
        }
    </style>
</head>

<body>
    <div class="card-container">
        <h1>Detalhes do Colaborador</h1>
        <ul class="details-list">
            <li>
                <span class="details-label">ID:</span>
                <?php echo htmlspecialchars($colaborador['id_colaborador']); ?>
            </li>
            <li>
                <span class="details-label">Nome:</span>
                <?php echo htmlspecialchars($colaborador['nome_colaborador']); ?>
            </li>
            <li>
                <span class="details-label">Telefone:</span>
                <?php echo htmlspecialchars($colaborador['telefone_colaborador']); ?>
            </li>
            <li>
                <span class="details-label">Email:</span>
                <?php echo htmlspecialchars($colaborador['email_colaborador']); ?>
            </li>
        </ul>
        <a class="back-link" href="/arthur/estudando_mvc_pratico/colaboradores/lista">Voltar para a lista</a>
    </div>
</body>

</html>