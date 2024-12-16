<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechBrand - Sua Loja de Tecnologia</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <script src="assets/js/bundle.js"></script>
    <style>
        .profile-image {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            object-fit: cover;
        }

        .dropdown-menu {
            min-width: 200px;
        }

        .dropdown-item i {
            width: 20px;
            margin-right: 8px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="bi bi-code-square me-2"></i>
                TechBrand
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="?" aria-current="page">
                            <i class="bi bi-house-door me-1"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?ct=main&mt=categoria">
                            <i class="bi bi-grid me-1"></i>
                            Categoria
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?ct=main&mt=sobre">
                            <i class="bi bi-people me-1"></i>
                            Sobre
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?ct=main&mt=contato">
                            <i class="bi bi-chat-dots me-1"></i>
                            Contato
                        </a>
                    </li>
                </ul>

                <form class="d-flex me-3" role="search">
                    <input class="form-control search-box" type="search" placeholder="Buscar..." aria-label="Search">
                </form>

                <div class="d-flex align-items-center">
                    <!-- Notificações -->
                    <div class="position-relative me-3">
                        <button class="btn btn-light rounded-circle" type="button" aria-label="Notificações" onclick="toggleNotifications()">
                            <i class="bi bi-bell"></i>
                            <span class="notification-badge bg-danger text-white">3</span>
                        </button>

                        <!-- Pop-up de Notificações -->
                        <div id="notificationsOverlay" class="notification-overlay">
                            <div class="notification-popup">
                                <div class="notification-header">
                                    <h5 class="mb-0">Notificações</h5>
                                    <button type="button" class="btn-close" onclick="toggleNotifications()"></button>
                                </div>
                                <div class="notification-body">
                                    <!-- Notificação Individual -->
                                    <div class="notification-item unread">
                                        <div class="notification-icon">
                                            <i class="fas fa-shopping-cart text-primary"></i>
                                        </div>
                                        <div class="notification-content">
                                            <p class="notification-text">Seu pedido #123 foi confirmado</p>
                                            <small class="notification-time">Há 5 minutos</small>
                                        </div>
                                    </div>
                                    <div class="notification-item">
                                        <div class="notification-icon">
                                            <i class="fas fa-tag text-success"></i>
                                        </div>
                                        <div class="notification-content">
                                            <p class="notification-text">Nova promoção disponível!</p>
                                            <small class="notification-time">Há 2 horas</small>
                                        </div>
                                    </div>
                                    <div class="notification-item">
                                        <div class="notification-icon">
                                            <i class="fas fa-info-circle text-info"></i>
                                        </div>
                                        <div class="notification-content">
                                            <p class="notification-text">Atualize seus dados cadastrais</p>
                                            <small class="notification-time">Há 1 dia</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="notification-footer">
                                    <button class="btn btn-sm btn-light w-100">Ver todas as notificações</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carrinho -->
                    <div class="position-relative me-3">
                        <a class="btn btn-light rounded-circle" href="carrinho.php" aria-label="Carrinho">
                            <i class="bi bi-cart"></i>
                            <span class="notification-badge bg-primary text-white">2</span>
                        </a>
                    </div>

                    <!-- Usuário -->
                    <?php if (empty($_SESSION['user'])) : ?>
                        <a href="?ct=login&mt=login" class="btn btn-outline-primary btn-custom me-2">Login</a>
                        <a href="?ct=login" class="btn btn-primary btn-custom">Cadastro</a>
                    <?php else : ?>
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle d-flex align-items-center" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/img/usuario-de-perfil.png" alt="Foto" class="profile-image me-2">
                                <span style="width: 130px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?= $_SESSION['user']['nome']; ?></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li>
                                    <a class="dropdown-item" href="perfil.php">
                                        <i class="bi bi-person"></i>
                                        Meu Perfil
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pedidos.php">
                                        <i class="bi bi-box"></i>
                                        Meus Pedidos
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="configuracoes.php">
                                        <i class="bi bi-gear"></i>
                                        Configurações
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item text-danger" href="?ct=login&mt=logout">
                                        <i class="bi bi-box-arrow-right"></i>
                                        Sair
                                    </a>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>