--Tabela de livros
CREATE TABLE `livros` (
  `livroId` INT NOT NULL AUTO_INCREMENT,
  `livroTitulo` VARCHAR(45) NOT NULL,
  `livroSubtitulo` VARCHAR(45) NOT NULL,
  `livroISBN` VARCHAR(45) NOT NULL,
  `livroEdicao` INT NULL,
  `livroNumeroPaginas` INT NULL,
  `livroPrecoCompra` DOUBLE NULL,
  `livroPrecoVenda` DOUBLE NULL,
  `livroQuantidade` INT NULL,
  `livroAno` INT NULL,
  PRIMARY KEY (`livroId`));

--Tabela pessoas
  CREATE TABLE `usuario` (
  `usuarioId` INT NOT NULL AUTO_INCREMENT,
  `usuarioNome` VARCHAR(100) NULL,
  `usuarioEmail` VARCHAR(100) NOT NULL,
  `usuarioSenha` VARCHAR(255) NULL,
  `usuarioDataNascimento` DATE NULL,
  PRIMARY KEY (`usuarioId`));

--Tabela autores
  CREATE TABLE `autor` (
  `autorId` INT NOT NULL AUTO_INCREMENT,
  `autorNome` VARCHAR(255) NOT NULL,
  `autorNacionalidade` VARCHAR(100) NULL,
  `autorDescricao` VARCHAR(255) NULL,
  PRIMARY KEY (`autorId`));

--Tabela Tipo Pessoa (diretor, associado, efetivo, colaborador)
  CREATE TABLE `usuarioTipo` (
  `usuarioTipoId` INT NOT NULL AUTO_INCREMENT,
  `usuarioTipoTipo` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`usuarioTipoId`));