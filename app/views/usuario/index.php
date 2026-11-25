<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <h1>Usuários Cadastrados</h1>

    <table border="1" cellpadding="10"> <!--criando a tabela-->

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
        </tr>
        <?php foreach($usuarios as $usuario): ?>
        <!--vai passar pelo aryer e guardar cada um em uma caixinha chamada $usuario-->
        <tr>
        <!-- aqui ele retorna o php na linhazinha da tabela-->
            <td><?= $usuario['id'] ?></td>
            <td><?= $usuario['nome'] ?></td>
            <td><?= $usuario['email'] ?></td>
        </tr>
        <?php endforeach?> <!--para dar fim no foreach-->
    </table>
</body>
</html>