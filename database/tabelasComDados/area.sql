-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Maio-2021 às 15:12
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `permanencia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `area`
--

CREATE TABLE `area` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `area`
--

INSERT INTO `area` (`id`, `nome`, `descricao`) VALUES
(1, 'Cursos de Informática', 'Técnico Integrado e Graduação '),
(2, 'Cursos de Eletrotécnica', 'Técnico Integrado'),
(3, 'Cursos de Mecânica', 'Técnico Integrado'),
(5, 'Português, Inglês e Espanhol', 'Materia Comum entre os cursos'),
(7, 'Educação Física', 'Materia Comum entre os cursos'),
(8, 'Arte', 'Materia Comum entre os cursos'),
(9, 'História', 'Materia Comum entre os cursos'),
(10, 'Geografia', 'Materia Comum entre os cursos'),
(11, 'Matemática', 'Materia Comum entre os cursos'),
(12, 'Física', 'Materia Comum entre os cursos'),
(13, 'Química', 'Materia Comum entre os cursos'),
(14, 'Biologia', 'Materia Comum entre os cursos'),
(15, 'Filosofia', 'Materia Comum entre os cursos'),
(16, 'Sociologia', 'Materia Comum entre os cursos'),
(17, 'Educação Especial ', 'Educação Especial'),
(18, 'Pedagogia', 'Matéria Especial'),
(19, 'Administração', 'Matéria Especial'),
(20, 'Metodologia', 'Matéria Especial'),
(21, 'Piano/Música', 'Matéria Especial');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `area`
--
ALTER TABLE `area`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
