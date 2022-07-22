use loja_de_varejo;

create table user(
	user_id smallint primary key,
    login varchar(30) not null,
    password char(60) not null
);
insert into user values(1,'igor','$2y$10$wH1oAXYBTX3qRJfLGhDCOuYsiZNQBpwkbqYIGkAmZ/eYwd.r/dOGi');

select * from user;