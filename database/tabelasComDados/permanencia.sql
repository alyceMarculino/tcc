-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Jun-2021 às 17:40
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
-- Estrutura da tabela `permanencia`
--

CREATE TABLE `permanencia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dia` varchar(11) NOT NULL,
  `horaInicio` varchar(5) NOT NULL,
  `horaFinal` varchar(5) NOT NULL,
  `sala` varchar(11) NOT NULL,
  `professor_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `permanencia`
--

INSERT INTO `permanencia` (`id`, `dia`, `horaInicio`, `horaFinal`, `sala`, `professor_id`) VALUES
(1, 'Segunda', '07:00', '08:30', 'Biblioteca', 1),
(2, 'Segunda', '07:00', '08:30', 'Biblioteca', 2),
(3, 'Segunda', '07:00', '08:30', 'Biblioteca', 3),
(4, 'Segunda', '07:00', '08:30', 'Biblioteca', 4),
(5, 'Segunda', '07:00', '08:30', 'Biblioteca', 5),
(6, 'Segunda', '07:00', '08:30', 'Biblioteca', 6),
(7, 'Segunda', '14:30', '15:35', 'Biblioteca', 7),
(8, 'Segunda', '09:35', '11:05', 'Biblioteca', 8),
(9, 'Segunda', '08:30', '09:35', 'Biblioteca', 9),
(10, 'Quarta', '13:00', '15:35', 'Biblioteca', 10),
(11, 'Quinta', '08:30', '09:35', 'Biblioteca', 11),
(12, 'Quinta', '15:35', '17:05', 'Biblioteca', 12),
(13, 'Segunda', '09:35', '11:50', 'Biblioteca', 13),
(14, 'Segunda', '13:00', '14:30', 'Biblioteca', 14),
(15, 'Sexta', '08:30', '09:15', 'Biblioteca', 15),
(16, 'Sexta', '15:35', '17:05', 'Biblioteca', 16),
(17, 'Sexta', '09:35', '11:50', 'Biblioteca', 17),
(18, 'Terça', '13:00', '14:30', 'Biblioteca', 18),
(19, 'Terça', '07:00', '08:30', 'Biblioteca', 19),
(20, 'Segunda', '13:00', '15:35', 'Biblioteca', 20),
(21, 'Segunda', '08:30', '09:35', 'Biblioteca', 21),
(22, 'Segunda', '14:30', '17:50', 'Biblioteca', 22),
(23, 'Segunda', '09:35', '11:50', 'Biblioteca', 23),
(24, 'Terça', '07:00', '08:30', 'Biblioteca', 24),
(25, 'Terça', '13:00', '15:35', 'Biblioteca', 25),
(26, 'Terça', '08:30', '10:20', 'Biblioteca', 26),
(27, 'Quarta', '13:00', '14:30', 'Biblioteca', 27),
(28, 'Quarta', '13:00', '14:30', 'Biblioteca', 28),
(29, 'Quarta', '13:00', '14:30', 'Biblioteca', 29),
(30, 'Quarta', '13:00', '14:30', 'Biblioteca', 30),
(31, 'Segunda', '07:45', '08:30', 'Biblioteca', 31),
(32, 'Terça', '13:00', '14:30', 'Biblioteca', 32),
(33, 'Quarta', '13:00', '14:30', 'Biblioteca', 33),
(34, 'Terça', '11:05', '11:50', 'Biblioteca', 34),
(35, 'Terça', '13:00', '14:30', 'Biblioteca', 35),
(36, 'Terça', '07:00', '08:30', 'Biblioteca', 36),
(37, 'Terça', '14:30', '15:35', 'Biblioteca', 37),
(38, 'Quarta', '13:00', '14:30', 'Biblioteca', 38),
(39, 'Quarta', '08:30', '09:35', 'Biblioteca', 39),
(40, 'Quarta', '13:00', '14:30', 'Biblioteca', 40),
(41, 'Quarta', '07:00', '08:30', 'Biblioteca', 41),
(42, 'Quarta', '13:00', '14:30', 'Biblioteca', 42),
(43, 'Quarta', '08:30', '09:35', 'Biblioteca', 43),
(44, 'Quarta', '08:30', '09:35', 'Biblioteca', 44),
(45, 'Quarta', '08:30', '09:35', 'Biblioteca', 45),
(46, 'Sexta', '15:35', '17:05', 'Biblioteca', 46),
(47, 'Sexta', '15:35', '17:05', 'Biblioteca', 47),
(48, 'Segunda', '13:00', '15:35', 'Biblioteca', 48),
(49, 'Sexta', '15:35', '17:05', 'Biblioteca', 49),
(50, 'Quinta', '08:30', '09:35', 'Biblioteca', 50),
(51, 'Quinta', '08:30', '09:35', 'Biblioteca', 52),
(52, 'Quinta', '15:35', '17:05', 'Biblioteca', 51),
(53, 'Quinta', '15:35', '17:05', 'Biblioteca', 53),
(54, 'Quinta', '08:30', '09:35', 'Biblioteca', 54),
(55, 'Quinta', '15:35', '17:05', 'Biblioteca', 55),
(56, 'Sexta', '08:30', '09:15', 'Biblioteca', 56),
(57, 'Sexta', '15:35', '17:05', 'Biblioteca', 57),
(58, 'Segunda', '07:00', '08:30', 'Biblioteca', 58),
(59, 'Sexta', '15:35', '17:05', 'Biblioteca', 59),
(60, 'Sexta', '15:35', '17:05', 'Biblioteca', 60),
(61, 'Quinta', '09:35', '11:05', 'Biblioteca', 61),
(62, 'Quinta', '08:30', '09:35', 'Biblioteca', 62),
(63, 'Terça', '13:00', '14:30', 'Biblioteca', 63),
(64, 'Sexta', '15:35', '17:05', 'Biblioteca', 64),
(65, 'Segunda', '09:35', '11:05', 'Biblioteca', 65),
(66, 'Segunda', '07:00', '08:30', 'Biblioteca', 66),
(67, 'Segunda', '14:30', '15:35', 'Biblioteca', 67),
(68, 'Segunda', '14:30', '17:50', 'Biblioteca', 68),
(69, 'Segunda', '07:45', '08:30', 'Biblioteca', 69),
(70, 'Segunda', '13:00', '14:30', 'Biblioteca', 70),
(71, 'Terça', '11:05', '11:50', 'Biblioteca', 71),
(72, 'Terça', '13:00', '15:35', 'Biblioteca', 72),
(73, 'Terça', '13:00', '14:30', 'Biblioteca', 73),
(74, 'Terça', '07:00', '08:30', 'Biblioteca', 74),
(75, 'Terça', '13:00', '14:30', 'Biblioteca', 75),
(76, 'Terça', '07:00', '08:30', 'Biblioteca', 76),
(77, 'Terça', '14:30', '15:35', 'Biblioteca', 77),
(78, 'Quarta', '13:00', '14:30', 'Biblioteca', 78),
(79, 'Terça', '08:30', '10:20', 'Biblioteca', 79),
(80, 'Terça', '07:00', '08:30', 'Biblioteca', 80),
(81, 'Quinta', '08:30', '09:35', 'Biblioteca', 81),
(82, 'Quinta', '08:30', '09:35', 'Biblioteca', 82),
(83, 'Quinta', '15:35', '17:05', 'Biblioteca', 83),
(84, 'Sexta', '08:30', '09:15', 'Biblioteca', 84),
(85, 'Sexta', '08:30', '09:15', 'Biblioteca', 85),
(86, 'Sexta', '15:35', '17:05', 'Biblioteca', 86),
(87, 'Sexta', '09:35', '11:50', 'Biblioteca', 87),
(88, 'Quarta', '08:30', '09:35', 'Biblioteca', 88),
(89, 'Quarta', '08:30', '09:35', 'Biblioteca', 89),
(90, 'Quarta', '13:00', '15:35', 'Biblioteca', 90),
(91, 'Quinta', '08:30', '09:35', 'Biblioteca', 91),
(92, 'Quarta', '07:00', '08:30', 'Biblioteca', 92),
(93, 'Quinta', '15:35', '17:05', 'Biblioteca', 93),
(94, 'Quinta', '08:30', '09:35', 'Biblioteca', 94),
(95, 'Sexta', '15:35', '17:05', 'Biblioteca', 95),
(96, 'Quarta', '08:30', '09:35', 'Biblioteca', 96),
(97, 'Quarta', '13:00', '14:30', 'Biblioteca', 97),
(98, 'Quarta', '08:30', '09:35', 'Biblioteca', 98),
(99, 'Quinta', '15:35', '17:05', 'Biblioteca', 99),
(100, 'Quinta', '09:35', '11:05', 'Biblioteca', 100),
(101, 'Quinta', '09:35', '11:05', 'Biblioteca', 101),
(102, 'Quinta', '09:35', '11:05', 'Biblioteca', 102),
(103, 'Quinta', '09:35', '11:05', 'Biblioteca', 103),
(104, 'Quinta', '09:35', '11:05', 'Biblioteca', 104),
(105, 'Quinta', '09:35', '11:05', 'Biblioteca', 105),
(106, 'Quinta', '09:35', '11:05', 'Biblioteca', 106),
(107, 'Quinta', '09:35', '11:05', 'Biblioteca', 107),
(108, 'Quinta', '09:35', '11:05', 'Biblioteca', 108),
(109, 'Quinta', '09:35', '11:05', 'Biblioteca', 109),
(110, 'Quinta', '09:35', '11:05', 'Biblioteca', 110),
(111, 'Quinta', '09:35', '11:05', 'Biblioteca', 111),
(112, 'Quinta', '15:35', '17:05', 'Biblioteca', 112),
(113, 'Quinta', '08:30', '09:35', 'Biblioteca', 113),
(114, 'Quinta', '08:30', '09:35', 'Biblioteca', 114),
(115, 'Sexta', '15:35', '17:05', 'Biblioteca', 115);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `permanencia`
--
ALTER TABLE `permanencia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_professor_permanencia` (`professor_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `permanencia`
--
ALTER TABLE `permanencia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `permanencia`
--
ALTER TABLE `permanencia`
  ADD CONSTRAINT `fk_professor_permanencia` FOREIGN KEY (`professor_id`) REFERENCES `professor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
