-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

	CREATE TABLE `pessoa` (
	  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	  `logradouro` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
	  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	  `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	  `estado` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
	  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	  `cpf` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	  `telefone` varchar(50) COLLATE utf8_unicode_ci NOT NULL

	) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;