-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para gestcongresso
CREATE DATABASE IF NOT EXISTS `gestcongresso` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `gestcongresso`;

-- Copiando estrutura para tabela gestcongresso.delegado
CREATE TABLE IF NOT EXISTS `delegado` (
  `id_pessoa` int(10) unsigned NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` smallint(6) NOT NULL,
  `estado_civil` smallint(6) NOT NULL,
  `bilhete` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local_emissao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_emissao` date NOT NULL,
  `data_validade` date NOT NULL,
  `provincia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cartao_eleitoral` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grupo` int(11) NOT NULL,
  `municipio_actual` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distrito` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro_actual` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `casa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `habilitacoes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `especializacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profissao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local_trabalho` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio_militancia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_ingresso` date NOT NULL,
  `cartao_militante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempo_militancia` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `delegado_bilhete_unique` (`bilhete`),
  UNIQUE KEY `delegado_whatsapp_unique` (`whatsapp`),
  UNIQUE KEY `delegado_email_unique` (`email`),
  UNIQUE KEY `delegado_cartao_militante_unique` (`cartao_militante`),
  KEY `delegado_id_pessoa_foreign` (`id_pessoa`),
  CONSTRAINT `delegado_id_pessoa_foreign` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela gestcongresso.delegado: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `delegado` DISABLE KEYS */;
INSERT INTO `delegado` (`id_pessoa`, `nome`, `data_nascimento`, `sexo`, `estado_civil`, `bilhete`, `local_emissao`, `data_emissao`, `data_validade`, `provincia`, `municipio`, `bairro`, `cartao_eleitoral`, `grupo`, `municipio_actual`, `distrito`, `bairro_actual`, `rua`, `casa`, `whatsapp`, `email`, `habilitacoes`, `especializacao`, `profissao`, `local_trabalho`, `cargo`, `municipio_militancia`, `data_ingresso`, `cartao_militante`, `cap`, `tempo_militancia`, `created_at`, `updated_at`) VALUES
	(41, 'Justino Mukoko', '1980-10-05', 1, 1, '003245679LA030', 'Luanda', '2018-10-11', '2021-10-15', 'Luanda', 'Cazenga', 'Camama', '12345', 1, 'Kilamba Kiaxi', 'Sapú', 'Camama', 'SN', 'SN', 'SN', 'justino@gmail.com', '4', 'Quimica', 'Analista', 'Refriango', 'Tecnico', '5', '2009-10-11', '11111', '1', 5, '2021-10-15 13:49:44', '2021-10-15 13:49:44');
/*!40000 ALTER TABLE `delegado` ENABLE KEYS */;

-- Copiando estrutura para tabela gestcongresso.imprensa
CREATE TABLE IF NOT EXISTS `imprensa` (
  `id_pessoa` int(10) unsigned NOT NULL,
  `proveniencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `imprensa_id_pessoa_foreign` (`id_pessoa`),
  CONSTRAINT `imprensa_id_pessoa_foreign` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela gestcongresso.imprensa: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `imprensa` DISABLE KEYS */;
INSERT INTO `imprensa` (`id_pessoa`, `proveniencia`, `created_at`, `updated_at`) VALUES
	(37, '37', '2021-10-15 13:40:57', '2021-10-15 13:40:57'),
	(43, '43', '2021-10-15 13:54:09', '2021-10-15 13:54:09');
/*!40000 ALTER TABLE `imprensa` ENABLE KEYS */;

-- Copiando estrutura para tabela gestcongresso.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela gestcongresso.migrations: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2019_09_22_160323_create_pessoa_table', 2),
	(3, '2021_10_14_184616_create_servico_table', 3),
	(4, '2021_10_14_184617_create_imprensa_table', 3),
	(5, '2021_10_14_184618_create_delegado_table', 4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela gestcongresso.pessoa
CREATE TABLE IF NOT EXISTS `pessoa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pessoa_telefone_unique` (`telefone`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela gestcongresso.pessoa: ~21 rows (aproximadamente)
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` (`id`, `nome`, `telefone`, `tipo`, `created_at`, `updated_at`) VALUES
	(37, 'Matondo Sebastião', '999000000', 2, '2021-10-15 13:40:57', '2021-10-15 13:40:57'),
	(38, 'António Messias', '999898989', 3, '2021-10-15 13:42:06', '2021-10-15 13:42:06'),
	(41, 'Justino Mukoko', '911000000', 1, '2021-10-15 13:49:44', '2021-10-15 13:49:44'),
	(43, 'Eunice Gastão', '923000000', 2, '2021-10-15 13:54:09', '2021-10-15 13:54:09');
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;

-- Copiando estrutura para tabela gestcongresso.servico
CREATE TABLE IF NOT EXISTS `servico` (
  `id_pessoa` int(10) unsigned NOT NULL,
  `proveniencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `servico_id_pessoa_foreign` (`id_pessoa`),
  CONSTRAINT `servico_id_pessoa_foreign` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela gestcongresso.servico: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `servico` DISABLE KEYS */;
INSERT INTO `servico` (`id_pessoa`, `proveniencia`, `created_at`, `updated_at`) VALUES
	(38, '38', '2021-10-15 13:42:06', '2021-10-15 13:42:06');
/*!40000 ALTER TABLE `servico` ENABLE KEYS */;

-- Copiando estrutura para tabela gestcongresso.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` smallint(6) NOT NULL,
  `tipo` smallint(6) NOT NULL,
  `municipio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela gestcongresso.users: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `nome`, `username`, `telefone`, `estado`, `tipo`, `municipio`, `password`, `created_at`, `updated_at`) VALUES
	(1, 'Wawingi Sebastião António', 'wawingi.antonio', '915986452', 1, 1, '10', '$2y$10$XpNQefi7MxXb4v.blp.f7.Tc5xP9CGoo5hEaiLEfLoSWYkCEj48BK', '2021-10-14 12:01:27', '2021-10-14 12:01:27'),
	(2, 'Eunice Gastão', 'eunice.gastao', '912434343', 1, 1, '10', '$2y$10$DpWzTDXU3V2QfrE1rbNci..q14ZvMu2vfNJz4M9ujaOuJBDgM7wm2', '2021-10-14 12:01:27', '2021-10-15 11:29:04'),
	(3, 'Dalton Cabeia', 'dalton.cabeia', '995299016', 1, 1, '10', '$2y$10$iJMDnSTQSX9qea5Ns0ZxTuNcdbscfN6j0z17lzjwDTzCBtZeG0hJ.', '2021-10-14 14:10:39', '2021-10-14 14:10:39'),
	(4, 'Sediamuana Utuca Congolo', 'sediamuana.utuca', '945600045', 1, 2, '5', '$2y$10$YI9uYu.bMC4T38FoPSko7.WKYqvhOAFdmY99hDE8UW.Z9z7Vb/ES6', '2021-10-14 14:39:58', '2021-10-15 11:30:10');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
