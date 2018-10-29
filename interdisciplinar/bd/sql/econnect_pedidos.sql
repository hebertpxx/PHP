use econnect;

create table `pedido` (
	`pedido_id` int auto_increment,
	`data_pedido` date not null,
    `preco` decimal(9,2) not null,
	`cliente` int not null,
	primary key (pedido_id),
	foreign key (cliente) references empresas(empresa_id)
);

create table `itens_pedido` (
	`itens_id` int auto_increment,
	`produto_id` int not null,
	`qtde_produto` int not null,
	`pedido_id` int not null,
	primary key (itens_id),
	foreign key (produto_id) references produtos(produto_id),
	foreign key (pedido_id) references pedido(pedido_id)
);