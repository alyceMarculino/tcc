-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Maio-2021 às 15:10
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
(2, 'Segunda', '07:00', '08:30', 'Biblioteca', 6),
(3, 'Segunda', '09:35', '11:05', 'Biblioteca', 9),
(4, 'Segunda', '13:00', '15:35', 'Biblioteca', 20),
(5, 'Segunda', '14:30', '15:35', 'Biblioteca', 2),
(6, 'Segunda', '14:30', '17:50', 'Biblioteca', 22),
(7, 'Segunda', '07:45', '08:30', 'Biblioteca', 31),
(8, 'Segunda', '08:30', '09:35', 'Biblioteca', 7),
(9, 'Segunda', '09:35', '11:50', 'Biblioteca', 3),
(10, 'Segunda', '13:00', '14:30', 'Biblioteca', 4),
(11, 'Terça', '07:00', '08:30', 'Biblioteca', 4),
(12, 'Terça', '11:05', '11:50', 'Biblioteca', 4),
(13, 'Terça', '13:00', '14:30', 'Biblioteca', 5),
(14, 'Terça', '13:00', '15:35', 'Biblioteca', 5),
(15, 'Terça', '13:00', '14:30', 'Biblioteca', 5),
(16, 'Terça', '07:00', '08:30', 'Biblioteca', 6),
(17, 'Terça', '08:30', '10:20', 'Biblioteca', 6),
(18, 'Terça', '07:00', '08:30', 'Biblioteca', 6),
(19, 'Terça', '14:30', '15:35', 'Biblioteca', 7),
(20, 'Terça', '13:00', '14:30', 'Biblioteca', 7),
(21, 'Quarta', '13:00', '14:30', 'Biblioteca', 7),
(22, 'Quarta', '13:00', '14:30', 'Biblioteca', 8),
(23, 'Quarta', '13:00', '14:30', 'Biblioteca', 8),
(24, 'Quarta', '07:00', '08:30', 'Biblioteca', 8),
(25, 'Quarta', '08:30', '09:35', 'Biblioteca', 9),
(26, 'Quarta', '13:00', '14:30', 'Biblioteca', 9),
(27, 'Quarta', '08:30', '09:35', 'Biblioteca', 9),
(28, 'Quarta', '08:30', '09:35', 'Biblioteca', 10),
(29, 'Quarta', '08:30', '09:35', 'Biblioteca', 10),
(30, 'Quarta', '13:00', '15:35', 'Biblioteca', 10),
(31, 'Quinta', '08:30', '09:35', 'Biblioteca', 11),
(32, 'Quinta', '08:30', '09:35', 'Biblioteca', 110),
(33, 'Quinta', '09:35', '11:05', 'Biblioteca', 111),
(34, 'Quinta', '15:35', '17:05', 'Biblioteca', 112),
(35, 'Quinta', '08:30', '09:35', 'Biblioteca', 112),
(36, 'Quinta', '08:30', '09:35', 'Biblioteca', 2),
(37, 'Quinta', '15:35', '17:05', 'Biblioteca', 23),
(38, 'Quinta', '15:35', '17:05', 'Biblioteca', 23),
(39, 'Quinta', '15:35', '17:05', 'Biblioteca', 23),
(40, 'Quinta', '08:30', '09:35', 'Biblioteca', 24),
(41, 'Sexta', '08:30', '09:15', 'Biblioteca', 24),
(42, 'Sexta', '09:35', '11:50', 'Biblioteca', 17),
(43, 'Sexta', '15:35', '17:05', 'Biblioteca', 16),
(44, 'Sexta', '08:30', '09:15', 'Biblioteca', 15),
(45, 'Sexta', '15:35', '17:05', 'Biblioteca', 115),
(46, 'Sexta', '15:35', '17:05', 'Biblioteca', 29),
(47, 'Sexta', '15:35', '17:05', 'Biblioteca', 4),
(48, 'Sexta', '15:35', '17:05', 'Biblioteca', 115),
(49, 'Sexta', '15:35', '17:05', 'Biblioteca', 29),
(50, 'Sexta', '15:35', '17:05', 'Biblioteca', 4),
(51, 'Quinta', '15:35', '17:05', 'Biblioteca', 12),
(52, 'Quinta', '08:30', '09:35', 'Biblioteca', 12),
(53, 'Terça', '13:00', '14:30', 'Biblioteca', 13),
(54, 'Quinta', '09:35', '11:05', 'Biblioteca', 13),
(55, 'Segunda', '09:35', '11:05', 'Biblioteca', 13),
(56, 'Segunda', '07:00', '08:30', 'Biblioteca', 14),
(57, 'Segunda', '14:30', '15:35', 'Biblioteca', 14),
(58, 'Segunda', '07:00', '08:30', 'Biblioteca', 18),
(59, 'Segunda', '13:00', '15:35', 'Biblioteca', 18),
(60, 'Segunda', '14:30', '17:50', 'Biblioteca', 19),
(61, 'Segunda', '07:45', '08:30', 'Biblioteca', 19),
(62, 'Segunda', '08:30', '09:35', 'Biblioteca', 21),
(63, 'Segunda', '09:35', '11:50', 'Biblioteca', 23),
(64, 'Segunda', '13:00', '14:30', 'Biblioteca', 24),
(65, 'Terça', '07:00', '08:30', 'Biblioteca', 24),
(66, 'Terça', '11:05', '11:50', 'Biblioteca', 24),
(67, 'Terça', '13:00', '14:30', 'Biblioteca', 25),
(68, 'Terça', '13:00', '15:35', 'Biblioteca', 25),
(69, 'Terça', '13:00', '14:30', 'Biblioteca', 25),
(70, 'Terça', '07:00', '08:30', 'Biblioteca', 26),
(71, 'Terça', '08:30', '10:20', 'Biblioteca', 26),
(72, 'Terça', '07:00', '08:30', 'Biblioteca', 26),
(73, 'Terça', '14:30', '15:35', 'Biblioteca', 27),
(74, 'Quarta', '13:00', '14:30', 'Biblioteca', 27),
(75, 'Quarta', '13:00', '14:30', 'Biblioteca', 28),
(76, 'Quarta', '13:00', '14:30', 'Biblioteca', 28),
(77, 'Quarta', '08:30', '09:35', 'Biblioteca', 30),
(78, 'Quarta', '08:30', '09:35', 'Biblioteca', 30),
(79, 'Quarta', '13:00', '15:35', 'Biblioteca', 30),
(80, 'Quarta', '07:00', '08:30', 'Biblioteca', 38),
(81, 'Quarta', '08:30', '09:35', 'Biblioteca', 39),
(82, 'Quarta', '13:00', '14:30', 'Biblioteca', 39),
(83, 'Quarta', '08:30', '09:35', 'Biblioteca', 39),
(84, 'Quinta', '08:30', '09:35', 'Biblioteca', 31),
(85, 'Quinta', '08:30', '09:35', 'Biblioteca', 31),
(86, 'Quinta', '08:30', '09:35', 'Biblioteca', 32),
(87, 'Quinta', '15:35', '17:05', 'Biblioteca', 33),
(88, 'Quinta', '15:35', '17:05', 'Biblioteca', 33),
(89, 'Quinta', '15:35', '17:05', 'Biblioteca', 33),
(90, 'Quinta', '08:30', '09:35', 'Biblioteca', 34),
(91, 'Sexta', '08:30', '09:15', 'Biblioteca', 34),
(92, 'Sexta', '09:35', '11:50', 'Biblioteca', 37),
(93, 'Sexta', '15:35', '17:05', 'Biblioteca', 36),
(94, 'Sexta', '08:30', '09:15', 'Biblioteca', 35),
(95, 'Sexta', '15:35', '17:05', 'Biblioteca', 35),
(96, 'Sexta', '15:35', '17:05', 'Biblioteca', 40),
(97, 'Sexta', '15:35', '17:05', 'Biblioteca', 44),
(98, 'Sexta', '15:35', '17:05', 'Biblioteca', 45),
(99, 'Sexta', '15:35', '17:05', 'Biblioteca', 49),
(100, 'Sexta', '15:35', '17:05', 'Biblioteca', 44);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

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
