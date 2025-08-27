DROP DATABASE IF EXISTS blog;

CREATE DATABASE IF NOT EXISTS blog;

use blog;

CREATE TABLE usuario (
    id int not null AUTO_INCREMENT,
    nome varchar(50) not null,
    email varchar(255) not null,
    senha varchar(60) not null,
    data_criacao datetime not null default CURRENT_TIMESTAMP,
    ativo tinyint not null default '0',
    adm tinyint not null default '0',
    PRIMARY KAY (ID)
)

CREATE TABLE post (
    id int NOT NULL AUTO_INCREMENT,
    titulo varchar(255)
)