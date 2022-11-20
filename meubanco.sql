CREATE database `php-tabela`;

CREATE TABLE `php-tabela`.`alunos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(140) NOT NULL,
  `cidade` VARCHAR(145) NOT NULL,
  `matricula` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));

INSERT INTO `php-tabela`.`alunos` (`nome`, `cidade`, `matricula`) VALUES ('aluno 1', 'cidade 1', '1');
INSERT INTO `php-tabela`.`alunos` (`nome`, `cidade`, `matricula`) VALUES ('aluno 2', 'cidade 2', '2');
INSERT INTO `php-tabela`.`alunos` (`nome`, `cidade`, `matricula`) VALUES ('aluno 3', 'cidade 3', '3');
INSERT INTO `php-tabela`.`alunos` (`nome`, `cidade`, `matricula`) VALUES ('aluno 4', 'cidade 4', '4');