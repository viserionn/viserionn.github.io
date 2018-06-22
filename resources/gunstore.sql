drop database GUNSTORE;
create database GUNSTORE;
ALTER DATABASE GUNSTORE CHARACTER SET utf8 COLLATE utf8_general_ci;

use GUNSTORE;

create table descricao(
id int auto_increment, 
texto varchar(666), 
primary key (id));

insert into descricao values(1,"Presisa ADD uma DESCRICAO");
insert into descricao values(2,"Pistola Airsoft Desert Eagle 50AE Full Metal CO2 GBB");

create table produto(
id int auto_increment,
id_descricao int,
tipo varchar(60),
modelo varchar(60), 
foto varchar(60),
preco varchar(60), 
primary key (id),
foreign key(id_descricao) references descricao(ID));

insert into produto values(1,2,"PISTOLA","AIRSOFT","21afe5f11a6f66d2d117812f3ca6bb03.jpg","1.299,90");

create table usuario(
id int not null auto_increment primary key,
login varchar(50),
nome varchar(60),
senha varchar(60),
email varchar(60),
tipo varchar(20),
foto varchar(50)
);

insert into usuario values(
1,"admin","jeferson","adms","E-MAIL","ADMIN","ADMIN.jpg");
insert into usuario values(
2,"adminn","jeferson","adms","E-MAIL","NORMAL","ADMIN.jpg");
