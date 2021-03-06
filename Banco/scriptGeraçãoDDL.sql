
USE etec_teste_2;

CREATE TABLE COMENTARIO (
COMENTARIO_ID BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT ,
COMENTARIO TEXT,
COMENTARIO_DATA TIMESTAMP NULL DEFAULT NULL,
ID_DESAFIO BIGINT UNSIGNED,
ID_PESSOA BIGINT UNSIGNED,
ID_COMENTARIO BIGINT UNSIGNED
);

CREATE TABLE PESSOA_MENSAGEM (
PESSOA_MENSAGEM_ID BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
ID_PESSOA_REM BIGINT UNSIGNED,
ID_PESSOA_DEST BIGINT UNSIGNED,
ID_MENSAGEM BIGINT UNSIGNED
);

CREATE TABLE MENSAGEM (
MENSAGEM_ID BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
MENSAGEM TEXT,
MENSAGEM_DTENVIO TIMESTAMP NULL DEFAULT NULL,
ID_MENSAGEM BIGINT UNSIGNED
);

CREATE TABLE ETEC (
ETEC_ID BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
ETEC_NOME VARCHAR(100),
ETEC_DIRETOR VARCHAR(100),
ETEC_RESPONSAVEL VARCHAR(100),
ETEC_USUARIO VARCHAR(30),
ETEC_SENHA VARCHAR(20),
ETEC_CEP VARCHAR(11),
ETEC_LOGRADOURO VARCHAR(150),
ETEC_CIDADE VARCHAR(100),
ETEC_EMAIL VARCHAR(120),
ETEC_UF CHAR(2),
ETEC_TELEFONE VARCHAR(14)
);

CREATE TABLE GRUPO (
GRUPO_ID BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
GRUPO_NOME VARCHAR(30),
GRUPO_DESC_COMPLETA TEXT,
ID_ETEC BIGINT UNSIGNED,
FOREIGN KEY(ID_ETEC) REFERENCES ETEC (ETEC_ID)
);

CREATE TABLE GRUPO_MENSAGEM (
GRUPO_MENSAGEM_ID BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
GRUPO_ID BIGINT UNSIGNED,
MENSAGEM_ID BIGINT UNSIGNED,
NOME_REMENTE VARCHAR(20),
FOREIGN KEY(GRUPO_ID) REFERENCES GRUPO (GRUPO_ID),
FOREIGN KEY(MENSAGEM_ID) REFERENCES MENSAGEM (MENSAGEM_ID)
);



CREATE TABLE CURSOS (
CURSO_ID BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
CURSO_NOME VARCHAR(50),
CURSO_DURACAO TINYINT UNSIGNED
);

CREATE TABLE PESSOA_CURSO (
PESSOA_CURSO_ID BIGINT PRIMARY KEY AUTO_INCREMENT,
ID_PESSOA BIGINT UNSIGNED,
ID_CURSO BIGINT UNSIGNED,
PESSOA_CURSO_SEMESTRE TINYINT UNSIGNED
);

CREATE TABLE PESSOA (
PESSOA_ID BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
PESSOA_NOME VARCHAR(120),
PESSOA_APELIDO VARCHAR(20),
PESSOA_USUARIO VARCHAR(30),
PESSOA_SENHA VARCHAR(20),
PESSOA_CPF VARCHAR(14) UNIQUE,
PESSOA_EMAIL VARCHAR(120),
PESSOA_CELULAR VARCHAR(15),
PESSOA_DESCPERFIL VARCHAR(255),
PESSOA_DATA_CADASTRO TIMESTAMP NULL DEFAULT NULL,
PESSOA_DATA_ALTERACAO TIMESTAMP NULL DEFAULT NULL,
PESSOA_STATUS CHAR(7),
PESSOA_PROTOCOLO VARCHAR(20),
PESSOA_OBSERVACOES VARCHAR(255),
ID_PERFIL INT UNSIGNED
);

CREATE TABLE AMIZADES (
AMIZADE_ID BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
AMIZADE_STATUS CHAR(1),
ID_PESSOA_SOLICITACAO BIGINT UNSIGNED,
ID_PESSOA_SOLICITADA BIGINT UNSIGNED,
FOREIGN KEY(ID_PESSOA_SOLICITACAO) REFERENCES PESSOA (PESSOA_ID),
FOREIGN KEY(ID_PESSOA_SOLICITADA) REFERENCES PESSOA (PESSOA_ID)
);

CREATE TABLE PERFIL (
PERFIL_ID INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
PERFIL VARCHAR(15)
);

CREATE TABLE PESSOA_GRUPO (
PESSOA_GRUPO_ID BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
PESSOA_ID BIGINT UNSIGNED,
GRUPO_ID BIGINT UNSIGNED,
FOREIGN KEY(PESSOA_ID) REFERENCES PESSOA (PESSOA_ID),
FOREIGN KEY(GRUPO_ID) REFERENCES GRUPO (GRUPO_ID)
);

CREATE TABLE VOTACAO (
VOTACAO_ID BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
VOTACAO_EMAIL VARCHAR(120),
VOTACAO_LIKE BIGINT UNSIGNED,
ID_PESSOA BIGINT UNSIGNED,
ID_DESAFIO BIGINT UNSIGNED,
FOREIGN KEY(ID_PESSOA) REFERENCES PESSOA (PESSOA_ID)
);

CREATE TABLE DESAFIO (
DESAFIO_ID BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
DESAFIO_TEMA VARCHAR(150),
DESAFIO_DESCRICAO TEXT,
DESAFIO_DATA DATE
);

CREATE TABLE DESAFIO_GRUPO (
DESAFIO_GRUPO_ID BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
DESAFIO_ID BIGINT UNSIGNED,
ID_GRUPO BIGINT UNSIGNED,
ID_GRUPO_DESAFIADO BIGINT UNSIGNED,
FOREIGN KEY(DESAFIO_ID) REFERENCES DESAFIO (DESAFIO_ID),
FOREIGN KEY(ID_GRUPO) REFERENCES GRUPO (GRUPO_ID),
FOREIGN KEY(ID_GRUPO_DESAFIADO) REFERENCES GRUPO (GRUPO_ID)
);


CREATE TABLE ETEC_CURSOS (
ETEC_CURSO_ID BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
ETEC_CURSO_PERIODO VARCHAR(20),
ID_ETEC BIGINT UNSIGNED,
ID_CURSO BIGINT UNSIGNED,
FOREIGN KEY(ID_ETEC) REFERENCES ETEC (ETEC_ID),
FOREIGN KEY(ID_CURSO) REFERENCES CURSOS (CURSO_ID)
);

CREATE TABLE HISTORICO_DESAFIO (
HISTORICO_ID BIGINT PRIMARY KEY AUTO_INCREMENT,
HISTORICO_TIPO_ARQUIVO VARCHAR(10),
HISTORICO_URL_TEXT TEXT,
HISTORICO_DATA TIMESTAMP,
PESSOA_ID BIGINT UNSIGNED,
DESAFIO_ID BIGINT UNSIGNED,
GRUPO_ID BIGINT UNSIGNED,
FOREIGN KEY(PESSOA_ID) REFERENCES PESSOA_GRUPO (PESSOA_GRUPO_ID),
FOREIGN KEY(DESAFIO_ID) REFERENCES DESAFIO (DESAFIO_ID),
FOREIGN KEY(GRUPO_ID) REFERENCES GRUPO (GRUPO_ID)
);

-- TABELA PARA SUPORTAS AS COLOCAÇÕES DOS GRUPOS EM DETERMINADOS DESAFIOS
CREATE TABLE COLOCACAO(
COLOCACAO_ID INT PRIMARY KEY AUTO_INCREMENT,
COLOCACAO_PODIO INT UNSIGNED,
ID_GRUPO BIGINT UNSIGNED,
ID_DESAFIO BIGINT UNSIGNED,
CONSTRAINT COLOCACAO_ID_GRUPO FOREIGN KEY(ID_GRUPO) REFERENCES GRUPO(GRUPO_ID),
CONSTRAINT COLOCACAO_ID_DESAFIO FOREIGN KEY(ID_DESAFIO) REFERENCES DESAFIO(DESAFIO_ID)
);

ALTER TABLE COMENTARIO ADD FOREIGN KEY(ID_DESAFIO) REFERENCES DESAFIO (DESAFIO_ID);
ALTER TABLE COMENTARIO ADD FOREIGN KEY(ID_PESSOA) REFERENCES PESSOA (PESSOA_ID);
ALTER TABLE COMENTARIO ADD FOREIGN KEY(ID_COMENTARIO) REFERENCES COMENTARIO (COMENTARIO_ID);
ALTER TABLE PESSOA_MENSAGEM ADD FOREIGN KEY(ID_PESSOA_REM) REFERENCES PESSOA (PESSOA_ID);
ALTER TABLE PESSOA_MENSAGEM ADD FOREIGN KEY(ID_PESSOA_DEST) REFERENCES PESSOA (PESSOA_ID);
ALTER TABLE PESSOA_MENSAGEM ADD FOREIGN KEY(ID_MENSAGEM) REFERENCES MENSAGEM (MENSAGEM_ID);
ALTER TABLE MENSAGEM ADD FOREIGN KEY(ID_MENSAGEM) REFERENCES MENSAGEM (MENSAGEM_ID);
ALTER TABLE PESSOA_CURSO ADD FOREIGN KEY(ID_PESSOA) REFERENCES PESSOA (PESSOA_ID);
ALTER TABLE PESSOA_CURSO ADD FOREIGN KEY(ID_CURSO) REFERENCES ETEC_CURSOS (ETEC_CURSO_ID);
ALTER TABLE PESSOA ADD FOREIGN KEY(ID_PERFIL) REFERENCES PERFIL (PERFIL_ID);
ALTER TABLE VOTACAO ADD FOREIGN KEY(ID_DESAFIO) REFERENCES DESAFIO (DESAFIO_ID);
ALTER TABLE DESAFIO ADD DESAFIO_SITUACAO VARCHAR(10);
ALTER TABLE ETEC ADD ETEC_BAIRRO VARCHAR(80);



-- ------------------------------------------ INSERTS -- -----------------------------------

INSERT INTO PERFIL VALUES(0, "Coordenador"), (0,"Professor"), (0,"Aluno");
 
INSERT INTO CURSOS VALUES (0, "INFORMATICA PARA INTERNET", 3);

INSERT INTO ETEC (ETEC_NOME) VALUES ("ETEC JARAGUÁ");

INSERT INTO ETEC_CURSOS VALUES (0, "NOTURNO", 1,1);
