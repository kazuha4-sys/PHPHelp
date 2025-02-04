-- Criação do Database caso não exista no MySqlWorkBench
CREATE DATABASE IF NOT EXISTS teste; -- Mude 'teste' pelo nome real do seu SQL

-- Selicione o database que vc criou 
USE teste;

-- Criação da tabela de uusuarios
CREATE TABLE IF NOT EXISTS sala(
    id INT AUTO_INCREMENT PRIMARY KEY, -- o ID de cada usuario
    name VARCHAR(255) NOT NULL UNIQUE, -- O nome de cada usuario
);

CREATE TABLE IF NOT EXISTS messages(
    id INT AUTO_INCREMENT PRIMARY KEY,
    sala_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    mensagem VARCHAR(255) NOT NULL UNIQUE,
    data_hora TIMESTAMP DEFAUL CURRENT_TIMESTAMP
)