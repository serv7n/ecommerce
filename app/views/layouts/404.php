<?php
// Definir o status HTTP como 404

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Página não encontrada</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
        }

        .error-container {
            text-align: center;
            padding: 2rem;
            max-width: 600px;
        }

        .error-code {
            font-size: 120px;
            font-weight: bold;
            color: #0d6efd;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            margin: 0;
            line-height: 1;
        }

        .error-message {
            font-size: 24px;
            color: #343a40;
            margin: 20px 0;
        }

        .error-description {
            color: #6c757d;
            margin-bottom: 30px;
        }

        .astronaut {
            max-width: 250px;
            margin: 20px 0;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .home-button {
            background-color: #0d6efd;
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
            transition: transform 0.3s ease;
            display: inline-block;
            margin-top: 20px;
        }

        .home-button:hover {
            transform: scale(1.05);
            color: white;
        }

        .search-form {
            max-width: 300px;
            margin: 20px auto;
        }

        .helpful-links {
            margin-top: 30px;
        }

        .helpful-links a {
            margin: 0 10px;
            color: #6c757d;
            text-decoration: none;
        }

        .helpful-links a:hover {
            color: #0d6efd;
        }
    </style>
</head>

<body>
    <div class="error-container">
        <h1 class="error-code">404</h1>
        <img src="https://cdn.example.com/astronaut.png" alt="Astronauta Perdido" class="astronaut">
        <h2 class="error-message">
            <?php if ((!(empty($message)))) {
                echo $message;
            } else {
                echo "Oops! Página não encontrada";
            } ?>
        </h2>
        <p class="error-description">
            A página que você está procurando pode ter sido removida,
            teve seu nome alterado ou está temporariamente indisponível.
        </p>

        <!-- Formulário de Busca -->
        <form class="search-form" action="/busca" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Buscar no site..." aria-label="Buscar" name="query">
                <button class="btn btn-outline-primary" type="submit">Buscar</button>
            </div>
        </form>

        <!-- Botão para página inicial -->
        <a href="index.php" class="home-button">
            Voltar para Página Inicial
        </a>

        <!-- Links Úteis -->
        <div class="helpful-links">
            <a href="/contato">Contato</a>
            <a href="/mapa-do-site">Mapa do Site</a>
            <a href="/ajuda">Ajuda</a>
        </div>

        <!-- Informações Técnicas -->
        <div class="mt-4 text-muted">
            <small>
                Erro 404 - <?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?><br>
                Data: <?php echo date('Y-m-d H:i:s'); ?>
            </small>
        </div>
    </div>

    <!-- Script para registrar erro no log (opcional) -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>