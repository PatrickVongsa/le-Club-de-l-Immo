# Projet 2 - Le Club de l'Immo d'Orléans

## Description
**Sujet : Refonte du site du [Club de l'Immo d'Orléans](https://orleans.leclubdelimmo.fr/)**

**Fonctionnalités mises en place :**
Côté utilisateur :
- Recherche de bien suivant critères utilisateur
- Calculateur de mensualités sur les pages d'achat de bien
- Mises en avant des coups de coeur de l'agance
- Affichage des dernières annonces

Côté administrateur :
- Ajout et modification de biens
- Suppression de bien
- Administration de slogans
- Administration des documents à fournir
- Messagerie suite à soumission du formulaire de contact

Collaborateurs :
- [Jérémy GONZALEZ](https://github.com/JeremyGonzalez31)
- [Emmannuel RODRIGUEZ](https://github.com/Emmanuel-RODRIGUEZ-31)
- [Pierre-Emmanuel CAPEL](https://github.com/PierreCapel)
- Patrick VONGSA

Superviseur :
[Vincent VAUR](https://github.com/vincent-vaur)

## Déploiement
Your project master branch will be deployed on https://tlse-php-2021-march-project-2-group-2.phprover.wilders.dev

## Description Structure MVC

This repository is a simple PHP MVC structure from scratch.

It uses some cool vendors/libraries such as Twig and Grumphp.
For this one, just a simple example where users can choose one of their databases and see tables in it.

## Steps

1. Clone the repo from Github.
2. Run `composer install`.
3. Create *config/db.php* from *config/db.php.dist* file and add your DB parameters. Don't delete the *.dist* file, it must be kept.
```php
define('APP_DB_HOST', 'your_db_host');
define('APP_DB_NAME', 'your_db_name');
define('APP_DB_USER', 'your_db_user_wich_is_not_root');
define('APP_DB_PWD', 'your_db_password');
```
4. Import `simple-mvc.sql` in your SQL server,
5. Run the internal PHP webserver with `php -S localhost:8000 -t public/`. The option `-t` with `public` as parameter means your localhost will target the `/public` folder.
6. Go to `localhost:8000` with your favorite browser.
7. From this starter kit, create your own web application.

### Windows Users

If you develop on Windows, you should edit you git configuration to change your end of line rules with this command :

`git config --global core.autocrlf true`

## Example 

An example (a basic list of items) is provided (you can load the *simple-mvc.sql* file in a test database). The accessible URLs are :

* Home page at [localhost:8000/](localhost:8000/)
* Items list at [localhost:8000/item/index](localhost:8000/item/index)
* Item details [localhost:8000/item/index/show/:id](localhost:8000/item/show/2)
* Item edit [localhost:8000/item/index/edit/:id](localhost:8000/item/edit/2)
* Item add [localhost:8000/item/index/add](localhost:8000/item/add)
* Item deletion [localhost:8000/item/index/delete/:id](localhost:8000/item/delete/2)

## How does URL routing work ?

![Simple MVC.png](https://raw.githubusercontent.com/WildCodeSchool/simple-mvc/master/Simple%20-%20MVC.png)
