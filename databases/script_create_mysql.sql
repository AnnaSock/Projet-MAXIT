CREATE TABLE IF NOT EXISTS profil (
    id INT NOT NULL AUTO_INCREMENT,
    nom_profil VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS utilisateurs (
    id INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    adresse TEXT,
    numero INT,
    motDePasse TEXT,
    numeroCni INT,
    photoRecto TEXT,
    photoVerso TEXT,
    profil_id INT,
    PRIMARY KEY (id),
    FOREIGN KEY (profil_id) REFERENCES profil(id)
);

CREATE TABLE IF NOT EXISTS compte (
    id INT NOT NULL AUTO_INCREMENT,
    solde DECIMAL(12,2) DEFAULT 0,
    numero VARCHAR(50) NOT NULL,
    date DATE,
    typeCompte ENUM('Principal', 'Secondaire'),
    utilisateur_id INT,
    PRIMARY KEY (id),
    UNIQUE (numero),
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id)
);

CREATE TABLE IF NOT EXISTS transaction (
    id INT NOT NULL AUTO_INCREMENT,
    montant DECIMAL(12,2) NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    compte_id INT,
    typeTransaction ENUM('Depot', 'Retrait', 'Payement'),
    PRIMARY KEY (id),
    FOREIGN KEY (compte_id) REFERENCES compte(id)
);
