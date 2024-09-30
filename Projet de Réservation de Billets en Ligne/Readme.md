 # Projet de Réservation de Billets en Ligne

<img width="959" alt="Cover_app" src="https://github.com/user-attachments/assets/8fb89db9-0f5d-4eb4-9e26-52b6a5d556fd">

Ce projet est un système de réservation en ligne permettant aux utilisateurs de réserver des billets pour un voyage, avec la génération automatique d'un billet PDF contenant les informations sur la réservation. Le billet PDF est personnalisé et inclut un filigrane pour authentification. L'application utilise PHP, MySQL et FPDF pour la gestion des données et la génération des billets.

 # Fonctionnalités

Interface utilisateur pour effectuer des réservations de billets.
Insertion des informations de réservation dans une base de données MySQL.
Génération automatique d'un billet PDF contenant les détails du voyage.
Affichage d'une image du voyage sur le billet PDF.
Ajout d'un filigrane de sécurité sur le billet PDF pour authentifier le document.
Téléchargement automatique du fichier PDF une fois la réservation effectuée.
Technologies utilisées

 # Front-End :

HTML/CSS/TailwindCSS et JavaScript pour la création des interfaces utilisateurs.

# Back-End :

PHP pour la gestion des réservations et la génération des billets PDF.
MySQL pour le stockage des données de réservation.
PDF Generation :

FPDF pour générer les billets au format PDF.
Prérequis
Serveur local (WAMP, MAMP, XAMPP ou tout autre serveur compatible PHP).
PHP 7.0+ ou supérieur.
MySQL 5.7 ou supérieur.
Composer (facultatif) pour gérer les dépendances PHP.
Bibliothèque FPDF pour la génération des PDF.
Installation

# Cloner le projet :

git clone Projet de Réservation de Billets en Ligne dans le Dossier : https://github.com/anelkamd/Composants-et-Sites-Web.git

# Configurer la base de données :

Créer une base de données MySQL.
Importer le fichier reservationbillet.sql fourni dans le répertoire BD du projet pour créer les tables nécessaires.

 # Structure des fichiers

 /Projet Tutore LIC3/
│
├── /librarie/              # Bibliothèque FPDF
│   └── fpdf.php
├── /Pages Secondaire/
│   └── Reservationbillets.php # Script PHP de gestion des réservations et génération PDF
├── /css/                   # Fichiers CSS pour styliser l'interface utilisateur
├── /images/                # Dossier contenant les images utilisées dans les billets PDF
├── config.php              # Configuration de la base de données
├── index.php               # Page principale de l'application
└── README.md               # Documentation du projet

 # Utilisation
Accédez à la page de réservation via l'URL de l'application.

Remplissez le formulaire de réservation avec les informations requises (nom, classe, destination, date, heure, etc.).

Soumettez le formulaire pour finaliser la réservation.

Un billet PDF sera généré automatiquement avec les informations de votre réservation, comprenant :

Nom
Classe
Destination
Date et heure de départ
Prix
Image du voyage
Filigrane de sécurité "ETS SILIMU"
Le fichier PDF sera automatiquement téléchargé après la réservation.

Exemple de Billet PDF
Un exemple du billet PDF généré :

# Auteurs

# Anelka MD - Développeur web et designer UI/UX.
instagram : https://www.instagram.com/anelka.md



