<?php require_once '../app/includes/header.php'; ?>

<title>Registro - PetLife</title>

<div class="form-container">
    <h2>Crie sua Conta</h2>
    <p>É rápido e fácil.</p>
    <form action="login.php" method="POST"> <label for="nome">Nome Completo</label>
        <input type="text" id="nome" name="nome" required>
        
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" required>

        <button type="submit">Registrar</button>
    </form>
    <div class="form-link">
        <p>Já tem uma conta? <a href="login.php">Faça login aqui</a>.</p>
    </div>
</div>

<?php require_once '../app/includes/footer.php'; ?>