# Gestion d'Hôtel

## Description
**gestion_hotel** est un projet PHP permettant de gérer les réservations d'hôtels en ligne. Ce projet inclut des fonctionnalités pour l'inscription et la connexion des utilisateurs, l'administration des hôtels et des réservations, ainsi que la gestion des clients.

Il s'agit de mon premier projet en PHP, une première tentative qui nécessite encore des améliorations et des optimisations.

## Fonctionnalités
- Inscription et connexion des utilisateurs
- Ajout, modification et suppression d'hôtels
- Réservation en ligne des hôtels
- Gestion des réservations par les administrateurs
- Interface utilisateur simple avec des pages HTML et des scripts PHP

## Structure du Projet

- `Page d’accueil.html` : Page principale du site
- `Reservation.html` : Interface pour réserver un hôtel
- `Connexion.html` : Page de connexion des utilisateurs
- `Inscription.php / Inscription1.php` : Gestion de l'inscription
- `Login.php / Connecter.php` : Gestion de l'authentification
- `Admin1.php / Administrateur.html / admin.php` : Interface et gestion des administrateurs
- `Ajouter.php / Supprimer Hotel.php / Supprimer Reservation.php` : Gestion des hôtels et des réservations
- `Confirmation.php` : Confirmation des actions
- `hotel.sql` : Base de données contenant les informations des hôtels et des réservations
- `membre.php` : Gestion des membres
- `Client.php / Hotel.php / Reservation.php` : Fichiers de soutien pour la gestion des données

## Installation
1. Cloner ce repository :
   ```sh
   git clone https://github.com/KoloinaRan/gestion_hotel.git
   ```
2. Importer le fichier `hotel.sql` dans votre base de données MySQL
3. Configurer la connexion à la base de données dans `Connexion.php`
4. Lancer un serveur local (ex: WAMP, XAMPP) et accéder au projet via `http://localhost/gestion_hotel`

## Améliorations Futures
- Ajout d'un design plus moderne 
- Sécurisation des données avec des requêtes préparées
- Optimisation du code pour une meilleure performance

## Auteur
**KoloinaRandriarisoa** - Premier projet PHP, en cours d'amélioration
