# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 8.0.19)
# Database: livraria
# Generation Time: 2020-06-25 21:41:05 +0000
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
  `nome` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;

INSERT INTO `categorias` (`id`, `nome`)
VALUES
	(1,'Romance'),
	(2,'Ficção'),
	(3,'Ficção cientí­fica'),
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
  `nome` varchar(255) CHARACTER SET utf8 NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8 NOT NULL,
  `descricao` text CHARACTER SET utf8 NOT NULL,
  `preco` varchar(255) CHARACTER SET utf8 NOT NULL,
  `categoria_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_categoria` (`categoria_id`),
  CONSTRAINT `FK_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;

INSERT INTO `produtos` (`id`, `nome`, `foto`, `descricao`, `preco`, `categoria_id`)
VALUES
	(3,'O Livro dos Sith','star_wars.png','Escrito por  	Wallace, Daniel, Novaes, Raquel. DESCUBRA OS INCRÃ­VEIS SEGREDOS DO LADO NEGRO DA FORÃ‡A Ao longo dos sÃ©culos, Ã  medida que os Lordes Sith ascendiam ao poder, alguns deles registravam sua filosofia e seus esquemas para assumir o controle da galÃ¡xia. Ao serem derrotados, esse conhecimento desapareceu. Ou, pelo menos, era o que parecia. Seus escritos foram passados entre Sith selecionados Â— e atÃ© mesmo Jedi Â—, que acrescentaram suas reflexÃµes. Na busca por domÃ­nio, Darth Sidious foi atrÃ¡s do que sobrou dos cinco textos lendÃ¡rios do lado negro e a partir desse conhecimento, escreveu seu prÃ³prio manifesto. O Livro dos Sith revela as raras pÃ¡ginas do universo de Star Wars, uma das maiores sagas de todos os tempos. O leitor vai conhecer os maiores mestres, os armamentos, o vestuÃ¡rio, o surgimento do clÃ£ e segredos obscuros.','60,00',2),
	(53,'Dom Casmurro','dom-casmurro.jpg','Machado de Assis Ã© um dos mais importantes escritores da literatura brasileira. \"Dom Casmurro\" Ã© uma de suas obras-primas. O livro apresenta o relato de Bentinho, que se crÃª traÃ­do pela mulher, Capitu, e pelo seu melhor amigo. Ã‰ com orgulho que esta editora oferece aos seus leitores este romance machadiano.','15,00',1),
	(84,'Como fazer amigos e influenciar pessoas','Como fazer amigos e influenciar pessoas.jpg','Escrito por Dale Carnegie. Um dos maiores clÃ¡ssicos de todos os tempos, Como fazer amigos e influenciar pessoas Ã© considerado a BÃ­blia dos relacionamentos interpessoais.','35,00',9),
	(85,'As Armas da Persuasão','As armas da persuasÃ£o.jpg','Depois de passar anos caindo na lÃ¡bia de vendedores, arrecadadores de doaÃ§Ãµes e operadores de telemarketing, o psicÃ³logo Robert B. Cialdini resolveu se dedicar ao estudo da persuasÃ£o. Ele queria entender quais sÃ£o os fatores que levam uma pessoa a dizer \"sim\" a um pedido e que tÃ©cnicas exploram melhor esses fatores. ','27,00',8),
	(86,'Meninos de Zinco','Meninos de Zinco.jpg','A brutalidade da guerra soviÃ©tico-afegÃ£ Ã© retratada neste livro extraordinÃ¡rio, com o olhar sempre preciso e humano de Svetlana AleksiÃ©vitch.\r\n\r\nEntre 1979 e 1989, as tropas soviÃ©ticas se envolveram em uma guerra devastadora no AfeganistÃ£o, que causou milhares de baixas em ambos os lados. Enquanto a URSS falava de uma missÃ£o de \"manutenÃ§Ã£o da paz\", levas e levas de mortos eram enviadas de volta para casa em caixÃµes de zinco lacrados. Este livro apresenta os testemunhos honestos de soldados, mÃ©dicos, enfermeiras, mÃ£es, esposas e irmÃ£os que descrevem os efeitos duradouros da guerra.','50,00',11),
	(87,'Mindset','Mindset.jpg','Carol S. Dweck, ph.D., professora de psicologia na Universidade Stanford e especialista internacional em sucesso e motivaÃ§Ã£o, desenvolveu, ao longo de dÃ©cadas de pesquisa, um conceito fundamental: a atitude mental com que encaramos a vida, que ela chama de â€œmindsetâ€, Ã© crucial para o sucesso. Dweck revela de forma brilhante como o sucesso pode ser alcanÃ§ado pela maneira como lidamos com nossos objetivos. O mindset nÃ£o Ã© um mero traÃ§o de personalidade, Ã© a explicaÃ§Ã£o de por que somos otimistas ou pessimistas, bem-sucedidos ou nÃ£o. Ele define nossa relaÃ§Ã£o com o trabalho e com as pessoas e a maneira como educamos nossos filhos. Ã‰ um fator decisivo para que todo o nosso potencial seja explorado.','30,00',12),
	(88,'O Poder do Hábito','O Poder do Habito.jpg','Durante os Ãºltimos dois anos, uma jovem transformou quase todos os aspectos de sua vida. Parou de fumar, correu uma maratona e foi promovida. Em um laboratÃ³rio, neurologistas descobriram que os padrÃµes dentro do cÃ©rebro dela mudaram de maneira fundamental. PublicitÃ¡rios da Procter & Gamble observaram vÃ­deos de pessoas fazendo a cama. Tentavam desesperadamente descobrir como vender um novo produto chamado Febreze, que estava prestes a se tornar um dos maiores fracassos na histÃ³ria da empresa. De repente, um deles detecta um padrÃ£o quase imperceptÃ­vel - e, com uma sutil mudanÃ§a na campanha publicitÃ¡ria, Febreze comeÃ§a a vender um bilhÃ£o de dÃ³lares por anos. Um diretor executivo pouco conhecido assume uma das maiores empresas norte-americanas. Seu primeiro passo Ã© atacar um Ãºnico padrÃ£o entre os funcionÃ¡rios - a maneira como lidam com a seguranÃ§a no ambiente de trabalho -, e logo a empresa comeÃ§a a ter o melhor desempenho no Ã­ndice Dow Jones. O que todas essas pessoas tem em comum? Conseguiram ter sucesso focando em padrÃµes que moldam cada aspecto de nossas vidas. Tiveram Ãªxito transformando hÃ¡bitos. Com perspicÃ¡cia e habilidade, Charles Duhigg apresenta um novo entendimento da natureza humana e seu potencial para a transformaÃ§Ã£o.','40,00',12),
	(89,'Pai Rico Pai Pobre','Pai Rico Pai Pobre.jpg','\r\nA escola prepara as crianÃ§as para o mundo real? Essa Ã© a primeira pergunta com a qual o leitor se depara neste livro. O recado Ã© ousado e direto: boa formaÃ§Ã£o e notas altas nÃ£o bastam para assegurar o sucesso de alguÃ©m. O mundo mudou; a maioria dos jovens tem cartÃ£o de crÃ©dito, antes mesmo de concluir os estudos, e nunca teve aula sobre dinheiro, investimentos, juros etc. Ou seja, eles vÃ£o para a escola, mas continuam financeiramente improficientes, despreparados para enfrentar um mundo que valoriza mais as despesas do que a poupanÃ§a.\r\n\r\nPara o autor, o conselho mais perigoso que se pode dar a um jovem nos dias de hoje Ã©: \"VÃ¡ para a escola, tire notas altas e depois procure um trabalho seguro.\" O fato Ã© que agora as regras sÃ£o outras, e nÃ£o existe mais emprego garantido para ninguÃ©m. Pai Rico, Pai Pobre demonstra que a questÃ£o nÃ£o Ã© ser empregado ou empregador, mas ter o controle do prÃ³prio destino ou delegÃ¡-lo a alguÃ©m. Ã‰ essa a tese de Robert Kiyosaki neste livro substancial e visionÃ¡rio. Para ele, a formaÃ§Ã£o proporcionada pelo sistema educacional nÃ£o prepara os jovens para o mundo que encontrarÃ£o depois de formados.','32,00',12),
	(90,'Percy Jackson e a Batalha do Labirinto','Percy Jackson A batalha do labirinto.jpg','O Monte Olimpo estÃ¡ em perigo. Cronos, o perverso titÃ£ que foi destronado e feito em pedaÃ§os pelos doze deuses olimpianos, prepara um retorno triunfal. O primeiro passo de suas tropas serÃ¡ atacar e destruir o campo de treinamento dos herÃ³is, filhos de deuses com mortais, que desde a GrÃ©cia Antiga combatem na linha de frente em defesa dos olimpianos.Para assegurar que o refÃºgio de semideuses, o Acampamento Meio-Sangue, nÃ£o seja invadido, Percy Jackson, Tyson, Annabeth e Grover sÃ£o destacados para uma importante missÃ£o: deter as forÃ§as de Cronos antes que se aproximem do acampamento, no emaranhado de corredores do temido Labirinto de DÃ©dalo â€“ um interminÃ¡vel universo subterrÃ¢neo que, a cada curva, revela as mais aterrorizantes surpresas. Escrito por Rick Riordan','20,00',2),
	(91,'Percy Jackson e a Maldição do Titã','Percy jackson A maldiÃ§Ã£o do titan.jpg','Um chamado do amigo Grover deixa Percy a postos para mais uma missÃ£o: dois novos meios-sangues foram encontrados, e sua ascendÃªncia ainda Ã© desconhecida. Como sempre, Percy sabe que precisarÃ¡ contar com o poder de seus aliados herÃ³is, com sua leal espada Contracorrente... e com uma caroninha da mÃ£e. O que eles ainda nÃ£o sabem Ã© que os jovens descobertos nÃ£o sÃ£o os Ãºnicos em perigo: Cronos, o Senhor dos TitÃ£s, arquitetou um de seus planos mais traiÃ§oeiros, e nossos herÃ³is serÃ£o presas fÃ¡ceis. Um monstro ancestral foi despertado â€“ um ser com poder suficiente para destruir o Olimpo â€“, e Ãrtemis, a Ãºnica deusa capaz de encontrÃ¡-lo, desapareceu. Percy e seus amigos tÃªm apenas uma semana para resgatar a deusa sequestrada e solucionar o mistÃ©rio que ronda o monstro que ela caÃ§ava. Escrito por Rick Riordan','20,00',2),
	(92,'Percy Jackson e o Mar de Monstros','Percy Jackson O mar de Monstros.jpg','O Mar de Monstros Ã© o segundo volume da sÃ©rie Percy Jackson e os olimpianos, best-seller do The New York Times. Nessa nova aventura, Percy e seus amigos estÃ£o em busca do Velocino de Ouro, Ãºnico artefato mÃ¡gico capaz de proteger da destruiÃ§Ã£o seu lugar predileto e, atÃ© entÃ£o, o mais seguro do mundo: o Acampamento Meio-Sangue. Com o envenenamento da Ã¡rvore de Thalia por um inimigo misterioso, as fronteiras mÃ¡gicas que protegem o Acampamento estÃ£o ameaÃ§adas, e Ã© preciso buscar o antÃ­doto. Escrito por Rick Riordan.','20,00',2),
	(93,'Percy Jackson e o último Olimpiano','Percy Jackson O Ãšltimo Olimpiano.jpg','Os meios-sangues passaram o ano inteiro preparando-se para a batalha contra os TitÃ£s, e sabem que as chances de vitÃ³ria sÃ£o pequenas. O exÃ©rcito de Cronos estÃ¡ mais poderoso que nunca, e cada novo deus ou semideus que se une Ã  causa confere mais forÃ§a ao vingativo titÃ£.\r\n\r\nEnquanto os Olimpianos se ocupam de conter a fÃºria do monstro TifÃ£o, Cronos avanÃ§a em direÃ§Ã£o Ã  cidade de Nova York, onde o Monte Olimpo estÃ¡ precariamente vigiado. Agora, apenas Percy Jackson e seu exÃ©rcito de herÃ³is podem deter o Senhor do Tempo. Escrito por Rick Riordan.','20,00',2),
	(94,'Percy Jackson e o Ladrão de Raios','Percy Jackson O ladrÃ£o de raios.jpg','Primeiro volume da saga Percy Jackson e os olimpianos, O ladrÃ£o de raios esteve entre os primeiros lugares na lista das sÃ©ries mais vendidas do The New York Times. O autor conjuga lendas da mitologia grega com aventuras no sÃ©culo XXI. Nelas, os deuses do Olimpo continuam vivos, ainda se apaixonam por mortais e geram filhos metade deuses, metade humanos, como os herÃ³is da GrÃ©cia antiga. Marcados pelo destino, eles dificilmente passam da adolescÃªncia. Poucos conseguem descobrir sua identidade.\r\n\r\nO garoto-problema Percy Jackson Ã© um deles. Tem experiÃªncias estranhas em que deuses e monstros mitolÃ³gicos parecem saltar das pÃ¡ginas dos livros direto para a sua vida. Pior que isso: algumas dessas criaturas estÃ£o bastante irritadas. Um artefato precioso foi roubado do Monte Olimpo e Percy Ã© o principal suspeito. Para restaurar a paz, ele e seus amigos â€“ jovens herÃ³is modernos â€“ terÃ£o de fazer mais do que capturar o verdadeiro ladrÃ£o: precisam elucidar uma traiÃ§Ã£o mais ameaÃ§adora que fÃºria dos deuses. Escrito por Rick Riordan.','20,00',2),
	(95,'Sapiens - Uma Breve História da Humanidade','Sapiens  Uma Breve HistÃ³ria da Humanidade.jpg','O que possibilitou ao Homo sapiens subjugar as demais espÃ©cies? O que nos torna capazes das mais belas obras de arte, dos avanÃ§os cientÃ­ficos mais impensÃ¡veis e das mais horripilantes guerras? Nossa capacidade imaginativa. Somos a Ãºnica espÃ©cie que acredita em coisas que nÃ£o existem na natureza, como Estados, dinheiro e direitos humanos. Partindo dessa ideia, Yuval Noah Harari, doutor em histÃ³ria pela Universidade de Oxford, aborda em Sapiens a histÃ³ria da humanidade sob uma perspectiva inovadora. Explica que o capitalismo Ã© a mais bem-sucedida religiÃ£o, que o imperialismo Ã© o sistema polÃ­tico mais lucrativo, que nÃ³s, humanos modernos, embora sejamos muito mais poderosos que nossos ancestrais, provavelmente nÃ£o somos mais felizes. Um relato eletrizante sobre a aventura de nossa extraordinÃ¡ria espÃ©cie ? de primatas insignificantes a senhores do mundo. Escrito por Yuval Noah Harari. ','35,00',13),
	(96,'Star Wars - Kenobi','Star Wars - Kenobi.jpg','Escrito por John Jackson Miller. A RepÃºblica foi destruÃ­da, e agora a galÃ¡xia Ã© governada pelos terrÃ­veis Sith. Obi-Wan Kenobi, o grande cavaleiro Jedi, perdeu tudo... menos a esperanÃ§a. ApÃ³s os terrÃ­veis acontecimentos que deram fim Ã  RepÃºblica, coube ao grande mestre Jedi Obi-Wan Kenobi a missÃ£o de proteger aquele que pode ser a Ãºltima esperanÃ§a da resistÃªncia ao ImpÃ©rio. Vivendo entre fazendeiros no remoto e desÃ©rtico planeta Tatooine, nos confins da galÃ¡xia, o que Obi-Wan mais deseja Ã© manter-se no completo anonimato e, para isso, evita o contato com os moradores do local. No entanto, todos esses esforÃ§os podem ser em vÃ£o quando o â€œBen Malucoâ€, como o cavaleiro passa a ser conhecido, se vÃª envolvido na luta pela sobrevivÃªncia dos habitantes de um oÃ¡sis esquecido no meio do deserto e em seu conflito contra o perigoso Povo da Areia.','45,00',2);

/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table usuarios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(25) CHARACTER SET utf8 NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;

INSERT INTO `usuarios` (`id`, `email`, `senha`, `nome`)
VALUES
	(12,'gabriel.ccarmo@gmail.com','123','Gabriel'),
	(13,'andersonsilva@gmail.com','123','Anderson\r\n'),
	(14,'codejr@gmail.com','123','Code');

/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
