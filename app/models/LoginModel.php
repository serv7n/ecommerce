<?php

namespace app\Models;

use app\Models\BaseModel;

class LoginModel extends BaseModel
{
  function cria_usuario($dados)
  {
    $this->db_connect();
    $sql = 'INSERT INTO usuario (nome, senha, email) VALUES 
        (:nome, 
        AES_ENCRYPT(:senha, "' . MYSQL_AES_KEY . '"), 
        AES_ENCRYPT(:email, "' . MYSQL_AES_KEY . '"));';
    
    $this->non_query(
      $sql,
      $dados
    );
  }

  function logar_usuario($dados)
  {
    
    $this->db_connect();
    $sql = 'SELECT id, nome, AES_DECRYPT(email, :key) AS email, AES_DECRYPT(senha, :key) AS senha
            FROM usuario 
            WHERE AES_ENCRYPT(:email, :key) = email 
              AND AES_ENCRYPT(:senha, :key) = senha';

    
    return $this->query($sql, $dados);
  }
}
