-- Criação do database caso não exista no MySQLWorkbench 
CREATE DATABASE IF NOT EXISTS teste; -- Mude 'teste' pelo nome real do seu database quando for crialo

-- Selicione o database que vc criou 
USE teste;

-- Criação da tabela de usuarios
CREATE TABLE IF NOT EXISTS user(
    id INT AUTO_INCREMENT PRIMARY KEY, -- o ID no sql para cada linha de usuario
    name_user VARCHAR(255) NOT NULL UNIQUE, -- Linha para armazenar o nome do usuario
    email VARCHAR (255) NOT NULL UNIQUE, -- Linha para armazenar o gmail do usuario
    password VARBINARY(255) NOT NULL, -- Linha para armazenar a seha do usuario
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Linha para adiconar o tempoq ue o usuario se registro
)

-- Caso queria já adicionar um usuario como o de ADMIN, use a seguinte linha de codigo quando for executar o sql
-- INSERT INTO users (name_user, password) VALUES ('admin@gmail.com', 'SENHA_DA_SUA_ESCOLHA')