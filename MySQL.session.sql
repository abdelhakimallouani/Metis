USE metis;

CREATE TABLE membres (
    id_membre INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    date_inscription DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO membres (nom,prenom,email) VALUES ('hakim','allouani','allouani@gamil.com') ;
SELECT * FROM membres

CREATE TABLE projets (
    id_projet INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(150) NOT NULL,
    date_debut DATETIME NOT NULL,
    date_fin DATETIME,
    statut ENUM('court','long') NOT NULL,
    id_membre INT NOT NULL,

    FOREIGN KEY (id_membre)
        REFERENCES membres(id_membre)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

SELECT * FROM projets

CREATE TABLE activites (
    id_activite INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(150) NOT NULL,
    date_activite DATETIME NOT NULL,
    statut VARCHAR(50),
    id_projet INT NOT NULL,

    FOREIGN KEY (id_projet)
        REFERENCES projets(id_projet)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);





