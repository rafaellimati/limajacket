-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Ago-2015 às 05:35
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12
 
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jaquetastcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE IF NOT EXISTS `tbcliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `idEndereco` int(11) NOT NULL,
  `idTelefone` int(11) NOT NULL,
  `idLogin` int(11) NOT NULL,
  `idSexo` int(11) NOT NULL,
  PRIMARY KEY (`idCliente`),
  UNIQUE KEY `cpf_UNIQUE` (`cpf`),
  KEY `fk_TbCliente_TbEndereco1_idx` (`idEndereco`),
  KEY `fk_TbCliente_TbTelefone1_idx` (`idTelefone`),
  KEY `fk_TbCliente_TbLogin1_idx` (`idLogin`),
  KEY `fk_TbCliente_TbSexo1_idx` (`idSexo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcompra`
--

CREATE TABLE IF NOT EXISTS `tbcompra` (
  `idCompra` int(11) NOT NULL AUTO_INCREMENT,
  `frete` double DEFAULT NULL,
  `total` double NOT NULL,
  `idCliente` int(11) NOT NULL,
  PRIMARY KEY (`idCompra`),
  KEY `fk_TbCompra_TbCliente1_idx` (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcor`
--

CREATE TABLE IF NOT EXISTS `tbcor` (
  `idCor` int(11) NOT NULL AUTO_INCREMENT,
  `cor` varchar(20) NOT NULL,
  `flagAtivo` tinyint(4) NOT NULL,
  PRIMARY KEY (`idCor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `tbcor`
--

INSERT INTO `tbcor` (`idCor`, `cor`, `flagAtivo`) VALUES
(1, 'Preto', 1),
(2, 'Verde', 1),
(3, 'Azul', 1),
(4, 'Lilas', 1),
(5, 'Branco', 1),
(6, 'Vermelho', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbddd`
--

CREATE TABLE IF NOT EXISTS `tbddd` (
  `idDdd` int(11) NOT NULL AUTO_INCREMENT,
  `ddd` int(11) NOT NULL,
  PRIMARY KEY (`idDdd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbendereco`
--

CREATE TABLE IF NOT EXISTS `tbendereco` (
  `idEndereco` int(11) NOT NULL AUTO_INCREMENT,
  `rua` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `idMunicipio` int(11) NOT NULL,
  PRIMARY KEY (`idEndereco`),
  KEY `fk_TbEndereco_TbMunicipio1_idx` (`idMunicipio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbestado`
--

CREATE TABLE IF NOT EXISTS `tbestado` (
  `idEstado` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(100) NOT NULL,
  PRIMARY KEY (`idEstado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbjaqueta`
--

CREATE TABLE IF NOT EXISTS `tbjaqueta` (
  `idJaqueta` int(11) NOT NULL AUTO_INCREMENT,
  `jaqueta` varchar(20) NOT NULL,
  `tecido` varchar(100) DEFAULT NULL,
  `valor` double NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `idMarca` int(11) NOT NULL,
  `idLogin` int(11) NOT NULL,
  `idTamanho` int(11) NOT NULL,
  `idCor` int(11) NOT NULL,
  `idStatus` int(11) NOT NULL,
  PRIMARY KEY (`idJaqueta`),
  KEY `fk_TbJaqueta_TbMarca1_idx` (`idMarca`),
  KEY `fk_TbJaqueta_TbLogin1_idx` (`idLogin`),
  KEY `fk_TbJaqueta_TbTamanho1_idx` (`idTamanho`),
  KEY `fk_TbJaqueta_TbCor1_idx` (`idCor`),
  KEY `fk_TbJaqueta_TbStatus1_idx` (`idStatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `tbjaqueta`
--

INSERT INTO `tbjaqueta` (`idJaqueta`, `jaqueta`, `tecido`, `valor`, `descricao`, `idMarca`, `idLogin`, `idTamanho`, `idCor`, `idStatus`) VALUES
(2, 'fasfd', 'asdfas', 24242, 'asdfas', 2, 1, 0, 0, 0),
(3, 'sdfasdfa', 'asdfas', 14, 'tttttttttttt', 4, 1, 0, 0, 0),
(4, 'Jaqueta Universal', 'Laicro', 230, 'Jaqueta blablal', 5, 1, 0, 0, 0),
(5, 'J aqueta', 'tecido', 234, ' descritto', 4, 1, 0, 0, 0),
(6, 'asfdasd', 'asdfas', 242425, 'dsafdas', 5, 1, 0, 0, 0),
(7, 'asdfsaf', 'asdfasf', 24242, 'safasdf', 2, 1, 0, 0, 0),
(8, 'Jaqueta Universal', 'Laicro', 230, 'Jaqueta blablal', 2, 1, 0, 0, 0),
(9, 'Jaqueta jeans2', 'sadfsdf', 2412, 'blabalblablabla', 2, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblogin`
--

CREATE TABLE IF NOT EXISTS `tblogin` (
  `idLogin` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `nivelAcesso` int(11) NOT NULL,
  PRIMARY KEY (`idLogin`),
  UNIQUE KEY `login_UNIQUE` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `tblogin`
--

INSERT INTO `tblogin` (`idLogin`, `login`, `senha`, `nivelAcesso`) VALUES
(1, 'jeimes2@gmail.com', '12345', 2),
(2, 'rafael@gmail.com', '123', 2),
(3, 'rafa@gmail.com', '123', 2),
(4, 'gamer@gmail.com', '333', 0),
(5, 'rafa', '12', 0),
(6, 'rafael', '123', 0),
(7, 'rafa123', '123', 0),
(8, 'zé muçu', '2324', 0),
(9, 'daf', '333', 0),
(10, 'dfa', '1', 0),
(11, 'bleno', '202cb962ac59075b964b07152d234b70', 0),
(12, 'eu', '0', 0),
(13, 'ele', '81dc9bdb52d04dc20036dbd8313ed055', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmarca`
--

CREATE TABLE IF NOT EXISTS `tbmarca` (
  `idMarca` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(100) NOT NULL,
  `flagAtivo` tinyint(4) NOT NULL,
  PRIMARY KEY (`idMarca`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `tbmarca`
--

INSERT INTO `tbmarca` (`idMarca`, `marca`, `flagAtivo`) VALUES
(1, 'Jaqueta Jean', 0),
(2, 'Rafael', 1),
(3, 'Matheus Lima', 1),
(4, 'Jaqueta Jeans', 1),
(5, 'Jaqueta Headbanger2', 1),
(6, 'Jaqueta', 1),
(7, 'Verde', 1),
(8, 'Azul', 1),
(9, 'Amaraelo', 1),
(10, 'Jaqueta Churuminho', 1),
(11, 'Blue', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmunicipio`
--

CREATE TABLE IF NOT EXISTS `tbmunicipio` (
  `idMunicipio` int(11) NOT NULL AUTO_INCREMENT,
  `municipio` varchar(100) NOT NULL,
  `idEstado` int(11) NOT NULL,
  PRIMARY KEY (`idMunicipio`),
  KEY `fk_TbMunicipio_TbEstado1_idx` (`idEstado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpedido`
--

CREATE TABLE IF NOT EXISTS `tbpedido` (
  `idPedido` int(11) NOT NULL AUTO_INCREMENT,
  `quantidade` int(11) NOT NULL,
  `subTotal` varchar(100) NOT NULL,
  `idJaqueta` int(11) NOT NULL,
  `idCompra` int(11) NOT NULL,
  PRIMARY KEY (`idPedido`),
  KEY `fk_TbPedido_TbJaqueta1_idx` (`idJaqueta`),
  KEY `fk_TbPedido_TbCompra1_idx` (`idCompra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbsexo`
--

CREATE TABLE IF NOT EXISTS `tbsexo` (
  `idSexo` int(11) NOT NULL AUTO_INCREMENT,
  `sexo` varchar(20) NOT NULL,
  PRIMARY KEY (`idSexo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbstatus`
--

CREATE TABLE IF NOT EXISTS `tbstatus` (
  `idStatus` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(20) NOT NULL,
  PRIMARY KEY (`idStatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tbstatus`
--

INSERT INTO `tbstatus` (`idStatus`, `descricao`) VALUES
(1, 'Em Estoque'),
(2, 'Vendido'),
(3, 'Indisponivel');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtamanho`
--

CREATE TABLE IF NOT EXISTS `tbtamanho` (
  `idTamanho` int(11) NOT NULL AUTO_INCREMENT,
  `tamanho` varchar(10) NOT NULL,
  `flagAtivo` tinyint(4) NOT NULL,
  PRIMARY KEY (`idTamanho`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tbtamanho`
--

INSERT INTO `tbtamanho` (`idTamanho`, `tamanho`, `flagAtivo`) VALUES
(1, 'Sadfasdfa', 1),
(2, '1231', 1),
(3, '798', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtelefone`
--

CREATE TABLE IF NOT EXISTS `tbtelefone` (
  `idTelefone` int(11) NOT NULL AUTO_INCREMENT,
  `telefone` varchar(15) NOT NULL,
  `idDdd` int(11) NOT NULL,
  PRIMARY KEY (`idTelefone`),
  KEY `fk_TbTelefone_TbDdd1_idx` (`idDdd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD CONSTRAINT `fk_TbCliente_TbEndereco1` FOREIGN KEY (`idEndereco`) REFERENCES `tbendereco` (`idEndereco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TbCliente_TbLogin1` FOREIGN KEY (`idLogin`) REFERENCES `tblogin` (`idLogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TbCliente_TbSexo1` FOREIGN KEY (`idSexo`) REFERENCES `tbsexo` (`idSexo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TbCliente_TbTelefone1` FOREIGN KEY (`idTelefone`) REFERENCES `tbtelefone` (`idTelefone`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbcompra`
--
ALTER TABLE `tbcompra`
  ADD CONSTRAINT `fk_TbCompra_TbCliente1` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbendereco`
--
ALTER TABLE `tbendereco`
  ADD CONSTRAINT `fk_TbEndereco_TbMunicipio1` FOREIGN KEY (`idMunicipio`) REFERENCES `tbmunicipio` (`idMunicipio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbjaqueta`
--
ALTER TABLE `tbjaqueta`
  ADD CONSTRAINT `fk_TbJaqueta_TbCor1` FOREIGN KEY (`idCor`) REFERENCES `tbcor` (`idCor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TbJaqueta_TbLogin1` FOREIGN KEY (`idLogin`) REFERENCES `tblogin` (`idLogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TbJaqueta_TbMarca1` FOREIGN KEY (`idMarca`) REFERENCES `tbmarca` (`idMarca`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TbJaqueta_TbStatus1` FOREIGN KEY (`idStatus`) REFERENCES `tbstatus` (`idStatus`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TbJaqueta_TbTamanho1` FOREIGN KEY (`idTamanho`) REFERENCES `tbtamanho` (`idTamanho`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbmunicipio`
--
ALTER TABLE `tbmunicipio`
  ADD CONSTRAINT `fk_TbMunicipio_TbEstado1` FOREIGN KEY (`idEstado`) REFERENCES `tbestado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbpedido`
--
ALTER TABLE `tbpedido`
  ADD CONSTRAINT `fk_TbPedido_TbCompra1` FOREIGN KEY (`idCompra`) REFERENCES `tbcompra` (`idCompra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TbPedido_TbJaqueta1` FOREIGN KEY (`idJaqueta`) REFERENCES `tbjaqueta` (`idJaqueta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbtelefone`
--
ALTER TABLE `tbtelefone`
  ADD CONSTRAINT `fk_TbTelefone_TbDdd1` FOREIGN KEY (`idDdd`) REFERENCES `tbddd` (`idDdd`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
