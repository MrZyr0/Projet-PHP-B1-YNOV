# Projet PHP

Dernier projet de PHP. Permet de gérer les tournois de l'overwatch League.
A l'avenir il permettera de gérer n'importe quel tournois privé.
Il fonctionne sur PC, tablette et smartphone !


** INSTALLATION **

1 - Copier le dossier complet du projet (vous devez obligatoirement avoir un dossier Projet-PHP à la racine de votre serveur web contenant le site au complet) dans votre serveur web préféré
2 - Modifier les informations de connexion à votre BDD dans le dossier src/php/func/SQL.php par les votres
3 - Lorsque vous allez accèder au site il vous redirigera automatiquement sur la page de création de la base de donnée. Cliquez sur Créer OU exécutez le fichier start.sql qui se trouve dans le dossier # START
4 - C'est opérationnel ! Vous pouvez créer vos matchs OU vous pouvez executer le fichier matchs.sql qui se trouve dans le dossier # START


** FONCTIONNEMENT **

-Le bouton gestion matchs permet d'accèder aux boutons créer equipe et créer match :

        -Créer équipe permet de créer une nouvelle equipe en entrant son nom dans le formulaire (éviter les ')

        -Créer un match permet de créer un match entre deux des equipes existantes (les équipes créees de base sont celle de l'overwatch league)

-Le bouton classement permet d'accèder au classement des equipes, par ordre de nombre de victoires, puis de matchs nuls, puis par difference de buts
