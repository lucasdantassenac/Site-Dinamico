use cariocatech;

create table produtos(
id_produto int auto_increment primary key,
nome varchar(255),
criacao timestamp,
data_desconto date,
preco float,
descricao MEDIUMTEXT,
foto varchar(255),
desconto float,
autor varchar(255),
id_categoria int,
id_comentario int,
id_avaliacao int,
id_compra int
#FOREIGN KEY (id_compra) REFERENCES compras(id_compra)
) default charset = utf8;

create table usuario(
id_usuario int auto_increment primary key,
foto varchar(255),
nome varchar(255),
cartao varchar(255),
email varchar(255),
criacao timestamp,
nascimento date
#FOREIGN KEY( id_compra) REFERENCES compras(id_compra)
) default charset = utf8;

create table compras (
id_compra int auto_increment primary key,
criacao timestamp,
valor_total float,
id_produto int,
id_usuario int
#FOREIGN KEY (id_produto) REFERENCES produtos(id_produto),
#FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
) default charset = utf8;

ALTER TABLE produtos ADD FOREIGN KEY (id_compra) REFERENCES compras(id_compra);