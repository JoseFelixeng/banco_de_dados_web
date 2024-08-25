-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2021-11-25 18:13:33.952

-- tables
-- Table: Endereco
CREATE TABLE Endereco (
    id int NOT NULL AUTO_INCREMENT,
    rua varchar(100) NOT NULL,
    numero int NOT NULL,
    cep int NOT NULL,
    Complemento varchar(250) NOT NULL,
    Usuario_id int NOT NULL,
    CONSTRAINT Endereco_pk PRIMARY KEY (id)
);

-- Table: Papel
CREATE TABLE Papel (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    descricao varchar(200) NOT NULL,
    CONSTRAINT Papel_pk PRIMARY KEY (id)
);

-- Table: Usuario
CREATE TABLE Usuario (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    senha varchar(100) NOT NULL,
    CONSTRAINT Usuario_pk PRIMARY KEY (id)
);

-- Table: compra
CREATE TABLE compra (
    id int NOT NULL AUTO_INCREMENT,
    Usuario_id int NOT NULL,
    produto_id int NOT NULL,
    quantidade int NOT NULL,
    desconto real(10,2) NOT NULL,
    formadepagamento_id int NOT NULL,
    CONSTRAINT compra_pk PRIMARY KEY (id)
);

-- Table: formadepagamento
CREATE TABLE formadepagamento (
    id int NOT NULL AUTO_INCREMENT,
    bandeira varchar(100) NOT NULL,
    n_cartao int NOT NULL,
    cod_seguranca int NOT NULL,
    validade date NOT NULL,
    Usuario_id int NOT NULL,
    CONSTRAINT formadepagamento_pk PRIMARY KEY (id)
);

-- Table: produto
CREATE TABLE produto (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    descricao varchar(200) NOT NULL,
    quantidade int NOT NULL,
    valor real(10,2) NOT NULL,
    CONSTRAINT produto_pk PRIMARY KEY (id)
);

-- Table: usuario_papel
CREATE TABLE usuario_papel (
    id int NOT NULL AUTO_INCREMENT,
    Usuario_id int NOT NULL,
    Papel_id int NOT NULL,
    CONSTRAINT usuario_papel_pk PRIMARY KEY (id)
);

-- foreign keys
-- Reference: Endereco_Usuario (table: Endereco)
ALTER TABLE Endereco ADD CONSTRAINT Endereco_Usuario FOREIGN KEY Endereco_Usuario (Usuario_id)
    REFERENCES Usuario (id);

-- Reference: compra_formadepagamento (table: compra)
ALTER TABLE compra ADD CONSTRAINT compra_formadepagamento FOREIGN KEY compra_formadepagamento (formadepagamento_id)
    REFERENCES formadepagamento (id);

-- Reference: formadepagamento_Usuario (table: formadepagamento)
ALTER TABLE formadepagamento ADD CONSTRAINT formadepagamento_Usuario FOREIGN KEY formadepagamento_Usuario (Usuario_id)
    REFERENCES Usuario (id);

-- Reference: usuario_papel_Papel (table: usuario_papel)
ALTER TABLE usuario_papel ADD CONSTRAINT usuario_papel_Papel FOREIGN KEY usuario_papel_Papel (Papel_id)
    REFERENCES Papel (id);

-- Reference: usuario_papel_Usuario (table: usuario_papel)
ALTER TABLE usuario_papel ADD CONSTRAINT usuario_papel_Usuario FOREIGN KEY usuario_papel_Usuario (Usuario_id)
    REFERENCES Usuario (id);

-- Reference: venda_Usuario (table: compra)
ALTER TABLE compra ADD CONSTRAINT venda_Usuario FOREIGN KEY venda_Usuario (Usuario_id)
    REFERENCES Usuario (id);

-- Reference: venda_produto (table: compra)
ALTER TABLE compra ADD CONSTRAINT venda_produto FOREIGN KEY venda_produto (produto_id)
    REFERENCES produto (id);

-- End of file.

