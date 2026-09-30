<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro</title>
    <style>
        :root {
            --primary-red: #c62828;
            --dark-red: #8e0000;
            --light-red: #ffebee;
            --border-red: #ffcdd2;
            --bg-color: #fcf8f8;
            --text-color: #333333;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            padding: 30px 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
            width: 100%;
            max-width: 650px;
        }

        h1, h2 {
            color: var(--primary-red);
            margin-bottom: 20px;
            font-weight: 600;
            border-bottom: 2px solid var(--border-red);
            padding-bottom: 8px;
        }

        .card {
            background: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(198, 40, 40, 0.08);
            border-top: 4px solid var(--primary-red);
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            font-size: 0.9em;
            color: #555;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1em;
            transition: border-color 0.2s, box-shadow 0.2s;
            outline: none;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: var(--primary-red);
            box-shadow: 0 0 0 3px rgba(198, 40, 40, 0.15);
        }

        input[type="submit"] {
            background-color: var(--primary-red);
            color: #ffffff;
            border: none;
            padding: 12px 20px;
            border-radius: 6px;
            font-size: 1em;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.2s;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: var(--dark-red);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        thead {
            background-color: var(--primary-red);
            color: #ffffff;
        }

        th {
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85em;
            letter-spacing: 0.5px;
        }

        tbody tr {
            border-bottom: 1px solid #f0f0f0;
            transition: background-color 0.15s;
        }

        tbody tr:last-child {
            border-bottom: none;
        }

        tbody tr:hover {
            background-color: var(--light-red);
        }

        .empty-message {
            text-align: center;
            padding: 15px;
            color: #777;
            background: #ffffff;
            border-radius: 8px;
            border: 1px dashed var(--border-red);
        }
    </style>
</head>
<body>

<div class="container">

    <!-- Formulário Aluno -->
    <div class="card">
        <h1>Cadastro de Aluno</h1>
        <form action="exibir_aluno.php" method="POST">
            <div class="form-group">
                <label for="nome_aluno">Nome</label>
                <input type="text" id="nome_aluno" name="nome" required>
            </div>

            <div class="form-group">
                <label for="email_aluno">Email</label>
                <input type="email" id="email_aluno" name="email" required>
            </div>

            <div class="form-group">
                <label for="matricula">Matrícula</label>
                <input type="text" id="matricula" name="matricula" required>
            </div>

            <input type="submit" value="Enviar Cadastro">
        </form>
    </div>

    <!-- Formulário Professor -->
    <div class="card">
        <h1>Cadastro de Professores</h1>
        <form action="exibir_professor.php" method="POST">
            <div class="form-group">
                <label for="nome_prof">Nome</label>
                <input type="text" id="nome_prof" name="nome" required>
            </div>

            <div class="form-group">
                <label for="email_prof">Email</label>
                <input type="email" id="email_prof" name="email" required>
            </div>

            <div class="form-group">
                <label for="disciplina">Disciplina</label>
                <input type="text" id="disciplina" name="disciplina" required>
            </div>

            <input type="submit" value="Enviar Cadastro">
        </form>
    </div>

    <!-- Tabela de Professores -->
    <h2>Professores Cadastrados</h2>
    <?php
    $banco = 'banco.json';
    $professores = [];

    if (file_exists($banco)) {
        $json = file_get_contents($banco);
        $dados = json_decode($json, true);

        if (isset($dados['professores']) && is_array($dados['professores'])) {
            $professores = $dados['professores'];
        }
    }
    ?>

    <?php if (count($professores) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Disciplina</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($professores as $professor): ?>
                    <tr>
                        <td><?= htmlspecialchars($professor['nome'] ?? '') ?></td>
                        <td><?= htmlspecialchars($professor['email'] ?? '') ?></td>
                        <td><?= htmlspecialchars($professor['disciplina'] ?? '') ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="empty-message">Nenhum professor cadastrado até o momento.</p>
    <?php endif; ?>

</div>

</body>
</html>