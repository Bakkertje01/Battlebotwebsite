-- MySQL Script generated by MySQL Workbench
-- Wed Sep 27 13:27:14 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Battlebot`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Battlebot` (
  `Battlebot_ID` INT NOT NULL AUTO_INCREMENT,
  `Botgeluidje` VARCHAR(350) NULL,
  `Botnaam` VARCHAR(30) NULL,
  `Totaalpunten` INT NULL,
  `Afbeeldingpath` VARCHAR(500) NULL,
  PRIMARY KEY (`Battlebot_ID`),
  UNIQUE INDEX `Groepnaam_UNIQUE` (`Botnaam` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Spel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Spel` (
  `Spel_ID` INT NOT NULL AUTO_INCREMENT,
  `Naam` VARCHAR(100) NOT NULL,
  `Positie` INT NULL,
  `Punten` INT NULL,
  `Groep_Groep_ID` INT NOT NULL,
  PRIMARY KEY (`Spel_ID`),
  INDEX `fk_Uitslagen_Groep_idx` (`Groep_Groep_ID` ASC),
  UNIQUE INDEX `Naam_UNIQUE` (`Naam` ASC),
  CONSTRAINT `fk_Uitslagen_Groep`
    FOREIGN KEY (`Groep_Groep_ID`)
    REFERENCES `mydb`.`Battlebot` (`Battlebot_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`User` (
  `User_ID` INT NOT NULL AUTO_INCREMENT,
  `Gebruikersnaam` VARCHAR(45) NULL,
  `Wachtwoord` VARCHAR(150) NULL,
  `Websitefunctie` VARCHAR(45) NULL,
  `Groep_Groep_ID` INT NOT NULL,
  PRIMARY KEY (`User_ID`),
  UNIQUE INDEX `User_ID_UNIQUE` (`User_ID` ASC),
  INDEX `fk_User_Groep1_idx` (`Groep_Groep_ID` ASC),
  CONSTRAINT `fk_User_Groep1`
    FOREIGN KEY (`Groep_Groep_ID`)
    REFERENCES `mydb`.`Battlebot` (`Battlebot_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Leden`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Leden` (
  `Lid_ID` INT NOT NULL,
  `Naam` VARCHAR(45) NULL,
  `Achternaam` VARCHAR(45) NULL,
  `Groepsfunctie` VARCHAR(45) NULL,
  `Groep_Groep_ID` INT NOT NULL,
  PRIMARY KEY (`Lid_ID`),
  UNIQUE INDEX `Lid_ID_UNIQUE` (`Lid_ID` ASC),
  INDEX `fk_Leden_Groep1_idx` (`Groep_Groep_ID` ASC),
  CONSTRAINT `fk_Leden_Groep1`
    FOREIGN KEY (`Groep_Groep_ID`)
    REFERENCES `mydb`.`Battlebot` (`Battlebot_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
