## Brif13 : Plateforme de Réservation de Grands Taxis

La société **MonGrandTaxi** souhaite développer une plateforme de réservation de grands taxis, permettant aux utilisateurs de trouver des chauffeurs disponibles pour des trajets spécifiques, et aux chauffeurs de publier leurs disponibilités. Vous êtes chargé(e) de développer cette plateforme en utilisant le framework Laravel.

## Fonctionnalités Requises

### Authentification et Autorisation

- Mettre en place un système d'authentification avec des rôles :
  - Passager standard
  - Chauffeur de taxi
  - Administrateur
- Utilisation de politiques et de gardes pour régir l'accès aux profils et aux fonctionnalités spécifiques en fonction du rôle de l'utilisateur.
- Les utilisateurs peuvent s'inscrire en tant que passagers ou chauffeurs, et se connecter avec leurs identifiants uniques.
- Les passagers peuvent enregistrer leurs trajets fréquents pour une réservation plus rapide.

### Utilisateurs et Réservations

- Un utilisateur possède un nom, une photo de profil, un historique de trajets, et des informations de contact.
- Les passagers peuvent :
  - Réserver des taxis pour des trajets spécifiques en indiquant le jour, le lieu de prise en charge, et la destination.
  - Visualiser l'historique de leurs réservations.
  - Noter les chauffeurs après chaque trajet.
  - Annuler une réservation dans un délai spécifié.
  - Filtrer un taxi disponible en fonction de la localisation, du type de véhicule, et des évaluations des chauffeurs.
- Les chauffeurs peuvent :
  - Définir leurs disponibilités.
  - Afficher les réservations acceptées.
  - Indiquer leur statut actuel (disponible, en cours de trajet, etc.).
  - Mettre à jour leurs disponibilités.
  - Visualiser leur historique de trajets et les évaluations reçues.
  - Spécifier le type de paiement qu'ils acceptent (espèces, carte, etc.).
  - Sélectionner leur trajet.

### Administration et Gestion des Utilisateurs

- Les administrateurs peuvent :
  - Gérer les passagers, les chauffeurs, et les réservations (soft delete).
  - Visualiser les statistiques liées aux trajets, aux réservations, et aux évaluations.

## Bonus

- **Système de Recommandation :** Implémenter un système de recommandation de chauffeurs basé sur l'historique des trajets et les évaluations des passagers.
- **Fonctionnalité "Partager" :** Permettre aux utilisateurs de partager facilement leurs expériences de trajet sur les réseaux sociaux, renforçant ainsi la visibilité de la plateforme.
- **Utilisation de Docker et Intégration de Laravel Sail :** Optez pour une approche moderne en intégrant Laravel Sail pour la gestion des conteneurs Docker.
- **Déploiement Automatisé :** Mettez en place un pipeline CI/CD pour automatiser le déploiement de l'application avec Laravel Sail.
- **Gestion des Environnements :** Utilisez les fonctionnalités de gestion des environnements de Laravel Sail pour faciliter le passage entre les environnements de développement, de test, et de production.
- **Newsletter :** Permettre aux passagers de s'abonner à une newsletter pour recevoir les dernières nouvelles et offres (utilisation de `laravel-newsletter` de Spatie).

## Installation et Configuration

1. **Clonez le repository :**
   ```bash
   git clone https://github.com/votre-repository/mon-grand-taxi.git
