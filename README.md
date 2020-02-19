# CARTRON - Portail BFC

## Prérequis
* docker
* docker-compose
* php-cs

## Setup
* `cp .env.dist .env`
* Adapter le fichier `.env`
* `echo "127.0.0.1 cartron.local" >> /etc/hosts`
* `script/bootstrap`
* `script/start`

## Développement
* Démarrer le serveur `script/start`
* Arrêter le serveur `script/stop`
* Mettre à jour le projet (ex: après un pull) `script/bootstrap`
* Configurer les ports dans `.env`
* Emplacement des logs var/logs

## Conventions
* Respect des standards PS2 https://www.php-fig.org/psr/psr-2/

## Boîte à outils

### Accès aux conteneurs
Rentrer dans le conteneur php (ex. pour utiliser composer)  
`docker-compose exec php bash`   
`composer update`   
Rentrer dans le conteneur mysql  
`docker-compose exec mysql bash` 

### PhpMyAdmin
L'interface est disponible ici http://localhost:9001    
Login: root    
Mot de passe: mysql    
Pour changer le port, modifier `PHPMYADMIN_EXPOSED_PORT` dans le fichier `.env`

### Faketools
L'interface est disponible ici http://localhost:8083    
Pour changer le port, modifier `FAKETOOLS_EXPOSED_PORT` dans le fichier `.env`

### Commandes

Exécuter une commande Symfony  
`script/sf <command>`  
(ex: `script/sf cache:clear`)

Exécuter composer
`script/composer <command>`  
(ex: `script/composer install`)

Exécuter le contrôle de qualité du code
`script/cq`  


## Serveurs
**Historique:** Malgré les infos affichés sur ovh, Logomotion ne gère pas le domaine cartron.fr.

### Dev/staging
Les environnements staging et dev sont hébergés sur NS4 https://ns4.logomotion-serveur.com:2087 
et sont accessibles respectivement sur https://staging.cartron.fr (cartron::demo) https://dev.cartron.fr

### Déploiement
Le déploiement de la branche dev est automatique

Le déploiement de la branche staging est semi-automatique https://gitlab.com/logomotion/cartron-www/-/jobs pour lancer le déploiement


## PROD
La prod N'EST PAS hébergée sur ns4, mais sur un mutu OVH toupourri.
Le CI et/ou script deployer ne fonctionne pas pour cet environment (freeze au ssh connect).

Donc mise en prod old school et à la main :

**\/!\\** branch prod track quelques fichiers depuis web/, pas la branch dev.   

### pré-MEP
Comme les mutu OVH ne connaissent pas npm, il faut préparer les assets dans la branche `prod` :
```
git checkout prod
git merge dev
npm install
npm run sass-build
git add web/site/css/style.css
git commit -m "Update prod"
git push
```

### MEP
```sh
ssh cartronfwi@ssh.cluster027.hosting.ovh.net # password in lastpass "CARTRON SSH/FTP"
cd src_new
git pull
php bin/console cache:clear --env=prod
php bin/console cache:warmup --env=prod
```
NE PAS UTILISER `bin/console assets:install` :)
