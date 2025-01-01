
 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/img1.png" class="d-block w-100" alt="Slide 1">
        <div class="carousel-caption d-none d-md-block">
          <h5>Slide 1</h5>
          <p>Descrição do Slide 1</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/img2.png" class="d-block w-100" alt="Slide 2">
        <div class="carousel-caption d-none d-md-block">
          <h5>Slide 2</h5>
          <p>Descrição do Slide 2</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/img3.png" class="d-block w-100" alt="Slide 3">
        <div class="carousel-caption d-none d-md-block">
          <h5>Slide 3</h5>
          <p>Descrição do Slide 3</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



<!-- <div class="container my-5">
    <div class="row justify-content-center text-center">
      Tecnologia -->
        
      
        <!-- 
      <div class="col-6 col-sm-4 col-md-3 col-lg mb-4">
            <div class="category-icon bg-purple rounded-circle d-inline-flex align-items-center justify-content-center mb-2">
                <i class="fas fa-laptop text-white fa-2x"></i>
            </div>
            <p class="mb-0 category-text">Tecnologia</p>
        </div>

   
        <div class="col-6 col-sm-4 col-md-3 col-lg mb-4">
            <div class="category-icon bg-purple rounded-circle d-inline-flex align-items-center justify-content-center mb-2">
                <i class="fas fa-home text-white fa-2x"></i>
            </div>
            <p class="mb-0 category-text">Casa</p>
        </div>

      
        <div class="col-6 col-sm-4 col-md-3 col-lg mb-4">
            <div class="category-icon bg-purple rounded-circle d-inline-flex align-items-center justify-content-center mb-2">
                <i class="fas fa-dumbbell text-white fa-2x"></i>
            </div>
            <p class="mb-0 category-text">Fitness</p>
        </div>

        <div class="col-6 col-sm-4 col-md-3 col-lg mb-4">
            <div class="category-icon bg-purple rounded-circle d-inline-flex align-items-center justify-content-center mb-2">
                <i class="fas fa-film text-white fa-2x"></i>
            </div>
            <p class="mb-0 category-text">Entretenimento</p>
        </div>

        
        <div class="col-6 col-sm-4 col-md-3 col-lg mb-4">
            <div class="category-icon bg-purple rounded-circle d-inline-flex align-items-center justify-content-center mb-2">
                <i class="fas fa-spa text-white fa-2x"></i>
            </div>
            <p class="mb-0 category-text">Beleza</p>
</div>
        <div class="col-6 col-sm-4 col-md-3 col-lg mb-4">
            <div class="category-icon bg-purple rounded-circle d-inline-flex align-items-center justify-content-center mb-2">
                <i class="fas fa-trophy text-white fa-2x"></i>
            </div>
            <p class="mb-0 category-text">Prêmios</p>
        </div>


        <div class="col-6 col-sm-4 col-md-3 col-lg mb-4">
            <div class="category-icon bg-purple rounded-circle d-inline-flex align-items-center justify-content-center mb-2">
                <i class="fas fa-paw text-white fa-2x"></i>
            </div>
            <p class="mb-0 category-text">Pets</p>
        </div>

    
        <div class="col-6 col-sm-4 col-md-3 col-lg mb-4">
            <div class="category-icon bg-purple rounded-circle d-inline-flex align-items-center justify-content-center mb-2">
                <i class="fas fa-mobile-alt text-white fa-2x"></i>
            </div>
            <p class="mb-0 category-text">Eletrônicos</p>
        </div>
    </div>
</div> -->

    <!-- Product Grid -->
  
     <?php  if(!(empty($_SESSION['produtos']))):?>
        <div class="product-grid">
            <div class="container">
                <div class="row g-4">
                    
            <?php foreach($_SESSION['produtos'] as $produto): ?>
            <!-- Card de Produto 1 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="product-card">
                    <div class="product-image">
                      
                      
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($produto->produto_imagem); ?>" alt="Produto 1">
                        <div class="product-badges">
                
                        </div>
                
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
       


    <!-- Footer -->
   
