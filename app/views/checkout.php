<div class="container py-5">
    <div class="row">
        <!-- Coluna do Produto -->
        <div class="col-lg-6 mb-4">
            <div class="card border-0 shadow-sm">
                <img src="data:image/jpeg;base64,
                <?php
                if (!empty($produto_imagem)) {
                    echo base64_encode($produto_imagem);
                }
                ?>"                               
                class="card-img-top" alt="Produto">
                <div class="card-body">
                    <h1 class="card-title h2"><?= $nome ?></h1>

                    <!-- Avaliações -->

                    <p class="card-text lead"><?= $descricao ?></p>

                    <!-- Preço -->
                    <div class="mb-4">
                        <span class="old-price h5">R$ <?= $valor ?></span>
                        <div class="product-price">R$ <?= $valor * 0.80 ?></div>
                        <span class="badge bg-danger">20% OFF</span>
                    </div>

                    <!-- Benefícios -->
                    <div class="row text-center g-3 mb-4">
                        <div class="col-4">
                            <i class="fas fa-truck benefit-icon"></i>
                            <p class="small mt-2">Frete Grátis</p>
                        </div>
                        <div class="col-4">
                            <i class="fas fa-undo benefit-icon"></i>
                            <p class="small mt-2">30 dias para devolver</p>
                        </div>
                        <div class="col-4">
                            <i class="fas fa-shield-alt benefit-icon"></i>
                            <p class="small mt-2">Compra Segura</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coluna do Pagamento -->
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title mb-4">Dados do Pagamento</h2>
                    <form id="payment-form">
                        <!-- Dados do Cartão -->
                        <div class="mb-4">
                            <label class="form-label">Número do Cartão</label>
                            <div class="input-group card-input">
                                <input type="text" class="form-control border-0 bg-transparent" placeholder="1234 5678 9012 3456" required>
                                <span class="input-group-text bg-transparent border-0">
                                    <i class="fab fa-cc-visa text-primary"></i>
                                </span>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Nome no Cartão</label>
                            <input type="text" class="form-control card-input" placeholder="Como está no cartão" required>
                        </div>

                        <div class="row mb-4">
                            <div class="col-6">
                                <label class="form-label">Validade</label>
                                <input type="text" class="form-control card-input" placeholder="MM/AA" required>
                            </div>
                            <div class="col-6">
                                <label class="form-label">CVV</label>
                                <input type="text" class="form-control card-input" placeholder="123" required>
                            </div>
                        </div>

                        <!-- Parcelamento -->
                        <div class="mb-4">
                            <label class="form-label">Parcelamento</label>
                            <select class="form-select card-input">
                                <option>1x de R$ 199,90 sem juros</option>
                                <option>2x de R$ 99,95 sem juros</option>
                                <option>3x de R$ 66,63 sem juros</option>
                            </select>
                        </div>

                        <!--off Botão de Compra -->
                        <button type="submit" class="btn btn-purchase w-100">
                            <i class="fas fa-lock me-2"></i>Finalizar Compra
                        </button>

                        <!-- Selos de Segurança -->
                        <div class="text-center mt-4">
                            <img src="ssl-badge.png" class="security-badge mx-2" alt="SSL">
                            <img src="secure-payment.png" class="security-badge mx-2" alt="Pagamento Seguro">
                            <p class="small text-muted mt-2">
                                <i class="fas fa-shield-alt me-1"></i>
                                Seus dados estão protegidos com criptografia de ponta a ponta
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ -->
    <div class="row mt-5">
        <div class="col-12">
            <h3 class="mb-4">Perguntas Frequentes</h3>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            Como funciona a garantia de 30 dias?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Você tem 30 dias para devolver o produto caso não esteja satisfeito, sem custos adicionais.
                        </div>
                    </div>
                </div>
                <!-- Adicione mais itens FAQ aqui -->
            </div>
        </div>
    </div>



<!-- Footer -->
<footer class="bg-light mt-5 py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Contato</h5>
                <p>
                    <i class="fas fa-envelope me-2"></i>suporte@empresa.com<br>
                    <i class="fas fa-phone me-2"></i>(11) 1234-5678
                </p>
            </div>
            <div class="col-md-4">
                <h5>Links Úteis</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none">Política de Privacidade</a></li>
                    <li><a href="#" class="text-decoration-none">Termos de Uso</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Redes Sociais</h5>
                <div>
                    <a href="#" class="text-decoration-none me-3"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-decoration-none me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-decoration-none"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>