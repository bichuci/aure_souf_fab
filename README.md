# aure_souf_fab


#Pour récupérer le projet
```
git init
```

#Pour cloner le projet

```
git clone url_du_projet
```

#Pour utiliser le projet

On se rend dans le dossier cible
```
cd aure_souf_fab
```

On récupere les branches dans notre cas 
```
git fetch
```

On switch de branche dans notre cas
```
git checkout test
```

On check sait on jamais
```
git branch
```

On update composer (c'est très très long)
```
composer update
```

On crée le fichier .env.local
On décommente la ligne mysql et on entre les informations nécéssaires à la connexion de base de données

On crée la base de données
```
php bin/console doctrine:database:create
```

On crée la migration 

```
php bin/console doctrine make:migration
```

On effectue la migration 

```
php bin/console doctrine:migrations:migrate
```

# ET ENFIN 

On lance le serveur symfony

```
symfony serve
```
