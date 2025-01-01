<?php


namespace app\Controllers;

use app\Controllers\baseController;

use app\Models\CompraModel;



use app\Models\MainModel;


class compra extends baseController
{


    function mostrar_comentario()
    {
        $id =  $_GET['id'];
        $lm = 0;
        if (isset($_GET['lm'])) {
            $lm = $_GET['lm'];
        }

        // Instancia o modelo CompraModel
        $CompraModel = new CompraModel();

        // Chama o método 'pegar_comentario' do modelo para buscar os comentários e retorna os resultados
        return $result = $CompraModel->pegar_comentario($id, $lm)->results;
    }

    function comentar()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            die('Método inválido');
        }

        $id_produto = $_GET['id'];
        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];
        $user = $_SESSION["user"]['nome'];
        $user_id = $_SESSION["user"]['id'];

        // Verifica se todos os campos obrigatórios foram preenchidos
        if (empty($titulo) or empty($texto) or empty($user)) {
            $_SESSION['error_comentario'] = "Preencha todos os campos";
            header("location: index.php?ct=compra&mt=pagina_venda&id=$id_produto");
            return;
        }

        $paramets = [
            ":nome" => $user,
            ":usuario_id" => $user_id,
            ":produto_id" => $id_produto,
            ":titulo" => $titulo,
            ":comentario" => $texto,
        ];

        // Instancia o modelo CompraModel e chama o método para publicar o comentário
        $CompraModel = new CompraModel();
        $results = $CompraModel->publicarComente($paramets);

        $_SESSION['sucess_cometario'] = "Comentário Enviado";
        header("location: index.php?ct=compra&mt=pagina_venda&id=$id_produto");


        unset($_SESSION['sucess_comentario']);
    }

    function compra()
    {
        // Renderiza o layout de navegação, o conteúdo da página de compra e o rodapé
        $this->view('layouts/nav');
        $this->view('compra');
        $this->view('layouts/footer');
    }
    function pagina_venda()
    {
        $this->view('layouts/nav');

        $MainModel = new MainModel();

        $id = $_GET['id'];

        // pega o produto
        $result  = $MainModel->mostrar_produto($id)->results[0];
        // ==========
        // pega as imagens do produto e armazena nos results

        $result->imagens = $this->pegar_imagem_produtos($id)->results;
        
        // ==========
        // COMENTARIOS
        $compra = new compra();
        $comentario = $compra->mostrar_comentario();
        $result->comentario = $comentario;
        $this->view('produto', $result);
        $this->view(view: 'layouts/footer');


        // =========
        // remove spam comentario
        if (!empty($_SESSION['comente_sucess'])) {
            unset($_SESSION['comente_sucess']);
        };
        if (!empty($_SESSION['error_comentario'])) {
            unset($_SESSION['error_comentario']);
        };
    }

    function pegar_imagem_produtos($id)
    {
        // pega da base de dados as imagens dos produtos
        $MainModel = new MainModel();
        return $MainModel->imagem_produto($id);
    }

    function checkout(){
        $this->view('layouts/nav');
        $CompraModel = new CompraModel();
        $dados = $CompraModel->pegar_produtos([':id' => $_GET['id']]);

        $this->view('checkout',$dados->results[0]);
        $this->view('layouts/footer');
    }
    function carrinho(){
        $this->view('layouts/nav');
        $this->view('carrinho');
        $this->view('layouts/footer');
    }
}
