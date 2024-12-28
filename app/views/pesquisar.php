

<div class="container py-5">
    <!-- Cabeçalho da Categoria -->
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="mb-3">Pesquisar por <?=$_GET['p']?></h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
                    
                </ol>
            </nav>
        </div>
    </div>

<?php
//  printData($dados);
?>
<div class="product-grid">
    <div class="container">
        <div class="row g-4">
            <!-- Card de Produto 1 -->
            <?php  if(!(empty($dados))):?>
        <div class="product-grid">
            <div class="container">
                <div class="row g-4">
            <?php foreach($dados as $produto): ?>
            <!-- Card de Produto 1 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="product-card">
                    <div class="product-image">
                        <img src="/api/placeholder/400/320" alt="Produto 1">
                        <div class="product-badges">
                            <span class="product-badge bg-danger text-white">-20%</span>
                            <span class="product-badge bg-primary text-white">Novo</span>
                        </div>
                        <button class="wishlist-btn">
                            <i class="bi bi-heart"></i>
                        </button>
                    </div>
                    <div class="product-details">
                        <div class="product-category"></div>
                        <h3 class="product-title"><?=$produto->nome?></h3>
                        <div class="product-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            <span class="count">(<?=$produto->quantidade?>)</span>
                        </div>
                        <div class="product-price">
                            <span class="old-price">R$ <?=$produto->valor?></span>
                            <span class="current-price">R$ <?=$produto->valor * 0.80?></span>
                            <span class="discount">(20% off)</span>
                        </div>
                        <div class="stock-status in-stock">
                            <i class="bi bi-check-circle-fill"></i> Em estoque
                        </div>
                        <a class="btn btn-primary add-to-cart" 
                        href="?ct=compra&mt=pagina_venda&id=<?=$produto->id?>">
                            <i class="bi bi-cart-plus me-2"></i>
                            Adicionar ao Carrinho
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            
            <?php endif; ?>
    <!-- Paginação -->


<!-- JS e dependências -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
