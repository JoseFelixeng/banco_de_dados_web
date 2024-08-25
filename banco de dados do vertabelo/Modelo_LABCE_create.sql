-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2021-11-26 00:52:18.039

-- tables
-- Table: administrador
CREATE TABLE administrador (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    senha int NOT NULL,
    CONSTRAINT administrador_pk PRIMARY KEY (id)
);

-- Table: aluno
CREATE TABLE aluno (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    matricula varchar(20) NOT NULL,
    senha varchar(100) NOT NULL,
    CONSTRAINT aluno_pk PRIMARY KEY (id)
);

-- Table: manutencao_sala
CREATE TABLE manutencao_sala (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    matricula varchar(20) NOT NULL,
    senha varchar(100) NOT NULL,
    motivo varchar(300) NOT NULL,
    professor_id int NOT NULL,
    CONSTRAINT manutencao_sala_pk PRIMARY KEY (id)
);

-- Table: marca_horario
CREATE TABLE marca_horario (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    matricula varchar(100) NOT NULL,
    senha varchar(100) NOT NULL,
    motivo varchar(300) NOT NULL,
    necessidade varchar(100) NOT NULL,
    professor_id int NOT NULL,
    CONSTRAINT marca_horario_pk PRIMARY KEY (id)
);

-- Table: professor
CREATE TABLE professor (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    matricula varchar(20) NOT NULL,
    senha varchar(100) NOT NULL,
    CONSTRAINT professor_pk PRIMARY KEY (id)
);

-- Table: solicitar_equipamento
CREATE TABLE solicitar_equipamento (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    matricula varchar(20) NOT NULL,
    justificativa varchar(300) NOT NULL,
    professor_id int NOT NULL,
    aluno_id int NOT NULL,
    CONSTRAINT solicitar_equipamento_pk PRIMARY KEY (id)
);

-- Table: usuario
CREATE TABLE usuario (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    matricula varchar(20) NOT NULL,
    senha varchar(100) NOT NULL,
    administrador_id int NOT NULL,
    aluno_id int NOT NULL,
    professor_id int NOT NULL,
    CONSTRAINT usuario_pk PRIMARY KEY (id)
);

-- Table: visualizar_utilizacao_do_lab
CREATE TABLE visualizar_utilizacao_do_lab (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    matricula varchar(20) NOT NULL,
    solicitar_computador varchar(200) NOT NULL,
    professor_id int NOT NULL,
    aluno_id int NOT NULL,
    CONSTRAINT visualizar_utilizacao_do_lab_pk PRIMARY KEY (id)
);

-- foreign keys
-- Reference: manutencao_sala_professor (table: manutencao_sala)
ALTER TABLE manutencao_sala ADD CONSTRAINT manutencao_sala_professor FOREIGN KEY manutencao_sala_professor (professor_id)
    REFERENCES professor (id);

-- Reference: marca_horario_professor (table: marca_horario)
ALTER TABLE marca_horario ADD CONSTRAINT marca_horario_professor FOREIGN KEY marca_horario_professor (professor_id)
    REFERENCES professor (id);

-- Reference: solicitar_equipamento_aluno (table: solicitar_equipamento)
ALTER TABLE solicitar_equipamento ADD CONSTRAINT solicitar_equipamento_aluno FOREIGN KEY solicitar_equipamento_aluno (aluno_id)
    REFERENCES aluno (id);

-- Reference: solicitar_equipamento_professor (table: solicitar_equipamento)
ALTER TABLE solicitar_equipamento ADD CONSTRAINT solicitar_equipamento_professor FOREIGN KEY solicitar_equipamento_professor (professor_id)
    REFERENCES professor (id);

-- Reference: usuario_administrador (table: usuario)
ALTER TABLE usuario ADD CONSTRAINT usuario_administrador FOREIGN KEY usuario_administrador (administrador_id)
    REFERENCES administrador (id);

-- Reference: usuario_aluno (table: usuario)
ALTER TABLE usuario ADD CONSTRAINT usuario_aluno FOREIGN KEY usuario_aluno (aluno_id)
    REFERENCES aluno (id);

-- Reference: usuario_professor (table: usuario)
ALTER TABLE usuario ADD CONSTRAINT usuario_professor FOREIGN KEY usuario_professor (professor_id)
    REFERENCES professor (id);

-- Reference: visualizar_utilizacao_do_lab_aluno (table: visualizar_utilizacao_do_lab)
ALTER TABLE visualizar_utilizacao_do_lab ADD CONSTRAINT visualizar_utilizacao_do_lab_aluno FOREIGN KEY visualizar_utilizacao_do_lab_aluno (aluno_id)
    REFERENCES aluno (id);

-- Reference: visualizar_utilizacao_do_lab_professor (table: visualizar_utilizacao_do_lab)
ALTER TABLE visualizar_utilizacao_do_lab ADD CONSTRAINT visualizar_utilizacao_do_lab_professor FOREIGN KEY visualizar_utilizacao_do_lab_professor (professor_id)
    REFERENCES professor (id);

-- End of file.

