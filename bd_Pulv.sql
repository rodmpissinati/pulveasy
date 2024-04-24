create database Pulveasy;
use Pulveasy;


CREATE TABLE Usuario (
    Nome VARCHAR(40),
    CPF VARCHAR(14) PRIMARY KEY,
    E_mail VARCHAR(50),
    Senha VARCHAR(50)
);

CREATE TABLE Propriedade (
    Cidade VARCHAR(40),
    Bairro VARCHAR(40),
    Rua VARCHAR(40),
    Numero VARCHAR(5),
    Estado VARCHAR(40),
    CNPJ VARCHAR(14) PRIMARY KEY,
    Nome VARCHAR(40)
);

CREATE TABLE Produto (
    codigo VARCHAR(40) PRIMARY KEY,
    nome VARCHAR(40),
    ativo VARCHAR(40),
    fk_Tipo_id VARCHAR(40)
);

CREATE TABLE Tipo (
    id VARCHAR(40) PRIMARY KEY,
    nome VARCHAR(40)
);

CREATE TABLE Possui (
    fk_Propriedade_CNPJ VARCHAR(14),
    fk_Usuario_CPF VARCHAR(14)
);

CREATE TABLE pulveriza (
    fk_Produto_cod VARCHAR(40),
    fk_Propriedade_CNPJ VARCHAR(14),
    dosagem VARCHAR(40),
    data VARCHAR(10) PRIMARY KEY,
    carencia VARCHAR(10)
);
 
ALTER TABLE Produto ADD CONSTRAINT FK_Produto_2
    FOREIGN KEY (fk_Tipo_id)
    REFERENCES Tipo (id)
    ON DELETE CASCADE;
 
ALTER TABLE Possui ADD CONSTRAINT FK_Possui_1
    FOREIGN KEY (fk_Propriedade_CNPJ)
    REFERENCES Propriedade (CNPJ)
    ON DELETE RESTRICT;
 
ALTER TABLE Possui ADD CONSTRAINT FK_Possui_2
    FOREIGN KEY (fk_Usuario_CPF)
    REFERENCES Usuario (CPF)
    ON DELETE RESTRICT;
 
ALTER TABLE pulveriza ADD CONSTRAINT FK_pulveriza_1
    FOREIGN KEY (fk_Produto_cod)
    REFERENCES Produto (codigo)
    ON DELETE RESTRICT;
 
ALTER TABLE pulveriza ADD CONSTRAINT FK_pulveriza_2
    FOREIGN KEY (fk_Propriedade_CNPJ)
    REFERENCES Propriedade (CNPJ)
    ON DELETE SET NULL;