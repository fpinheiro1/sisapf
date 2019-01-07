-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Jan-2019 às 02:31
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
-- Database: `bancoapf`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `apf`
--

CREATE TABLE `apf` (
  `ID` int(11) NOT NULL,
  `NR` varchar(10) NOT NULL,
  `DIA` varchar(2) NOT NULL,
  `MES` varchar(2) NOT NULL,
  `ANO` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `apf`
--

INSERT INTO `apf` (`ID`, `NR`, `DIA`, `MES`, `ANO`) VALUES
(27, '2', '06', '20', '2018'),
(28, '3', '30', '12', '2018'),
(29, '1', '20', '11', '2015'),
(30, '2', '20', '10', '2015'),
(31, '3', '20', '10', '2015'),
(32, '4', '20', '10', '2015'),
(33, '1', '01', '3', '2013'),
(34, '1', '10', '12', '2019'),
(35, '2', '10', '12', '2019'),
(36, '3', '10', '12', '2019'),
(37, '4', '10', '12', '2019'),
(38, '5', '10', '12', '2019'),
(39, '6', '10', '12', '2019'),
(40, '7', '10', '12', '2019'),
(41, '1', '10', '3', '10'),
(42, '4', '20', '10', '2018'),
(43, '5', '20', '10', '2018'),
(44, '6', '20', '10', '2018'),
(45, '7', '20', '10', '2018'),
(46, '8', '20', '10', '2018'),
(47, '9', '20', '10', '2018'),
(48, '1', '12', '12', '1000'),
(49, '1', '10', '20', '1300'),
(50, '2', '10', '20', '1300'),
(51, '8', '20', '10', '2019'),
(52, '1', '20', '10', '2020'),
(53, '2', '2', '10', '2020'),
(54, '1', '23', '10', '2120'),
(55, '1', '40', '10', '2300'),
(56, '2', '40', '10', '2300'),
(57, '3', '40', '10', '2300'),
(58, '4', '40', '10', '2300'),
(59, '1', '02', '12', '2016'),
(60, '2', '02', '12', '2016'),
(61, '9', '02', '02', '2019');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcao`
--

CREATE TABLE `funcao` (
  `RGMILITAR` varchar(20) NOT NULL,
  `NRAPF` varchar(10) NOT NULL,
  `FUNCAO` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `militar`
--

CREATE TABLE `militar` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(200) NOT NULL,
  `IDENTIDADE` varchar(20) NOT NULL,
  `CPF` varchar(20) NOT NULL,
  `NOME_MAE` varchar(200) NOT NULL,
  `NOME_PAI` varchar(200) NOT NULL,
  `FUNCAO` varchar(20) NOT NULL,
  `POSTOGRAD` varchar(20) NOT NULL,
  `DATANASC` date NOT NULL,
  `NATURALIDADE` varchar(20) NOT NULL,
  `NATESTADO` varchar(2) NOT NULL,
  `ESTADO` varchar(2) NOT NULL,
  `CIDADE` varchar(50) NOT NULL,
  `BAIRRO` varchar(50) NOT NULL,
  `NUMEROEND` varchar(10) NOT NULL,
  `COMPLEMENTO` varchar(10) NOT NULL,
  `ORGEXPEDIDOR` varchar(10) NOT NULL,
  `LOGIN` varchar(30) NOT NULL,
  `SENHA` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `militar`
--

INSERT INTO `militar` (`ID`, `NOME`, `IDENTIDADE`, `CPF`, `NOME_MAE`, `NOME_PAI`, `FUNCAO`, `POSTOGRAD`, `DATANASC`, `NATURALIDADE`, `NATESTADO`, `ESTADO`, `CIDADE`, `BAIRRO`, `NUMEROEND`, `COMPLEMENTO`, `ORGEXPEDIDOR`, `LOGIN`, `SENHA`) VALUES
(1, 'FELIPE PINHEIRO DA SILVA', '0401786678', '15249297781', 'ELIETE SILVA PINHEIRO', 'NILSON LINS DA SILVA', 'ADMINISTRADOR', '3º SARGENTO', '1994-04-04', 'PARACAMBI', 'RJ', 'RJ', 'NOVA IGUAÇU', 'COMENDADOR SOARES', '331', '', 'MD', '3sgtfelipepinheiro', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apf`
--
ALTER TABLE `apf`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `militar`
--
ALTER TABLE `militar`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apf`
--
ALTER TABLE `apf`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `militar`
--
ALTER TABLE `militar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
