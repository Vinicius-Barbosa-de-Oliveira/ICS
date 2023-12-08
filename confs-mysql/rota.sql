	create table rota(
		id int(6) unsigned primary key auto_increment,
		pontos varchar(10000) not null unique,
		id_onibus int(6) unsigned not null,
		foreign key(id_onibus) references onibus(id));