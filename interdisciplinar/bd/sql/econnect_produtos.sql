use econnect;

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

create table `categorias` (
	`categoria_id` int auto_increment,
    `nome_categoria` varchar(64),
    `categoria_pai` int,
    primary key (categoria_id),
    foreign key (categoria_pai) references categorias(categoria_id)
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