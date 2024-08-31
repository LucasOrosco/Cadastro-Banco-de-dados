<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomulário de cadastro</title>
</head>
<body>
    <h2>Cadastro de usuário<h2>
    <form action="cadastrar.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" require><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" require><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" require><br><br>

        <input type="submit" value="Cadastrar">
    </form>    
</body>
</html>