create database CRONOMETRAIS;
Use CRONOMETRAIS;

CREATE TABLE ADM(
cd INT PRIMARY KEY
AUTO_INCREMENT,
Key_senha VARCHAR(45),
NE_Email VARCHAR(45));

CREATE TABLE Provedora(
cd INT PRIMARY KEY
AUTO_INCREMENT,
NM_Provedora VARCHAR(65),
CD_CNPJ VARCHAR(35),
AS_Assinatura INT,
IM_Logo LONGTEXT,
NM_CEO VARCHAR(60));

CREATE TABLE Usuario(
cd INT PRIMARY KEY
AUTO_INCREMENT,
NM_Nome VARCHAR(60),
Key_senha VARCHAR(60),
NE_Email VARCHAR(100),
NR_Telefone VARCHAR(20),
EN_Endereco VARCHAR(100),
AS_Assinatura INT,
IM_ImgPerfil LONGTEXT);

CREATE TABLE Rascron(
cd INT PRIMARY KEY
AUTO_INCREMENT,
CD_Rastreamento INT,
NR_Serie INT,
NR_Modelo INT,
NR_Estoque INT);

CREATE TABLE Horarios(
cd INT PRIMARY KEY
AUTO_INCREMENT);

CREATE TABLE Tempos(
cd INT PRIMARY KEY
AUTO_INCREMENT,
TP_Inicial INT,
TP_Final INT,
DS_Local INT,
FOREIGN KEY (cd_Horarios)
REFERENCES Horarios(cd));

CREATE TABLE Onibus(
CD INT PRIMARY KEY
AUTO_INCREMENT,
CD_Placa VARCHAR(7),
RT_Rota LONGTEXT,
DS_Descricao VARCHAR(200),
BG_Bagagem INT,
AV_Avaliacao INT,
BA_Bagagem TINYINT,
ST_Status VARCHAR(15),
IM_Foto LONGTEXT,
FOREIGN KEY (id_Provedora)
REFERENCES Provedora(cd),
FOREIGN KEY (id_Rascron)
REFERENCES Rascron(cd),
FOREIGN KEY (id_Horarios)
REFERENCES Horarios(cd)
);

CREATE TABLE Avaliacao(
CD INT PRIMARY KEY
AUTO_INCREMENT,
DS_Comentario LONGTEXT,
NT_Nota INT,
FOREIGN KEY (id_Usuario)
REFERENCES Usuario(cd),
FOREIGN KEY (id_Onibus)
REFERENCES Onibus(cd)
);