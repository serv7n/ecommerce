INSERT INTO `loja`.`produtos` (`id`, `nome`, `quantidade`, `valor`, `disponibilidade`, `descricao`) VALUES
(1, 'Mouse Gamer', 50, 129.90, 1, 'Mouse com RGB e 6 botões programáveis'),
(2, 'Teclado Mecânico', 30, 249.99, 1, 'Teclado com switches blue e iluminação RGB'),
(3, 'Monitor LED 24"', 20, 899.90, 1, 'Monitor Full HD com painel IPS e 75Hz'),
(4, 'Headset Bluetooth', 15, 199.99, 0, 'Headset sem fio com microfone integrado');








INSERT INTO comentarios (nome_usuario,usuario_id,produtos_id,titulo,comentario) VALUES("leandro",1,1,"titulo","comentario");








SELECT c.*  FROM comentarios as c JOIN produtos as p ON c.produtos_id = p.id WHERE p.id =  LIMIT 22;