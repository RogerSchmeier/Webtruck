-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.21 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para webtruck
CREATE DATABASE IF NOT EXISTS `webtruck` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `webtruck`;


-- Copiando estrutura para tabela webtruck.abastecimentos
CREATE TABLE IF NOT EXISTS `abastecimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `preco_comb` float NOT NULL,
  `preco_comp` float NOT NULL,
  `data` date NOT NULL,
  `litros_comb` float DEFAULT NULL,
  `litros_comp` float DEFAULT NULL,
  `Posto` varchar(100) NOT NULL,
  `km_inicio` float NOT NULL,
  `km_fim` float DEFAULT NULL,
  `media` varchar(45) DEFAULT NULL,
  `veiculo_id` int(11) NOT NULL,
  `implemento_id` int(11) NOT NULL,
  `combustivei_id` int(11) NOT NULL,
  `complemento_id` int(11) NOT NULL,
  `cidade_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_abastecimentos_veiculos1_idx` (`veiculo_id`),
  KEY `fk_abastecimentos_implementos1_idx` (`implemento_id`),
  KEY `fk_abastecimentos_combustiveis1_idx` (`combustivei_id`),
  KEY `fk_abastecimentos_complementos1_idx` (`complemento_id`),
  KEY `fk_abastecimentos_cidades1_idx` (`cidade_id`),
  CONSTRAINT `fk_abastecimentos_cidades1` FOREIGN KEY (`cidade_id`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_abastecimentos_combustiveis1` FOREIGN KEY (`combustivei_id`) REFERENCES `combustiveis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_abastecimentos_complementos1` FOREIGN KEY (`complemento_id`) REFERENCES `complementos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_abastecimentos_implementos1` FOREIGN KEY (`implemento_id`) REFERENCES `implementos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_abastecimentos_veiculos1` FOREIGN KEY (`veiculo_id`) REFERENCES `veiculos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela webtruck.abastecimentos_log
CREATE TABLE IF NOT EXISTS `abastecimentos_log` (
  `id` int(11) DEFAULT NULL,
  `km_fim` float DEFAULT NULL,
  `media` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela webtruck.agendamentos
CREATE TABLE IF NOT EXISTS `agendamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `motivo` varchar(200) NOT NULL,
  `data` date NOT NULL,
  `endereco` varchar(1000) DEFAULT NULL,
  `implemento_id` int(11) DEFAULT NULL,
  `veiculo_id` int(11) DEFAULT NULL,
  `cidade_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_agendamentos_implementos1_idx` (`implemento_id`),
  KEY `fk_agendamentos_veiculos1_idx` (`veiculo_id`),
  KEY `fk_agendamentos_cidades1_idx` (`cidade_id`),
  CONSTRAINT `fk_agendamentos_cidades1` FOREIGN KEY (`cidade_id`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_agendamentos_implementos1` FOREIGN KEY (`implemento_id`) REFERENCES `implementos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_agendamentos_veiculos1` FOREIGN KEY (`veiculo_id`) REFERENCES `veiculos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela webtruck.cidades
CREATE TABLE IF NOT EXISTS `cidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(75) NOT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `pais` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela webtruck.combustiveis
CREATE TABLE IF NOT EXISTS `combustiveis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `obs` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela webtruck.complementos
CREATE TABLE IF NOT EXISTS `complementos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `obs` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela webtruck.fornecedores
CREATE TABLE IF NOT EXISTS `fornecedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fantasia` varchar(100) DEFAULT NULL,
  `razao` varchar(100) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `celular` varchar(10) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `cidade_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `endereco_UNIQUE` (`endereco`),
  KEY `fk_fornecedores_cidades1_idx` (`cidade_id`),
  CONSTRAINT `fk_fornecedores_cidades1` FOREIGN KEY (`cidade_id`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela webtruck.implementos
CREATE TABLE IF NOT EXISTS `implementos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(45) NOT NULL,
  `ano` year(4) NOT NULL,
  `chassis` varchar(45) NOT NULL,
  `eixos` float NOT NULL,
  `placa` varchar(7) NOT NULL,
  `renavan` varchar(45) NOT NULL,
  `obs` text,
  `cidade_id` int(11) NOT NULL,
  `motorista_id` int(11) NOT NULL,
  `cor` varchar(45) DEFAULT NULL,
  `antt` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_implementos_cidades1_idx` (`cidade_id`),
  KEY `fk_implementos_motoristas1_idx` (`motorista_id`),
  CONSTRAINT `fk_implementos_cidades1` FOREIGN KEY (`cidade_id`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_implementos_motoristas1` FOREIGN KEY (`motorista_id`) REFERENCES `motoristas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela webtruck.manutencoes
CREATE TABLE IF NOT EXISTS `manutencoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `motivo` text NOT NULL,
  `km_veiculo` float NOT NULL,
  `data` date NOT NULL,
  `garantia` varchar(100) DEFAULT NULL,
  `preco_obra` float NOT NULL,
  `preco_peca` float NOT NULL,
  `veiculo_id` int(11) NOT NULL,
  `servico_id` int(11) NOT NULL,
  `fornecedore_id` int(11) NOT NULL,
  `implemento_id` int(11) NOT NULL,
  `cidade_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_manutencoes_veiculos1_idx` (`veiculo_id`),
  KEY `fk_manutencoes_servicos1_idx` (`servico_id`),
  KEY `fk_manutencoes_fornecedores1_idx` (`fornecedore_id`),
  KEY `fk_manutencoes_implementos1_idx` (`implemento_id`),
  KEY `fk_manutencoes_cidades1_idx` (`cidade_id`),
  CONSTRAINT `fk_manutencoes_cidades1` FOREIGN KEY (`cidade_id`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_manutencoes_fornecedores1` FOREIGN KEY (`fornecedore_id`) REFERENCES `fornecedores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_manutencoes_implementos1` FOREIGN KEY (`implemento_id`) REFERENCES `implementos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_manutencoes_servicos1` FOREIGN KEY (`servico_id`) REFERENCES `servicos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_manutencoes_veiculos1` FOREIGN KEY (`veiculo_id`) REFERENCES `veiculos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela webtruck.motoristas
CREATE TABLE IF NOT EXISTS `motoristas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(75) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `RG` varchar(10) NOT NULL,
  `CNH` varchar(2) NOT NULL,
  `data_nasc` date NOT NULL,
  `data_adm` date NOT NULL,
  `data_dem` date NOT NULL,
  `telefone` varchar(10) DEFAULT NULL,
  `celular` varchar(10) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cidade_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_motoristas_cidades1_idx` (`cidade_id`),
  CONSTRAINT `fk_motoristas_cidades1` FOREIGN KEY (`cidade_id`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela webtruck.multas
CREATE TABLE IF NOT EXISTS `multas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `local` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `valor` float NOT NULL,
  `pontos` float NOT NULL,
  `motivo` text NOT NULL,
  `veiculo_id` int(11) NOT NULL,
  `implemento_id` int(11) NOT NULL,
  `motorista_id` int(11) NOT NULL,
  `cidade_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_multas_veiculos1_idx` (`veiculo_id`),
  KEY `fk_multas_implementos1_idx` (`implemento_id`),
  KEY `fk_multas_motoristas1_idx` (`motorista_id`),
  KEY `fk_multas_cidades1_idx` (`cidade_id`),
  CONSTRAINT `fk_multas_cidades1` FOREIGN KEY (`cidade_id`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_multas_implementos1` FOREIGN KEY (`implemento_id`) REFERENCES `implementos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_multas_motoristas1` FOREIGN KEY (`motorista_id`) REFERENCES `motoristas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_multas_veiculos1` FOREIGN KEY (`veiculo_id`) REFERENCES `veiculos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela webtruck.pneus
CREATE TABLE IF NOT EXISTS `pneus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(45) NOT NULL,
  `km_inicial` float NOT NULL,
  `km_final` float DEFAULT NULL,
  `media_km` float DEFAULT NULL,
  `preco` float NOT NULL,
  `numero` decimal(10,0) NOT NULL,
  `dano_total` varchar(3) DEFAULT NULL,
  `fornecedore_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pneus_fornecedores1_idx` (`fornecedore_id`),
  CONSTRAINT `fk_pneus_fornecedores1` FOREIGN KEY (`fornecedore_id`) REFERENCES `fornecedores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela webtruck.recapagens
CREATE TABLE IF NOT EXISTS `recapagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `km_inicial` decimal(10,0) NOT NULL,
  `km_final` decimal(10,0) DEFAULT NULL,
  `media_km` decimal(10,0) DEFAULT NULL,
  `preco_recape` float NOT NULL,
  `recape` varchar(2) DEFAULT NULL,
  `pneu_id` int(11) NOT NULL,
  `fornecedore_id` int(11) NOT NULL,
  `dano_total` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_recapagens_pneus1_idx` (`pneu_id`),
  KEY `fk_recapagens_fornecedores1_idx` (`fornecedore_id`),
  CONSTRAINT `fk_recapagens_fornecedores1` FOREIGN KEY (`fornecedore_id`) REFERENCES `fornecedores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_recapagens_pneus1` FOREIGN KEY (`pneu_id`) REFERENCES `pneus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela webtruck.servicos
CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fantasia` varchar(100) DEFAULT NULL,
  `razao` varchar(100) NOT NULL,
  `cnpj` varchar(14) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `telefone` varchar(10) DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `cidade_id` int(11) NOT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_servicos_cidades1_idx` (`cidade_id`),
  CONSTRAINT `fk_servicos_cidades1` FOREIGN KEY (`cidade_id`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela webtruck.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela webtruck.veiculos
CREATE TABLE IF NOT EXISTS `veiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(45) NOT NULL,
  `marca` varchar(45) DEFAULT NULL,
  `ano` year(4) NOT NULL,
  `motor` varchar(45) NOT NULL,
  `chassis` varchar(45) NOT NULL,
  `renavam` varchar(45) NOT NULL,
  `placa` varchar(7) NOT NULL,
  `antt` varchar(45) NOT NULL,
  `obs` text,
  `motorista_id` int(11) NOT NULL,
  `eixos` float DEFAULT NULL,
  `cidade_id` int(11) NOT NULL,
  `kilometragem` float DEFAULT NULL,
  `cor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_veiculos_motoristas1_idx` (`motorista_id`),
  KEY `fk_veiculos_cidades1_idx` (`cidade_id`),
  CONSTRAINT `fk_veiculos_cidades1` FOREIGN KEY (`cidade_id`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_veiculos_motoristas1` FOREIGN KEY (`motorista_id`) REFERENCES `motoristas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
