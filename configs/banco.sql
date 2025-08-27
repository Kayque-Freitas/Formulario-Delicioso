CREATE DATABASE IF NOT EXISTS `noite`;
USE `noite`;

CREATE TABLE IF NOT EXISTS `aluno` (
  `id` int NOT NULL,
  `rm` int DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `avatar` varchar(50) DEFAULT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rm` (`rm`)
) 