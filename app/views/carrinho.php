


<div class="container py-5">
    <h1 class="mb-4">Meu Carrinho</h1>
    
    <div class="row">
        <div class="col-md-8">
            <!-- Lista de Produtos -->
            <div class="card mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <img src="/api/placeholder/150/150" alt="Produto 1" class="img-fluid rounded">
                            </div>
                            <div class="col-md-6">
                                <h5 class="card-title">Camiseta Básica</h5>
                                <p class="card-text text-muted">Cor: Branca | Tamanho: M</p>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-sm btn-outline-secondary" aria-label="Diminuir quantidade">-</button>
                                    <span class="mx-2">1</span>
                                    <button class="btn btn-sm btn-outline-secondary" aria-label="Aumentar quantidade">+</button>
                                </div>
                            </div>
                            <div class="col-md-3 text-end">
                                <p class="h5 mb-0">R$ 49,90</p>
                                <button class="btn btn-link text-danger" aria-label="Remover produto">Remover</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <img src="/api/placeholder/150/150" alt="Produto 2" class="img-fluid rounded">
                            </div>
                            <div class="col-md-6">
                                <h5 class="card-title">Calça Jeans</h5>
                                <p class="card-text text-muted">Cor: Azul | Tamanho: 42</p>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-sm btn-outline-secondary" aria-label="Diminuir quantidade">-</button>
                                    <span class="mx-2">1</span>
                                    <button class="btn btn-sm btn-outline-secondary" aria-label="Aumentar quantidade">+</button>
                                </div>
                            </div>
                            <div class="col-md-3 text-end">
                                <p class="h5 mb-0">R$ 129,90</p>
                                <button class="btn btn-link text-danger" aria-label="Remover produto">Remover</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Resumo do Pedido -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Resumo do Pedido</h5>
                        <hr>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal</span>
                            <span>R$ 179,80</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Frete</span>
                            <span>R$ 15,00</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-3">
                            <strong>Total</strong>
                            <strong>R$ 194,80</strong>
                        </div>

                        <!-- Cupom de Desconto -->
                        <div class="mb-3">
                            <label for="coupon" class="form-label">Cupom de Desconto</label>
                            <div class="input-group">
                                <input type="text" id="coupon" class="form-control" placeholder="Digite seu cupom" aria-label="Digite seu cupom">
                                <button class="btn btn-outline-secondary" aria-label="Aplicar cupom">Aplicar</button>
                            </div>
                        </div>

                        <button class="btn btn-primary w-100" aria-label="Finalizar compra">Finalizar Compra</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

