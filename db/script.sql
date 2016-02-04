
create database sgd2;

CREATE TABLE diaria (
sequencial integer NOT NULL AUTO_INCREMENT PRIMARY KEY,
data date,
quantidade integer,
codigoTipoDiaria integer,
codigoevento integer,
id integer
);

CREATE TABLE servidorCarga (
matricula varchar (11),
cpf varchar (11),
nome varChar (60),
orgao varChar (60)
);

CREATE TABLE servidor (
matricula varchar (11),
cpf varchar (11),
nome varChar (60),
orgao varChar (60),
codigoOrgao integer
);

CREATE TABLE tipodiaria (
codigoTipoDiaria integer NOT NULL AUTO_INCREMENT PRIMARY KEY,
descricao varChar (60),
valor float
);

CREATE TABLE evento (
codigoevento integer NOT NULL AUTO_INCREMENT PRIMARY KEY,
descricao varChar (60),
codigotipoevento integer
);

CREATE TABLE orgao (
codigoOrgao integer NOT NULL AUTO_INCREMENT PRIMARY KEY,
descricao varChar (60)
);

CREATE TABLE tipoEvento (
codigotipoevento integer NOT NULL AUTO_INCREMENT PRIMARY KEY,
descricao varChar (60)
);

CREATE TABLE usuario (
id integer NOT NULL AUTO_INCREMENT PRIMARY KEY,
cpf varchar (11),
nome varChar (60),
senha varChar (60)
);

ALTER TABLE diaria ADD FOREIGN KEY(codigoTipoDiaria) REFERENCES tipodiaria (codigoTipoDiaria);
ALTER TABLE diaria ADD FOREIGN KEY(codigoevento) REFERENCES evento (codigoevento);
ALTER TABLE diaria ADD FOREIGN KEY(id) REFERENCES usuario (id);
ALTER TABLE servidor ADD FOREIGN KEY(codigoOrgao) REFERENCES orgao (codigoOrgao);
ALTER TABLE evento ADD FOREIGN KEY(codigotipoevento) REFERENCES tipoEvento (codigotipoevento);
