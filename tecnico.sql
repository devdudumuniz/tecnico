-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Mar-2023 às 16:25
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tecnico`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`) VALUES
(1, 'Sistema Operacional'),
(2, 'Programas'),
(3, 'Design');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `titulo_produto` varchar(255) NOT NULL,
  `image_produto` varchar(255) DEFAULT NULL,
  `tamanho_produto` varchar(20) DEFAULT NULL,
  `descript_produtos` text DEFAULT NULL,
  `link_download` varchar(255) DEFAULT NULL,
  `instala_produto` varchar(255) DEFAULT NULL,
  `categoria_produto` int(11) DEFAULT NULL,
  `status_produtos` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `titulo_produto`, `image_produto`, `tamanho_produto`, `descript_produtos`, `link_download`, `instala_produto`, `categoria_produto`, `status_produtos`) VALUES
(1, 'Windows 11 X64 21H2 JULHO 2022', 'windows-11-office-2021_todas_as_versões.png', '4,72', 'Windows 11 X64 21H2 Pro 3 em 1 OEM ESD MULTi-7 JULHO 2022 Versão 21H2 Compilação 22000.795 Não é necessário TPM ou inicialização segura    [ INFORMAÇÕES DE LANÇAMENTO ]   [ CONTEÚDO ]  Integrado / Pré-instalado:  * Pilha de manutenção: * 10.0.22000.795 * Atualização Cumulativa: * KB5015814 *NET Framework 3.5 * Atualização Cumulativa para *NET Framework 3.5 e 4.8: * KB5013889  [ LÍNGUAS ]  * ÁRABE * BRASILEIRO * INGLÊS (EUA) * POLIMENTO * PORTUGUÊS * RUSSO * UCRÂNIO  [ EDIÇÕES INCLUÍDAS ]  * Windows 11 Pro - STD *Windows 11 Pro - DLA *Windows 11 Pro - OEM  * STD = Instalação padrão - Para aqueles com chave de licença própria * DLA = Ativação de Licença Digital (HWID) * OEM - será ativado automaticamente se estiver instalando * mesma versão no equipamento original  [ RECURSOS ]  * Pronto para UEFI * (Use a ferramenta USB Rufus anexada para tornar o UEFI inicializável) * Conjunto de ferramentas de diagnóstico e recuperação 10.0 (somente boot.wim) * install.wim compactado no formato de recuperação (install.esd)   [ INSTALAÇÃO E INFORMAÇÕES ]  * Crie USB inicializável (altamente recomendado) com Rufus, * (em anexo) ou grave em DVD-DL em velocidade lenta.  [CRÉDITO]  GENERATION2  * Windows_Addict, autor do script de ativação do Windows  * Espero que você goste deste lançamento!  * Cumprimentos, * Geração2  * Arquivo: W11.21H2.MULTi7.JULY2022.iso * Tamanho: 4,72GB * Formato: ISO inicializável', 'magnet:?xt=urn:btih:0F9A3E47E18977437AB701507E6F8BD4ED32D3EC&dn=Windows+11+X64+21H2+Pro+3in1+OEM+ESD+MULTi-7+JULY+2022+%7BGen2%7D&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A6969%2Fannounce&tr=udp%3', '', 1, 1),
(2, 'Windows 10 21H2 X64 Pro 21H2 + Office 2021', 'w10+office.jpg', '5,37', '\r\nWindows 10 X64 Pro 21H2 incl Office 2021 pt-BR MARCH 2022\r\nVersion 21H2 Build 19044.1586\r\n\r\n\r\n[ INFORMAÇÕES DE LANÇAMENTO ]\r\n\r\n\r\n* Arquivo: 21H2.OFF21.PTB.MAR2022.iso\r\n* Tamanho: 5,37GB\r\n* Formato: ISO inicializável\r\n\r\n* CRC32: cbf5dc5e\r\n* MD5: 20894735b65568e3336efa431176f2f5\r\n* SHA-1: c97ba786d5d2487d4bb49136edda55dc063c9f30\r\n\r\n[ CONTEÚDO ]\r\n\r\nIntegrado / Pré-instalado:\r\n\r\n* Office LTSC 2021 ProPlus\r\n* Pilha de manutenção:\r\n* 10.0.19041.1525\r\n* Atualização Cumulativa:\r\n* KB5011487\r\n*NET Framework 3.5\r\n* Atualização Cumulativa para\r\n*NET Framework 3.5 e 4.8:\r\n* KB5010472\r\n\r\n* IDIOMA: BRASILEIRO\r\n\r\n[ EDIÇÕES INCLUÍDAS ]\r\n\r\n*Windows 10Pro\r\n* Office 2021 ProPlus\r\n* Ativador: KMS_VL_ALL\r\n\r\n[ RECURSOS ]\r\n\r\n* Pronto para UEFI\r\n* (Use a ferramenta USB Rufus anexada para tornar o UEFI inicializável)\r\n* Conjunto de ferramentas de diagnóstico e recuperação 10.0 (somente boot.wim)\r\n* install.wim compactado no formato de recuperação (install.esd)\r\n\r\n[ CAPTURAS DE TELA ]\r\n\r\n[url]https://lookimg.com/image/Qvv4Xc[/url]\r\n\r\n[ INSTALAÇÃO E INFORMAÇÕES ]\r\n\r\n* Crie USB inicializável (altamente recomendado) com Rufus,\r\n* (em anexo) ou grave em DVD-DL em velocidade lenta.\r\n\r\n[CRÉDITO]\r\n\r\n* abbodi1406, Autor do Script de Ativação\r\n\r\n* Espero que você goste deste lançamento!\r\n\r\n* Cumprimentos,\r\n* Geração2', 'magnet:?xt=urn:btih:D16A26D93620ABA2044692F5790FA5E045475EBB&dn=Windows%2010%20X64%20Pro%2021H2%20incl%20Office%202021%20pt-BR%20DEC%202021%20%7BGen2%7D&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A6', '', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usua`
--

CREATE TABLE `tipo_usua` (
  `id_tipo` int(11) NOT NULL,
  `tipo_usua` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tipo_usua`
--

INSERT INTO `tipo_usua` (`id_tipo`, `tipo_usua`) VALUES
(1, 'Suporte');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usua` int(11) NOT NULL,
  `nome_usua` varchar(100) NOT NULL,
  `login_usua` varchar(100) NOT NULL,
  `senha_usua` varchar(100) NOT NULL,
  `tipo_usua` int(11) NOT NULL,
  `status_usua` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usua`, `nome_usua`, `login_usua`, `senha_usua`, `tipo_usua`, `status_usua`) VALUES
(1, 'Eduardo', 'dev@dudu.com', '123', 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `fk_categoria_produto` (`categoria_produto`);

--
-- Índices para tabela `tipo_usua`
--
ALTER TABLE `tipo_usua`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usua`),
  ADD KEY `fk_tipo_usua` (`tipo_usua`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tipo_usua`
--
ALTER TABLE `tipo_usua`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_categoria_produto` FOREIGN KEY (`categoria_produto`) REFERENCES `categoria` (`id_categoria`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_tipo_usua` FOREIGN KEY (`tipo_usua`) REFERENCES `tipo_usua` (`id_tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
