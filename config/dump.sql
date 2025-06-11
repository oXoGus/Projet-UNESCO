CREATE EXTENSION IF NOT EXISTS pgcrypto;

CREATE TABLE langues(
   code VARCHAR(8),
   libelle VARCHAR(50),
   PRIMARY KEY(code)
);

CREATE TABLE texte(
   tag VARCHAR(50),
   valeur TEXT,
   PRIMARY KEY(tag)
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


CREATE TABLE traductions(
   code VARCHAR(8),
   page_id INT,
   texte_tag VARCHAR(50),
   PRIMARY KEY(code, texte_tag, page_id),
   FOREIGN KEY(code) REFERENCES langues(code),
   FOREIGN KEY(texte_tag) REFERENCES texte(tag),
   FOREIGN KEY(page_id) REFERENCES pages(id)
);

CREATE TABLE etapes(
   id serial,
   contenu TEXT,
   img BYTEA,
   img_type VARCHAR(50),
   titre VARCHAR(50),
   PRIMARY KEY(id)
);

CREATE TABLE itineraires(
   id serial,
   miniature BYTEA,
   miniature_type_img VARCHAR(50),
   PRIMARY KEY(id)
);

CREATE TABLE traductions_itineraire(
   code VARCHAR(8),
   etape_id INT,
   itineraire_id INT,
   tag VARCHAR(50),
   PRIMARY KEY(code, itineraire_id, etape_id),
   FOREIGN KEY(code) REFERENCES langues(code),
   FOREIGN KEY(etape_id) REFERENCES etapes(id),
   FOREIGN KEY(itineraire_id) REFERENCES itineraires(id)
);


insert into admin values ('admin_kyoto', crypt('kyoto', gen_salt('bf')));