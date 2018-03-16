# User Profile

Rajoute une vue pour afficher le profil de l'utilisateur ainsi que pour modifier son nom.

## Installation

Rajouter dans le `composer.json`, ce qui suit :

```
"repositories": [
    {
        "type": "git",
        "url": "https://github.com/michael-lurquin/user-profile"
    }
],
```

Ensuite exécuter la commande suivante :

```
composer require michael-lurquin/user-profile
```

## Vues

Pour afficher les vues, utiliser la commande suivante :

```
php artisan vendor:publish --tag=views --force
```

**Attention**, cette commande remplacera le contenu des fichiers suivants :

```
views/profile.blade.php
views/layouts/app.blade.php
```

## User

Rajouter le trait **UserProfile** dans le modèle **User** sous le namespace **MichaelLurquin\UserProfile\UserProfile**

