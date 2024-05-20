-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Abr-2023 às 18:08
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `frases`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `frases_filmes`
--

CREATE TABLE `frases_filmes` (
  `id` int(11) NOT NULL,
  `frase` varchar(255) NOT NULL,
  `filme` varchar(255) NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `frases_filmes`
--

INSERT INTO `frases_filmes` (`id`, `frase`, `filme`, `ano`) VALUES
(1, 'Que a força esteja com você.', 'Star Wars: Episódio IV - Uma Nova Esperança', 1977),
(2, 'Toto, eu tenho a sensação de que não estamos mais no Kansas.', 'O Mágico de Oz', 1939),
(3, 'A vida é como uma caixa de chocolates, você nunca sabe o que vai encontrar.', 'Forrest Gump', 1994),
(4, 'O que acontece em Vegas, fica em Vegas.', 'Se Beber, Não Case!', 2009),
(5, 'Com grandes poderes vêm grandes responsabilidades.', 'Homem-Aranha', 2002),
(6, 'Até a vista, baby.', 'O Exterminador do Futuro 2: O Julgamento Final', 1991),
(7, 'Nós sempre teremos Paris.', 'Casablanca', 1942),
(8, 'A estrada da vida é feita de altos e baixos.', 'Rocky', 1976),
(9, 'Eu amo o cheiro de napalm pela manhã.', 'Apocalypse Now', 1979),
(10, 'Eu sou o rei do mundo!', 'Titanic', 1997),
(11, 'Hasta la vista, baby.', 'O Exterminador do Futuro 2: O Julgamento Final', 1991),
(12, 'May the Force be with you.', 'Star Wars: Episódio IV - Uma Nova Esperança', 1977),
(13, 'Aqui está Johnny!', 'O Iluminado', 1980),
(14, 'Houston, we have a problem.', 'Apollo 13', 1995),
(15, 'Eles podem tirar nossas vidas, mas nunca poderão tirar nossa liberdade!', 'Coração Valente', 1995),
(16, 'Elementar, meu caro Watson.', 'As Aventuras de Sherlock Holmes', 1939),
(17, 'Eu vejo gente morta.', 'O Sexto Sentido', 1999),
(18, 'Here’s looking at you, kid.', 'Casablanca', 1942),
(19, 'Meu precioso.', 'O Senhor dos Anéis: A Sociedade do Anel', 2001),
(20, 'Para o infinito e além!', 'Toy Story', 1995);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `frases_filmes`
--
ALTER TABLE `frases_filmes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `frases_filmes`
--
ALTER TABLE `frases_filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
