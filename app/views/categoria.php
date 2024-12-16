

<div class="container py-5">
    <!-- Cabeçalho da Categoria -->
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="mb-3">Eletrônicos</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Eletrônicos</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Filtros e Ordenação -->
    <div class="row mb-4">
        <div class="col-md-6">
            <select class="form-select">
                <option selected>Ordenar por</option>
                <option>Mais Vendidos</option>
                <option>Menor Preço</option>
                <option>Maior Preço</option>
            </select>
        </div>
    </div>

<div class="product-grid">
    <div class="container">
        <div class="row g-4">
            <!-- Card de Produto 1 -->
            <?php  if(!(empty($_SESSION['produtos']))):?>
        <div class="product-grid">
            <div class="container">
                <div class="row g-4">
            <?php foreach($_SESSION['produtos'] as $produto): ?>
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
                        href="?ct=main&mt=pagina_venda&id=<?=$produto->id?>">
                            <i class="bi bi-cart-plus me-2"></i>
                            Adicionar ao Carrinho
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            
            <?php endif; ?>
    <!-- Paginação -->
    <div class="row mt-5">
        <div class="col-12">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Anterior</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Próximo</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<!-- JS e dependências -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
