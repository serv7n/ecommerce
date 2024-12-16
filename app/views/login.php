

    <div class="login-container">
        <div class="login-header">
            <img src="https://via.placeholder.com/80" alt="Logo" class="mb-4">
            <h2>Bem-vinda!</h2>
            <p class="text-muted">Faça login para continuar</p>
        </div>

        <form method="post" action="?ct=login&mt=logar">
            <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com" required name="email">
                <label for="email">Email</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Senha" name="senha" required>
                <label for="password">Senha</label>
            </div>

            <div class="d-flex justify-content-between mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Lembrar-me</label>
                </div>
                <a href="" class="text-decoration-none">Esqueceu a senha?</a>
            </div>
            <?php if(isset($_SESSION['error'])): ?>
            <div class="container mt-2">
                <?php foreach($_SESSION['error'] as $erro): ?>
                <div class="alert alert-danger" role="alert">
                    <?=$erro?>
                </div>
                <?php endforeach;?>
            </div>
            <?php endif;?>
            <button type="submit" class="btn btn-primary btn-login">Entrar</button>
        </form>

        <div class="divider">
            <span class="px-2 text-muted">ou</span>
        </div>

        <div class="social-login">
            <button class="btn btn-outline-dark social-btn">
                <i class="fab fa-google"></i> Google
            </button>
            <button class="btn btn-outline-primary social-btn">
                <i class="fab fa-facebook-f"></i> Facebook
            </button>
        </div>

        <div class="text-center mt-4">
            <p class="mb-0">Não tem uma conta? <a href="?ct=login" class="text-decoration-none">Cadastre-se</a></p>
        </div>
    </div>


    <script src="https://kit.fontawesome.com/your-code.js" crossorigin="anonymous"></script>
