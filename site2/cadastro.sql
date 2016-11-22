-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19-Nov-2016 às 05:02
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `nome` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `datadenascimento` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `rg` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(250) NOT NULL,
  `cidade` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `sobrenome`, `datadenascimento`, `rg`, `cpf`, `endereco`, `bairro`, `numero`, `cidade`, `estado`, `pais`, `email`, `login`, `senha`, `id`) VALUES
('makmskmaskm', 'kamskamsksam', 'kmaskamska', 'kamksmaks', 'kmaksmaksm', 'kamskamskam', 'kamskamskm', 0, 'kamkamksam', 'kmakmaskmas', 'kmasaksmaksm', 'kamskamsksam', 'aksmaksmkm', 'aksmakmaksm', 1),
('admin', 'admin', '2016-11-09', '000000000', '0000000000000', 'admin admin admin', 'adm', 10, 'admin', 'admin', 'admin', 'admin@admincsclub.com', 'admin', 'admin', 22),
('marcos', 'molinaro', '1997-03-31', '000000000', '0000000000000', 'rua maria antonia', 'vila buarque', 62, 'sao paulo', 'sp', 'brasil', 'marcos.molinaro@live.com', 'marcosmolinaro', '123456', 9),
('mmmmmmmmmmm', 'ijijij', '2016-11-14', 'lklklklk', 'lklklk', '9u9u99', '9u9u9u', 9, '9u9u9u', '9u9u9u9', 'u9u9u9u', '9u9u9@79977', '889898', 'mmmmmmmm', 8),
('kkkkkkkk', 'kkkkkkkkk', '2016-11-29', '000000000', '0000000000000', 'llllllllllllll', 'kokoak', 102, 'oakoaksoksa', 'ouasoausou', 'bjsbjsdbsdjb', 'oasjoajs@ajaojsoj', 'juniaozika', '12345', 11),
('osojosjsd', 'osjosjosdj', '2016-11-21', '000000000', '0000000000000', 'lklklklkokas', 'iajsoalsahs', 123, 'aisgdaskdg', 'sdfudsfugk', 'skguskdgauk', 'kasugfukg@uoshdsfuhsd', 'juniaozika', '', 12),
('osojosjsd', 'osjosjosdj', '2016-11-21', '000000000', '0000000000000', 'lklklklkokas', 'iajsoalsahs', 123, 'aisgdaskdg', 'sdfudsfugk', 'skguskdgauk', 'kasugfukg@uoshdsfuhsd', 'juniaozika30', '12345', 13),
('osojosjsd', 'osjosjosdj', '2016-11-21', '000000000', '0000000000000', 'lklklklkokas', 'iajsoalsahs', 123, 'aisgdaskdg', 'sdfudsfugk', 'skguskdgauk', 'kasugfukg@uoshdsfuhsd', 'juniaozika30', '12345', 14),
('Gina', 'Molinaro', '1967-12-09', '000000000', '0000000000000', 'rua doutor emilio winther', 'centro', 1193, 'taubate', 'sao paulo', 'brasil', 'gina@ginagina', 'ginamolinaro', '12345', 15),
('marcao', 'molinaro', '2016-11-23', '000000000', '0000000000000', 'rua rua rua', 'rua ru arua', 10, 'sp', 'sp', 'brasil', 'akmsakams@kksmdksmd', 'marcola10', '7c4a8d09ca3762af61e59520943dc26494f8941b', 24),
('marcola', 'molinarovski', '2016-11-22', '000000000', '', '', '', 0, '', '', '', 'kkkkkkkk@llllllll', 'kkkkkkkk', 'kkkkkkkk', 23),
('akmaksm', 'asaimasi', '2016-11-16', 'omomomo', 'omomomom', 'mom', 'momo', 0, 'omom', 'omom', 'omom', 'oosdosmdm@sodmsod', 'mom', 'e5e0213249cd5bd8fb9d09bb50854072d3dfa7db', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
