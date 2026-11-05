# Aura Learn | Analyse, Anticipe, Apprends

**Aura Learn** est une plateforme web interactive d'apprentissage et d'évaluation conçue dans le cadre d'un Projet de Fin d'Études (PFE). Elle permet de digitaliser et de dynamiser le suivi pédagogique à travers deux espaces distincts : un espace enseignant (création de contenus) et un espace étudiant (révision et auto-évaluation).

## Fonctionnalités Principales

### Espace Enseignant
* **Gestion des Flashcards :** Ajout dynamique de cartes de révision (Questions/Réponses) avec enregistrement en base de données et suppression par ID.
* **Création de Quiz :** Conception de questions à choix multiples avec intégration des bonnes réponses et des **justifications pédagogiques**.

### Espace Étudiant
* **Révision Autonome :** Consultation des cours et des flashcards.
* **Passage de Quiz Chronométré :** Système de test limité dans le temps (ex: 5 minutes) avec soumission et calcul automatique des scores.
* **Historique & Support de Correction :** 
  * Enregistrement automatique des résultats (Matière, Chapitre, Date, Score).
  * Accès à un bouton **"Support"** permettant de consulter la correction détaillée et les justifications de l'enseignant après l'évaluation.

## Architecture Technique

* **Front-end :** HTML5, CSS3, JavaScript (Vanilla)
* **Back-end :** PHP Pur
* **Base de données :** MySQL (gestion via phpMyAdmin)
* **Serveur local recommandé :** XAMPP / WampServer
  
## Structure du Projet

```text
Aura-Learn/
│
├── ALcnx.php              # Fichier de connexion à la base de données MySQL
├── enseignant.php         # Interface de gestion des flashcards et quiz (Professeur)
├── ajoutfc.php            # Script PHP de traitement (Ajout/Suppression des flashcards)
├── espace_etudiant.php    # Tableau de bord de l'étudiant (Historique des quiz)
├── correction.php         # Page de support de correction et justifications
├── fc.css                 # Feuille de style principale
└── README.md              # Documentation du projet
