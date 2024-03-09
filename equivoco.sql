-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Set-2018 às 14:07
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `equivoco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bairros`
--

CREATE TABLE `bairros` (
  `id_bairros` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `observacao` varchar(100) NOT NULL,
  `situacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `bairros`
--

INSERT INTO `bairros` (`id_bairros`, `nome`, `observacao`, `situacao`) VALUES
(1, 'Alexandria', 'Atravessando a RS239', 1),
(2, 'Alto GuarujÃ¡', '', 1),
(3, 'Alvorada', '', 1),
(4, 'Areia Branca', '', 1),
(5, 'Arroio do Sal', '', 1),
(6, 'Bela Vista', '', 1),
(7, 'Boa Vista', '', 1),
(8, 'Centro', '', 1),
(9, 'Cohab', 'PrÃ³ximo a passarela do Rubinho', 1),
(10, 'EmancipaÃ§Ã£o', '', 1),
(11, 'Fazenda Martins', '', 1),
(12, 'Fazenda Pires', '', 1),
(13, 'Funil', '', 1),
(14, 'Guarani', '', 1),
(15, 'GuarujÃ¡', '', 1),
(16, 'IntegraÃ§Ã£o', '', 1),
(17, 'Laranjeiras', '', 1),
(18, 'Morro da Canoa', '', 1),
(19, 'Morro Negro', '', 1),
(20, 'Muck', '', 1),
(21, 'Nova ParobÃ©', '', 1),
(22, 'Palmeiras', '', 1),
(23, 'PanorÃ¢mico', '', 1),
(24, 'Planalto', '', 1),
(25, 'Planaza', '', 1),
(26, 'Primavera', '', 1),
(27, 'PÃ´r do Sol', '', 1),
(28, 'Residencial AzalÃ©ia', '', 1),
(29, 'SÃ£o JosÃ©', '', 1),
(30, 'Vila Feliz', '', 1),
(31, 'Vila Jardim', '', 1),
(32, 'Vila Mariana', '', 1),
(33, 'Vila Nova', '', 1),
(34, 'Vista Alegre', '', 1),
(35, 'XV de Junho', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `id_imagens` int(11) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `localizacao` varchar(200) NOT NULL,
  `observacao` varchar(200) NOT NULL,
  `id_bairros` int(11) NOT NULL,
  `id_rotulos` int(11) NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  `situacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id_imagens`, `descricao`, `localizacao`, `observacao`, `id_bairros`, `id_rotulos`, `arquivo`, `situacao`) VALUES
(3, 'Passarela do Rubinho', 'RS 239, KM 47', 'Estrada sentido Ã  Taquara', 9, 11, 'Equivoco-88312a469db41858d74fe1d5f288ca74.jpg', 1),
(4, 'Viaduto Campesino', 'RS 239, KM 44', 'Em frente a Pandolfo', 12, 9, 'Equivoco-8be84d8f903b2bc3d41c8065654bf5f8.jpg', 1),
(5, 'Cruz da Igreja', 'RS 239, KM 44', 'Em frente a Pandolfo', 12, 9, 'Equivoco-8be84d8f903b2bc3d41c8065654bf5f8.jpg', 1),
(6, 'Cruz do Cemitério', 'RS 239, KM 5', 'Atravessando a RS239', 17, 2, 'Equivoco-b45816354624b8dd7a0b3ea2a9c28f73.JPG', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `integrantes`
--

CREATE TABLE `integrantes` (
  `id_integrantes` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `municipio` varchar(50) DEFAULT NULL,
  `situacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `integrantes`
--

INSERT INTO `integrantes` (`id_integrantes`, `nome`, `apelido`, `email`, `telefone`, `municipio`, `situacao`) VALUES
(1, 'Carlos H. Eltz', 'Carlinhos Eltz', 'carlinhos.eltz@hotmail.com', '(51) 98332-5103', 'ParobÃ©', 1),
(2, 'Rita CÃ¡ssia dos Santos', 'Ritinha', 'ritacrita@hotmail.com', '(51) 98190-6777', 'ParobÃ©', 1),
(3, 'Julyana CÃ¡ssia dos Santos', 'Juh', 'juju@hotmail.com', '(51) 98278-3835', 'ParobÃ©', 0),
(4, 'Guilherme Santos Caminha', 'Gui Caminha', 'gui.caminha@gmail.com', '(51) 98148-0215', 'ParobÃ©', 0),
(5, 'Carlos Cezar dos Santos Eltz', 'Cezinha', 'cezinha.eltz@hotmail.com', '(61) 98355-5656', 'BrasÃ­lia/DF', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `rotulos`
--

CREATE TABLE `rotulos` (
  `id_rotulos` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `observacao` varchar(100) NOT NULL,
  `situacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `rotulos`
--

INSERT INTO `rotulos` (`id_rotulos`, `nome`, `observacao`, `situacao`) VALUES
(1, 'AÃ§ude', 'AÃ§ude raso', 1),
(2, 'Cruz', '', 1),
(3, 'Campo de Futebol', '', 1),
(4, 'Igreja', '', 1),
(5, 'IndÃºstria', '', 1),
(6, 'Lombada EletrÃ´nica', '', 1),
(7, 'Rio', '', 1),
(8, 'Tunel', '', 1),
(9, 'Viaduto', '', 1),
(11, 'Passarela', '', 1),
(12, 'Loteamento', '', 1),
(13, 'Parada de Ã”nibus', '', 1),
(14, 'Porteira de Fazenda', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `situacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nome`, `email`, `senha`, `situacao`) VALUES
(1, 'Carlos Eltz', 'carlinhos.eltz@hotmail.com', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bairros`
--
ALTER TABLE `bairros`
  ADD PRIMARY KEY (`id_bairros`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Indexes for table `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id_imagens`),
  ADD KEY `id_bairros` (`id_bairros`),
  ADD KEY `id_rotulos` (`id_rotulos`);

--
-- Indexes for table `integrantes`
--
ALTER TABLE `integrantes`
  ADD PRIMARY KEY (`id_integrantes`);

--
-- Indexes for table `rotulos`
--
ALTER TABLE `rotulos`
  ADD PRIMARY KEY (`id_rotulos`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bairros`
--
ALTER TABLE `bairros`
  MODIFY `id_bairros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id_imagens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `integrantes`
--
ALTER TABLE `integrantes`
  MODIFY `id_integrantes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rotulos`
--
ALTER TABLE `rotulos`
  MODIFY `id_rotulos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `imagens`
--
ALTER TABLE `imagens`
  ADD CONSTRAINT `imagens_ibfk_1` FOREIGN KEY (`id_bairros`) REFERENCES `bairros` (`id_bairros`) ON DELETE CASCADE,
  ADD CONSTRAINT `imagens_ibfk_2` FOREIGN KEY (`id_rotulos`) REFERENCES `rotulos` (`id_rotulos`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
