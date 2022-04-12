# LARAVEL_project_annonce

Ce fichier contien les definitions de base necessaire pour travailer avec LARAVEL, parmit ces definitions:

### Artisan :

Artisan est le nom d'interface de ligne de commande inclus avec Laravel . Il fournit un certain nombre de commandes utiles pour votre utilisation lors du développement de votre application. Il est piloté par le puissant composant Symfony Console. Pour voir la liste des commande d'artisan utiliser cette commande dans votre ligne de commande <u> php artisan list </u>

### Composer : 

Composer est un outil de gestion des dépendances en PHP. Il vous permet de déclarer les librairies dont dépend votre projet et il les gère (installe/met à jour) pour vous.

### ORM : 

ORM (Object-relational mapping), également appelé O/RM, et O/R mapping est une approche de programmation permettant de convertir des données entre des systèmes de types incompatibles. Il existe principalement deux modèles de conception principaux utilisés dans les ORM - Active Record et Data Mapper .

## Migration

Supposons que nous travaillions en équipe et que certaines idées nécessitent la modification d'un tableau. Dans un tel cas, le fichier SQL doit être transmis et un membre de l'équipe doit importer ce fichier, mais un membre de l'équipe a oublié d'importer le fichier SQL. Dans ce cas, l'application ne fonctionnera pas correctement, pour éviter une telle situation, Laravel Migration existe.

Laravel Migration vous permet d'ajouter une nouvelle colonne ou de supprimer les enregistrements de votre base de données sans supprimer les enregistrements déjà présents.
