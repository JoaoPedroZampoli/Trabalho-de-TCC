-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 25-Nov-2022 às 03:53
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pynpinbd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco`
--

DROP TABLE IF EXISTS `tb_endereco`;
CREATE TABLE IF NOT EXISTS `tb_endereco` (
  `IdEndereco` int(11) NOT NULL AUTO_INCREMENT,
  `IdUsuario` int(11) NOT NULL,
  `CEPEndereco` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LogradouroEndereco` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BairroEndereco` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NumeroEndereco` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ComplementoEndereco` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EstadoEndereco` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CidadeEndereco` int(100) NOT NULL,
  `DataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DataUltimaAlteracao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`IdEndereco`),
  KEY `IdUsuario_idx` (`IdUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `NomeUsuario` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EmailUsuario` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CPFUsuario` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelefoneUsuario` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GeneroUsuario` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DataNascUsuario` date NOT NULL,
  `SenhaUsuario` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StatusUsuario` tinyint(1) NOT NULL,
  `DataCriacaoUsuario` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DataUltimaAlteracaoUsuario` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`IdUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`IdUsuario`, `NomeUsuario`, `EmailUsuario`, `CPFUsuario`, `TelefoneUsuario`, `GeneroUsuario`, `DataNascUsuario`, `SenhaUsuario`, `StatusUsuario`, `DataCriacaoUsuario`, `DataUltimaAlteracaoUsuario`) VALUES
(1, 'Joao Pedro da Silva Zampoli', 'jpszampoli53@gmail.com', '222.222.222-22', '(11) 99148-4014', 'Masculino', '2005-03-08', 'teste1', 0, '2022-11-24 20:43:07', '2022-11-25 00:53:13'),
(2, 'Teste', 'teste@teste.com', '111.111.111-11', '(11) 91111-1111', 'Masculino', '2000-11-11', 'teste', 0, '2022-11-25 00:18:44', '2022-11-25 00:18:44'),
(3, 'Admin', 'Admin@pynpin.com', '111.111.111-11', '(11) 91111-1111', 'Masculino', '2005-03-08', 'admin', 1, '2022-11-25 00:19:58', '2022-11-25 00:20:17');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_endereco`
--
ALTER TABLE `tb_endereco`
  ADD CONSTRAINT `IdUsuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tb_usuarios` (`IdUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
