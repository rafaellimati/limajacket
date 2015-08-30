SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `JaquetasTcc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;

CREATE TABLE IF NOT EXISTS `JaquetasTcc`.`TbCor` (
  `idCor` INT(11) NOT NULL AUTO_INCREMENT,
  `cor` VARCHAR(20) NOT NULL,
  `flagAtivo` TINYINT(4) NOT NULL,
  PRIMARY KEY (`idCor`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `JaquetasTcc`.`TbJaqueta` (
  `idJaqueta` INT(11) NOT NULL AUTO_INCREMENT,
  `jaqueta` VARCHAR(20) NOT NULL,
  `quantidade` INT(11) NOT NULL,
  `valor` DECIMAL NOT NULL,
  `descricao` VARCHAR(150) NOT NULL,
  `dataCadastro` VARCHAR(20) NOT NULL,
  `imagem` VARCHAR(45) NOT NULL,
  `flagAtivo` TINYINT(4) NOT NULL,
  `idMarca` INT(11) NOT NULL,
  `idLogin` INT(11) NOT NULL,
  `idTamanho` INT(11) NOT NULL,
  `idCor` INT(11) NOT NULL,
  `idCategoria` INT(11) NOT NULL,
  PRIMARY KEY (`idJaqueta`),
  INDEX `fk_TbJaqueta_TbMarca1_idx` (`idMarca` ASC),
  INDEX `fk_TbJaqueta_TbLogin1_idx` (`idLogin` ASC),
  INDEX `fk_TbJaqueta_TbTamanho1_idx` (`idTamanho` ASC),
  INDEX `fk_TbJaqueta_TbCor1_idx` (`idCor` ASC),
  INDEX `fk_TbJaqueta_TbCategoria1_idx` (`idCategoria` ASC),
  CONSTRAINT `fk_TbJaqueta_TbMarca1`
    FOREIGN KEY (`idMarca`)
    REFERENCES `JaquetasTcc`.`TbMarca` (`idMarca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TbJaqueta_TbLogin1`
    FOREIGN KEY (`idLogin`)
    REFERENCES `JaquetasTcc`.`TbLogin` (`idLogin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TbJaqueta_TbTamanho1`
    FOREIGN KEY (`idTamanho`)
    REFERENCES `JaquetasTcc`.`TbTamanho` (`idTamanho`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TbJaqueta_TbCor1`
    FOREIGN KEY (`idCor`)
    REFERENCES `JaquetasTcc`.`TbCor` (`idCor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TbJaqueta_TbCategoria1`
    FOREIGN KEY (`idCategoria`)
    REFERENCES `JaquetasTcc`.`TbCategoria` (`idCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `JaquetasTcc`.`TbCompra` (
  `idCompra` INT(11) NOT NULL AUTO_INCREMENT,
  `frete` DOUBLE NULL DEFAULT NULL,
  `total` DOUBLE NOT NULL,
  `dataCompra` VARCHAR(20) NOT NULL,
  `flagAtivo` TINYINT(4) NOT NULL,
  `idCliente` INT(11) NOT NULL,
  PRIMARY KEY (`idCompra`),
  INDEX `fk_TbCompra_TbCliente1_idx` (`idCliente` ASC),
  CONSTRAINT `fk_TbCompra_TbCliente1`
    FOREIGN KEY (`idCliente`)
    REFERENCES `JaquetasTcc`.`TbCliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `JaquetasTcc`.`TbTelefone` (
  `idTelefone` INT(11) NOT NULL AUTO_INCREMENT,
  `telefone` VARCHAR(15) NOT NULL,
  `idDdd` INT(11) NOT NULL,
  `idTipoTelefone` INT(11) NOT NULL,
  PRIMARY KEY (`idTelefone`),
  INDEX `fk_TbTelefone_TbDdd1_idx` (`idDdd` ASC),
  INDEX `fk_TbTelefone_TbTipoTelefone1_idx` (`idTipoTelefone` ASC),
  CONSTRAINT `fk_TbTelefone_TbDdd1`
    FOREIGN KEY (`idDdd`)
    REFERENCES `JaquetasTcc`.`TbDdd` (`idDdd`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TbTelefone_TbTipoTelefone1`
    FOREIGN KEY (`idTipoTelefone`)
    REFERENCES `JaquetasTcc`.`TbTipoTelefone` (`idTipoTelefone`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `JaquetasTcc`.`TbEndereco` (
  `idEndereco` INT(11) NOT NULL AUTO_INCREMENT,
  `logradouro` VARCHAR(100) NOT NULL,
  `bairro` VARCHAR(100) NOT NULL,
  `numero` VARCHAR(10) NOT NULL,
  `cep` VARCHAR(45) NOT NULL,
  `idMunicipio` INT(11) NOT NULL,
  PRIMARY KEY (`idEndereco`),
  INDEX `fk_TbEndereco_TbMunicipio1_idx` (`idMunicipio` ASC),
  CONSTRAINT `fk_TbEndereco_TbMunicipio1`
    FOREIGN KEY (`idMunicipio`)
    REFERENCES `JaquetasTcc`.`TbCidade` (`idMunicipio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `JaquetasTcc`.`TbCliente` (
  `idCliente` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `cpf` VARCHAR(20) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `dataNascimento` VARCHAR(20) NOT NULL,
  `dataCadastro` VARCHAR(20) NOT NULL,
  `flagAtivo` TINYINT(4) NOT NULL,
  `idEndereco` INT(11) NOT NULL,
  `idTelefone` INT(11) NOT NULL,
  `idSexo` INT(11) NOT NULL,
  `idLogin` INT(11) NOT NULL,
  PRIMARY KEY (`idCliente`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC),
  INDEX `fk_TbCliente_TbEndereco1_idx` (`idEndereco` ASC),
  INDEX `fk_TbCliente_TbTelefone1_idx` (`idTelefone` ASC),
  INDEX `fk_TbCliente_TbSexo1_idx` (`idSexo` ASC),
  INDEX `fk_TbCliente_TbLogin1_idx` (`idLogin` ASC),
  CONSTRAINT `fk_TbCliente_TbEndereco1`
    FOREIGN KEY (`idEndereco`)
    REFERENCES `JaquetasTcc`.`TbEndereco` (`idEndereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TbCliente_TbTelefone1`
    FOREIGN KEY (`idTelefone`)
    REFERENCES `JaquetasTcc`.`TbTelefone` (`idTelefone`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TbCliente_TbSexo1`
    FOREIGN KEY (`idSexo`)
    REFERENCES `JaquetasTcc`.`TbSexo` (`idSexo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TbCliente_TbLogin1`
    FOREIGN KEY (`idLogin`)
    REFERENCES `JaquetasTcc`.`TbLogin` (`idLogin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `JaquetasTcc`.`TbDdd` (
  `idDdd` INT(11) NOT NULL AUTO_INCREMENT,
  `ddd` INT(11) NOT NULL,
  PRIMARY KEY (`idDdd`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `JaquetasTcc`.`TbCidade` (
  `idMunicipio` INT(11) NOT NULL AUTO_INCREMENT,
  `cidade` VARCHAR(100) NOT NULL,
  `idEstado` INT(11) NOT NULL,
  PRIMARY KEY (`idMunicipio`),
  INDEX `fk_TbMunicipio_TbEstado1_idx` (`idEstado` ASC),
  CONSTRAINT `fk_TbMunicipio_TbEstado1`
    FOREIGN KEY (`idEstado`)
    REFERENCES `JaquetasTcc`.`TbEstado` (`idEstado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `JaquetasTcc`.`TbEstado` (
  `idEstado` INT(11) NOT NULL AUTO_INCREMENT,
  `estado` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idEstado`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `JaquetasTcc`.`TbLogin` (
  `idLogin` INT(11) NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `nivelAcesso` INT(11) NOT NULL,
  `dataCadastro` VARCHAR(20) NOT NULL,
  `flagAtivo` TINYINT(4) NOT NULL,
  PRIMARY KEY (`idLogin`),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `JaquetasTcc`.`TbPedido` (
  `idPedido` INT(11) NOT NULL AUTO_INCREMENT,
  `quantidade` INT(11) NOT NULL,
  `subTotal` VARCHAR(100) NOT NULL,
  `idJaqueta` INT(11) NOT NULL,
  `idCompra` INT(11) NOT NULL,
  PRIMARY KEY (`idPedido`),
  INDEX `fk_TbPedido_TbJaqueta1_idx` (`idJaqueta` ASC),
  INDEX `fk_TbPedido_TbCompra1_idx` (`idCompra` ASC),
  CONSTRAINT `fk_TbPedido_TbJaqueta1`
    FOREIGN KEY (`idJaqueta`)
    REFERENCES `JaquetasTcc`.`TbJaqueta` (`idJaqueta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TbPedido_TbCompra1`
    FOREIGN KEY (`idCompra`)
    REFERENCES `JaquetasTcc`.`TbCompra` (`idCompra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `JaquetasTcc`.`TbTamanho` (
  `idTamanho` INT(11) NOT NULL AUTO_INCREMENT,
  `tamanho` VARCHAR(10) NOT NULL,
  `flagAtivo` TINYINT(4) NOT NULL,
  PRIMARY KEY (`idTamanho`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `JaquetasTcc`.`TbMarca` (
  `idMarca` INT(11) NOT NULL AUTO_INCREMENT,
  `marca` VARCHAR(100) NOT NULL,
  `flagAtivo` TINYINT(4) NOT NULL,
  PRIMARY KEY (`idMarca`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `JaquetasTcc`.`TbSexo` (
  `idSexo` INT(11) NOT NULL AUTO_INCREMENT,
  `sexo` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idSexo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `JaquetasTcc`.`TbCategoria` (
  `idCategoria` INT(11) NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(20) NOT NULL,
  `flagAtivo` TINYINT(4) NOT NULL,
  PRIMARY KEY (`idCategoria`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `JaquetasTcc`.`TbTipoTelefone` (
  `idTipoTelefone` INT(11) NOT NULL AUTO_INCREMENT,
  `tipoTelefone` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTipoTelefone`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `JaquetasTcc`.`TbPagamento` (
  `idPagamento` INT(11) NOT NULL AUTO_INCREMENT,
  `forma` VARCHAR(50) NOT NULL,
  `dataPagamento` VARCHAR(20) NOT NULL,
  `idCompra` INT(11) NOT NULL,
  PRIMARY KEY (`idPagamento`),
  INDEX `fk_TbPagamento_TbCompra1_idx` (`idCompra` ASC),
  CONSTRAINT `fk_TbPagamento_TbCompra1`
    FOREIGN KEY (`idCompra`)
    REFERENCES `JaquetasTcc`.`TbCompra` (`idCompra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
