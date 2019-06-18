use mvc;

create table user (
	id int primary key AUTO_INCREMENT,
	username char(50),
	password char(50)
);

insert into user( username, password) values ('batisuoc', '12345');
insert into user( username, password) values ('peuy', '12345');