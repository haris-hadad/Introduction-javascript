CREATE DATABASE utilisateurs

USE utilisateurs;

-- Supprime la table si elle existe déjà
DROP TABLE IF EXISTS utilisateurs;

-- Crée la table utilisateurs
CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)

-- Insère un utilisateur test
INSERT INTO utilisateurs (nom, prenom, email, password)
VALUES ('hadad', 'haris', 'haris@gmail.com', '123456');