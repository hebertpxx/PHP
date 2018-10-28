use econnect;

create table `produtos` (
	`produto_id` int auto_increment,
    `sku` varchar(16) not null,
    `nome_produto` varchar(128) not null,
    `ean` varchar(13),
    `ncm` varchar(8),
    `disponibilidade` bit not null,
    `garantia` tinyint,
    `peso` float,
    `volumes` tinyint,
    `estoque` int not null default 0,
    `cor` varchar(32),
    `comprimento` int,
    `altura` int,
    `largura` int,
    `preco` decimal(9,2),
    `descricao` varchar(512),
    `imagens_id` int,
    `fabricante_id` int not null,
    `categoria_id` int,
    unique (sku),
    primary key (produto_id),
    foreign key (imagens_id) references imagens(imagens_id),
    foreign key (fabricante_id) references fabricante(fabricante_id),
    foreign key (categoria_id) references categoria(categoria_id)
) default charset = utf8;