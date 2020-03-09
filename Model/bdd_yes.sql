interview		id/titre/video/description
article id/description/titre/image/type
miniserie id/titre/video/description
colabo id/nom/image/lien
admin id/username/password


CREATE TYPE categorie AS ENUM ('Metier', 'Startup');
CREATE TABLE Interview
(
	idInterview int PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Titre varchar(300) NOT NULL,
	Video varchar(5000),
	Description varchar(5000),
	DatePublication DATE
);
CREATE TABLE Article
(
	idArticle int PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Description varchar(5000),
	Titre varchar(300) NOT NULL,
	Image varchar(5000),
	Categorie categorie NOT NULL,
	DatePublication DATE
);

CREATE TABLE MiniSerie
(
	idMiniSerie int PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Titre varchar(300) NOT NULL,
	Video varchar(5000),
	Description varchar(5000),
	DatePublication DATE
);
CREATE TABLE Colaboration
(
	idColaboration int PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Nom varchar(300) NOT NULL,
	Image varchar(5000),
	Lien varchar(5000)
);
CREATE TABLE Admin
(
	idAdmin int PRIMARY KEY NOT NULL AUTO_INCREMENT,
	username varchar(50) NOT NULL,
	password varchar(50) NOT NULL
);