<?php
// Inclui o cabeçalho padrão, que já contém o <head>, <body>, menu e o link do CSS.
require_once '../app/includes/header.php';
?>

<title>Nossos Produtos - PetLife</title>

<div class="page-container">
    <h1>Catálogo de Produtos</h1>
    <p class="page-subtitle">Tudo o que seu pet precisa em um só lugar!</p>

    <div class="product-grid">

        <div class="product-card">
            <img src="assets/images/produto_racao.png" alt="Ração para Cães">
            <h3>Ração Premium para Cães Adultos</h3>
            <p class="product-description">Nutrição completa e balanceada para o dia a dia do seu cão.</p>
            <p class="product-price">R$ 189,90</p>
            <button class="btn">Adicionar ao Carrinho</button>
        </div>

        <div class="product-card">
            <img src="assets/images/produto_brinquedo.png" alt="Brinquedo para Gatos">
            <h3>Arranhador para Gatos com Torre</h3>
            <p class="product-description">Ideal para o entretenimento e para afiar as unhas do seu felino.</p>
            <p class="product-price">R$ 129,90</p>
            <button class="btn">Adicionar ao Carrinho</button>
        </div>

        <div class="product-card">
            <img src="assets/images/produto_cama.png" alt="Cama para Pets">
            <h3>Cama Aconchegante para Pets</h3>
            <p class="product-description">Conforto máximo para o descanso do seu melhor amigo.</p>
            <p class="product-price">R$ 99,50</p>
            <button class="btn">Adicionar ao Carrinho</button>
        </div>
        
        <div class="product-card">
            <img src="assets/images/produto_coleira.png" alt="Coleira">
            <h3>Coleira Peitoral com Guia</h3>
            <p class="product-description">Segurança e estilo para os passeios diários.</p>
            <p class="product-price">R$ 75,00</p>
            <button class="btn">Adicionar ao Carrinho</button>
        </div>

    </div> </div>

<?php
// Inclui o rodapé padrão, que fecha as tags <body> e <html>.
require_once '../app/includes/footer.php';
?>