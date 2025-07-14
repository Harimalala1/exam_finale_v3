create database projet_finalS2;

use projet_finalS2;

create table projet_finalS2_membre(
    id_membre INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100),
    date_de_naissance DATE,
    genre VARCHAR(100),
    email VARCHAR(100),
    ville VARCHAR(100),
    mdp VARCHAR(100),
    image_profil VARCHAR(200)
);

create table projet_finalS2_categorie_objet(
    id_categorie INT PRIMARY KEY AUTO_INCREMENT,
    nom_categorie VARCHAR(100)
);

create table projet_finalS2_objet(
    id_objet INT PRIMARY KEY AUTO_INCREMENT,
    nom_objet VARCHAR(100),
    id_categorie INT,
    id_membre INT 
);

create table projet_finalS2_image_objet(
    id_image INT PRIMARY KEY AUTO_INCREMENT,
    id_objet INT,
    nom_image VARCHAR(100)
);

create table projet_finalS2_emprunt(
    id_emprunt INT PRIMARY KEY AUTO_INCREMENT,
    id_objet INT,
    id_membre INT,
    date_emprunt DATETIME,
    date_retour DATETIME
);

INSERT INTO projet_finalS2_membre (nom, date_de_naissance, genre, email, ville, mdp) VALUES ('Martin', '1980-05-15', 'M', 'martin@gmail.com', 'Nagato', '12234martin');
INSERT INTO projet_finalS2_membre (nom, date_de_naissance, genre, email, ville, mdp) VALUES ('Dupont', '1990-06-24', 'F', 'Dupont@gmail.com', 'Shiboya', '1234dupont');
INSERT INTO projet_finalS2_membre (nom, date_de_naissance, genre, email, ville, mdp) VALUES ('Durand', '1975-02-12', 'M', 'durand@gmail.com', 'Sasuke', '1234durand');
INSERT INTO projet_finalS2_membre (nom, date_de_naissance, genre, email, ville, mdp) VALUES ('Morel', '1988-11-19', 'F', 'morel@gmail.com', 'Naruto','1234morel');


INSERT INTO projet_finalS2_categorie_objet (nom_categorie) VALUES ('Estethique'),('Bricolage'),('Mecanique'),('Cuuisine');

INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Sérum hydratant', 1, 1);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Perceuse électrique', 2, 1);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Clé à molette', 3, 1);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Fouet en inox', 4, 1);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Masque facial en tissu', 1, 1);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Niveau à bulle', 2, 1);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Cric hydraulique', 3, 1);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Poêle antiadhésive', 4, 1);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Pince à épiler', 1, 1);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Scie sauteuse', 2, 1);

INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Crème solaire', 1, 2);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Marteau', 2, 2);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Jack stand (support de levage)', 3, 2);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Mixeur plongeant', 4, 2);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Brumisateur d''eau thermale', 1, 2);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Pince multiprise', 2, 2);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Trousse à outils', 3, 2);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Planche à découper en bambou', 4, 2);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Rouge à lèvres', 1, 2);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Ruban à mesurer', 2, 2);

INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Gel douche parfumé', 1, 3);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Visseuse sans fil', 2, 3);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Pneu de rechange', 3, 3);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Cafetière italienne', 4, 3);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Diffuseur d''huiles essentielles', 1, 3);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Clous et chevilles', 2, 3);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Boîte à fusibles', 3, 3);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Balance électronique', 4, 3);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Brosses de maquillage', 1, 3);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Peinture acrylique', 2, 3);

INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Parfum floral', 1, 4);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Pistolet à colle chaude', 2, 4);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Batterie de voiture', 3, 4);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Robot culinaire', 4, 4);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Soin contour des yeux', 1, 4);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Scie à métaux', 2, 4);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Liquide de frein', 3, 4);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Moules à muffins', 4, 4);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Bandeaux lavables', 1, 4);
INSERT INTO projet_finalS2_objet (nom_objet, id_categorie, id_membre) VALUES ('Papier de verre', 2, 4);


INSERT INTO projet_finalS2_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES (1, 2, '2025-01-05', '2025-01-12');

INSERT INTO projet_finalS2_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES (5, 3, '2025-01-10', '2025-01-17');

INSERT INTO projet_finalS2_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES (12, 4, '2025-01-15', '2025-01-22');

INSERT INTO projet_finalS2_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES (18, 1, '2025-02-01', '2025-02-08');

INSERT INTO projet_finalS2_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES (25, 2, '2025-02-10', '2025-02-17');

INSERT INTO projet_finalS2_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES (32, 3, '2025-02-15', '2025-02-22');

INSERT INTO projet_finalS2_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES (7, 4, '2025-03-01', '2025-03-08');

INSERT INTO projet_finalS2_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES (21, 1, '2025-03-05', '2025-03-12');

INSERT INTO projet_finalS2_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES (35, 2, '2025-03-10', '2025-03-17');

INSERT INTO projet_finalS2_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES (4, 3, '2025-03-15', '2025-03-22');

CREATE VIEW projet_finalS2_objet_membre AS SELECT o.id_membre AS id_membre, o.nom_objet AS nom_objet, m.nom AS nom_membre 
FROM projet_finalS2_objet o JOIN projet_finalS2_membre m ON 
o.id_membre = m.id_membre;

CREATE VIEW v_objet_categorie AS SELECT oc.nom_categorie AS Categorie, o.nom_objet AS objet FROM 
projet_finalS2_categorie_objet oc JOIN projet_finalS2_objet o ON oc.id_categorie = o.id_categorie;
