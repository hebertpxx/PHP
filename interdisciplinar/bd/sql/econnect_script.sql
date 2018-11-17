create database econnect
default character set utf8
default collate utf8_general_ci;

use econnect;

create table `estado` (
	`estado_id` int auto_increment,
    `estado_nome` varchar(64) not null,
    `estado_sigla` varchar(2) not null,
    primary key (estado_id)
) default charset = utf8;

create table `cidade` (
	`cidade_id` int auto_increment,
    `cidade_nome` varchar(64) not null,
    `estado_id` int not null,
    primary key (cidade_id),
    foreign key (estado_id) references estado(estado_id)
) default charset = utf8;

create table `cep` (
	`cep_id` int auto_increment,
    `cep_numero` varchar(8) not null,
	`cidade_id` int not null,
    primary key (cep_id),
    foreign key (cidade_id) references cidade(cidade_id)
) default charset = utf8;

create table `endereco` (
	`endereco_id` int auto_increment,
    `logradouro` varchar(256) not null,
    `numero_endereco` varchar(4) not null,
    `cep_id` int not null,
    primary key (endereco_id),
    foreign key (cep_id) references cep(cep_id)
) default charset = utf8;

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

create table `categorias` (
	`categoria_id` int auto_increment,
    `nome_categoria` varchar(64),
    `categoria_pai` int,
    primary key (categoria_id),
    foreign key (categoria_pai) references categorias(categoria_id)
) default charset = utf8;

create table `produtos` (
	`produto_id` int auto_increment,
    `sku` varchar(16) not null, -- código único de controle de estoque
    `nome_produto` varchar(128) not null,
    `ean` varchar(13), -- código de barras padrão 13
    `ncm` varchar(8), -- Nomenclatura Comum do Mercosul
    `disponibilidade` bit not null,
    `garantia` tinyint,
    `peso` float, -- em Kg
    `volumes` tinyint, -- quantidade de embalagens do produto
    `estoque` int not null default 0,
    `cor` varchar(32),
    `comprimento` int, -- em centimetros
    `altura` int, -- em centimetros
    `largura` int, -- em centimetros
    `preco` decimal(9,2),
    `descricao` varchar(512),
    `fabricante_id` int not null,
    `categoria_id` int,
    unique (sku),
    primary key (produto_id),
    foreign key (fabricante_id) references empresas(empresa_id),
    foreign key (categoria_id) references categorias(categoria_id)
) default charset = utf8;

create table `imagens` (
	`imagem_id` int auto_increment,
    `url_imagem` varchar(256),
    `produto_id` int not null,
    primary key (imagem_id),
    foreign key (produto_id) references produtos(produto_id)
) default charset = utf8;

create table `atributos_personalizados` (
	`atributo_id` int auto_increment,
    `nome_atibuto` varchar(64) not null,
    `valor_atributo` varchar(64),
    `produto_id` int not null,
    primary key (atributo_id),
    foreign key (produto_id) references produtos(produto_id)
) default charset = utf8;

create table `avaliacao_produto` (
	`produto_id` int not null,
    `empresa_id` int not null,
    `avaliacao_produto_valor` decimal(3,1) default 0 not null,
    foreign key (produto_id) references produtos(produto_id),
    foreign key (empresa_id) references empresas(empresa_id),
    constraint `avaliacao_produto_id`primary key (produto_id, empresa_id)
) default charset = utf8;

create table `pedido` (
	`pedido_id` int auto_increment,
	`data_pedido` date not null,
    `preco` decimal(9,2) not null,
	`cliente` int not null,
    `comentario` varchar(256),
	primary key (pedido_id),
	foreign key (cliente) references empresas(empresa_id)
) default charset = utf8;

create table `itens_pedido` (
	`itens_id` int auto_increment,
	`produto_id` int not null,
	`qtde_produto` int not null,
	`pedido_id` int not null,
	primary key (itens_id),
	foreign key (produto_id) references produtos(produto_id),
	foreign key (pedido_id) references pedido(pedido_id)
) default charset = utf8;