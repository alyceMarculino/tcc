-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Maio-2021 às 15:11
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
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(150) NOT NULL,
  `nome_usual` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `area_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nome`, `nome_usual`, `email`, `area_id`) VALUES
(1, 'Adair da Silva Oliveira Júnior', 'Adair Júnior', 'adair.oliveira@ifms.edu.br', 1),
(2, 'Alexandre Soares da Silva', 'Alexandre Silva', 'alexandre.silva@ifms.edu.br', 1),
(3, 'Cassima Zatorre Ortegosa', 'Cassima Ortegosa', 'cassima.ortegosa@ifms.edu.br', 1),
(4, 'Celeny Fernandes Alves', 'Celeny Alves', 'celeny.alves@ifms.edu.br', 1),
(5, 'Claudia Santos Fernandes', 'Claudia Fernandes', 'claudia.fernandes@ifms.edu.br', 1),
(6, 'Eder de Souza Rodrigues', 'Eder Rodrigues', 'eder.rodrigues@ifms.edu.br', 1),
(7, 'Emerson Augusto Miotto Corazza', 'Emerson Corazza', 'emerson.corazza@ifms.edu.br', 1),
(8, 'Fábio Luiz Faria da Silva', 'Fábio Silva', 'fabio.silva@ifms.edu.br', 1),
(9, 'Gilberto Astolfi', 'Gilberto Astolfi', 'gilberto.astolfi@ifms.edu.br', 1),
(10, 'Ivoneis Macedo Duarte', 'Ivoneis Duarte', 'ivoneis.duarte@ifms.edu.br', 1),
(11, 'Jeferson Velasques Rodrigues', 'Jeferson Rodrigues', 'jeferson.rodrigues@ifms.edu.br', 1),
(12, 'Jiyan Yari', 'Jiyan Yari', 'jiyan.yari@ifms.edu.br', 1),
(13, 'Jonathas Leontino Medina', 'Jonathas Medina', 'jonathas.medina@ifms.edu.br', 1),
(14, 'Lia Nara Balta Quinta', 'Lia Quinta', 'lia.quinta@ifms.edu.br', 1),
(15, 'Luiz Fernando Delboni Lomba', 'Luiz Lomba', 'luiz.lomba@ifms.edu.br', 1),
(16, 'Marcelo de Oliveira', 'Marcelo de Oliveira', 'marcelo.oliveira@ifms.edu.br', 1),
(17, 'Márcio Artacho Peres', 'Márcio Peres', 'marcio.peres@ifms.edu.br', 1),
(18, 'Marcio Osshiro', 'Marcio Osshiro', 'marcio.osshiro@ifms.edu.br', 1),
(19, 'Rodrigo Andrade Cardoso', 'Rodrigo Andrade Cardoso', 'rodrigo.cardoso@ifms.edu.br', 1),
(20, 'Thales Farias Duarte', 'Thales Duarte', 'thales.duarte@ifms.edu.br', 1),
(21, 'Vanir Garcia', 'Vanir Garcia', 'vanir.garcia@ifms.edu.br', 1),
(22, 'Victor Augusto Merli Oliveira Lima', 'Victor Lima', 'victor.lima@ifms.edu.br', 1),
(23, 'Wesley Eiji Sanches Kanashiro', 'Wesley Kanashiro', 'wesley.kanashiro@ifms.edu.br', 1),
(24, 'Wiliam Ricardo Correia Dias', 'Wiliam Dias', 'wiliam.dias@ifms.edu.br', 1),
(25, 'Mauro Conti Pereira', 'Mauro Pereira', 'mauro.pereira@ifms.edu.br', 2),
(26, 'Rhasla Ramos Abrao Wanderley', 'Rhasla Wanderley', 'rhasla.abrao@ifms.edu.br', 2),
(27, 'Thiago Alexandre Prado', 'Thiago Prado', 'thiago.prado@ifms.edu.br', 2),
(28, 'Angelo Cesar de Lourenço', 'Angelo Lourenço', 'angelo.lourenco@ifms.edu.br', 2),
(29, 'Carla Maria Badin Guizado', 'Carla Guizado', 'carla.guizado@ifms.edu.br', 2),
(30, 'David Denner Dias Quinelato', 'David Quinelato', 'david.quinelato@ifms.edu.br', 2),
(31, 'Fernando Antonio Camargo Guimarães', 'Fernando Guimarães', 'fernando.guimaraes@ifms.edu.br', 2),
(32, 'João Cesar Okumoto', 'João Okumoto', 'joao.okumoto@ifms.edu.br', 2),
(33, 'Marco Antonio de Arruda Cortez', 'Marco Cortez', 'marco.cortez@ifms.edu.br', 2),
(34, 'Célio Gianelli Pinheiro', 'Célio Pinheiro', 'celio.pinheiro@ifms.edu.br', 3),
(35, 'Fabiano Pagliosa Branco', 'Fabiano Branco', 'fabiano.branco@ifms.edu.br', 3),
(36, 'Gustavo Aparecido Pita Baggio', 'Gustavo Baggio', 'gustavo.baggio@ifms.edu.br', 3),
(37, 'Marco Aurélio Zonin', 'Marco Zonin', 'marco.zonin@ifms.edu.br', 3),
(38, 'Marco Hiroshi Naka', 'Marco Naka', 'marco.naka@ifms.edu.br', 3),
(39, 'Matheus Piazzalunga Neivock', 'Matheus Neivock', 'matheus.neivock@ifms.edu.br', 3),
(40, 'Paulo César de Oliveira', 'Paulo Oliveira', 'paulo.oliveira@ifms.edu.br', 3),
(41, 'Roberti Andre da Silva', 'Roberti Silva', 'roberti.silva@ifms.edu.br', 3),
(42, 'Andreia Dias de Souza', 'Andreia Souza', 'andreia.souza@ifms.edu.br', 5),
(43, 'Aneilza de Carvalho Ferreira', 'Aneilza Ferreira', 'aneilza.ferreira@ifms.edu.br', 5),
(44, 'Arnaldo Pinheiro Mont\'Alvão Júnior', 'Arnaldo Júnior', 'arnaldo.montalvao@ifms.edu.br', 5),
(45, 'Ayla Lizandra Campos de Vasconcellos', 'Ayla Vasconcellos', 'ayla.vasconcellos@ifms.edu.br', 5),
(46, 'Beatriz Aparecida Alencar', 'Beatriz Alencar', 'beatriz.alencar@ifms.edu.br', 5),
(47, 'Fernanda Belarmino de Santana', 'Fernanda Santana', 'fernanda.santana@ifms.edu.br', 5),
(48, 'Flavio Amorim da Rocha', 'Flavio Rocha', 'flavio.rocha@ifms.edu.br', 5),
(49, 'Isabella Saliba Pereira Chilante', 'Isabella Chilante', 'isabella.pereira@ifms.edu.br', 5),
(50, 'Isaias Leonidio Farias', 'Isaias Farias', 'isaias.farias@ifms.edu.br', 5),
(51, 'Jaqueline Alonso Braga de Oliveira', 'Jaqueline Oliveira', 'jaqueline.oliveira@ifms.edu.br', 5),
(52, 'Jocimara Paiva Grillo', 'Jocimara Grillo', 'jocimara.grillo@ifms.edu.br', 5),
(53, 'Letícia Barbosa da Silva Cavalcante', 'Letícia Cavalcante', 'leticia.cavalcanti@ifms.edu.br', 5),
(54, 'Marta Luzzi', 'Marta Luzzi', 'marta.luzzi@ifms.edu.br', 5),
(55, 'Rosane de Brito Fernandez Garcia', 'Rosane Garcia', 'rosane.garcia@ifms.edu.br', 5),
(56, 'Susie Midori dos Santos Sato Santana', 'Susie Santana', 'susie.sato@ifms.edu.br', 5),
(57, 'Themis Rondão Barbosa da Costa Silva', 'Themis Silva', 'themis.barbosa@ifms.edu.br', 5),
(58, 'Luis Eduardo Moraes Sinésio', 'Luis Sinésio', 'luis.sinesio@ifms.edu.br', 7),
(59, 'Mariana de Oliveira', 'Mariana de Oliveira', 'mariana.oliveira@ifms.edu.br', 7),
(60, 'Paulo Henrique Azuaga Braga', 'Paulo Braga', 'paulo.braga@ifms.edu.br', 7),
(61, 'Robson Gonçalves Felix', 'Robson Felix', 'robson.felix@ifms.edu.br', 7),
(62, 'Jaqueline Cavalcanti Borges de Mello', 'Jaqueline Mello', 'jaqueline.mello@ifms.edu.br', 8),
(63, 'Adilso de Campos Garcia', 'Adilso Garcia', 'adilso.garcia@ifms.edu.br', 9),
(64, 'Eduardo Garcia Valle', 'Eduardo Valle', 'eduardo.valle@ifms.edu.br', 9),
(65, 'Ubirajara Cecílio Garcia', 'Ubirajara Garcia', 'ubirajara.garcia@ifms.edu.br', 9),
(66, 'Andrerika Vieira Lima Silva', 'Andrerika Silva', 'andrerika.silva@ifms.edu.br', 10),
(67, 'Simone Maria Leme', 'Simone Leme', 'simone.leme@ifms.edu.br', 10),
(68, 'Sirleide Batista dos Santos', 'Sirleide Santos', 'sirleide.santos@ifms.edu.br', 10),
(69, 'Valdomiro Antonio de Oliveira Lima', 'Valdomiro Lima', 'valdomiro.lima@ifms.edu.br', 10),
(70, 'Anderson Martins Corrêa', 'Anderson Martins Corrêa', 'anderson.correa@ifms.edu.br', 11),
(71, 'Dejahyr Lopes Junior', 'Dejahyr Junior', 'dejahyr.lopes@ifms.edu.br', 11),
(72, 'Elton da Silva Paiva Valiente', 'Elton Valiente', 'elton.valiente@ifms.edu.br', 11),
(73, 'Joelson Maschio', 'Joelson Maschio', 'joelson.maschio@ifms.edu.br', 11),
(74, 'Julio Cesar Paro', 'Julio Paro', 'julio.paro@ifms.edu.br', 11),
(75, 'Katia Acosta Soares', 'Katia Soares', 'katia.soares@ifms.edu.br', 11),
(76, 'Rosane Corsini Silva Nogueira', 'Rosane Nogueira', 'rosane.nogueira@ifms.edu.br', 11),
(77, 'Vanessa Palhares de Barros Vilarim', 'Vanessa Vilarim', 'vanessa.vilarim@ifms.edu.br', 11),
(78, 'Vanessa Rodrigues Lopes', 'Vanessa Lopes', 'vanessa.lopes@ifms.edu.br', 11),
(79, 'Antonio Leonardo de Araujo Neto', 'Antonio Neto', 'antonio.araujo@ifms.edu.br', 12),
(80, 'Dante Alighieri Alves de Mello', 'Dante Mello', 'dante.mello@ifms.edu.br', 12),
(81, 'Eder Sandim Ximenes', 'Eder Ximenes', 'eder.ximenes@ifms.edu.br', 12),
(82, 'Jonathan Yuri Chaves Ajala Ferreira', 'Jonathan Ferreira', 'jonathan.yuri@ifms.edu.br', 12),
(83, 'Luiz Simao Staszczak', 'Luiz Staszczak', 'luiz.staszczak@ifms.edu.br', 12),
(84, 'Nathany Ono de Souza', 'Nathany Ono de Souza', 'nathany.souza@ifms.edu.br', 12),
(85, 'Paulo Roberto Vilarim', 'Paulo Roberto Vilarim', 'paulo.vilarim@ifms.edu.br', 12),
(86, 'Ronaldo Conceição da Silva', 'Ronaldo Silva', 'ronaldo.silva@ifms.edu.br', 12),
(87, 'Simone Machado Marques', 'Simone Marques', 'simone.marques@ifms.edu.br', 12),
(88, 'Ana Claudia Navarrete Menezes', 'Ana Menezes', 'ana.navarrete@ifms.edu.br', 13),
(89, 'Delmir da Costa Felipe', 'Delmir Felipe', 'delmir.felipe@ifms.edu.br', 13),
(90, 'Eliane Rosa da Silva Dilkin', 'Eliane Dilkin', 'eliane.dilkin@ifms.edu.br', 13),
(91, 'José Ricardo Marconato da Silva', 'José Silva', 'jose.silva@ifms.edu.br', 13),
(92, 'Regia Maria Avancini', 'Regia Avancini', 'regia.avancini@ifms.edu.br', 13),
(93, 'Tatiane Alfonso de Araujo', 'Tatiane Araujo', 'tatiane.araujo@ifms.edu.br', 13),
(94, 'Airton Jose Vinholi Junior', 'Airton Junior', 'airton.vinholi@ifms.edu.br', 14),
(95, 'Edilson Soares da Silveira', 'Edilson Soares da Silveira', 'edilson.silveira@ifms.edu.br', 14),
(96, 'Jeruza dos Santos Santiago Minakawa', 'Jeruza dos Santos Santiago Minakawa', 'jeruza.santiago@ifms.edu.br', 14),
(97, 'Paulo Francis Florencio Dutra', 'Paulo Dutra', 'paulo.dutra@ifms.edu.br', 14),
(98, 'Vitor Quadros Altomare Sanches', 'Vitor Quadros Altomare Sanches', 'vitor.sanches@ifms.edu.br', 14),
(99, 'Edi Carlos Aparecido Marques', 'Edi Marques', 'edi.marques@ifms.edu.br', 15),
(100, 'Luis Henrique de Souza', 'Luis Souza', 'luis.souza@ifms.edu.br', 15),
(101, 'André Peralta Grillo', 'André Grillo', 'andre.grillo@ifms.edu.br', 16),
(102, 'Aislan Vieira de Melo', 'Aislan Melo', 'aislan.melo@ifms.edu.br', 16),
(103, 'Rafael Vicente de Moraes', 'Rafael Moraes', 'rafael.moraes@ifms.edu.br', 16),
(104, 'Douglas Buytendorp Bizarro', 'Douglas Bizarro', 'douglas.bizarro@ifms.edu.br', 2),
(105, 'Brenda Cavalcante Matos Vieira', 'Brenda Vieira', 'brenda.vieira@ifms.edu.br', 17),
(106, 'Tayomara Hanako Almeida Higa Augusto', 'Tayomara Augusto', 'tayomara.augusto@ifms.edu.br', 17),
(107, 'Clarissa Gomes Pinheiro de Sá', 'Clarissa Sá', 'clarissa.sa@ifms.edu.br', 18),
(108, 'Edilene Maria de Oliveira', 'Edilene Oliveira', 'edilene.oliveira@ifms.edu.br', 19),
(109, 'Elaine Borges Monteiro Cassiano', 'Elaine Cassiano', 'elaine.cassiano@ifms.edu.br', 19),
(110, 'Elenice Rascopp Mendes', 'Elenice Mendes', 'elenice.mendes@ifms.edu.br', 19),
(111, 'João Massuda Junior', 'João Junior', 'joao.massuda@ifms.edu.br', 19),
(112, 'Reinaldo Mesquita Cassiano', 'Reinaldo Cassiano', 'reinaldo.cassiano@ifms.edu.br', 19),
(113, 'Gisela Silva Suppo', 'Gisela Suppo', 'gisela.suppo@ifms.edu.br', 20),
(114, 'Marilyn Aparecida Errobidart de Matos', 'Marilyn Matos', 'marilyn.matos@ifms.edu.br', 20),
(115, 'Rodrigo Falson Pinheiro', 'Rodrigo Pinheiro', 'rodrigo.pinheiro@ifms.edu.br', 21);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_area_professor` (`area_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `fk_area_professor` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
