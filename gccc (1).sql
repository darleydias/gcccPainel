-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 30/05/2021 às 22:18
-- Versão do servidor: 10.3.27-MariaDB-0+deb10u1
-- Versão do PHP: 7.3.27-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gccc`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_dh`
--

CREATE TABLE `tb_dh` (
  `dh_id` int(11) NOT NULL,
  `dh_idIp` int(11) NOT NULL,
  `dh_dh` varchar(50) NOT NULL,
  `dh_usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_ip`
--

CREATE TABLE `tb_ip` (
  `ip_id` int(11) NOT NULL,
  `ip_codProcess` varchar(30) NOT NULL,
  `ip_dhParse` timestamp NOT NULL DEFAULT current_timestamp(),
  `ip_usu` int(11) NOT NULL,
  `ip_ip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_login` varchar(100) NOT NULL,
  `user_password` text NOT NULL,
  `user_dh` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_name`, `user_login`, `user_password`, `user_dh`, `user_foto`) VALUES
(1, 'Darley Wilson Dias', 'darley', 'yhvh77', '2021-05-30 18:11:12', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_dh`
--
ALTER TABLE `tb_dh`
  ADD PRIMARY KEY (`dh_id`);

--
-- Índices de tabela `tb_ip`
--
ALTER TABLE `tb_ip`
  ADD PRIMARY KEY (`ip_id`);

--
-- Índices de tabela `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_dh`
--
ALTER TABLE `tb_dh`
  MODIFY `dh_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_ip`
--
ALTER TABLE `tb_ip`
  MODIFY `ip_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
