-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Out-2017 às 21:54
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda_paciente_consultas_funcionario`
--

CREATE TABLE `agenda_paciente_consultas_funcionario` (
  `fk_paciente_matricula` int(11) NOT NULL,
  `fk_paciente_cpf` char(15) NOT NULL,
  `fk_paciente_rg` char(8) NOT NULL,
  `fk_funcionario_id_func` int(11) NOT NULL,
  `fk_consultas_cod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultas`
--

CREATE TABLE `consultas` (
  `cod_consultas` int(11) NOT NULL,
  `queixa` varchar(35) NOT NULL,
  `fk_med_id` int(11) NOT NULL,
  `fk_med_crm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_func` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cpf` char(15) NOT NULL,
  `tel_funcionario_fk` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
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
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `matricula` int(11) NOT NULL,
  `cpf` char(14) NOT NULL,
  `nacionalidade` varchar(25) NOT NULL,
  `sexo` enum('Feminino','Masculino','Indefinido','') NOT NULL,
  `rg` char(9) NOT NULL,
  `estado_civil` enum('Solteiro(a)','Casado(a)','Divorciado(a)','Viúvo(a)') NOT NULL,
  `email` varchar(30) NOT NULL,
  `rua` varchar(40) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `profissao` varchar(20) NOT NULL,
  `tel_paciente_fk` int(11) NOT NULL,
  `data_nasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacoes`
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
-- Estrutura da tabela `tel_funcionario`
--

CREATE TABLE `tel_funcionario` (
  `tel_funcionario_pk` int(11) NOT NULL,
  `tel_funcionario` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tel_medico`
--

CREATE TABLE `tel_medico` (
  `tel_medico_pk` int(11) NOT NULL,
  `tel_medico` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tel_paciente`
--

CREATE TABLE `tel_paciente` (
  `tel_paciente_pk` int(11) NOT NULL,
  `tel_paciente` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda_paciente_consultas_funcionario`
--
ALTER TABLE `agenda_paciente_consultas_funcionario`
  ADD KEY `fk_paciente_matricula` (`fk_paciente_matricula`),
  ADD KEY `fk_paciente_cpf` (`fk_paciente_cpf`),
  ADD KEY `fk_paciente_rg` (`fk_paciente_rg`),
  ADD KEY `fk_consultas_cod` (`fk_consultas_cod`),
  ADD KEY `fk_funcionario_id` (`fk_funcionario_id_func`);

--
-- Indexes for table `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`cod_consultas`),
  ADD KEY `cod_consultas_fk` (`cod_consultas`),
  ADD KEY `fk_med_id` (`fk_med_id`),
  ADD KEY `fk_med_crm` (`fk_med_crm`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_func`),
  ADD KEY `id_func_fk` (`id_func`),
  ADD KEY `fk_tel_funcionario_pk` (`tel_funcionario_fk`);

--
-- Indexes for table `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id_med`,`crm`),
  ADD KEY `id_medico_fk` (`id_med`),
  ADD KEY `crm_fk` (`crm`),
  ADD KEY `fk_tel_med` (`tel_med_fk`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`matricula`,`cpf`,`rg`),
  ADD KEY `tel_paciente_fk` (`tel_paciente_fk`),
  ADD KEY `paciente_cpf_fk` (`cpf`),
  ADD KEY `paciente_rg_fk` (`rg`),
  ADD KEY `paciente_matricula_fk` (`matricula`);

--
-- Indexes for table `solicitacoes`
--
ALTER TABLE `solicitacoes`
  ADD KEY `fk_medico_id_med` (`fk_medico_id_med`),
  ADD KEY `fk_medico_crm` (`fk_medico_crm`),
  ADD KEY `fk_paciente_matricula_pk` (`fk_paciente_matricula`),
  ADD KEY `fk_paciente_cpf_pk` (`fk_paciente_cpf_pk`),
  ADD KEY `fk_paciente_rg_pk` (`fk_paciente_rg_pk`);

--
-- Indexes for table `tel_funcionario`
--
ALTER TABLE `tel_funcionario`
  ADD PRIMARY KEY (`tel_funcionario_pk`),
  ADD KEY `tel_funcionario_pk_fk` (`tel_funcionario_pk`);

--
-- Indexes for table `tel_medico`
--
ALTER TABLE `tel_medico`
  ADD PRIMARY KEY (`tel_medico_pk`),
  ADD KEY `fk_tel_med` (`tel_medico_pk`);

--
-- Indexes for table `tel_paciente`
--
ALTER TABLE `tel_paciente`
  ADD PRIMARY KEY (`tel_paciente_pk`),
  ADD KEY `tel_paciente_fk` (`tel_paciente_pk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_func` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medico`
--
ALTER TABLE `medico`
  MODIFY `id_med` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tel_funcionario`
--
ALTER TABLE `tel_funcionario`
  MODIFY `tel_funcionario_pk` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tel_medico`
--
ALTER TABLE `tel_medico`
  MODIFY `tel_medico_pk` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tel_paciente`
--
ALTER TABLE `tel_paciente`
  MODIFY `tel_paciente_pk` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agenda_paciente_consultas_funcionario`
--
ALTER TABLE `agenda_paciente_consultas_funcionario`
  ADD CONSTRAINT `fk_consultas_cod` FOREIGN KEY (`fk_consultas_cod`) REFERENCES `consultas` (`cod_consultas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_funcionario_id` FOREIGN KEY (`fk_funcionario_id_func`) REFERENCES `funcionario` (`id_func`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_paciente_cpf` FOREIGN KEY (`fk_paciente_cpf`) REFERENCES `paciente` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_paciente_matricula` FOREIGN KEY (`fk_paciente_matricula`) REFERENCES `paciente` (`matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_paciente_rg` FOREIGN KEY (`fk_paciente_rg`) REFERENCES `paciente` (`rg`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `fk_med_crm` FOREIGN KEY (`fk_med_crm`) REFERENCES `medico` (`crm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_med_id` FOREIGN KEY (`fk_med_id`) REFERENCES `medico` (`id_med`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `fk_tel_funcionario_pk` FOREIGN KEY (`tel_funcionario_fk`) REFERENCES `tel_funcionario` (`tel_funcionario_pk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `fk_tel_med` FOREIGN KEY (`tel_med_fk`) REFERENCES `tel_medico` (`tel_medico_pk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `tel_paciente_fk` FOREIGN KEY (`tel_paciente_fk`) REFERENCES `tel_paciente` (`tel_paciente_pk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  ADD CONSTRAINT `fk_medico_crm` FOREIGN KEY (`fk_medico_crm`) REFERENCES `medico` (`crm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_medico_id_med` FOREIGN KEY (`fk_medico_id_med`) REFERENCES `medico` (`id_med`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_paciente_cpf_pk` FOREIGN KEY (`fk_paciente_cpf_pk`) REFERENCES `paciente` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_paciente_matricula_pk` FOREIGN KEY (`fk_paciente_matricula`) REFERENCES `paciente` (`matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_paciente_rg_pk` FOREIGN KEY (`fk_paciente_rg_pk`) REFERENCES `paciente` (`rg`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
