-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 15/11/2017 às 23:29
-- Versão do servidor: 10.1.26-MariaDB
-- Versão do PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `clinica`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `consultas`
--

CREATE TABLE `consultas` (
  `cod_consultas` int(11) NOT NULL,
  `queixa` varchar(35) NOT NULL,
  `fk_med_id` int(11) NOT NULL,
  `fk_med_crm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_func` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cpf` char(15) NOT NULL,
  `tel_funcionario_fk` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `medico`
--

CREATE TABLE `medico` (
  `id_med` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `crm` int(11) NOT NULL,
  `cpf` char(15) NOT NULL,
  `tel_med_fk` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` char(14) NOT NULL,
  `nacionalidade` varchar(25) NOT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `rg` char(9) DEFAULT NULL,
  `estado_civil` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `rua` varchar(40) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `complemento` text,
  `profissao` varchar(20) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `tel_paciente` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `solicitacoes`
--

CREATE TABLE `solicitacoes` (
  `prescricao` varchar(40) NOT NULL,
  `exames_solicitados` varchar(40) NOT NULL,
  `fk_medico_id_med` int(11) NOT NULL,
  `fk_medico_crm` int(11) NOT NULL,
  `fk_paciente_matricula` int(11) NOT NULL,
  `fk_paciente_rg_pk` char(9) NOT NULL,
  `fk_paciente_cpf_pk` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tel_funcionario`
--

CREATE TABLE `tel_funcionario` (
  `tel_funcionario_pk` int(11) NOT NULL,
  `tel_funcionario` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tel_medico`
--

CREATE TABLE `tel_medico` (
  `tel_medico_pk` int(11) NOT NULL,
  `tel_medico` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `login` varchar(30) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`) VALUES
(1, 'root', '123');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`cod_consultas`),
  ADD KEY `cod_consultas_fk` (`cod_consultas`),
  ADD KEY `fk_med_id` (`fk_med_id`),
  ADD KEY `fk_med_crm` (`fk_med_crm`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_func`),
  ADD KEY `id_func_fk` (`id_func`),
  ADD KEY `fk_tel_funcionario_pk` (`tel_funcionario_fk`);

--
-- Índices de tabela `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id_med`,`crm`),
  ADD KEY `id_medico_fk` (`id_med`),
  ADD KEY `crm_fk` (`crm`),
  ADD KEY `fk_tel_med` (`tel_med_fk`);

--
-- Índices de tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Índices de tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  ADD KEY `fk_medico_id_med` (`fk_medico_id_med`),
  ADD KEY `fk_medico_crm` (`fk_medico_crm`),
  ADD KEY `fk_paciente_matricula_pk` (`fk_paciente_matricula`),
  ADD KEY `fk_paciente_cpf_pk` (`fk_paciente_cpf_pk`),
  ADD KEY `fk_paciente_rg_pk` (`fk_paciente_rg_pk`);

--
-- Índices de tabela `tel_funcionario`
--
ALTER TABLE `tel_funcionario`
  ADD PRIMARY KEY (`tel_funcionario_pk`),
  ADD KEY `tel_funcionario_pk_fk` (`tel_funcionario_pk`);

--
-- Índices de tabela `tel_medico`
--
ALTER TABLE `tel_medico`
  ADD PRIMARY KEY (`tel_medico_pk`),
  ADD KEY `fk_tel_med` (`tel_medico_pk`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_func` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `medico`
--
ALTER TABLE `medico`
  MODIFY `id_med` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tel_funcionario`
--
ALTER TABLE `tel_funcionario`
  MODIFY `tel_funcionario_pk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tel_medico`
--
ALTER TABLE `tel_medico`
  MODIFY `tel_medico_pk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201030410;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `fk_med_crm` FOREIGN KEY (`fk_med_crm`) REFERENCES `medico` (`crm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_med_id` FOREIGN KEY (`fk_med_id`) REFERENCES `medico` (`id_med`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `fk_tel_funcionario_pk` FOREIGN KEY (`tel_funcionario_fk`) REFERENCES `tel_funcionario` (`tel_funcionario_pk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `fk_tel_med` FOREIGN KEY (`tel_med_fk`) REFERENCES `tel_medico` (`tel_medico_pk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `solicitacoes`
--
ALTER TABLE `solicitacoes`
  ADD CONSTRAINT `fk_medico_crm` FOREIGN KEY (`fk_medico_crm`) REFERENCES `medico` (`crm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_medico_id_med` FOREIGN KEY (`fk_medico_id_med`) REFERENCES `medico` (`id_med`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
