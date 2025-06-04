# Gestion des Utilisateurs

Ce projet a été réalisé dans le cadre de la **piscine BTS SIO / CIEL**. Il s'agit d'une application PHP permettant la gestion des utilisateurs, avec connexion à une base de données MySQL.

## 🔧 Fonctionnalités principales

- Création d'utilisateurs
- Authentification (connexion sécurisée)
- Hashage des mots de passe
- Interface d’accueil après connexion
- Gestion des utilisateurs via des fonctions PHP

## 🛠️ Technologies utilisées

- PHP
- MySQL
- HTML/CSS
- WAMP Server (en local)

## 🗃️ Base de données

La structure de la base est fournie dans le fichier `gestion_utilisateurs.sql`.

## 📦 Installation en local

Pour tester ce projet en local, voici les étapes à suivre :

1. **Installer WAMP Server** (ou un environnement équivalent comme XAMPP)
   - [Télécharger WAMP](https://www.wampserver.com/)

2. **Cloner le dépôt ou télécharger le ZIP** :
   - Depuis GitHub :  
     ```bash
     git clone https://github.com/RayanFib/gestion_utilisateurs.git
     ```
   - Ou en téléchargeant le ZIP, puis en extrayant le dossier

3. **Copier le dossier dans WAMP** :
   - Placez le dossier `gestion_utilisateurs` dans :  
     `C:\wamp64\www\`

4. **Importer la base de données dans phpMyAdmin** :
   - Ouvrir [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Se connecter (utilisateur `root`, mot de passe vide par défaut)
   - Créer une base appelée **`gestion_utilisateurs`**
   - Aller dans l’onglet **Importer**
   - Sélectionner le fichier `gestion_utilisateurs.sql` (fourni dans le projet)
   - Cliquer sur **Exécuter**

5. **Lancer WAMP Server** :
   - Démarrer WAMP
   - Vérifier que l’icône devient **verte**

6. **Accéder à l’application** :
   - Ouvrir un navigateur et entrer :  
     [http://localhost/gestion_utilisateurs/login.php](http://localhost/gestion_utilisateurs/login.php)

## 📸 Démo (à compléter)

Ajoutez ici un lien vers votre **vidéo de démo** ou quelques **captures d'écran** si possible.

## 👤 Auteur

[Rayan Fibleuil](https://github.com/RayanFib)

---

> Projet réalisé dans le cadre de la **Piscine BTS SIO 2025**
