create database db_pulveasy;
use db_pulveasy;


CREATE TABLE tb_usuario(
    nome VARCHAR(40),
    cpf VARCHAR(14) PRIMARY KEY,
    email VARCHAR(50),
    senha VARCHAR(50)
);

CREATE TABLE tb_propriedade (
    cidade VARCHAR(40),
    bairro VARCHAR(40),
    rua VARCHAR(40),
    numero VARCHAR(5),
    estado VARCHAR(40),
    cnpj VARCHAR(14) PRIMARY KEY,
    nome VARCHAR(40)
);

CREATE TABLE tb_produto (
    codigo VARCHAR(40) PRIMARY KEY,
    nome VARCHAR(40),
    ativo VARCHAR(40),
    fk_tipo_id VARCHAR(40)
);

CREATE TABLE tb_tipo (
    id VARCHAR(40) PRIMARY KEY,
    nome VARCHAR(40)
);

CREATE TABLE tb_possui (
    fk_propriedade_cnpj VARCHAR(14),
    fk_usuario_cpf VARCHAR(14)
);

CREATE TABLE tb_pulveriza (
    fk_produto_cod VARCHAR(40),
    fk_propriedade_cnpj VARCHAR(14),
    dosagem VARCHAR(40),
    data VARCHAR(10) PRIMARY KEY,
    carencia VARCHAR(10)
);
 
ALTER TABLE produto ADD CONSTRAINT fk_produto_2
    FOREIGN KEY (fk_tipo_id)
    REFERENCES tipo (id)
    ON DELETE CASCADE;
 
ALTER TABLE possui ADD CONSTRAINT fk_possui_1
    FOREIGN KEY (fk_propriedade_cnpj)
    REFERENCES propriedade (cnpj)
    ON DELETE RESTRICT;
 
ALTER TABLE possui ADD CONSTRAINT fk_possui_2
    FOREIGN KEY (fk_usuario_cpf)
    REFERENCES usuario (cpf)
    ON DELETE RESTRICT;
 
ALTER TABLE pulveriza ADD CONSTRAINT fk_pulveriza_1
    FOREIGN KEY (fk_produto_cod)
    REFERENCES produto (codigo)
    ON DELETE RESTRICT;
 
ALTER TABLE pulveriza ADD CONSTRAINT fk_pulveriza_2
    FOREIGN KEY (fk_propriedade_cnpj)
    REFERENCES propriedade (cnpj)
    ON DELETE SET NULL;