CREATE TABLE langues(
   code VARCHAR(8),
   libelle VARCHAR(50),
   PRIMARY KEY(code)
);

CREATE TABLE texte(
   id serial,
   valeur TEXT,
   PRIMARY KEY(id)
);

CREATE TABLE pages(
   id serial,
   nom VARCHAR(100),
   PRIMARY KEY(id)
);

CREATE TABLE admin(
   login VARCHAR(50),
   hash TEXT,
   PRIMARY KEY(login)
);

CREATE TABLE texte_itineraire(
   id serial,
   contenu TEXT,
   duree VARCHAR(50),
   localisation VARCHAR(50),
   PRIMARY KEY(id)
);

CREATE TABLE itineraires(
   id serial,
   tags TEXT,
   miniature TEXT,
   miniature_type_img VARCHAR(50),
   nom VARCHAR(100),
   PRIMARY KEY(id)
);

CREATE TABLE texte_FAQ(
   id serial,
   titre VARCHAR(50),
   question TEXT,
   reponse TEXT,
   PRIMARY KEY(id)
);

CREATE TABLE FAQ(
   id serial,
   nom VARCHAR(100),
   PRIMARY KEY(id)
);

CREATE TABLE traductions(
   code VARCHAR(8),
   id INT,
   id_1 INT,
   tag VARCHAR(50),
   PRIMARY KEY(code, id, id_1),
   FOREIGN KEY(code) REFERENCES langues(code),
   FOREIGN KEY(id) REFERENCES texte(id),
   FOREIGN KEY(id_1) REFERENCES pages(id)
);

CREATE TABLE traductions_itineraire(
   code VARCHAR(8),
   id INT,
   id_1 INT,
   tag VARCHAR(50),
   PRIMARY KEY(code, id, id_1),
   FOREIGN KEY(code) REFERENCES langues(code),
   FOREIGN KEY(id) REFERENCES texte_itineraire(id),
   FOREIGN KEY(id_1) REFERENCES itineraires(id)
);

CREATE TABLE traductions_FAQ(
   code VARCHAR(8),
   id INT,
   id_1 INT,
   tag VARCHAR(50),
   PRIMARY KEY(code, id, id_1),
   FOREIGN KEY(code) REFERENCES langues(code),
   FOREIGN KEY(id) REFERENCES texte_FAQ(id),
   FOREIGN KEY(id_1) REFERENCES FAQ(id)
);