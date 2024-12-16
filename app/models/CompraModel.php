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
}
