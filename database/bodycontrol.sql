-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `bodycontrol`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `codigoAluno` int(4) NOT NULL AUTO_INCREMENT,
  `nomeAluno` varchar(100) NOT NULL,
  `dataInclusaoAluno` varchar(10) NOT NULL,
  `telefoneAluno` varchar(15) NOT NULL,
  `celularAluno` varchar(15) NOT NULL,
  `emailAluno` varchar(50) NOT NULL,
  `enderecoAluno` varchar(100) NOT NULL,
  `complementoAluno` varchar(50) NOT NULL,
  `bairroAluno` varchar(50) NOT NULL,
  `cepAluno` varchar(10) NOT NULL,
  `cidadeAluno` varchar(50) NOT NULL,
  `estadoAluno` varchar(2) NOT NULL,
  `cpfAluno` varchar(14) NOT NULL,
  `rgAluno` varchar(13) NOT NULL,
  `estadoCivilAluno` varchar(10) NOT NULL,
  `dataNascimentoAluno` varchar(10) NOT NULL,
  `nomePaiAluno` varchar(100) NOT NULL,
  `nomeMaeAluno` varchar(100) NOT NULL,
  `sexoAluno` varchar(1) NOT NULL,
  PRIMARY KEY (`codigoAluno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`codigoAluno`, `nomeAluno`, `dataInclusaoAluno`, `telefoneAluno`, `celularAluno`, `emailAluno`, `enderecoAluno`, `complementoAluno`, `bairroAluno`, `cepAluno`, `cidadeAluno`, `estadoAluno`, `cpfAluno`, `rgAluno`, `estadoCivilAluno`, `dataNascimentoAluno`, `nomePaiAluno`, `nomeMaeAluno`, `sexoAluno`) VALUES
(2, 'William Pinheiro Castro', '20/11/2013', '3425-8182', '9993-8182', 'wil@wil.com', 'Rua FlÃ¡vio AntÃ´nio Campanela', 'Casa', 'Morumbi', '37.550-000', 'Pouso Alegre', 'Mi', '000.111.222-33', 'MG-22.000.222', 'Solteiro', '02/09/1995', 'Marcelo Castro', 'Rose Pinheiro Castro', 'M'),
(3, 'William Pinheiro Castro', '20/11/2013', '3425-8182', '9993-8182', 'wil@wil.com', 'Rua FlÃ¡vio AntÃ´nio Campanela', 'Casa', 'Morumbi', '37.550-000', 'Pouso Alegre', 'Mi', '000.111.222-33', 'MG-22.000.222', 'Solteiro', '02/09/1995', 'Marcelo Castro', 'Rose Pinheiro Castro', 'M'),
(4, 'William Pinheiro Castro', '20/11/2013', '3425-8182', '9993-8182', 'wil@wil.com', 'Rua FlÃ¡vio AntÃ´nio Campanela', 'Casa', 'Morumbi', '37.550-000', 'Pouso Alegre', 'Mi', '000.111.222-33', 'MG-22.000.222', 'Solteiro', '02/09/1995', 'Marcelo Castro', 'Rose Pinheiro Castro', 'M'),
(5, 'William Pinheiro Castro', '20/11/2013', '3425-8182', '9993-8182', 'wil@wil.com', 'Rua FlÃ¡vio AntÃ´nio Campanela', 'Casa', 'Morumbi', '37.550-000', 'Pouso Alegre', 'Mi', '000.111.222-33', 'MG-22.000.222', 'Solteiro', '02/09/1995', 'Marcelo Castro', 'Rose Pinheiro Castro', 'M'),
(6, 'William Pinheiro Castro', '20/11/2013', '3425-8182', '9993-8182', 'wil@wil.com', 'Rua FlÃ¡vio AntÃ´nio Campanela', 'Casa', 'Morumbi', '37.550-000', 'Pouso Alegre', 'Mi', '000.111.222-33', 'MG-22.000.222', 'Solteiro', '02/09/1995', 'Marcelo Castro', 'Rose Pinheiro Castro', 'M'),
(7, 'William Pinheiro Castro', '20/11/2013', '3425-8182', '9993-8182', 'wil@wil.com', 'Rua FlÃ¡vio AntÃ´nio Campanela', 'Casa', 'Morumbi', '37.550-000', 'Pouso Alegre', 'Mi', '000.111.222-33', 'MG-22.000.222', 'Solteiro', '02/09/1995', 'Marcelo Castro', 'Rose Pinheiro Castro', 'M'),
(8, 'William Pinheiro Castro', '20/11/2013', '3425-8182', '9993-8182', 'wil@wil.com', 'Rua FlÃ¡vio AntÃ´nio Campanela', 'Casa', 'Morumbi', '37.550-000', 'Pouso Alegre', 'Mi', '000.111.222-33', 'MG-22.000.222', 'Solteiro', '02/09/1995', 'Marcelo Castro', 'Rose Pinheiro Castro', 'M'),
(9, 'William Pinheiro Castro', '20/11/2013', '3425-8182', '9993-8182', 'wil@wil.com', 'Rua FlÃ¡vio AntÃ´nio Campanela', 'Casa', 'Morumbi', '37.550-000', 'Pouso Alegre', 'Mi', '000.111.222-33', 'MG-22.000.222', 'Solteiro', '02/09/1995', 'Marcelo Castro', 'Rose Pinheiro Castro', 'M'),
(10, 'William Pinheiro Castro', '20/11/2013', '3425-8182', '9993-8182', 'wil@wil.com', 'Rua FlÃ¡vio AntÃ´nio Campanela', 'Casa', 'Morumbi', '37.550-000', 'Pouso Alegre', 'Mi', '000.111.222-33', 'MG-22.000.222', 'Solteiro', '02/09/1995', 'Marcelo Castro', 'Rose Pinheiro Castro', 'M'),
(11, 'William Pinheiro Castro', '20/11/2013', '3425-8182', '9993-8182', 'wil@wil.com', 'Rua FlÃ¡vio AntÃ´nio Campanela', 'Casa', 'Morumbi', '37.550-000', 'Pouso Alegre', 'Mi', '000.111.222-33', 'MG-22.000.222', 'Solteiro', '02/09/1995', 'Marcelo Castro', 'Rose Pinheiro Castro', 'M'),
(12, 'William Pinheiro Castro', '20/11/2013', '3425-8182', '9993-8182', 'wil@wil.com', 'Rua FlÃ¡vio AntÃ´nio Campanela', 'Casa', 'Morumbi', '37.550-000', 'Pouso Alegre', 'Mi', '000.111.222-33', 'MG-22.000.222', 'Solteiro', '02/09/1995', 'Marcelo Castro', 'Rose Pinheiro Castro', 'M'),
(13, 'William Pinheiro Castro', '20/11/2013', '3425-8182', '9993-8182', 'wil@wil.com', 'Rua FlÃ¡vio AntÃ´nio Campanela', 'Casa', 'Morumbi', '37.550-000', 'Pouso Alegre', 'Mi', '000.111.222-33', 'MG-22.000.222', 'Solteiro', '02/09/1995', 'Marcelo Castro', 'Rose Pinheiro Castro', 'M'),
(14, 'William Pinheiro Castro', '20/11/2013', '3425-8182', '9993-8182', 'wil@wil.com', 'Rua FlÃ¡vio AntÃ´nio Campanela', 'Casa', 'Morumbi', '37.550-000', 'Pouso Alegre', 'Mi', '000.111.222-33', 'MG-22.000.222', 'Solteiro', '02/09/1995', 'Marcelo Castro', 'Rose Pinheiro Castro', 'M'),
(15, 'William Pinheiro Castro', '20/11/2013', '3425-8182', '9993-8182', 'wil@wil.com', 'Rua FlÃ¡vio AntÃ´nio Campanela', 'Casa', 'Morumbi', '37.550-000', 'Pouso Alegre', 'Mi', '000.111.222-33', 'MG-22.000.222', 'Solteiro', '02/09/1995', 'Marcelo Castro', 'Rose Pinheiro Castro', 'M'),
(16, 'William Pinheiro Castro', '20/11/2013', '3425-8182', '9993-8182', 'wil@wil.com', 'Rua FlÃ¡vio AntÃ´nio Campanela', 'Casa', 'Morumbi', '37.550-000', 'Pouso Alegre', 'Mi', '000.111.222-33', 'MG-22.000.222', 'Solteiro', '02/09/1995', 'Marcelo Castro', 'Rose Pinheiro Castro', 'M'),
(17, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'M');

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacaofisica`
--

CREATE TABLE IF NOT EXISTS `avaliacaofisica` (
  `codigoAvaliacaoFisica` int(4) NOT NULL AUTO_INCREMENT,
  `codigoAluno` varchar(4) NOT NULL,
  `pesoAluno` varchar(3) NOT NULL,
  `estaturaAluno` varchar(5) NOT NULL,
  `dataAvalicaoAluno` varchar(10) NOT NULL,
  `medidaTorax` varchar(5) NOT NULL,
  `medidaAbdomen` varchar(5) NOT NULL,
  `medidaAntebraco` varchar(5) NOT NULL,
  `medidaBraco` varchar(5) NOT NULL,
  `medidaCoxa` varchar(5) NOT NULL,
  `medidaPanturrilha` varchar(5) NOT NULL,
  `medidaCintura` varchar(5) NOT NULL,
  `medidaQuadril` varchar(5) NOT NULL,
  `medidaDobraCutaneaTorax` varchar(5) NOT NULL,
  `medidaDobraCutaneaAbdomen` varchar(5) NOT NULL,
  `medidaDobraCutaneaCoxa` varchar(5) NOT NULL,
  `medidaDobraCutaneaTriceps` varchar(5) NOT NULL,
  `medidaDobraCutaneaSupraIliaca` varchar(5) NOT NULL,
  `porcentagemGorduraAluno` varchar(5) NOT NULL,
  `pesoMagroAluno` varchar(5) NOT NULL,
  `pesoGordoAluno` varchar(5) NOT NULL,
  `pesoDesejavelAluno` varchar(5) NOT NULL,
  PRIMARY KEY (`codigoAvaliacaoFisica`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `avaliacaofisica`
--

INSERT INTO `avaliacaofisica` (`codigoAvaliacaoFisica`, `codigoAluno`, `pesoAluno`, `estaturaAluno`, `dataAvalicaoAluno`, `medidaTorax`, `medidaAbdomen`, `medidaAntebraco`, `medidaBraco`, `medidaCoxa`, `medidaPanturrilha`, `medidaCintura`, `medidaQuadril`, `medidaDobraCutaneaTorax`, `medidaDobraCutaneaAbdomen`, `medidaDobraCutaneaCoxa`, `medidaDobraCutaneaTriceps`, `medidaDobraCutaneaSupraIliaca`, `porcentagemGorduraAluno`, `pesoMagroAluno`, `pesoGordoAluno`, `pesoDesejavelAluno`) VALUES
(1, '', '23', '12', '12', '1', '21', '21', '21', '2', '12', '12', '1', '21', '2', '12', '1', '21', '21', '', '212', '1'),
(2, '', '5', '45', '45', '4', '564', '54', '564', '54', '5', '45', '45', '4', '54', '5', '45', '4', '54', '5', '45', '54'),
(3, '5', '445', '4', '45', '4', '54', '54', '54', '54', '5', '45', '4', '54', '5', '45', '45', '45', '4', '54', '545', '4'),
(4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos`
--

CREATE TABLE IF NOT EXISTS `equipamentos` (
  `codigoEquipamento` int(4) NOT NULL AUTO_INCREMENT,
  `nomeEquipamento` varchar(100) NOT NULL,
  `dataCompra` varchar(10) NOT NULL,
  PRIMARY KEY (`codigoEquipamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `equipamentos`
--

INSERT INTO `equipamentos` (`codigoEquipamento`, `nomeEquipamento`, `dataCompra`) VALUES
(1, 'Supino Reto', '03/12/2013'),
(2, '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fichaequipamentodetreino`
--

CREATE TABLE IF NOT EXISTS `fichaequipamentodetreino` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigoFicha` int(11) NOT NULL,
  `codigoEquipamento` int(4) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `fichaequipamentodetreino`
--

INSERT INTO `fichaequipamentodetreino` (`codigo`, `codigoFicha`, `codigoEquipamento`) VALUES
(2, 20, 5),
(3, 30, 50),
(4, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fichasdetreino`
--

CREATE TABLE IF NOT EXISTS `fichasdetreino` (
  `codigoFicha` int(4) NOT NULL AUTO_INCREMENT,
  `codigoAluno` varchar(4) NOT NULL,
  `dataInicioTreino` varchar(10) NOT NULL,
  `dataTerminoTreino` varchar(10) NOT NULL,
  `repeticoes` varchar(2) NOT NULL,
  `series` varchar(2) NOT NULL,
  PRIMARY KEY (`codigoFicha`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `fichasdetreino`
--

INSERT INTO `fichasdetreino` (`codigoFicha`, `codigoAluno`, `dataInicioTreino`, `dataTerminoTreino`, `repeticoes`, `series`) VALUES
(1, '2', '22/11/2012', '22/01/2013', '3', '20'),
(2, '20', '22/11/2012', '22/01/2013', '3', '20'),
(3, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `pass` varchar(16) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`userid`, `login`, `pass`) VALUES
(1, 'William', 'williampc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
