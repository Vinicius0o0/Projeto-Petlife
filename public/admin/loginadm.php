<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrativo - PetLife</title>
    <link rel="stylesheet" href="../assets/css/admin_style.css">
</head>
<body>
    <div class="form-container-admin">
        <img src="../assets/images/logo.png" alt="Logo PetLife" style="max-width: 100px; margin-bottom: 1rem;">
        <h2>Acesso Administrativo</h2>
        <form action="index.php" method="POST"> <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required>

            <button type="submit">Entrar no Painel</button>
        </form>
    </div>
</body>
</html>