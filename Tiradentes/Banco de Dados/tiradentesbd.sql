-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Out-2021 às 18:41
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tiradentesbd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `certificados_aluno`
--

CREATE TABLE `certificados_aluno` (
  `nomeDocumentos` varchar(220) NOT NULL,
  `linkDocumento` varchar(220) NOT NULL,
  `tipoDocumento` varchar(220) NOT NULL,
  `horasDocumento` int(128) NOT NULL,
  `statusDocumento` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `certificados_aluno`
--

INSERT INTO `certificados_aluno` (`nomeDocumentos`, `linkDocumento`, `tipoDocumento`, `horasDocumento`, `statusDocumento`) VALUES
('Inovando com CSS', 'certificado.php', 'On-line', 10, 'Homologado'),
('Curso de HTML Básico', 'certificado.php', 'On-line', 20, 'Não-Homologado'),
('Palestra de Empreendorismo', 'certificado.php', 'Presencial', 5, 'Homologado'),
('Administrando Bancos de Dados', 'certificado.php', 'On-line', 10, 'Homologado'),
('Curso de JavaScript', 'certificado.php', 'On-line', 30, 'Homologado');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
