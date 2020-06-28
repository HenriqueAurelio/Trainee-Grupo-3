-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jun-2020 às 17:15
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `livraria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Romance'),
(2, 'Ficção'),
(3, 'Ficção científica'),
(4, 'Aventura'),
(5, 'Auto-ajuda'),
(7, 'Catolicismo'),
(8, 'Psicologia'),
(9, 'Drama'),
(11, 'História'),
(12, 'Administração'),
(13, 'Arte');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `preco` varchar(255) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `foto`, `descricao`, `preco`, `categoria_id`, `views`) VALUES
(3, 'O Livro dos Sith', 'star_wars.png', 'Escrito por  	Wallace, Daniel, Novaes, Raquel. ', '60,00', 2, 1),
(53, 'Dom Casmurro', 'dom-casmurro.jpg', 'Machado de Assis', '15,00', 1, 1),
(84, 'Como fazer amigos e influenciar pessoas', 'Como fazer amigos e influenciar pessoas.jpg', 'Escrito por Dale Carnegie. ', '35,00', 9, 1),
(85, 'As Armas da Persuasão', 'As armas da persuasão.jpg', 'Robert B. Ciadini', '27,00', 8, 4),
(86, 'Meninos de Zinco', 'Meninos de Zinco.jpg', 'Svetlana', '50,00', 11, 0),
(87, 'Mindset', 'Mindset.jpg', 'Carol D. Sweck', '30,00', 12, 0),
(88, 'O Poder do Hábito', 'O Poder do Habito.jpg', 'Charles Duhigg', '40,00', 12, 1),
(89, 'Pai Rico Pai Pobre', 'Pai Rico Pai Pobre.jpg', 'Pai Rico Pai Pobre', '32,00', 12, 2),
(90, 'Percy Jackson e a Batalha do Labirinto', 'Percy Jackson A batalha do labirinto.jpg', 'Rick Riordan', '20,00', 2, 0),
(91, 'Percy Jackson e a Maldição do Titã', 'Percy jackson A maldição do titan.jpg', 'Rick Riordan', '20,00', 2, 0),
(92, 'Percy Jackson e o Mar de Monstros', 'Percy Jackson O mar de Monstros.jpg', 'Rick Riordan', '20,00', 2, 0),
(93, 'Percy Jackson e o Último Olimpiano', 'Percy Jackson O Último Olimpiano.jpg', 'Rick Riordan', '20,00', 2, 0),
(94, 'Percy Jackson e o Ladrão de Raios', 'Percy Jackson O ladrão de raios.jpg', 'Rick Riordan', '20,00', 2, 0),
(95, 'Sapiens - Uma Breve História da Humanidade', 'Sapiens  Uma Breve História da Humanidade.jpg', 'Yuval Noah Harari', '35,00', 13, 0),
(96, 'Star Wars - Kenobi', 'Star Wars - Kenobi.jpg', 'John Jackson Miller', '45,00', 2, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`, `nome`) VALUES
(12, 'gabriel.ccarmo@gmail.com', '123', 'Gabriel'),
(13, 'andersonsilva@gmail.com', '123', 'Anderson\r\n'),
(14, 'codejr@gmail.com', '123', 'Code'),
(15, 'andre123@gmail.com', '123', 'André'),
(16, 'joao@gmail.com', '!23', 'João');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_categoria` (`categoria_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `FK_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
