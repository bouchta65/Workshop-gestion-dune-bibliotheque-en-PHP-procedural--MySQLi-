# Workshop: la gestion d'une bibliothèque en PHP procédural (MySQLi)

## Objectifs Pédagogiques

- **Apprendre à connecter une application PHP à une base de données MySQL** en utilisant le driver MySQLi.
- **Implémenter les opérations CRUD** (Create, Read, Update, Delete) en PHP procédural.
- **Comprendre et appliquer les différentes techniques de récupération de données** depuis une base de données MySQL.
- **Différencier les commandes `include`, `require`, `include_once` et `require_once`** pour une meilleure gestion des fichiers dans le code.

## Déroulement de l'Activité

### 1. Introduction Théorique (30 minutes)

#### Concepts Fondamentaux

- **Connexion à une base de données avec MySQLi** : 
  - Création d’une connexion sécurisée.
  - Présentation des méthodes MySQLi : procédurale, orientée objet, requêtes préparées.
  
- **Techniques de récupération de données** (Data Fetching) :
  - `mysqli_fetch_assoc()` : Récupérer une ligne sous forme de tableau associatif.
  - `mysqli_fetch_array()` : Récupérer une ligne sous forme de tableau associatif ou numérique.
  - `mysqli_fetch_row()` : Récupérer une ligne sous forme de tableau indexé numériquement.
  - `mysqli_fetch_all()` : Récupérer toutes les lignes sous forme de tableau multidimensionnel.

  **Quand utiliser chaque méthode ?**

- **Différence entre `include`, `require`, `include_once`, et `require_once`** :
  - `include` : Inclut un fichier mais continue l’exécution en cas d’erreur.
  - `require` : Inclut un fichier et interrompt l’exécution en cas d’erreur fatale.
  - `include_once` : Similaire à `include`, mais vérifie si le fichier a déjà été inclus pour éviter les doublons.
  - `require_once` : Similaire à `require`, avec vérification d’inclusion unique.

### 2. Étude de Cas : Gestion des Livres d’une Bibliothèque (30 minutes)

#### Contexte

L'objectif est de gérer les livres disponibles dans une bibliothèque. Chaque livre possède les informations suivantes :
- Titre
- Auteur
- Catégorie
- Date d'ajout
- Disponibilité

#### Objectifs :

- Implémenter un formulaire pour ajouter un nouveau livre.
- Récupérer les livres dans un tableau avec différentes techniques de fetching (`fetch_assoc`, `fetch_row`, etc.).
- Comparer et expliquer les résultats obtenus.
- Utiliser `include` et `require` pour organiser le code de manière optimale (ex. inclusion du fichier de connexion).

### 3. Activité Pratique (1h30)

#### Étape 1 : Configuration de la Base de Données (10 minutes)

Création d’une base de données `bibliotheque` et d'une table `livres` avec les champs nécessaires pour stocker les informations des livres.

```sql
CREATE DATABASE bibliotheque;
USE bibliotheque;

CREATE TABLE livres (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    auteur VARCHAR(255) NOT NULL,
    categorie VARCHAR(100),
    date_ajout DATE NOT NULL,
    disponibilite BOOLEAN DEFAULT 1
);

