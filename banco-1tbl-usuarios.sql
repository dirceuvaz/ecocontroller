-- Crie um banco de dados (se ainda não existir)
CREATE DATABASE IF NOT EXISTS seu_banco_de_dados;

-- Use o banco de dados
USE ecocontroller;

-- Crie uma tabela de usuários
CREATE TABLE IF NOT EXISTS usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Insira um usuário de exemplo (altere conforme necessário)
INSERT INTO usuario (username, password) VALUES ('exemplo', 'senha_hashada');
