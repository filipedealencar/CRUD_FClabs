-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Fev-2022 às 13:43
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_fc_labs`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(4) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `login_user` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefone` int(15) NOT NULL,
  `cpf` int(15) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `nome_mae` varchar(150) NOT NULL,
  `user_status` varchar(15) NOT NULL,
  `dt_inclusao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dt_alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `login_user`, `senha`, `email`, `telefone`, `cpf`, `dt_nascimento`, `nome_mae`, `user_status`, `dt_inclusao`, `dt_alteracao`) VALUES
(1, 'Emanuelle Batista', 'emanuelle_batista', 'mv25jn', 'emanuelle@dominio.com.br', 2147483647, 892500, '1980-04-01', 'Elisa Araujo', 'Ativo', '2022-02-01 11:52:32', '2022-02-01 11:52:32'),
(2, 'Julio Carvalho', 'julio_carvalho', 'nbhzru', 'julio@dominio.com.br', 929491027, 751699, '1958-04-13', 'Melissa Menezzes', 'Inativo', '2022-02-01 05:02:52', '2022-02-01 05:02:52'),
(3, 'Yasmin Goncalves', 'yasmin_goncalves', 'b8hakk', 'yasmin@dominio.com.br', 2147483647, 868876, '1984-09-19', 'Ariela Alencar', 'Bloqueado', '2021-04-07 03:00:00', '2021-10-26 03:00:00'),
(4, 'Sophia Pinheiro', 'sophia_pinheiro', '6rv6kb', 'sophia@dominio.com.br', 859491336, 284689, '1976-10-19', 'Amanda Santana', 'Bloqueado', '2022-02-01 03:45:15', '2022-02-01 03:45:15'),
(5, 'Nicolas Mesquita', 'nicolas_mesquita', '6ezjvp', 'nicolas@dominio.com.br', 2147483647, 355318, '1956-11-04', 'Larissa Maximus', 'Ativo', '2020-01-06 03:00:00', '2020-05-23 03:00:00'),
(6, 'Beatriz Queiroz', 'beatriz_queiroz', 'zayywe', 'beatriz@dominio.com.br', 2147483647, 559981, '1960-12-04', 'Maria Clara Queiroz', 'Bloqueado', '2020-10-30 03:00:00', '2021-10-16 03:00:00'),
(7, 'Lavinia Oliveira', 'lavinia_oliveira', 'utbkg3', 'lavinia@dominio.com.br', 439540787, 507452, '1973-09-16', 'Marina Junqueira', 'Ativo', '2021-08-19 03:00:00', '2021-09-30 03:00:00'),
(8, 'Sophia Vitor', 'sophia_vitor', 'utbmp8', 'sophia@dominio.com.br', 839705204, 225196, '1991-05-24', 'Debora Monteiro', 'Ativo', '2021-03-29 03:00:00', '2021-12-23 03:00:00'),
(9, 'Emanuelly Suarez', 'emanuelly_suarez', 'etvqs4', 'emanuelly@dominio.com.br', 2147483647, 939210, '2002-01-05', 'Sara Lacerda', 'Inativo', '2020-08-27 03:00:00', '2021-08-28 03:00:00'),
(10, 'Abigail Camargo', 'abigail_camargo', 'xss5vb', 'abigail@dominio.com.br', 869725925, 231783, '1981-04-13', 'Rebeca Duarte', 'Ativo', '2021-10-15 03:00:00', '2021-12-21 03:00:00'),
(11, 'Paloma Oliveira', 'paloma_oliveira', '8btph6', 'paloma@dominio.com.br', 2147483647, 203294, '1965-03-24', 'Alessandra Maia', 'Bloqueado', '2020-02-07 03:00:00', '2021-09-27 03:00:00'),
(12, 'Fabricio Sampaio', 'fabricio_sampaio', 'nyrb85', 'fabricio@dominio.com.br', 2147483647, 861966, '1991-09-30', ' Maria Araulo', 'Ativo', '2020-01-29 03:00:00', '2020-06-08 03:00:00'),
(13, 'Marcelo Galisteu', 'marcelo_galisteu', 'xcraa6', 'marcelo@dominio.com.br', 439373760, 243448, '1979-09-20', 'Natalia Martinele', 'Bloqueado', '2021-09-25 03:00:00', '2021-12-15 03:00:00'),
(14, 'Leticia Soares', 'leticia_soares', 'wjycj9', 'leticia@dominio.com.br', 2147483647, 683715, '1981-11-03', 'Nicole Menezzes', 'Ativo', '2020-05-11 03:00:00', '2020-10-17 03:00:00'),
(15, 'Enzo Gabriel Garcia', 'enzo_gabriel garcia', '5zmmug', 'enzo_gabriel@dominio.com.br', 969919770, 248883, '1978-01-24', 'Marta Maria', 'Ativo', '2021-03-03 03:00:00', '2021-12-08 03:00:00'),
(16, 'Milene Pinheiro', 'milene_pinheiro', 'usd4qw', 'milene@dominio.com.br', 679283400, 304918, '1959-04-14', 'Clara Ribeiro', 'Inativo', '2020-09-30 03:00:00', '2021-11-10 03:00:00'),
(17, 'Pablo Galisteu', 'pablo_galisteu', '5ycud9', 'pablo@dominio.com.br', 929823185, 933355, '1963-02-13', 'Clara Souza', 'Ativo', '2020-02-23 03:00:00', '2020-08-22 03:00:00'),
(18, 'Alana Rodrigues', 'alana_rodrigues', 'k8nmfb', 'alana@dominio.com.br', 519246498, 349883, '1966-12-24', 'Cloe Vieira', 'Ativo', '2020-08-28 03:00:00', '2021-06-10 03:00:00'),
(19, 'Paola Duarte', 'paola_duarte', 'q7r8rv', 'paola@dominio.com.br', 2147483647, 617170, '1971-01-05', 'Carol Xavier', 'Inativo', '2020-08-21 03:00:00', '2021-08-31 03:00:00'),
(20, 'Leticia Vieira', 'leticia_vieira', 'uykeun', 'leticia@dominio.com.br', 2147483647, 958704, '1998-08-20', 'Maria Luiza Santana', 'Ativo', '2020-09-27 03:00:00', '2021-09-04 03:00:00'),
(21, 'Lara Martins', 'lara_martins', 'syrtnz', 'lara@dominio.com.br', 659126093, 485630, '1999-10-06', 'Ingrid Barreto', 'Inativo', '2020-06-08 03:00:00', '2021-10-01 03:00:00'),
(22, 'Wilian Freitas', 'wilian_freitas', 'h8jd5s', 'wilian@dominio.com.br', 2147483647, 149612, '1957-06-22', 'Flor Paes', 'Ativo', '2020-06-15 03:00:00', '2021-06-16 03:00:00'),
(23, 'Leonardo Cavalcante', 'leonardo_cavalcante', 'hnhd2z', 'leonardo@dominio.com.br', 919533752, 402988, '1974-11-29', 'Brenda Maximus', 'Bloqueado', '2020-10-17 03:00:00', '2021-07-18 03:00:00'),
(24, 'Santiago Souza', 'santiago_souza', 'rewckx', 'santiago@dominio.com.br', 2147483647, 179144, '1957-12-26', 'Vitoria Rocha', 'Ativo', '2020-12-08 03:00:00', '2021-02-04 03:00:00'),
(25, 'Miguel Gomes', 'miguel_gomes', 'jsuhhz', 'miguel@dominio.com.br', 119754076, 238474, '1995-12-29', 'Maria Clara Pinheiro', 'Inativo', '2020-11-10 03:00:00', '2021-12-05 03:00:00'),
(26, 'Daniel Goncalves', 'daniel_goncalves', 'j6ccdh', 'daniel@dominio.com.br', 719449719, 784498, '1995-08-06', 'Maria Clara Nogueira', 'Ativo', '2020-08-22 03:00:00', '2021-01-03 03:00:00'),
(27, 'Esther Pereira', 'esther_pereira', 'pgbwyn', 'esther@dominio.com.br', 2147483647, 659387, '1965-05-02', 'Lia Novaes', 'Ativo', '2020-06-10 03:00:00', '2020-09-21 03:00:00'),
(28, 'Angelina Nogueira', 'angelina_nogueira', 'abykxp', 'angelina@dominio.com.br', 2147483647, 332278, '1974-11-07', 'Carol Maia', 'Ativo', '2020-08-31 03:00:00', '2021-01-25 03:00:00'),
(29, 'Diogo Maia', 'diogo_maia', 'q2wnuh', 'diogo@dominio.com.br', 279857442, 771305, '1966-02-25', 'Luana Figueira', 'Bloqueado', '2020-09-04 03:00:00', '2021-02-08 03:00:00'),
(30, 'Lorena Galisteu', 'lorena_galisteu', 'ggt4bw', 'lorena@dominio.com.br', 2147483647, 734247, '1984-09-15', 'Camila Cavalcante', 'Ativo', '2020-10-01 03:00:00', '2021-03-13 03:00:00'),
(31, 'Guilherme Gomes', 'guilherme_gomes', 'wkjz7k', 'guilherme@dominio.com.br', 2147483647, 61741, '1973-06-18', 'Ester Moreira', 'Ativo', '2020-12-24 03:00:00', '2021-04-07 03:00:00'),
(32, 'Vinicios Ribeiro', 'vinicios_ribeiro', 'n9sgax', 'vinicios@dominio.com.br', 219496959, 234595, '1989-01-03', 'Paloma Freitas', 'Inativo', '2020-03-20 03:00:00', '2021-10-01 03:00:00'),
(33, 'Jose Queiroz', 'jose_queiroz', 'tv559n', 'jose@dominio.com.br', 869485550, 506951, '1998-02-01', 'Lis Gomes', 'Ativo', '2020-10-26 03:00:00', '2021-01-06 03:00:00'),
(34, 'Antonio Gomes', 'antonio_gomes', '5wr36h', 'antonio@dominio.com.br', 2147483647, 670118, '1962-05-23', 'Isadora Pinheiro', 'Ativo', '2020-03-18 03:00:00', '2021-10-30 03:00:00'),
(35, 'Cecilia Neves', 'cecilia_neves', 'qmzyrw', 'cecilia@dominio.com.br', 219598417, 266927, '1967-02-10', 'Eduarda Morais', 'Inativo', '2020-05-23 03:00:00', '2021-08-19 03:00:00'),
(36, 'Gustavo Moraes', 'gustavo_moraes', 'm4fw4q', 'gustavo@dominio.com.br', 2147483647, 903697, '1981-02-19', 'Isabella Cavalcante', 'Ativo', '2020-10-16 03:00:00', '2021-03-29 03:00:00'),
(37, 'Julia Morais', 'julia_morais', 'gqyt5d', 'julia@dominio.com.br', 2147483647, 361664, '1974-11-15', 'Leticia Mauricio', 'Bloqueado', '2020-06-16 03:00:00', '2021-08-27 03:00:00'),
(38, 'angelo Queiroz', 'angelo_queiroz', '84d24j', 'angelo@dominio.com.br', 989878344, 276568, '1992-06-25', 'Beatriz Martins', 'Ativo', '2020-07-18 03:00:00', '2021-10-15 03:00:00'),
(39, 'Adriana Martinele', 'adriana_martinele', 'a7zeuj', 'adriana@dominio.com.br', 2147483647, 5058, '1953-07-14', 'Ariela Alencar', 'Ativo', '2020-02-04 03:00:00', '2021-02-07 03:00:00'),
(40, 'Melissa Vieira', 'melissa_vieira', '3bejcd', 'melissa@dominio.com.br', 2147483647, 416316, '1989-10-08', 'Rafaela Alves', 'Inativo', '2020-12-05 03:00:00', '2021-01-29 03:00:00'),
(41, 'Luiza Barreto', 'luiza_barreto', 'n36d43', 'luiza@dominio.com.br', 2147483647, 406425, '1951-02-12', 'Angelina Novaes', 'Ativo', '2020-01-03 03:00:00', '2021-09-25 03:00:00'),
(42, 'Renato Carvalho', 'renato_carvalho', 'eygtja', 'renato@dominio.com.br', 2147483647, 332784, '1987-08-28', 'Sarah Barreto', 'Bloqueado', '2020-09-21 03:00:00', '2021-05-11 03:00:00'),
(43, 'Mariana Freitas', 'mariana_freitas', 'q5r4j2', 'mariana@dominio.com.br', 419341657, 316248, '1996-01-26', 'Livia Pinheiro', 'Ativo', '2020-01-25 03:00:00', '2021-03-03 03:00:00'),
(44, 'Emanuel Vasconcelos', 'emanuel_vasconcelos', 'k4ybpf', 'emanuel@dominio.com.br', 2147483647, 864957, '1967-05-11', 'Vitoria Cavalcante', 'Inativo', '2020-11-20 03:00:00', '2021-11-20 03:00:00'),
(45, 'Jose Souza', 'jose_souza', 'xqppbz', 'jose@dominio.com.br', 279202129, 200973, '1996-09-03', 'Roberta Silva', 'Ativo', '2020-01-25 03:00:00', '2021-01-25 03:00:00'),
(46, 'Apolo Paiva', 'apolo_paiva', 's9d4r6', 'apolo@dominio.com.br', 719255873, 580436, '1958-01-23', 'Anabela Barcellos', 'Bloqueado', '2020-11-03 03:00:00', '2021-11-03 03:00:00'),
(47, 'Laura Reis', 'laura_reis', 'k467sa', 'laura@dominio.com.br', 2147483647, 137903, '1978-01-20', 'Catarina Santos', 'Ativo', '2020-10-26 03:00:00', '2021-10-26 03:00:00'),
(48, 'Bianca Duarte', 'bianca_duarte', 'xua8ys', 'bianca@dominio.com.br', 819571548, 375708, '1955-09-21', 'Rebeca Martinez', 'Bloqueado', '2020-08-22 03:00:00', '2021-08-22 03:00:00'),
(49, 'Pablo Pereira', 'pablo_pereira', '3pq9cg', 'pablo@dominio.com.br', 839487576, 656883, '1964-01-19', 'Adriana Goncalves', 'Ativo', '2020-03-10 03:00:00', '2021-04-21 03:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
