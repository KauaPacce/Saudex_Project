create DATABASE saudex;
use saudex;

create table usuarios(
    cod int auto_increment,
    Nome varchar(50),
    Senha varchar(20),
    Email char (50),
    cpf varchar(15),
    Telefone varchar(15),
    cep char (9),
    nasc date,
    genero char (1),
    primary key (cod)
);
