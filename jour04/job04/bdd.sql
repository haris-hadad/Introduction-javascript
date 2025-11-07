CREATE DATABASE utilisateurs;

use utilisateurs;
DROP TABLE utilisateurs;

CREATE TABLE utilisateurs (
id int PRIMARY KEY AUTO_INCREMENT,
nom varchar(255) NOT NULL,
prenom varchar(255),
email varchar(255)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `utilisateurs` (`nom`, `prenom`, `email`)
VALUES ('Hadad', 'Haris', 'haris123@gmail.com');




