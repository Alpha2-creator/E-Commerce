# Ndiaga Tech – Boutique en ligne

Exercice de synthèse **Bootstrap 5.3** et exercice fil rouge **PHP** réalisés dans le cadre de la formation **Sunu Code – Développement Web**.

Ndiaga Tech est une boutique fictive de téléphones et d'accessoires, installée au marché Sandaga (Dakar). Le projet comprend un **site public** (catalogue, panier, commande), une **fiche produit en PHP** et un **espace de gestion** réservé au gérant (tableau de bord, produits, commandes).

> Projet pédagogique : la structure, les produits et les données sont fictifs.

## Aperçu

- Intégration de **8 écrans** à partir des maquettes fournies
- Version **responsive** : affichage ordinateur et mobile
- Interface réalisée avec **Bootstrap 5.3**, sans CSS personnalisé lourd
- Fiche produit dynamique en **PHP** (`produit.php`), en cours de développement

## Technologies

- HTML5
- Bootstrap 5.3.3 (CSS et JS via CDN)
- PHP 8.2
- XAMPP (serveur local Apache)

## Les écrans

| N°  | Écran                                        | Fichier                        |
| --- | -------------------------------------------- | ------------------------------ |
| 1   | Accueil                                      | `index.html`                   |
| 2   | Catalogue (filtres, cartes produits)         | `catalogue.html`               |
| 3   | Panier et commande                           | `panier.html`                  |
| 4   | Connexion                                    | `gestion/connexion.html`       |
| 5   | Tableau de bord                              | `gestion/tableau-de-bord.html` |
| 6   | Produits (tableau, fenêtre de suppression)   | `gestion/produits.html`        |
| 7   | Modifier un produit (formulaire, validation) | `gestion/produit-form.html`    |
| 8   | Commandes                                    | `gestion/commandes.html`       |

En plus des écrans, le fichier `produit.php` contient la fiche produit en PHP.

## Structure du projet

```
ndiagatech/
├── index.html
├── catalogue.html
├── panier.html
├── produit.php
├── gestion/
│   ├── connexion.html
│   ├── tableau-de-bord.html
│   ├── produits.html
│   ├── produit-form.html
│   └── commandes.html
└── README.md
```

## Composants Bootstrap utilisés

- **Navbar** responsive avec menu repliable
- **Grille** (`container`, `row`, `col-*`, `row-cols-*`)
- **Cards** pour les produits et les statistiques
- **Tables** (`table-striped`, `table-responsive`)
- **Formulaires** (`form-control`, `form-select`, validation `is-invalid`)
- **Alertes**, **badges** et **list-group**
- **Modal** de confirmation de suppression
- **Utilitaires** : flexbox (`d-flex`, `justify-content-*`, `align-items-*`), espacements, couleurs

## Lancer le projet

### Pages HTML : directement dans le navigateur

1. Télécharger ou cloner le dépôt.
2. Ouvrir `index.html` dans un navigateur.

Une connexion Internet est nécessaire pour charger Bootstrap depuis le CDN.

### Page PHP : avec XAMPP

Le fichier `produit.php` doit être exécuté par un serveur PHP, il ne s'affiche pas en double-cliquant dessus.

1. Copier le dossier `ndiagatech` dans le dossier `htdocs` de XAMPP.
2. Démarrer **Apache** depuis le panneau de contrôle XAMPP.
3. Ouvrir dans le navigateur :
   - `http://localhost/ndiagatech/` pour le site
   - `http://localhost/ndiagatech/produit.php` pour la fiche produit

## Auteur

**ALPHA OLLAID** – Étudiant, Dakar (Sénégal)
Formation Sunu Code – Développement Web
