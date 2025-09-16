<?php require_once '../app/includes/header.php'; ?>

<title>Login - PetLife</title>

<div class="form-container">
    <h2>Acesso do Cliente</h2>
    <p>Bem-vindo de volta! Acesse sua conta.</p>
    <form action="" method="POST">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" required>

        <button type="submit">Entrar</button>
    </form>
    <div class="form-link">
        <p>Não tem uma conta? <a href="registro.php">Cadastre-se aqui</a>.</p>
    </div>
</div>

<?php require_once '../app/includes/footer.php'; ?>