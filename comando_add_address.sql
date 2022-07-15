use loja_de_varejo;
select * from provider;
INSERT INTO provider VALUES(null,?,?,?,1);

/* Address */
insert into address(
address_code,
public_place,
street_name,
number_of_street,
complement,
neighborhood,
city,
zipcode
) values(
null,
'Avenida',
'Placido Martins',
797,
'APTO 23',
'Pedreira',
'Belém',
'66085317'
);
insert into address values (null,'Rua','Mathias da Costa',22,'A','Velha','Blumenau','89036470');
insert into address values(null,'Avenida','Gilberto de Moura',455,null,'Centro','Gravataí','94999888');

/* Provider */
insert into provider values(null,'22.941.006/0001-04','Luan e Regina Construções Ltda','(55) 3615-6367',1);

insert into provider values(null,'47.989.765/0001-60','Manoel e Beatriz Comercio de Bebidas Ltda','(51) 3616-6245',2);

insert into provider values(null,'47.345.765/0001-60','Clóvis Comercio de Bebidas Ltda','(51) 3616-6245',3);