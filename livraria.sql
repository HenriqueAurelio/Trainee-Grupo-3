# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 8.0.19)
# Database: livraria
# Generation Time: 2020-06-26 02:26:38 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categorias
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;

INSERT INTO `categorias` (`id`, `nome`)
VALUES
	(1,'Romance'),
	(2,'Ficção'),
	(3,'Ficção científica'),
	(4,'Aventura'),
	(5,'Auto-ajuda'),
	(7,'Catolicismo'),
	(8,'Psicologia'),
	(9,'Drama'),
	(11,'História'),
	(12,'Administração'),
	(13,'Arte');

/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table produtos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `produtos`;

CREATE TABLE `produtos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `preco` varchar(255) NOT NULL,
  `categoria_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_categoria` (`categoria_id`),
  CONSTRAINT `FK_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;

INSERT INTO `produtos` (`id`, `nome`, `foto`, `descricao`, `preco`, `categoria_id`)
VALUES
	(3,'O Livro dos Sith','star_wars.png','Escrito por  	Wallace, Daniel, Novaes, Raquel. ','60,00',2),
	(53,'Dom Casmurro','dom-casmurro.jpg','Machado de Assis','15,00',1),
	(84,'Como fazer amigos e influenciar pessoas','Como fazer amigos e influenciar pessoas.jpg','Escrito por Dale Carnegie. ','35,00',9),
	(85,'As Armas da Persuasão','As armas da persuasÃ£o.jpg','Robert B. Ciadini','27,00',8),
	(86,'Meninos de Zinco','Meninos de Zinco.jpg','Svetlana','50,00',11),
	(87,'Mindset','Mindset.jpg','Carol D. Sweck','30,00',12),
	(88,'O Poder do Hábito','O Poder do Habito.jpg','Charles Duhigg','40,00',12),
	(89,'Pai Rico Pai Pobre','Pai Rico Pai Pobre.jpg','Pai Rico Pai Pobre','32,00',12),
	(90,'Percy Jackson e a Batalha do Labirinto','Percy Jackson A batalha do labirinto.jpg','Rick Riordan','20,00',2),
	(91,'Percy Jackson e a Maldição do Titã','Percy jackson A maldiÃ§Ã£o do titan.jpg','Rick Riordan','20,00',2),
	(92,'Percy Jackson e o Mar de Monstros','Percy Jackson O mar de Monstros.jpg','Rick Riordan','20,00',2),
	(93,'Percy Jackson e o Último Olimpiano','Percy Jackson O Ãšltimo Olimpiano.jpg','Rick Riordan','20,00',2),
	(94,'Percy Jackson e o Ladrão de Raios','Percy Jackson O ladrÃ£o de raios.jpg','Rick Riordan','20,00',2),
	(95,'Sapiens - Uma Breve História da Humanidade','Sapiens  Uma Breve HistÃ³ria da Humanidade.jpg','Yuval Noah Harari','35,00',13),
	(96,'Star Wars - Kenobi','Star Wars - Kenobi.jpg','John Jackson Miller','45,00',2);

/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table usuarios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;

INSERT INTO `usuarios` (`id`, `email`, `senha`, `nome`)
VALUES
	(12,'gabriel.ccarmo@gmail.com','123','Gabriel'),
	(13,'andersonsilva@gmail.com','123','Anderson\r\n'),
	(14,'codejr@gmail.com','123','Code'),
	(15,'andre123@gmail.com','123','André'),
	(16,'joao@gmail.com','!23','João');

/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
