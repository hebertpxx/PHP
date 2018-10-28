create database econnect
default character set utf8
default collate utf8_general_ci;

use econnect;

create table `empresas` (
	`empresa_id` int not null auto_increment,
    `razao_social` varchar(64),
    `nome_fantasia` varchar(64) not null,
    `cnpj` varchar(14) not null,
    `email` varchar(64) not null,
    `senha` varchar(64) not null,
    `endereco` varchar(256),
    `cidade_id` int,
    `estado_id` int,
    `cep_id` int,
    `telefone_id` varchar(11),
    `tipo_empresa_id` tinyint not null,
    unique (cnpj),
    unique (email),
    primary key (id),
    foreign key (cep_id) references cep(cep_id),
    foreign key (cidade_id) references cidade(cidade_id),
    foreign key (estado_id) references estado(estado_id),
    foreign key (telefone_id) references telefone(telefone_id),
    foreign key (tipo_empresa_id) references tipo_empresa(tipo_empresa_id)
) default charset = utf8;

create table cep (
	`cep_id` int not null auto_increment,
	`cidade_id` int not null,
    `estado_id` int not null,
    primary key (cep_id),
    foreign key (cidade_id) references cidade(cidade_id),
    foreign key (estado_id) references estado(estado_id)
) default charset = utf8;

create table cidade (
	`cidade_id` int not null auto_increment,
    `cidade_nome` varchar(64) not null,
    `estado_id` int not null,
    primary key (cidade_id),
    foreign key (estado_id) references estado(estado_id)
) default charset = utf8;

create table estado (
	`estado_id` int not null auto_increment,
    `estado_nome` varchar(64) not null,
    `estado_sigla` varchar(2) not null,
    primary key (estado_id)
) default charset = utf8;

create table telefone (
	`telefone_id` int not null auto_increment,
    `telefone_um` varchar(11),
    `telefone_dois` varchar(11),
    primary key (telefone_id)
) default charset = utf8;

create table tipo_empresa (
	`tipo_empresa_id` int not null auto_increment,
    `tipo_empresa_nome` varchar(64),
    primary key (tipo_empresa_id)
) default charset = utf8;