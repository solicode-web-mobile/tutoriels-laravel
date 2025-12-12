# Prototype N1 — Guide du Projet Fil Rouge

## 1. Description & Rôle
Ce dépôt `prototype-n1` a une double vocation pédagogique pour les apprenants de la filière Développement Web & Mobile :

1.  **Guide de Référence** : Il explique en détail le travail complet attendu sur les 3 niveaux de maîtrise (**N1 Imiter**, **N2 Adapter**, **N3 Transposer**) et décrit le contenu de chaque version évolutive (de la **Version 1** à la **Version 8**).
2.  **Validation par l'Exemple** : Il contient le code source final du **Prototype N1**, réalisé en suivant strictement les tutoriels d'autoformation fournis. Cela permet de valider la faisabilité du parcours et de fournir un corrigé de référence.

**Source Officielle** :
Ce prototype est construit en appliquant pas à pas les tutoriels disponibles sur notre plateforme d'autoformation :
👉 **[https://solicode-web-mobile.github.io/autoformation-mobile/](https://solicode-web-mobile.github.io/autoformation-mobile/)**

**Objectif Final** : Réaliser un **Blog Générique** capable d'être déployé dans deux contextes réels :
1.  **Blog du Centre Solicode** (Vie du centre).
2.  **Blog d'Association** (ex: pour une ville comme **Tanger**).


## 2. Le Concept : Prototype N1 (Imiter)
Le niveau **N1 "Imiter"** correspond à la phase d'apprentissage guidé.
*   **Approche** : Reproduction guidée (code-à-code) de tutoriels ou de démonstrations.
*   **Objectif** : Acquérir la syntaxe, comprendre les environnements de développement et assimiler les concepts de base sans la charge cognitive de la conception.
*   **Résultat** : Un code fonctionnel, strict, identique pour tous les apprenants.

### 📋 Fonctionnalités du Prototype N1
Le rendu final attendu de cette phase est un **Blog Basic & Fonctionnel** comprenant :
1.  **Back-office (Laravel)** :
    *   Authentification classique (Login / Register).
    *   CRUD Article standard (Créer, Lire, Modifier, Supprimer).
    *   Sécurité simple : "Admin" (tout pouvoir) vs "Auteur" (ses propres articles) basée sur un champ `is_admin`.
2.  **API REST** :
    *   Endpoints basiques pour lire la liste des articles et le détail d'un article.
3.  **App Mobile (Android)** :
    *   Affichage de la liste des articles provenant de l'API.
    *   Navigation vers l'écran de détail de l'article.

---

## 3. Le Concept : Prototype N2 (Adapter & Validation)
Le niveau **N2 "Adapter"** est une phase critique de transition vers l'autonomie.
Il remplit deux rôles majeurs dans le parcours de l'apprenant :

1.  **Vérification de la capacité d'adaptation** :
    *   L'apprenant doit prouver qu'il peut **modifier** ce qu'il a appris pour créer une nouvelle version.
    *   Il ne s'agit plus de copier, mais de comprendre le code existant pour le refactoriser, le corriger ou l'étendre.

3.  **Préparation technique au MVP** :
    *   C'est un "bac à sable" évolué où l'on sécurise les acquis complexes avant la liberté totale du MVP.

**Validation "Live Coding" :**
*   Le Prototype N2 sert de support à une validation.
*   **En séance (≈ 40 min)** : L'apprenant doit réaliser **une partie ciblée** des fonctionnalités en direct (Live Coding) pour prouver sa maîtrise sans assistance IA.
*   **En autonomie** : Le reste des fonctionnalités N2 peut être finalisé hors séance.

### 📋 Fonctionnalités du Prototype N2 - "Version Fonctionnelle & Robuste"
Le rendu doit être **Pleinement Fonctionnel** et utiliser la stack **TailwindCSS** :

1.  **Partie Publique (Front-office)** :
    *   **Menu** de navigation fonctionnel.
    *   **Liste des articles** propre et responsive.
    *   Page **Détail d'un article** complète.

2.  **Partie Admin (Back-office)** :
    *   **CRUD Article Avancé** : Création, Lecture, Mise à jour, Suppression.
    *   **Interactions Dynamiques (AJAX)** :
        *   **Recherche** instantanée.
        *   **Filtrage** (ex: par catégorie).
        *   **Pagination** sans rechargement de page.
    *   Upload d'**Image** fonctionnel.

3.  **API REST** :
    *   **Standardisation** des réponses JSON (Structure fixe `data`, `links`, `meta`).
    *   Support des paramètres d'URL pour la **Recherche**, les **Filtres** et la **Pagination**.

4.  **Application Mobile (Utilisateur Final)** :
    *   **Consommation Avancée** : Intégration de la pagination et des filtres de l'API.
    *   **UX Robuste** : Gestion visuelle des états (**Loading** spinner, écran **Empty State**, message **Erreur** réseau).
    *   Design amélioré (Cartes Articles propres).

5.  **Sécurité** :
    *   Intégration Spatie (Rôles Admin/Auteur).

--- 

## 4. Le Concept : MVP (Transposer)
Le niveau **N3** vise à produire un **MVP (Minimum Viable Product)**.
Ce n'est pas encore la solution finale exhaustive, mais une version **plus riche et avancée que le N2**, intégrant des fonctionnalités à forte valeur ajoutée.

*   **Approche** : Autonomie guidée.
*   **Objectif** : Livrer un produit utilisable, bien structuré, avec des fonctionnalités "Pro".
*   **Résultat** : Un socle solide et extensible, prêt pour le déploiement.

### 📋 Fonctionnalités du MVP (N3)
Le périmètre inclut **tout le N2** + les extensions suivantes :

1.  **Fonctionnalités Métier Avancées** :
    *   Gestion des **Commentaires** (Validation, Modération).
    *   Gestion des **Tags/Catégories** en Many-to-Many.
    *   **Espace Membre** (Profil utilisateur public).

2.  **Sécurité & API** :
    *   **Authentification API** (Sanctum) pour les utilisateurs mobiles.
    *   Gestionnaire de Rôles/Permissions via Back-office (UI pour Spatie).

3.  **Expérience Utilisateur (Web & Mobile)** :
    *   **Web** : Interactions riches (Favoris, Like) en **AJAX Vanilla**.
    *   **Mobile** : Mode **Hors-ligne** (Room) pour consulter les articles sans réseau.

---

## 5. Version 1 — Rappel PHP (sans Prototype)

<!-- en rédaction -->

---

## 6. Version 2 — Découverte Android Studio & Kotlin

<!-- en rédaction -->

---

## 7. Version 3 — Interface publique minimale (Laravel sans BD)

<!-- en rédaction -->

---

## 8. Version 4 — Base de données et modèle Article

<!-- en rédaction -->

---

## 9. Version 5 — Espace d’administration et CRUD Article


### N1 — Imiter

<!-- en rédaction -->

### N2 — Adapter

<!-- en rédaction -->

### N3 — Transposer

<!-- en rédaction -->

---

## 10. Version 6 — Sécurité et accès à l’admin

### N1 — Imiter (Bases)

**Description** : Auth Laravel UI, distinction Admin/Auteur via `is_admin`, protection via Gates.
**Objectif** : Comprendre Auth vs Authorization simple.

### N2 — Adapter (Intro Spatie & Validation Live)
**Description** :
*   Intégration de **Spatie Laravel Permission** pour remplacer `is_admin`.
*   Création des rôles `admin` et `auteur`.
*   **Live Coding** : Démonstration de la migration d'une règle d'accès en direct.
**Objectif** : Valider techniquement l'usage d'une librairie externe et la compréhension des rôles.

### N3 — Transposer (Pro)
**Description** : Politique complète de sécurité, combinaison Spatie + Policies, documentation des droits.
**Objectif** : Livrer un système de permissions robuste et maintenable.

---

## 11. Version 7 — API Articles

<!-- en rédaction -->
---

## 12. Version 8 — Application mobile connectée à l’API

<!-- en rédaction -->


 