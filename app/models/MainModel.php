<?php

namespace app\Models;

use app\Models\BaseModel;


class MainModel extends BaseModel{
    function pegar_produtos($limite = 0){
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
                    FROM produtos p;';
    
        return $this->query($sql);
    }
    
    function  mostrar_produto($id){
        $this->db_connect();
        $paramets  = [':id' => $id];
        $sql = "SELECT * FROM produtos WHERE  id = :id;";
        return $this->query($sql,$paramets);
    }
    function imagem_produto($id){
        $this->db_connect();
        $paramets = [":id"=> $id];
        $sql = "SELECT * FROM imagem WHERE  :id = produtos_id";
        return $this->query($sql,$paramets);
    }

    // function enviar_comentario(){
    //     $sql = "INSERT comentarios "
    // }
}