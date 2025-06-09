
CREATE TABLE responsable(
   id serial primary key,
   nom VARCHAR(50),
   adresse VARCHAR(50),
   telephone VARCHAR(15),
   mail VARCHAR(50)
);

CREATE TABLE type_professionnel(
   code VARCHAR(10) primary key,
   libelle VARCHAR(50) NOT NULL
);

CREATE TYPE loc AS ENUM ('cabinet', 'hors cabinet');

CREATE TABLE consultation(
   id serial primary key,
   anamnese VARCHAR(100),
   diagnostique VARCHAR(100),
   type_localisation loc NOT NULL,
   resume VARCHAR(255),
   duree TIME,
   prev_consult integer references consultation(id) on delete cascade
);

CREATE TABLE manipulation(
   code VARCHAR(8) primary key,
   tarif DECIMAL(15,2) NOT NULL,
   duree smallint NOT NULL
);

CREATE TABLE traitement(
   id serial primary key,
   produit VARCHAR(50),
   dilution INT,
   dose INT,
   duree_traitement smallint NOT NULL,
   frequence INT NOT NULL,
   quand VARCHAR(50) NOT NULL
);

CREATE TABLE particulier(
   id serial primary key references responsable(id) on delete cascade,
   prenom VARCHAR(50),
   date_de_naissance DATE
);

CREATE TABLE type_consult(
   type_soin VARCHAR(50) primary key
);

CREATE TABLE vaccins(
   nom_vaccin VARCHAR(50),
   PRIMARY KEY(nom_vaccin)
);

CREATE TABLE user_db (
   id serial primary key,
   username TEXT NOT NULL UNIQUE, 
   password_hash TEXT NOT NULL
);

CREATE TABLE animaux(
   id serial primary key,
   nom VARCHAR(50) NOT NULL,
   espece VARCHAR(50) NOT NULL,
   race VARCHAR(50),
   genre VARCHAR(1) NOT NULL,
   castre boolean NOT NULL,
   taille DECIMAL(15,2),
   poids DECIMAL(15,2),
   id_responsable serial references responsable(id) on delete cascade
);

CREATE TABLE professionnel(
   id serial primary key references responsable(id) on delete cascade,
   code VARCHAR(10) NOT NULL references type_professionnel(code) on delete cascade,
   adresse_site_web VARCHAR(50),
   IBAN VARCHAR(27) NOT NULL unique
);

CREATE TABLE traiter(
   animal_id serial references animaux(id) on delete cascade,
   consultation_id serial references consultation(id) on delete cascade,
   type_soin VARCHAR(50) references type_consult(type_soin) on delete cascade,
   tarif_standard DECIMAL(15,2) NOT NULL,
   date_consult timestamp NOT NULL,
   raison_tarif_exceptionnel VARCHAR(100),
   PRIMARY KEY(animal_id, consultation_id, type_soin)
);

CREATE TABLE manip_consult(
   consultation_id serial references consultation(id) on delete cascade,
   code VARCHAR(8) references manipulation(code) on delete cascade,
   PRIMARY KEY(consultation_id, code)
);

CREATE TABLE traitement_consult(
   consultation_id serial references consultation(id) on delete cascade,
   traitement_id serial references traitement(id) on delete cascade,
   PRIMARY KEY(consultation_id, traitement_id)
);

CREATE TABLE vacciner(
   animal_id serial references animaux(id) on delete cascade,
   nom_vaccin VARCHAR(50) references vaccins(nom_vaccin) on delete cascade,
   date_vaccin DATE,
   PRIMARY KEY(animal_id, nom_vaccin)
);


INSERT INTO responsable (id, nom, adresse, telephone, mail) VALUES
(1, 'LesLapinsDuCoin', '123 rue du Parc', '0123456789', 'leslapins@email.com'),
(2, 'AbatoirDesChamps', '456 avenue des Champs', '0987654321', 'abatoirdeschamps@email.com'),
(3, 'Dupont', '123 rue des Champs', '0175456789', 'dupontmax@email.com'),
(4, 'Smith', '456 avenue du Parc', '0912654321', 'smithbella@email.com');

INSERT INTO type_professionnel (code, libelle) VALUES
('T01', 'Elevage de lapins nains'),
('T02', 'Abatoir');

INSERT INTO consultation (id, anamnese, diagnostique, type_localisation, resume, duree, prev_consult) VALUES
(1, 'Chien malade', 'Infection urinaire', 'cabinet', 'Consultation initiale', '00:30:00', NULL),
(2, 'Vaccin', 'Vaccin', 'cabinet', 'Vaccin', '00:10:00', NULL),
(3, 'Chat avec douleurs', 'Fracture de la patte', 'cabinet', 'Fracture détectée', '00:45:00', NULL),
(4, 'Chat avec douleurs', 'Fracture de la patte', 'cabinet', 'operation', '00:45:00', 2),
(5, 'Lapin malade', 'Infection urinaire', 'cabinet', 'Consultation initiale', '00:30:00', NULL),
(6, 'Vaccin', 'Vaccin', 'cabinet', 'Vaccin', '00:10:00', NULL),
(7, 'Chat malade', 'None', 'cabinet', 'Recherches en cours', '00:25:00', NULL),
(8, 'Chat malade', 'Torsion de estomac', 'cabinet', 'Radio effectuee', '00:45:00', 5);

INSERT INTO manipulation (code, tarif, duree) VALUES
('MYFAS', 3000, 10),
('MSCSQ', 20000, 25),
('MATFA', 120000, 45);

INSERT INTO traitement (produit, dilution, dose, duree_traitement, frequence, quand) VALUES
('Arnica', 2, 10, 7, 2, 'Matin et soir'),
('cataplasme d''argile verte', 1, 5, 5, 3, 'Tous les jours');

INSERT INTO particulier (id, prenom, date_de_naissance) VALUES
(3, 'Max', '1990-05-20'),
(4, 'Bella', '1975-11-11');

INSERT INTO type_consult (type_soin) VALUES
('Consultation générale'),
('Consultation homéopathique'),
('Consultation osthéopatique');

INSERT INTO vaccins (nom_vaccin) VALUES
('Rage'),
('Grippe');

INSERT INTO animaux (id, nom, espece, race, genre, castre, taille, poids, id_responsable) VALUES
(1, 'Rex', 'Chien', 'Berger Allemand', 'M', TRUE, 65.5, 30.2, 1),
(2, 'minnie', 'lapin', 'nain angora', 'M', FALSE, 15.5, 1.2, 2),
(3, 'Catty', 'Chat', 'Europeen', 'M', TRUE, 45.5, 7.2, 3),
(4, 'Whiskers', 'Chat', 'Siamois', 'F', FALSE, 45.0, 8.5, 4);

INSERT INTO professionnel(id, adresse_site_web, IBAN, code) VALUES
(1, 'www.leslapinsducoin.fr', 'FR7630006000011234567890189', 'T01'),
(2, 'www.abatoirdeschamps.com', 'FR7630006000019876543210198', 'T02');

INSERT INTO traiter (animal_id, consultation_id, type_soin, date_consult, tarif_standard, raison_tarif_exceptionnel) VALUES
(1, 1, 'Consultation générale', '2019-12-01 12:03:00', 3000, 'Aucune'),
(3, 2, 'Consultation générale', '2024-01-01 10:00:00', 20000, 'Aucune'),
(4, 3, 'Consultation générale', '2019-12-24 08:30:00', 6000, 'Aucune'),
(2, 4, 'Consultation générale', '2020-02-01 16:12:00', 6000, 'Aucune'),
(1, 5, 'Consultation générale', '2023-12-30 09:40:00', 20000, 'Aucune'),
(1, 6, 'Consultation homéopathique', '2024-05-20 18:45:00', 1200.00, 'Fracture nécessitant intervention');

INSERT INTO manip_consult (consultation_id, code) VALUES
(4, 'MYFAS'),
(1, 'MSCSQ'),
(6, 'MYFAS'),
(2, 'MATFA'),
(3, 'MSCSQ');


INSERT INTO traitement (produit, dilution, dose, duree_traitement, frequence, quand) VALUES 
('Arnica', 2, 10, 7, 2, 'Matin et soir'),
('cataplasme d''argile verte', 1, 5, 5, 3, 'Tous les jours');

INSERT INTO traitement_consult (consultation_id, traitement_id) VALUES
(1, 1),
(4, 2),
(6, 1),
(3, 2);

INSERT INTO vacciner (animal_id, nom_vaccin, date_vaccin) VALUES
(1, 'Rage', '2024-01-15'),
(2, 'Grippe', '2024-05-20');


INSERT INTO user_db (username, password_hash) VALUES
('daktari', md5('test'));

CREATE VIEW tarif_augment AS WITH
consults AS (select type_soin, type_localisation, COUNT(*) as nb_consult from traiter t join consultation c on consultation_id = id where date_consult >= '2020-01-01' and raison_tarif_exceptionnel = '' GROUP BY type_soin,type_localisation ),
premsConsult AS (select DISTINCT ON (type_soin, type_localisation) type_soin, type_localisation, tarif_standard as tarif2020 from traiter join consultation on consultation_id = id where date_consult BETWEEN '2020-01-01' and '2020-12-31' and raison_tarif_exceptionnel = '' ORDER BY type_soin, type_localisation, date_consult ASC),
dernierConsult AS (select DISTINCT ON (type_soin, type_localisation) type_soin, type_localisation, tarif_standard as tarifRecent from traiter join consultation on consultation_id = id where date_consult >= '2020-01-01' and raison_tarif_exceptionnel = '' ORDER BY type_soin, type_localisation, date_consult DESC)
select pc.type_soin,pc.type_localisation, tarif2020, tarifRecent, ROUND((tarifRecent - tarif2020) / tarif2020, 0) as augmentation from premsConsult pc join dernierConsult dc on pc.type_soin = dc.type_soin and pc.type_localisation = dc.type_localisation join consults c on pc.type_soin = c.type_soin and pc.type_localisation = c.type_localisation where c.nb_consult >= 2 and (dc.tarifRecent - pc.tarif2020) / pc.tarif2020 >= 0.5;

-- il faut resyncroniser la séquence puisqu'on a ajouter des serial a la main

SELECT setval('particulier_id_seq', (SELECT COALESCE(MAX(id), 0) FROM particulier));
SELECT setval('professionnel_id_seq', (SELECT COALESCE(MAX(id), 0) FROM professionnel));
SELECT setval('responsable_id_seq', (SELECT COALESCE(MAX(id), 0) FROM responsable));
SELECT setval('traitement_consult_consultation_id_seq', (SELECT COALESCE(MAX(consultation_id), 0) FROM traitement_consult));
SELECT setval('traitement_consult_traitement_id_seq', (SELECT COALESCE(MAX(traitement_id), 0) FROM traitement_consult));
SELECT setval('traitement_id_seq', (SELECT COALESCE(MAX(id), 0) FROM traitement));
SELECT setval('traiter_animal_id_seq', (SELECT COALESCE(MAX(animal_id), 0) FROM traiter));
SELECT setval('traiter_consultation_id_seq', (SELECT COALESCE(MAX(consultation_id), 0) FROM traiter));
SELECT setval('user_db_id_seq', (SELECT COALESCE(MAX(id), 0) FROM user_db));
SELECT setval('vacciner_animal_id_seq', (SELECT COALESCE(MAX(animal_id), 0) FROM vacciner))
