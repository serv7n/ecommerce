<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <!-- Profile Header -->
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="m-0">Perfil do Usuário</h2>
                <div class="position-relative">
                    <div class="profile-avatar">
                        <img src="assets/img/usuario-de-perfil.png" alt="Profile" class="rounded-circle shadow-sm" width="80" height="80">
                        <button class="btn btn-sm btn-primary position-absolute bottom-0 end-0 rounded-circle p-2">
                            <i class="fas fa-camera"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Profile Form -->
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <form id="profileForm" class="needs-validation" novalidate>
                        <!-- Informações Pessoais -->
                        <div class="mb-4">
                            <h5 class="text-primary mb-3">
                                <i class="fas fa-user-circle me-2"></i>
                                Informações Pessoais
                            </h5>
                            <div class="bg-light p-4 rounded-3">
                                <div class="mb-3">
                                    <label for="userName" class="form-label small fw-bold">Nome Completo</label>
                                    <input type="text" class="form-control form-control-lg bg-white" 
                                           id="userName" 
                                           required
                                           minlength="3"
                                           pattern="^[A-Za-zÀ-ÿ\s]{3,}$">
                                    <div class="invalid-feedback">
                                        Por favor, insira seu nome completo (mínimo 3 caracteres)
                                    </div>
                                </div>

                                <div class="mb-0">
                                    <label for="userEmail" class="form-label small fw-bold">Email</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control form-control-lg bg-white" 
                                               id="userEmail" 
                                               required
                                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                        <button class="btn btn-outline-primary" type="button">
                                            Verificar
                                        </button>
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor, insira um email válido
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Alteração de Senha -->
                        <div class="mb-4">
                            <h5 class="text-primary mb-3">
                                <i class="fas fa-lock me-2"></i>
                                Alteração de Senha
                            </h5>
                            <div class="bg-light p-4 rounded-3">
                                <div class="mb-3">
                                    <label for="currentPassword" class="form-label small fw-bold">Senha Atual</label>
                                    <div class="input-group">
                                        <input type="password" 
                                               class="form-control form-control-lg bg-white" 
                                               id="currentPassword"
                                               required
                                               minlength="8">
                                        <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('currentPassword')">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="newPassword" class="form-label small fw-bold">Nova Senha</label>
                                    <div class="input-group">
                                        <input type="password" 
                                               class="form-control form-control-lg bg-white" 
                                               id="newPassword"
                                               required
                                               minlength="8"
                                               pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$">
                                        <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('newPassword')">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                    <div class="form-text mt-2">
                                        <small>A senha deve conter:</small>
                                        <ul class="list-unstyled small">
                                            <li><i class="fas fa-check-circle text-success me-2"></i>Mínimo 8 caracteres</li>
                                            <li><i class="fas fa-check-circle text-success me-2"></i>Letras e números</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="mb-0">
                                    <label for="confirmPassword" class="form-label small fw-bold">Confirmar Nova Senha</label>
                                    <div class="input-group">
                                        <input type="password" 
                                               class="form-control form-control-lg bg-white" 
                                               id="confirmPassword"
                                               required>
                                        <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('confirmPassword')">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Botões de Ação -->
                        <div class="d-flex gap-2 justify-content-end">
                            <button type="button" class="btn btn-light btn-lg px-4" onclick="resetForm()">
                                Cancelar
                            </button>
                            <button type="submit" class="btn btn-primary btn-lg px-4">
                                Salvar Alterações
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.form-control:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.profile-avatar {
    position: relative;
    display: inline-block;
}

.btn-outline-primary:hover {
    background-color: #0d6efd;
    color: white;
}
</style>

<script>
// Form Validation
(function () {
    'use strict'
    const forms = document.querySelectorAll('.needs-validation')
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }
            form.classList.add('was-validated')
        }, false)
    })
})()

// Toggle Password Visibility
function togglePassword(inputId) {
    const input = document.getElementById(inputId);
    const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
    input.setAttribute('type', type);
    
    const icon = event.currentTarget.querySelector('i');
    icon.classList.toggle('fa-eye');
    icon.classList.toggle('fa-eye-slash');
}

// Reset Form
function resetForm() {
    const form = document.getElementById('profileForm');
    form.reset();
    form.classList.remove('was-validated');
}

// Password Match Validation
document.getElementById('confirmPassword').addEventListener('input', function() {
    const newPassword = document.getElementById('newPassword').value;
    if (this.value !== newPassword) {
        this.setCustomValidity('As senhas não conferem');
    } else {
        this.setCustomValidity('');
    }
});
</script>