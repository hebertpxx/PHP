use econnect;

create table `produtos` (
	`produto_id` int not null auto_increment,
    `sku` varchar(16) not null,
    `nome_produto` varchar(64) not null,
    `ean` varchar(14) not null,
    `ncm` varchar(64) not null,
    `disponibilidade` varchar(64) not null,
    `garantia` varchar(256),
    `peso` int,
    `volumes` int,
    `estoque` int,
    `cor` varchar(11),
    `fabricante` tinyint not null,
    `categoria`
    `comprimento`
    `altura`
    `largura`
    `preco`
    `imagens`
    `descricao`
    unique (cnpj),
    unique (email),
    primary key (id),
    foreign key (cep_id) references cep(cep_id),
    foreign key (cidade_id) references cidade(cidade_id),
    foreign key (estado_id) references estado(estado_id),
    foreign key (telefone_id) references telefone(telefone_id),
    foreign key (tipo_empresa_id) references tipo_empresa(tipo_empresa_id)
) default charset = utf8;