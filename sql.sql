create table person(
	id int auto_increment,
	name varchar(100) not null,
	tel varchar(50) not null,
	qq varchar(50) null,
	mail varchar(50) null,
	skill varchar(200) null,
	mes text null,
	myMes text null,
	primary key(`id`)
)char set = utf8;
create table news(
	id int auto_increment,
	title varchar(200) not null,
	contant text not null,
	primary key(`id`)
)char set = utf8;
create table know(
	id int auto_increment,
	title varchar(200) not null,
	contant text not null,
	primary key(`id`)
)char set = utf8;