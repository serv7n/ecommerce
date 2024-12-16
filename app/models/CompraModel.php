<?php

namespace app\Models;

use app\Models\BaseModel;

class CompraModel extends BaseModel
{
    function pegar_comentario($id = 1, $lm = 0)
    {
        $paramets = [
            ":id" => $id
        ];
        $sql  =  "SELECT c.*  FROM comentarios as c JOIN produtos as p ON c.produtos_id = p.id WHERE p.id = :id LIMIT $lm, 3;";

        $this->db_connect();
        return $this->query($sql, $paramets);
    }

    function publicarComente($paramets)
    {
        $sql = "INSERT INTO comentarios 
        (nome_usuario, usuario_id, produtos_id, titulo, comentario) 
        VALUES
        (:nome, :usuario_id, :produto_id, :titulo, :comentario);";
        $this->db_connect();
        return $this->query($sql, $paramets)->status;
    }
    function pegar_produtos($id =[':id' => 1]){
        $this->db_connect();
        $sql = 'SELECT 
                    p.id,
                    p.nome,
                p.quantidade,
                p.valor,
                p.descricao,
                (SELECT i.imagem 
                    FROM imagem i 
                    WHERE i.produtos_id = p.id 
                    ORDER BY i.id ASC 
                    LIMIT 1) AS produto_imagem
                    FROM produtos p WHERE p.id = :id;';
    
        return $this->query($sql,$id);
    }
}
