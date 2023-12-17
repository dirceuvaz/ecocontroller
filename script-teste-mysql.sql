-- Crie um banco de dados (se ainda não existir)
CREATE DATABASE IF NOT EXISTS ecocontroller;

-- Use o banco de dados
USE ecocontroller;

-- Crie uma tabela de usuários
CREATE TABLE IF NOT EXISTS usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO usuario (username, password) VALUES ('ecoti', 'eco123');

-- Crie a tabela "licenca"
CREATE TABLE licenca (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    descricao VARCHAR(255),
    data_validade DATE,
    data_ativacao DATE,
    usuario_id INT,
    estado boolean,
    FOREIGN KEY (usuario_id) REFERENCES usuario(id)
);

ALTER TABLE usuario ADD COLUMN email varchar(125);

select * from usuario;

UPDATE usuario set email = "dirceu.info@gmail.com" where id = 1;