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

                <form class="d-flex me-3"  action="index.php?" method="get">
                    <input type="hidden" name="ct" value="main">
                    <input type="hidden" name="mt" value="pesquisar">
                    <input class="form-control search-box" type="text" placeholder="Buscar..." aria-label="Search" name="p" >
                </form>



                    <!-- Usuário -->
                    <?php if (empty($_SESSION['user'])) : ?>
                        <a href="?ct=login&mt=login" class="btn btn-outline-primary btn-custom me-2">Login</a>
                        <a href="?ct=login" class="btn btn-primary btn-custom">Cadastro</a>
                    <?php else : ?>
                        <div class="d-flex align-items-center">
                    <!-- Notificações -->
                    <div class="position-relative me-3">
                

                    
                    </div>

                    <!-- Carrinho -->
                  
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle d-flex align-items-center" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/img/usuario-de-perfil.png" alt="Foto" class="profile-image me-2">
                                <span style="width: 130px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?= $_SESSION['user']['nome']; ?></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li>
                                    <a class="dropdown-item" href="?ct=login&mt=perfil">
                                        <i class="bi bi-person"></i>
                                        Meu Perfil
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