<?php

namespace app\Controllers;

use app\Controllers\baseController;
use app\Models\LoginModel;


class login extends baseController
{
    // Renderiza a página inicial com o formulário de cadastro

    function index()
    {
        if (isset($_SESSION['user'])) {
            header('location: index.php');
        }
        $this->view('layouts/nav');
        $this->view('sign');
        $this->view('layouts/footer');
    }

    // Renderiza a página de login
    function login()
    {
        // Se o usuário já estiver logado, redireciona para a página principal
        if (isset($_SESSION['user'])) {
            header('location: index.php');
        }

        $this->view('layouts/nav');
        $this->view('login');
        $this->view('layouts/footer');
    }

    // Processa o formulário de cadastro
    function enviar_formulario_sign()
    {
        // Verifica se o método da requisição é POST
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            die('Método inválido');
        }

        // Captura os dados do formulário
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $nome_completo = $nome . ' ' . trim($sobrenome);
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senha_confirmada = $_POST['senha_confirmada'];

        // Inicializa o array de erros
        $error = [];

        // Validações
        if (empty($nome) || empty($sobrenome) || empty($email) || empty($senha) || empty($senha_confirmada)) {
            $error[] = "Todos os campos são obrigatórios.";
        } elseif (preg_match('/\d/', $nome_completo)) {
            $error[] = "O nome não pode conter números.";
        } elseif (strlen($nome) < 2 || strlen($sobrenome) < 2) {
            $error[] = "Nome ou sobrenome devem ter pelo menos 2 caracteres.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error[] = "E-mail inválido.";
        } elseif ($senha !== $senha_confirmada) {
            $error[] = "As senhas não coincidem.";
        }

        // Validação da senha
        if (strlen($senha) < 8) {
            $error[] = "A senha deve conter no mínimo 8 caracteres.";
        } elseif (!preg_match('/[A-Z]/', $senha)) {
            $error[] = "A senha deve conter pelo menos uma letra maiúscula.";
        } elseif (!preg_match('/[a-z]/', $senha)) {
            $error[] = "A senha deve conter pelo menos uma letra minúscula.";
        } elseif (!preg_match('/\d/', $senha)) {
            $error[] = "A senha deve conter pelo menos um número.";
        } elseif (!preg_match('/[\W_]/', $senha)) {
            $error[] = "A senha deve conter pelo menos um caractere especial.";
        }

        // Se houver erros, retorna à página inicial com as mensagens
        if (!empty($error)) {
            $_SESSION['error'] = $error;
            $this->index();
            return;
        }

        // Remove erros da sessão, se existirem
        if (!empty($_SESSION['error'])) {
            unset($_SESSION['error']);
        }

        // Dados para o modelo
        $dados = [
            ':nome' => $nome_completo,
            ':email' => $email,
            ':senha' => $senha,
        ];

        // Criação do usuário no banco de dados
        $Login = new LoginModel();
        $Login->cria_usuario(dados: $dados);

        // Redireciona para a página de login
        $this->login();
    }

    // Processa o login
    function logar()
    {
        // Verifica se o método da requisição é POST
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            die('Método inválido');
        }

        // Captura os dados do formulário
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Validações de login
        $error = [];
        if (strlen($senha) < 8) {
            $error[] = "A senha deve conter no mínimo 8 caracteres.";
        }
        if (!filter_var($email, filter: FILTER_VALIDATE_EMAIL)) {
            $error[] = "E-mail inválido.";
        }

        if (!empty($error)) {
            $_SESSION['error'] = $error;
            $this->login();
            return;
        }

        // Remove erros da sessão, se existirem
        if (!empty($_SESSION['error'])) {
            unset($_SESSION['error']);
        }
        $dados = [
            ':email' => $email,
            ':senha' => $senha,
            ':key' => MYSQL_AES_KEY
        ];

        // // Processamento adicional do login aqui, se necessário
        $Login = new LoginModel();
        $user = $Login->logar_usuario($dados)->results;

        if (empty($user)) {
            $error[] =  'Usuario nao cadatrado';
            $_SESSION['error'] = $error;
            $this->login();
            return;
        }
        $_SESSION['user'] = get_object_vars($user[0]);

        $this->login();
    }

    function logout()
    {
        unset($_SESSION['user']);
        $this->login();
    }
    function perfil()
    {
        if (empty($_SESSION['user'])) {
            header('location: index.php');
            return;
        }
        $this->view('layouts/nav');
        $this->view('perfil');
        $this->view('layouts/footer');
        
        if (!empty($_SESSION['error_perfil'])) {
            unset($_SESSION['error_perfil']);
        }
        
        if (!empty($_SESSION['error_server'])) {
            unset($_SESSION['error_server']);
        }
        
        if (!empty($_SESSION['sucess_perfil'])) {
            unset($_SESSION['sucess_perfil']);
        }

    }
    function atualizar_perfil()
    {
        if($_SERVER['REQUEST_METHOD'] != 'POST'){
            die();
            header('location: index.php?ct=login&mt=perfil');
        }
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senha_nova = $_POST['senha_nova'];
        $senha_confirmada = $_POST['senha_confirmada'];

        // Validações
        $error = [];
        if (empty($nome) || empty($email) || empty($senha) || empty($senha_confirmada) || empty($senha_nova)) {
            $error[] = "Todos os campos são obrigatórios.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error[] = "E-mail inválido.";
        } elseif ($senha_nova !== $senha_confirmada) {
            $error[] = "As senhas não coincidem.";
        }
  
        // Senha com requisitos mínimos
        if (strlen($senha) < 8) {
            $error[] = "A senha deve conter no mínimo 8 caracteres.";
        } elseif (!preg_match('/[A-Z]/', $senha)) {
            $error[] = "A senha deve conter pelo menos uma letra maiúscula.";
        } elseif (!preg_match('/[a-z]/', $senha)) {
            $error[] = "A senha deve conter pelo menos uma letra minúscula.";
        } elseif (!preg_match('/\d/', $senha)) {
            $error[] = "A senha deve conter pelo menos um número.";
        } elseif (!preg_match('/[\W_]/', $senha)) {
            $error[] = "A senha deve conter pelo menos um caractere especial.";
        }

        // Exibe erros e interrompe caso existam
        if (!(empty($error))) {
            $_SESSION['error_perfil'] = $error;
            $this->perfil();
            return;
        }

        // Validação de credenciais
        $dados_de_validacao = [
            ':email' => $email,
            ':senha' => $senha
        ];

        $LoginModel = new LoginModel();
        $resultado = $LoginModel->validar_dados($dados_de_validacao);

        if (empty($resultado->results) || $resultado->results[0]->id !== $_SESSION['user']['id']) {
            $_SESSION['error_server'] = 'Credenciais não batem.';
            
            $this->perfil();
            return;
        }

        // Atualização de dados
        $dados_atualizar = [
            ':nome' => $nome,
            ':senha' => $senha_nova,
            ':email' => $email,
            ':id' => $_SESSION['user']['id']
        ];
        $LoginModel->atualizar_usuario($dados_atualizar);

        unset($_SESSION['error_perfil'], $_SESSION['error_server'], $error);
        $_SESSION['sucess_perfil'] = "sucesso";
        $dados = [
            ':email' => $email,
            ':senha' => $senha_confirmada,
            ':key' => MYSQL_AES_KEY
        ];

        $user = $LoginModel->logar_usuario($dados)->results;
      
        

        $_SESSION['user'] = get_object_vars($user[0]);
        header('location: index.php?ct=login&mt=perfil');

    }
}
