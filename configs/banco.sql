CREATE DATABASE kayqueFreitas

USE kayqueFreitas;

CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rm` int DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `avatar` varchar(50) DEFAULT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rm` (`rm`)
) 