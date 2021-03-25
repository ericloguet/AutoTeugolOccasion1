
CREATE TABLE ti_client (
    id_client INTEGER NOT NULL,
    nom TEXT NOT NULL,
    prenom TEXT NOT NULL,
    pseudo TEXT NOT NULL,
    mdp TEXT NOT NULL,
    email TEXT NOT NULL,
    localite TEXT NOT NULL,
    codePostal INTEGER,
    rue TEXT NOT NULL,
    tel TEXT NOT NULL,
    PRIMARY KEY (id_client),
    UNIQUE (pseudo, mdp, email, tel)
);

CREATE TABLE ti_voiture (
    id_voiture INTEGER NOT NULL,
    num_mat TEXT NOT NULL,
    id_marque INTEGER NOT NULL,
    carro TEXT,
    modele TEXT,
    carburant TEXT,
    transmission TEXT,
    annee TEXT,
    prix real,
    km INTEGER,
    photo TEXT,
    PRIMARY KEY (id_voiture),
    UNIQUE (num_mat)
);

CREATE TABLE ti_comFact (
    num_com INTEGER NOT NULL,
    num_fact INTEGER,
    id_client INTEGER NOT NULL,
    date_com DATE NOT NULL,
    etat CHAR NOT NULL,
    montant real NOT NULL,
    PRIMARY KEY (num_com),
    UNIQUE (num_fact)
);

CREATE TABLE ti_panier (
    id_panier INTEGER NOT NULL,
    num_com INTEGER NOT NULL,
    id_voiture INTEGER NOT NULL,
    prixAchat real NOT NULL,
    PRIMARY KEY (id_panier)
);

CREATE TABLE ti_marque (
    id_marque INTEGER NOT NULL,
    nom_marque TEXT,
    PRIMARY KEY (id_marque),
    UNIQUE (nom_marque)
);

ALTER TABLE ti_voiture ADD FOREIGN KEY (id_marque) REFERENCES ti_marque(id_marque);
ALTER TABLE ti_comFact ADD FOREIGN KEY (id_client) REFERENCES ti_client(id_client);
ALTER TABLE ti_panier ADD FOREIGN KEY (id_voiture) REFERENCES ti_voiture(id_voiture);
ALTER TABLE ti_panier ADD FOREIGN KEY (num_com) REFERENCES ti_comFact(num_com);