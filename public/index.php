<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao PetLife</title>

    <style>
        /* --- CSS EMBUTIDO DIRETAMENTE NA PÁGINA --- */

        /* Nova Paleta de Cores PetLife */
        :root {
            --cor-primaria: #185A9D;
            --cor-secundaria: #8CB381;
            --cor-destaque: #F4E02C;
            --cor-fundo: #F8F9FA;
            --cor-texto: #343A40;
            --branco: #FFFFFF;
        }

        /* Estilos Gerais */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--cor-fundo);
            color: var(--cor-texto);
        }
        
        .container { 
            width: 90%; 
            max-width: 1200px; 
            margin: 0 auto; 
        }

        /* Estilos do Cabeçalho (Header) */
        .main-header { 
            background-color: var(--branco); 
            padding: 1rem 0; 
            border-bottom: 1px solid #eee; 
        }
        .main-header .container { 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
        }
        .logo-link { 
            display: flex; 
            align-items: center; 
            text-decoration: none; 
            color: var(--cor-texto); 
            font-weight: bold; 
            font-size: 1.5rem; 
        }
        .header-logo { 
            max-height: 40px; 
            margin-right: 10px; 
        }
        .main-header nav a { 
            margin-left: 20px; 
            text-decoration: none; 
            color: var(--cor-primaria); 
        }

        /* --- Estilos para a Página Gateway --- */
        .gateway-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 2rem;
            min-height: 70vh;
        }

        .logo-principal {
            max-width: 150px;
            margin-bottom: 1rem;
        }

        .gateway-container h1 {
            font-size: 2.5rem;
            color: var(--cor-primaria);
        }

        .gateway-container p {
            font-size: 1.2rem;
            color: var(--cor-texto);
            margin-bottom: 2rem;
        }

        .opcoes-acesso {
            display: flex;
            gap: 2rem;
            justify-content: center;
            width: 100%;
            flex-wrap: wrap;
        }

        .gateway-choice {
            background-color: var(--branco);
            border: 1px solid #ddd;
            border-top: 5px solid var(--cor-secundaria);
            border-radius: 8px;
            padding: 2rem;
            width: 300px;
            text-decoration: none;
            color: inherit;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s, border-top-color 0.3s;
        }

        .gateway-choice:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            border-top-color: var(--cor-destaque);
        }

        .gateway-choice h2 {
            color: var(--cor-primaria);
            margin-top: 0;
        }

        .gateway-choice p {
            font-size: 1rem;
            color: var(--cor-texto);
            margin-bottom: 0;
        }

        /* Estilos do Rodapé (Footer) */
        .main-footer { 
            text-align: center; 
            padding: 2rem 0; 
            background-color: var(--cor-fundo); 
            border-top: 1px solid #eee; 
        }
    </style>
</head>
<body>
    <header class="main-header">
        <div class="container">
            <a href="index.html" class="logo-link">
                <img src="assets/images/logo.png" alt="Logo PetLife" class="header-logo">
                <span>PetLife</span>
            </a>
            <nav>
                <a href="home_cliente.php">Minha conta</a>
                <a href="produtos.php">Produtos</a>
                <a href="agendamento.php">Agendamentos</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="gateway-container">
            <img src="assets/images/logo.png" alt="Logo PetLife" class="logo-principal">
            <h1>Bem-vindo ao PetLife!</h1>
            <p>Por favor, selecione seu tipo de acesso para continuar.</p>

            <div class="opcoes-acesso">
                <a href="login.php" class="gateway-choice">
                    <div>
                        <h2>Sou Cliente</h2>
                        <p>Acessar a área de agendamentos, histórico do pet e produtos.</p>
                    </div>
                </a>
                <a href="admin/loginadm.php" class="gateway-choice">
                    <div>
                        <h2>Sou Funcionário</h2>
                        <p>Acessar o painel de gestão de agendamentos, estoque e clientes.</p>
                    </div>
                </a>
            </div>
        </div>
    </main>

    <footer class="main-footer">
        <p>&copy; 2025 PetLife. Todos os direitos reservados.</p>
    </footer>

</body>
</html>