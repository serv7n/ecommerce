

    <style>
        .contact-hero {
            background-color: #f8f9fa;
            padding: 80px 0;
            text-align: center;
        }

        .contact-info {
            padding: 60px 0;
        }

        .contact-card {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            height: 100%;
            transition: transform 0.3s ease;
            background-color: white;
        }

        .contact-card:hover {
            transform: translateY(-5px);
        }

        .contact-icon {
            font-size: 2.5rem;
            color: #0d6efd;
            margin-bottom: 20px;
        }

        .map-container {
            height: 400px;
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
        }

        .social-links {
            font-size: 1.5rem;
            margin-top: 20px;
        }

        .social-links a {
            margin: 0 10px;
            color: #6c757d;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #0d6efd;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #0d6efd;
        }

        .success-message {
            display: none;
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>


    <div class="contact-hero">
        <div class="container">
            <h1 class="display-4 mb-4">Entre em Contato</h1>
            <p class="lead">Estamos aqui para ajudar! Entre em contato conosco.</p>
        </div>
    </div>

    <!-- Informações de Contato -->
    <section class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="contact-card text-center">
                        <i class="fas fa-phone contact-icon"></i>
                        <h3>Telefone</h3>
                        <p>(11) 1234-5678</p>
                        <p>(11) 98765-4321</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="contact-card text-center">
                        <i class="fas fa-envelope contact-icon"></i>
                        <h3>Email</h3>
                        <p>contato@empresa.com</p>
                        <p>suporte@empresa.com</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="contact-card text-center">
                        <i class="fas fa-map-marker-alt contact-icon"></i>
                        <h3>Endereço</h3>
                        <p>Rua Exemplo, 123</p>
                        <p>São Paulo - SP</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulário de Contato e Mapa -->
    <section class="pb-5">
        <div class="container">
            <div class="row">
                <!-- Formulário -->
                <div class="col-lg-6 mb-4">
                    <h2 class="mb-4">Envie uma mensagem</h2>
                    <div class="success-message" id="successMessage">
                        Mensagem enviada com sucesso! Retornaremos em breve.
                    </div>
                    <form id="contactForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome completo</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Assunto</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                    </form>
                </div>
                
                <!-- Mapa -->
                <div class="col-lg-6">
                    <h2 class="mb-4">Nossa Localização</h2>
                    <div class="map-container">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.1976900292917!2d-46.6528214!3d-23.5645229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDMzJzUyLjMiUyA0NsKwMzknMTAuMiJX!5e0!3m2!1spt-BR!2sbr!4v1629813309421!5m2!1spt-BR!2sbr"
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                    <div class="social-links text-center mt-4">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Horário de Funcionamento -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Horário de Funcionamento</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="contact-card">
                        <ul class="list-unstyled text-center">
                            <li class="mb-2">Segunda a Sexta: 9h às 18h</li>
                            <li class="mb-2">Sábado: 9h às 13h</li>
                            <li>Domingo: Fechado</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script para manipular o envio do formulário
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Aqui você pode adicionar a lógica para enviar o formulário
            document.getElementById('successMessage').style.display = 'block';
            this.reset();
            setTimeout(() => {
                document.getElementById('successMessage').style.display = 'none';
            }, 5000);
        });
    </script>
</body>
</html>


