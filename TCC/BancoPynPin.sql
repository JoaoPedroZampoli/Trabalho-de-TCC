-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 30-Nov-2022 às 04:39
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
CREATE DATABASE IF NOT EXISTS `pynpinbd` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `pynpinbd`;

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
  `CidadeEndereco` int(11) NOT NULL,
  `DataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DataUltimaAlteracao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`IdEndereco`),
  KEY `IdUsuario_idx` (`IdUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pedidos`
--

DROP TABLE IF EXISTS `tb_pedidos`;
CREATE TABLE IF NOT EXISTS `tb_pedidos` (
  `IdPedido` int(11) NOT NULL AUTO_INCREMENT,
  `NomeUsuario` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SobrenomeUsuario` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CPFUsuario` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelefoneUsuario` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EmailUsuario` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdProduto` int(11) NOT NULL,
  `NomeProduto` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PrecoProduto` double NOT NULL,
  `DataCriacaoPedido` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`IdPedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

DROP TABLE IF EXISTS `tb_produtos`;
CREATE TABLE IF NOT EXISTS `tb_produtos` (
  `IdProduto` int(11) NOT NULL AUTO_INCREMENT,
  `NomeProduto` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DescricaoProduto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `PrecoProduto` double NOT NULL,
  `ImagemProduto` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TextoAlternativoProduto` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PromoInfoProduto` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PromoBackgroundProduto` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DataCriacaoProduto` datetime NOT NULL,
  `DataUltimaAlteracaoProduto` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`IdProduto`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`IdProduto`, `NomeProduto`, `DescricaoProduto`, `PrecoProduto`, `ImagemProduto`, `TextoAlternativoProduto`, `PromoInfoProduto`, `PromoBackgroundProduto`, `DataCriacaoProduto`, `DataUltimaAlteracaoProduto`) VALUES
(1, 'Produto de Teste', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a pretium ante. Nullam non volutpat libero. Cras nunc ipsum, tempor non elementum a, interdum eget dui. Maecenas vitae eros ut purus mattis ultricies. Donec eu lectus et lorem varius bibendum. Nam vitae risus euismod, tincidunt tellus vitae, finibus arcu. Maecenas eu sapien ac quam sagittis pretium. Suspendisse ac eros vitae leo consectetur dapibus.</p>', 169.99, 'Pijama1.png', 'Imagem de um Pijama', 'Teste', '#FFFFFF', '2022-11-28 17:15:16', '2022-11-29 21:21:34'),
(2, 'Produto 2', '<p>Phasellus non ornare eros. Praesent ut nibh vestibulum, porttitor neque ut, faucibus eros. Proin in tempor libero. Suspendisse lobortis dolor ut risus pharetra pulvinar. Proin suscipit sapien sapien, ac tincidunt nisi imperdiet a. Nulla vitae porttitor nibh. Donec dui sem, luctus sit amet scelerisque a, blandit eget neque. Quisque eget nulla vitae augue ultrices tristique. Ut gravida nisl et nunc fringilla gravida. Donec ultrices placerat congue. Aenean rhoncus rutrum aliquet. Ut tincidunt viverra tortor imperdiet maximus. In massa risus, varius tempor rhoncus vitae, aliquet eget purus. Duis mollis, lacus nec varius aliquet, metus sapien commodo tortor, et cursus mi odio eget magna.</p>', 149.99, 'Pijama2.png', 'Imagem de um Pijama', '', '', '2022-11-28 17:15:16', NULL),
(3, 'Pijama 3', '<p>Ut tellus enim, dignissim non risus vel, sagittis vehicula nisl. Nunc auctor nibh a ligula sagittis efficitur. Praesent finibus eros quis ultrices consequat. Nulla ex erat, lobortis vel mauris sed, maximus auctor quam. Pellentesque faucibus, elit vel eleifend semper, eros enim iaculis ex, nec elementum enim nisi convallis justo. Integer at sapien non mauris tincidunt ultricies in vitae nibh. Sed eu ultricies magna. Proin varius purus at tortor auctor, a tristique orci euismod. Etiam cursus nisi vitae ex semper ultricies.</p>', 109.99, 'Pijama3.png', 'Imagem de um Pijama', '', '', '2022-11-28 17:25:14', '2022-11-28 14:39:52'),
(4, 'Pijama 4', '<p>Phasellus non ornare eros. Praesent ut nibh vestibulum, porttitor neque ut, faucibus eros. Proin in tempor libero. Suspendisse lobortis dolor ut risus pharetra pulvinar. Proin suscipit sapien sapien, ac tincidunt nisi imperdiet a. Nulla vitae porttitor nibh. Donec dui sem, luctus sit amet scelerisque a, blandit eget neque. Quisque eget nulla vitae augue ultrices tristique. Ut gravida nisl et nunc fringilla gravida. Donec ultrices placerat congue. Aenean rhoncus rutrum aliquet. Ut tincidunt viverra tortor imperdiet maximus. In massa risus, varius tempor rhoncus vitae, aliquet eget purus. Duis mollis, lacus nec varius aliquet, metus sapien commodo tortor, et cursus mi odio eget magna.</p>', 119.99, 'Pijama4.png', 'Imagem de um Pijama', '', '', '2022-11-28 17:25:14', '2022-11-30 00:49:42'),
(5, 'Pijama 5', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a pretium ante. Nullam non volutpat libero. Cras nunc ipsum, tempor non elementum a, interdum eget dui. Maecenas vitae eros ut purus mattis ultricies. Donec eu lectus et lorem varius bibendum. Nam vitae risus euismod, tincidunt tellus vitae, finibus arcu. Maecenas eu sapien ac quam sagittis pretium. Suspendisse ac eros vitae leo consectetur dapibus.</p>', 79.99, 'Pijama5.png', 'nome do viado que nao fez', 'NomePromo', '#aaeeb2', '2022-11-29 12:35:47', '2022-11-30 00:50:54'),
(6, 'Pijama 6', '<p>Phasellus non ornare eros. Praesent ut nibh vestibulum, porttitor neque ut, faucibus eros. Proin in tempor libero. Suspendisse lobortis dolor ut risus pharetra pulvinar. Proin suscipit sapien sapien, ac tincidunt nisi imperdiet a. Nulla vitae porttitor nibh. Donec dui sem, luctus sit amet scelerisque a, blandit eget neque. Quisque eget nulla vitae augue ultrices tristique. Ut gravida nisl et nunc fringilla gravida. Donec ultrices placerat congue. Aenean rhoncus rutrum aliquet. Ut tincidunt viverra tortor imperdiet maximus. In massa risus, varius tempor rhoncus vitae, aliquet eget purus. Duis mollis, lacus nec varius aliquet, metus sapien commodo tortor, et cursus mi odio eget magna.</p>', 89.99, 'Pijama6.png', 'teste', 'teste', '#fb1313', '2022-11-29 20:19:44', '2022-11-30 00:50:37'),
(7, 'Pijama 7', '<p>Nam id scelerisque neque. Curabitur blandit vehicula diam commodo lacinia. Curabitur arcu neque, imperdiet ut dui egestas, bibendum posuere justo. Nunc tempus dolor in enim efficitur pulvinar. Cras lorem magna, fringilla non nunc vel, condimentum lacinia felis. Sed et enim posuere, mattis mi nec, tempor urna. Praesent porta et purus at hendrerit. Mauris lobortis cursus semper. Sed rutrum mi vel orci facilisis tincidunt. Duis elit orci, interdum id hendrerit sit amet, mollis at tortor. Phasellus gravida aliquet nunc, eu elementum ante scelerisque a.</p>', 99.99, 'Pijama7.png', 'Imagem de um Pijama', '', '', '2022-11-30 03:51:15', NULL),
(8, 'Pijama 8', '<p>Sed at dolor vel elit gravida iaculis sed sit amet odio. Aliquam tincidunt purus ex, non convallis magna vehicula non. Duis at ligula dui. Aenean id tincidunt nibh, non convallis nisi. Nunc et bibendum velit. Duis efficitur mauris ac sapien laoreet pellentesque. Ut interdum placerat massa a semper. Duis dictum scelerisque arcu, quis ullamcorper velit porta sit amet. Nullam nec elit orci. Sed dapibus metus dui, at pulvinar lectus accumsan quis. Donec ut convallis metus, blandit viverra diam. Nam finibus suscipit turpis eu luctus.</p>', 79.99, 'Pijama8.png', 'Imagem de um pijama', '10% OFF', '#FF0000', '2022-11-30 03:51:15', '2022-11-30 03:51:15');

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
  `NewsletterUsuario` tinyint(1) NOT NULL,
  `DataCriacaoUsuario` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DataUltimaAlteracaoUsuario` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`IdUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`IdUsuario`, `NomeUsuario`, `EmailUsuario`, `CPFUsuario`, `TelefoneUsuario`, `GeneroUsuario`, `DataNascUsuario`, `SenhaUsuario`, `StatusUsuario`, `NewsletterUsuario`, `DataCriacaoUsuario`, `DataUltimaAlteracaoUsuario`) VALUES
(1, 'Joao Pedro da Silva Zampoli', 'jpszampoli53@gmail.com', '222.222.222-22', '(11) 99148-4014', 'Masculino', '2005-03-08', 'teste1', 0, 0, '2022-11-24 20:43:07', '2022-11-29 23:14:22'),
(3, 'Admin', 'Admin@pynpin.com', '111.111.111-11', '(11) 91111-1111', 'Masculino', '2005-03-08', 'admin', 1, 0, '2022-11-25 00:19:58', '2022-11-29 23:14:22'),
(4, 'Teste', 'teste@teste.com', '111.111.111-11', '(11) 92222-2222', 'Masculino', '2000-11-11', 'teste', 0, 0, '2022-11-29 21:02:20', '2022-11-30 01:38:22');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_endereco`
--
ALTER TABLE `tb_endereco`
  ADD CONSTRAINT `IdUsuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tb_usuarios` (`IdUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
