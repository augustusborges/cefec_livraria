--Tabela de livros
CREATE TABLE `u455891771_cefec`.`livros` (
  `idLivro` INT NOT NULL AUTO_INCREMENT,
  `tituloLivro` VARCHAR(45) NOT NULL,
  `subtituloLivro` VARCHAR(45) NOT NULL,
  `isbnLivro` VARCHAR(45) NOT NULL,
  `edicaoLivro` INT NULL,
  `numeroPaginasLivro` INT NULL,
  `precoCompraLivro` DOUBLE NULL,
  `precoVendaLivro` DOUBLE NULL,
  `quantidadeLivro` INT NULL,
  `anoLivro` INT NULL,
  PRIMARY KEY (`idLivro`));


--Tabela pessoas
  CREATE TABLE `u455891771_cefec`.`pessoa` (
  `idPessoa` INT NOT NULL AUTO_INCREMENT,
  `nomePessoa` VARCHAR(100) NULL,
  `emailPessoa` VARCHAR(100) NULL,
  `senhaPessoa` VARCHAR(255) NULL,
  `dataNascimentoPessoa` DATE NULL,
  PRIMARY KEY (`idPessoa`));

--Tabela autores
  CREATE TABLE `u455891771_cefec`.`autor` (
  `idAutor` INT NOT NULL AUTO_INCREMENT,
  `nomeAutor` VARCHAR(255) NOT NULL,
  `nacionalidadeAutor` VARCHAR(100) NULL,
  `descricaoAutor` VARCHAR(255) NULL,
  PRIMARY KEY (`idAutor`));

--Tabela Tipo Pessoa (diretor, associado, efetivo, colaborador)
  CREATE TABLE `u455891771_cefec`.`pessoaTipo` (
  `idPessoaTipo` INT NOT NULL AUTO_INCREMENT,
  `tipoPessoaTipo` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idPessoaTipo`));