
<div class="signup-container">
        <div class="signup-header">
            <img src="https://via.placeholder.com/80" alt="Logo" class="mb-4">
            <h2>Criar Conta</h2>
            <p class="text-muted">Preencha seus dados para se cadastrar</p>
        </div>

        <form method="post" action="?ct=login&mt=enviar_formulario_sign">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="firstName" placeholder="Nome" name="nome" required>
                        <label for="firstName">Nome</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="lastName" placeholder="Sobrenome" name="sobrenome" required>
                        <label for="lastName">Sobrenome</label>
                    </div>
                </div>
            </div>

            <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com" name="email" required>
                <label for="email">Email</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Senha" name="senha" required>
                <label for="password">Senha</label>
                <div class="password-strength">
                    <div class="strength-meter" id="strengthMeter"></div>
                </div>
            </div>

            <div class="password-requirements">
                <p class="mb-2">A senha deve conter:</p>
                <div class="requirement"><i class="fas fa-check-circle text-success"></i> Mínimo de 8 caracteres</div>
                <div class="requirement"><i class="fas fa-check-circle text-success"></i> Pelo menos uma letra maiúscula</div>
                <div class="requirement"><i class="fas fa-check-circle text-success"></i> Pelo menos uma letra minúscula</div>
                <div class="requirement"><i class="fas fa-check-circle text-success"></i> Pelo menos um número</div>
                <div class="requirement"><i class="fas fa-check-circle text-success"></i> Pelo menos um caractere especial</div>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirmar Senha"  name="senha_confirmada" required>
                <label for="confirmPassword">Confirmar Senha</label>
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="terms" required>
                <label class="form-check-label" for="terms">
                    Li e aceito os <a href="#" class="text-decoration-none">Termos de Uso</a> e a <a href="#" class="text-decoration-none">Política de Privacidade</a>
                </label>
            </div>

            <button type="submit" class="btn btn-primary btn-signup">Criar Conta</button>
            <?php if(isset($_SESSION['error'])): ?>
            <div class="container mt-2">
                <?php foreach($_SESSION['error'] as $erro): ?>
                <div class="alert alert-danger" role="alert">
                    <?=$erro?>
                </div>
                <?php endforeach;?>
            </div>
            <?php endif;?>
        </form>

        <div class="divider">
            <span class="px-2 text-muted">ou</span>
        </div>

        <div class="social-signup">
            <button class="btn btn-outline-dark social-btn">
                <i class="fab fa-google"></i> Google
            </button>
            <button class="btn btn-outline-primary social-btn">
                <i class="fab fa-facebook-f"></i> Facebook
            </button>
        </div>

        <div class="text-center mt-4">
            <p class="mb-0">Já tem uma conta? <a href="#" class="text-decoration-none">Fazer login</a></p>
        </div>
    </div>  

    <!-- Bootstrap JS e Font Awesome -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/your-code.js" crossorigin="anonymous"></script>

    <!-- Script para o medidor de força da senha -->
    <script>
        const passwordInput = document.getElementById('password');
        const strengthMeter = document.getElementById('strengthMeter');

        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;

            // Verificar comprimento
            if (password.length >= 8) strength += 20;

            // Verificar letra maiúscula
            if (/[A-Z]/.test(password)) strength += 20;

            // Verificar letra minúscula
            if (/[a-z]/.test(password)) strength += 20;

            // Verificar números
            if (/[0-9]/.test(password)) strength += 20;

            // Verificar caracteres especiais
            if (/[^A-Za-z0-9]/.test(password)) strength += 20;

            // Atualizar a barra de força
            strengthMeter.style.width = strength + '%';

            // Atualizar a cor baseado na força
            if (strength <= 20) {
                strengthMeter.style.backgroundColor = '#dc3545'; // Vermelho
            } else if (strength <= 40) {
                strengthMeter.style.backgroundColor = '#ffc107'; // Amarelo
            } else if (strength <= 60) {
                strengthMeter.style.backgroundColor = '#fd7e14'; // Laranja
            } else if (strength <= 80) {
                strengthMeter.style.backgroundColor = '#20c997'; // Verde claro
            } else {
                strengthMeter.style.backgroundColor = '#198754'; // Verde
            }
        });
    </script>

