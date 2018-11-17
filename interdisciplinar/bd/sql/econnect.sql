create database econnect
default character set utf8
default collate utf8_general_ci;

use econnect;

create table `empresas` (
	`empresa_id` int auto_increment,
    `razao_social` varchar(64),
    `nome_fantasia` varchar(64) not null,
    `cnpj` varchar(14) not null,
    `email` varchar(64) not null,
    `senha` varchar(64) not null,
    `endereco_id` int,
    `tipo_empresa` tinyint not null,
    unique (cnpj),
    unique (email),
    primary key (empresa_id),
    foreign key (endereco_id) references endereco(endereco_id)
) default charset = utf8;

create table `endereco` (
	`endereco_id` int auto_increment,
    `logradouro` varchar(256) not null,
    `numero_endereco` varchar(4) not null,
    `cep_id` int not null,
    primary key (endereco_id),
    foreign key (cep_id) references cep(cep_id)
) default charset = utf8;

create table `cep` (
	`cep_id` int auto_increment,
    `cep_numero` varchar(8) not null,
	`cidade_id` int not null,
    primary key (cep_id),
    foreign key (cidade_id) references cidade(cidade_id)
) default charset = utf8;

create table `cidade` (
	`cidade_id` int auto_increment,
    `cidade_nome` varchar(64) not null,
    `estado_id` int not null,
    primary key (cidade_id),
    foreign key (estado_id) references estado(estado_id)
) default charset = utf8;

create table `estado` (
	`estado_id` int auto_increment,
    `estado_nome` varchar(64) not null,
    `estado_sigla` varchar(2) not null,
    primary key (estado_id)
) default charset = utf8;

create table `telefone` (
	`telefone_id` int auto_increment,
    `numero_telefone` varchar(11) not null,
    `usuario_telefone` int not null,
    primary key (telefone_id),
    foreign key (usuario_telefone) references empresas(empresa_id)
) default charset = utf8;

-- Avaliação para a empresa cliente (compradora)
create table `avaliacao_empresa` (
	`empresa_fornecedor` int not null,
    `empresa_cliente` int not null,
    `avaliacao_empresa_valor` decimal(3,1) default 0 not null,
    foreign key (empresa_fornecedor) references empresas(empresa_id),
    foreign key (empresa_cliente) references empresas(empresa_id),
    constraint `avaliacao_empresa_id` primary key (empresa_fornecedor, empresa_cliente)
) default charset = utf8;