<div class="container py-5">
    <!-- Breadcrumb -->

    <div class="row">
        <!-- Imagens do Produto -->
        <div class="col-lg-6">
            <div class="product-images">

                <div class="main-image">
                    <img src="" alt="sem image">
                </div>
                <?php if (!(empty($imagem))): ?>
                    <div class="main-image">
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($imagens[0]->imagem); ?>" alt="Produto">
                    </div>

                    <div class="thumbnail-images">
                        <?php foreach ($imagens as $imagem): ?>
                            <div class="thumbnail active">
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($imagem->imagem); ?>" alt="Thumbnail 1">
                            </div>

                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Informações do Produto -->
        <div class="col-lg-6">
            <div class="product-info">
                <h1 class="mb-3"><?= $nome ?></h1>

                <!-- Avaliações -->
                <div class="mb-3">
                    <span class="ms-2">150 avaliações</span>
                </div>

                <!-- Preço -->
                <div class="mb-4">
                    <span class="price">R$ <?= $valor * 0.80 ?></span>
                    <span class="old-price ms-2">R$ <?= $valor ?></span>
                    <span class="badge bg-danger ms-2">-20%</span>
                </div>

                <!-- Descrição -->
                <p class="mb-4">
                    <?= $descricao ?>
                </p>

                <!-- Seletor de Quantidade -->
                <div class="quantity-selector mb-4">
                    <span>Quantidade:</span>
                    <button class="quantity-btn">-</button>
                    <span>1</span>
                    <button class="quantity-btn">+</button>
                    <span class="text-muted">(<?= $quantidade ?> disponíveis)</span>
                </div>

                <!-- Botões de Ação -->
                <div class="d-grid gap-2 mb-4">
                    <button class="btn btn-primary btn-lg">Comprar Agora</button>
                    <button class="btn btn-outline-primary btn-lg">Adicionar ao Carrinho</button>
                </div>

                <!-- Informações de Entrega -->
                <div class="delivery-info mt-4">
                    <h5><i class="fas fa-truck me-2"></i>Informações de Entrega</h5>
                    <p class="mb-2">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        Entrega para todo Brasil
                    </p>
                    <p class="mb-0">
                        <i class="fas fa-clock me-2"></i>
                        Prazo de entrega: 3-5 dias úteis
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Seção de Avaliações -->
    <section class="product-reviews my-5">

        <div class="">
            <!-- Resumo das avaliações -->
            <div class="col">
                <div class="rating-summary text-center p-4 border rounded">

                    <h3 class="mb-4">Avaliações do Produto</h3>
                    <p class="text-muted">Faca a sua avalicao</p>
                    <?php if (!(empty($_SESSION['user']))): ?>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reviewModal">
                            Avaliar Produto
                        </button>
                    <?php else: ?>
                        <a class="btn btn-primary" href="?ct=login">
                            Criar Conta Primero
                        </a>
                    <?php endif; ?>


                </div>
            </div>


        </div>
        <!-- Lista de comentários -->
        <?php if (!(empty($comentario))): ?>
            <?php foreach ($comentario as $comente): ?>
                <div class="comments-list mt-5" id="comentarios">

                    <div class="comment-item border-bottom pb-4 mb-4">
                        <div class="user-info mb-3">
                            <div class="d-flex align-items-center">
                                <img src="assets/img/usuario-de-perfil.png" class="rounded-circle me-2" alt="User" width="40px" height="40px">
                                <div>
                                    <h6 class="mb-0"><?= $comente->nome_usuario ?></h6>
                                </div>
                            </div>
                        </div>
                        <h6 class="mb-2"><?= $comente->titulo ?></h6>
                        <p class="comment-text mb-3">
                            <?= $comente->comentario ?>
                        </p>
                    </div>


                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <!-- Paginação -->
        <nav aria-label="Page navigation" class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="?ct=compra&mt=pagina_venda&id=2&lm=<?= empty($_GET['lm']) ? 0 : $_GET['lm']
                    -1; ?> " tabindex="-1">Anterior</a>
                </li>

                <li class="page-item">
                    <a class="page-link" href="?ct=compra&mt=pagina_venda&id=2&lm=<?= empty($_GET['lm']) ? 1 : $_GET['lm']
                    +1; ?>">Próximo</a>
                </li>
            </ul>
        </nav>
    </section>

    <!-- Produtos Relacionados -->
    <section class="related-products py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="mb-4">Produtos Relacionados</h2>
                    <p class="lead mb-5">Confira alguns produtos que você pode gostar.</p>
                </div>
            </div>
            <!-- Product Grid aqui -->

            <?php if (!(empty($_SESSION['produtos']))): ?>
                <div class="product-grid">
                    <div class="container">
                        <div class="row g-4">
                            <?php foreach ($_SESSION['produtos'] as $produto): ?>
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
                                            <h3 class="product-title"><?= $produto->nome ?></h3>
                                            <div class="product-rating">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                                <span class="count">(<?= $produto->quantidade ?>)</span>
                                            </div>
                                            <div class="product-price">
                                                <span class="old-price">R$ <?= $produto->valor ?></span>
                                                <span class="current-price">R$ <?= $produto->valor * 0.80 ?></span>
                                                <span class="discount">(20% off)</span>
                                            </div>
                                            <div class="stock-status in-stock">
                                                <i class="bi bi-check-circle-fill"></i> Em estoque
                                            </div>
                                            <a class="btn btn-primary add-to-cart"
                                                href="?ct=main&mt=pagina_venda&id=<?= $produto->id ?>">
                                                <i class="bi bi-cart-plus me-2"></i>
                                                Adicionar ao
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        <?php endif; ?>
                        </div>
    </section>

    <!-- Modal de Avaliação -->
    <div class="modal fade" id="reviewModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Avaliar Produto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="?ct=compra&mt=comentar&id=<?= $_GET['id'] ?>" method="post">
                        <div class="mb-3">
                            <label class="form-label">Sua avaliação</label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Título da avaliação</label>
                            <input type="text" class="form-control" name="titulo">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Seu comentário</label>
                            <textarea class="form-control" rows="3" name="texto"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar Avaliação</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






<script>
    <?php if (!(empty($_SESSION['error_comentario']))) {
        $error = $_SESSION['error_comentario'];
        echo "alert('$error')";
    }
    if (!(empty($_SESSION['sucess_comentario']))) {
        $error = $_SESSION['sucess_comentario'];
        echo "alert('$error')";
    }
    ?>



















    // script comentarios

    // Script para troca de imagens
    document.querySelectorAll('.thumbnail').forEach(thumb => {
        thumb.addEventListener('click', function() {
            // Remove active class from all thumbnails
            document.querySelectorAll('.thumbnail').forEach(t => t.classList.remove('active'));
            // Add active class to clicked thumbnail
            this.classList.add('active');
            // Update main image
            const mainImage = document.querySelector('.main-image img');
            mainImage.src = this.querySelector('img').src;
        });
    });

    // Script para controle de quantidade
    const quantityBtns = document.querySelectorAll('.quantity-btn');
    let quantity = 1;

    quantityBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const isIncrement = this.textContent === '+';
            if (isIncrement && quantity < 10) {
                quantity++;
            } else if (!isIncrement && quantity > 1) {
                quantity--;
            }
            this.parentElement.querySelector('span:nth-child(3)').textContent = quantity;
        });
    });
</script>