
## Mini-Projet de Gestion de Contacts avec Laravel 10

Ce projet est une application simple de gestion de contacts développée avec le framework Laravel 10. Il permet aux utilisateurs de créer, afficher, mettre à jour et supprimer des contacts.
## Environnement de Développement

- Laravel 10
- Bootstrap 5
- MySQL
## Configuration du Projet

1. **Clonage du Projet :**
   ```bash
   git clone https://github.com/amddah/Gestion_Contact_laravel.git
   cd Gestion_Contact_laravel
   ```

2. **Installation des Dépendances :**
   ```bash
   composer install
   ```

3. **Configuration du Fichier .env :**
   - Dupliquez le fichier `.env.example` et renommez-le en `.env`.
   - Configurez la base de données et d'autres paramètres selon votre environnement.

4. **Génération de la Clé d'Application :**
   ```bash
   php artisan key:generate
   ```

5. **Exécution des Migrations et des Semences :**
   ```bash
   php artisan migrate --seed
   ```

## Utilisation

1. **Lancement du Serveur de Développement :**
   ```bash
   php artisan serve
   npm run dev
   ```

2. Accédez à l'application dans votre navigateur à l'adresse [http://127.0.0.1:8000/](http://127.0.0.1:8000/)

## Fonctionnalités

- **Liste des Contacts :** Affiche une liste des contacts avec des fonctionnalités de tri et de recherche.
- **Ajout de Contacts :** Permet d'ajouter de nouveaux contacts avec des informations telles que le nom, email,adresse etc.
- **Modification de Contacts :** Permet de mettre à jour les détails d'un contact existant.
- **Suppression de Contacts :** Permet de supprimer un contact de la liste.

## Capture d'écran

![Capture d'écran 1](screenshots/screenshot3.jpg)
![Capture d'écran 2](screenshots/screenshot4.jpg)

## Note additionnelle
## Note additionnelle

Un fichier `.sql` contenant une base de données pré-remplie est disponible dans le dossier `./recrutement.sql`.

## Licence

Ce projet est sous licence MIT. Consultez le fichier [LICENSE](LICENSE) pour plus d'informations.
