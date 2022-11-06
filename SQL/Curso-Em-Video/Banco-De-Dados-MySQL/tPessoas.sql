use cadastros;
create table pessoas
(
    id int not null auto_increment,
	nome varchar(30) not null,
    nascimento date,
    sexo enum('M','F'),
    peso decimal(5,2),
    altura decimal(3,2),
    nacionalidade varchar(20) default 'Brasil',
    primary key (id)
);
use cadastros;
drop table pessoas;

use cadastros;
insert into pessoas (nome,nascimento,sexo,peso,altura,nacionalidade)
values ('Godofredo','1984-01-02','M','78.5','1.83','Brasil');

use cadastros;
insert into pessoas (nome,nascimento,sexo,peso,altura,nacionalidade)
values ('Maria','1999-12-30','F','55.2','1.65','Portugal');

use cadastros;
insert into pessoas (id,nome,nascimento,sexo,peso,altura,nacionalidade)
values (default, 'Creuza','1920-12-30','F','50.2','1.65',default);

use cadastros;
insert into pessoas values (default, 'Adalgiza','1930-11-2','F','53.2','1.75','Irlanda');

use cadastros;
insert into pessoas values 
(default,'Ana','1975-12-22','F','52.3','1.45','EUA'),
(default,'Pedro','2000-07-15','M','52.3','1.45','Brasil'),
(default,'Maria','199-05-30','F','75.9','1.70','Portugal');

use cadastros;
alter table pessoas
add column codigo int first;

use cadastros;
alter table pessoas
add column profissao varchar(10) after nome;

use cadastros;
alter table pessoas
modify column profissao varchar(20);

use cadastros;
alter table pessoas
change column profissao prof varchar (20);

use cadastros;
alter table pessoas
rename to pesso;

use cadastros;
alter table pessoas
drop column codigo;

select * from pessoas;