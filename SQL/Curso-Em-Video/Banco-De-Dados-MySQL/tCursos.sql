use cadastros;
create table cursos
(
    nome varchar(30) not null unique,
    descricao text,
    carga int unsigned,
    totaula int,
    ano year default '2016'
);
use cadastros;
drop table cursos;

use cadastros;
alter table cursos
add column idcurso int first;

use cadastros;
alter table cursos
add primary key (idcurso);

use cadastros;
insert into cursos values 
('1','HTML4','Curso de HTML5','40','37','2014'),
('2','Algoritmos','Lógica de Programação','20','15','2014'),
('3','Photoshop','Dicas de Photoshop CC','10','8','2014'),
('4','PGP','Curso de PHP para iniciantes','40','20','2010'),
('5','Jarva','Introdução à Linguagem Java','10','29','2000'),
('6','MySQL','Banco de Dados MySQL','30','15','2016'),
('7','Word','Curso completo de Word','40','30','2016'),
('8','Sapateado','Danças Rítmicas','40','30','2018'),
('9','Cozinha Árabe','Aprenda a fazer Kibe','40','30','2018'),
('10','YouTube','Gerar polêmica e ganhar inscritos','5','2','2018');

use cadastros;
update cursos
set nome = 'HTML5'
where idcurso = '1';

use cadastros;
update cursos
set nome = 'PHP', ano = '2015'
where idcurso = '4';

use cadastros;
update cursos
set nome = 'Java', carga = '40', ano = '2015'
where idcurso = '5'
limit 1;

use cadastros;
update cursos
set carga = '800', ano = '2050'
where ano = '2018';

use cadastros;
update cursos
set carga = '0', ano = '2018'
where ano = '2050'
limit 1;

use cadastros;
update cursos
set carga = '40', ano = '2018'
where ano = '2050';

use cadastros;
update cursos
set carga = '5', totaula = '2'
where idcurso = '10';

use cadastros;
delete from cursos
where idcurso = '8';

use cadastros;
delete from cursos
where ano = '2018'
limit 2;

truncate table cursos;

-- Depois de adicionar o Dump

use cadastro;
select * from cursos
order by nome;

use cadastro;
select * from cursos
order by nome desc;

use cadastro;
select nome, carga, ano from cursos
order by nome;

use cadastro;
select ano, nome, carga from cursos
order by ano, nome;

use cadastro;
select * from cursos
where ano = '2016'
order by nome;

use cadastro;
select nome, carga from cursos
where ano = '2016'
order by nome;

use cadastro;
select nome, descricao, carga from cursos
where ano = '2016'
order by nome;

use cadastro;
select nome, descricao from cursos
where ano <= '2015'
order by ano, nome;

use cadastro;
select nome, ano from cursos
where ano
between '2014' and '2016'
order by ano  desc, nome;

use cadastro;
select nome, descricao, ano from cursos
where ano in (2014, 2016)
order by ano;

use cadastro;
select nome, carga, totaulas from cursos
where carga > 35 and totaulas < 30;

use cadastro;
select nome, carga, totaulas from cursos
where carga > 35 or totaulas < 30;

use cadastro;
select * from cursos
where nome = 'PHP';

use cadastro;
select * from cursos
where nome like 'P%';

use cadastro;
select * from cursos
where nome like '%A';

use cadastro;
select * from cursos
where nome like '%A%';

use cadastro;
select * from cursos
where nome not like '%A%';

use cadastro;
select * from cursos
where nome not like '%A%';

use cadastro;
select * from cursos
where nome like 'PH%P';

use cadastro;
select * from cursos
where nome like 'PH%P%';

use cadastro;
select * from cursos
where nome like 'PH%P_';

use cadastro;
select * from cursos
where nome like 'P_P%';

use cadastro;
select * from cursos
where nome like 'P__T%';

use cadastro;
select * from gafanhotos
where nome like '%Silva%';

use cadastro;
select * from gafanhotos
where nome like '%_Silva%';

use cadastro;
select * from gafanhotos
where nome like '%Silva';

use cadastro;
select * from gafanhotos
where nome like 'Silva%';

use cadastro;
select distinct nacionalidade from gafanhotos
order by nacionalidade;

use cadastro;
select distinct carga from cursos
order by carga;

use cadastro;
select count(*) from cursos;

use cadastro;
select count(*) from cursos
where carga > 40;

use cadastro;
select max(carga) from cursos;

use cadastro;
select max(totaulas) from cursos
where ano = '2016';

use cadastro;
select nome, min(totaulas) from cursos;

use cadastro;
select sum(totaulas) from cursos
where ano = '2016';

use cadastro;
select avg(totaulas) from cursos
where ano ='2016';

use cadastro;
select totaulas, count(*) from cursos
group by totaulas
order by totaulas;

use cadastro;
select ano, count(*) from cursos
group by ano
having count(ano) >= 5
order by count(*) desc;

use cadastro;
select ano, count(*) from cursos
where totaulas > 30
group by ano
having ano > 2013
order by count(*) desc;

use cadastro;
alter table gafanhotos
add column cursopreferido int;

use cadastro;
alter table gafanhotos
add foreign key (cursopreferido)
references cursos(idcurso);

use cadastro;
update gafanhotos
set cursopreferido = '6'
where id = '1';

use cadastro;
delete from cursos 
where idcurso = '28';

use cadastro;
select gafanhotos.nome, gafanhotos.cursopreferido, cursos.nome, cursos.ano
from gafanhotos join cursos
on cursos.idcurso = gafanhotos.cursopreferido;

use cadastro;
select gafanhotos.nome, cursos.nome, cursos.ano
from gafanhotos join cursos
on cursos.idcurso = gafanhotos.cursopreferido
order by gafanhotos.nome;

use cadastro;
select g.nome, c.nome, c.ano
from gafanhotos as g join cursos as c
on c.idcurso = g.cursopreferido
order by g.nome;

use cadastro;
select g.nome, c.nome, c.ano
from gafanhotos as g left join cursos as c
on c.idcurso = g.cursopreferido;

use cadastro;
select g.nome, c.nome, c.ano
from gafanhotos as g right join cursos as c
on c.idcurso = g.cursopreferido;

use cadastro;
create table gafanhoto_assiste_curso
(
    id int not null auto_increment,
    data date,
    idgafanhoto int,
    idcurso int,
    primary key (id),
    foreign key (idgafanhoto) references gafanhotos(id),
    foreign key (idcurso) references cursos (idcurso)
);

use cadastro;
insert into gafanhoto_assiste_curso 
values (default, '2014-03-01', '1', '2');

use cadastro;
select * from gafanhotos g
join gafanhoto_assiste_curso a
on g.id = a.idgafanhoto;

use cadastro;
select g.id, g.nome, a.idgafanhoto, a.idcurso from gafanhotos g
join gafanhoto_assiste_curso a
on g.id = a.idgafanhoto
order by g.nome;

use cadastro;
select g.nome, c.nome from gafanhotos g
join gafanhoto_assiste_curso a
on g.id = a.idgafanhoto
join cursos c
on a.idcurso = c.idcurso
order by g.nome;