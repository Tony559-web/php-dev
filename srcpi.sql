create database projeto;
use projeto;

CREATE TABLE `projeto`.`aluno` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `NOME` VARCHAR(100) NOT NULL,
  `ra` INT NULL,
  `email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));
  
  insert into aluno (nome, ra, email) values
                   ('Anthony', 12345, 'anthony,gabriel@sempreceub.com');
				   
select * from aluno;

insert into aluno (nome, ra, email) values
                   ('Anthony', 12345, 'anthony,gabriel@sempreceub.com');
insert into aluno (nome, ra, email) values
                   ('José', null, 'jose@gmail.com');
insert into aluno (nome, ra, email) values
                   ('maria', 5555, 'maria@gmail.com');
insert into aluno (nome, ra, email) values
                   ('Pedro', 5666, 'pedro@gmail.com');
delete from aluno
where id =3;
insert into aluno (nome, ra, email) values
                   ('maria', 5555, 'maria@gmail.com');
update aluno set ra = 88888 where id = 2;

drop table aluno








include_once("conexo.php");

    require("conexao.php");
    require_once("conexao.php");

























