# Projet PHP

Le concept est le même que pour le [Projet Web](https://github.com/MrZyr0/Projet-Web/) en Javascript mais en utilisant du PHP et une connexion à une base de donnée MySQL.
L'outil est ouvert à tous et permet de gérer facilement ses tournois d'overwatch sur tout supports !

##### Page de configuration
![First Launch screen](https://raw.githubusercontent.com/MrZyr0/Projet-PHP/master/docs/firstConnexionScreenshot.png)

##### Accueil
![Home](https://raw.githubusercontent.com/MrZyr0/Projet-PHP/master/docs/homeScreenScreenshot.png)

##### Accueil en mobile
![Home on mobile](https://raw.githubusercontent.com/MrZyr0/Projet-PHP/master/docs/homeScreenScreenshotMobile.png)

## Les fonctionnalitées

L'outil intègre plusieurs fonctionnalitées :
- Arrière-Plan aléatoire
- Gestion rapide des joueurs et des équipes
- Gestion du tableau des scores
- Interface responsive
- Données sauvegardées dans un Base de donnée
- Restoration des données possible


## Installation

1. Copier le dossier complet du projet (vous devez obligatoirement avoir un dossier Projet-PHP à la racine de votre serveur web contenant le site au complet) dans votre serveur web préféré
2. Connectez vous au site avec l'adresse https://localhost/Projet-PHP/
3. Renseignez les paramètres de première connexion
4. C'est opérationnel ! Vous pouvez créer vos matchs, équipes et voir le classement !


## Fonctionnement

1. Le bouton gestion matchs permet d'accèder aux boutons créer equipe et créer match :

    1. Créer équipe permet de créer une nouvelle equipe en entrant son nom dans le formulaire (⚠️Il ne faut pas mettre de ' ou de " car aucune protection n'a été installée, ceci pourrai casser le programme ⚠️)

    2. Créer un match permet de créer un match entre deux des equipes existantes (les équipes créees de base sont celle de l'overwatch league)

2. Le bouton classement permet d'accèder au classement des equipes, par ordre de nombre de victoires, puis de matchs nuls, puis par difference de buts


## Crédits

Ce projet à été développé pendant les cours en 1 semaine et demi environ. Malheureusement l'optimisation n'est pas optimale.

* [Romain LOIRE](https://github.com/romL69) : Base de donnée et review du code
* [Julien SEIXAS](https://github.com/MrZyr0) : PHP & Design

