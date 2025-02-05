CREATE DATABASE Melovox;

USE Melovox;

CREATE TABLE Utilisateur (
    Id_Utilisateur INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(255),
    Prenom VARCHAR(255),
    Email VARCHAR(255),
    Pseudo VARCHAR(255),
    Mot_de_passe VARCHAR(255),
    Nombre_abonnes INT,
    Nombre_abonnement INT
);

CREATE TABLE Artiste (
    Id_Artiste INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(255),
    Prenom VARCHAR(255),
    Email VARCHAR(255),
    Nom_d_artiste VARCHAR(255),
    Bio TEXT,
    Nationalite VARCHAR(255),
    Genre VARCHAR(255),
    Albums INT,
    EPs INT,
    Singles INT,
    Nombre_abonnes INT,
    Nombre_abonnement INT
);

CREATE TABLE Album (
    Id_Album INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(255),
    Duree TIME,
    Nombre_de_titre INT,
    Genre VARCHAR(255),
    Date_de_sortie DATE,
    Artiste INT,
    FOREIGN KEY (Artiste) REFERENCES Artiste(Id_Artiste)
);

CREATE TABLE EP (
    Id_EP INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(255),
    Duree TIME,
    Nombre_de_titre INT,
    Genre VARCHAR(255),
    Date_de_sortie DATE,
    Artiste INT,
    FOREIGN KEY (Artiste) REFERENCES Artiste(Id_Artiste)
);

CREATE TABLE Single (
    Id_Single INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(255),
    Duree TIME,
    Genre VARCHAR(255),
    Date_de_sortie DATE,
    Artiste INT,
    FOREIGN KEY (Artiste) REFERENCES Artiste(Id_Artiste)
);

CREATE TABLE Titre (
    Id_titre INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(255),
    Duree TIME,
    Album INT,
    EP INT,
    Single INT,
    Genre VARCHAR(255),
    Date_de_sortie DATE,
    Artiste INT,
    FOREIGN KEY (Album) REFERENCES Album(Id_Album),
    FOREIGN KEY (EP) REFERENCES EP(Id_EP),
    FOREIGN KEY (Single) REFERENCES Single(Id_Single),
    FOREIGN KEY (Artiste) REFERENCES Artiste(Id_Artiste)
);

CREATE TABLE Playlist (
    Id_Playlist INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(255),
    Nom_Utilisateur INT,
    Duree TIME,
    Nombre_de_titre INT,
    Date_de_creation DATE,
    Artiste INT,
    FOREIGN KEY (Nom_Utilisateur) REFERENCES Utilisateur(Id_Utilisateur)
);

CREATE TABLE Contact (
    Id_contact INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(255),
    Prenom VARCHAR(255),
    Email VARCHAR(255),
    Statut VARCHAR(255),
    Id_Utilisateur INT,
    FOREIGN KEY (Id_Utilisateur) REFERENCES Utilisateur(Id_Utilisateur)
);

CREATE TABLE GenreCategorie (
    Id_GenreCategorie INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(255),
    Nombre_de_titre INT,
    Nombre_albums INT,
    Nombre_d_EP INT,
    Nombre_de_single INT,
    Artiste INT,
    FOREIGN KEY (Artiste) REFERENCES Artiste(Id_Artiste)
);
