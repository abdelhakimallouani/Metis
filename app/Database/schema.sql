CREATE DATABASE metis;
USE metis;

CREATE TABLE membres (
    id_membre INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    date_inscription DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE projets (
    id_projet INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(150) NOT NULL,
    date_debut DATETIME NOT NULL,
    date_fin DATETIME,
    statut VARCHAR(50),
    id_membre INT NOT NULL,

    FOREIGN KEY (id_membre)
        REFERENCES membres(id_membre)
);

CREATE TABLE projets_courts (
    id_projet INT PRIMARY KEY,
    duree_jours INT NOT NULL,
    priorite VARCHAR(50),

    FOREIGN KEY (id_projet)
        REFERENCES projets(id_projet)
);

CREATE TABLE projets_longs (
    id_projet INT PRIMARY KEY,
    budget FLOAT NOT NULL,
    phase VARCHAR(50),

    FOREIGN KEY (id_projet)
        REFERENCES projets(id_projet)
);

CREATE TABLE activites (
    id_activite INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(150) NOT NULL,
    date_activite DATETIME NOT NULL,
    statut VARCHAR(50),
    id_projet INT NOT NULL,

    FOREIGN KEY (id_projet)
        REFERENCES projets(id_projet)
);

