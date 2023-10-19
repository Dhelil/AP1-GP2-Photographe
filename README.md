# AP1-GP2-Photographe

AlexCaptures : L'art de la photographie, figé en un instant. Explorez des moments magiques et des histoires visuelles captivantes.

Alex, jeune photographe passionné, souhaite renforcer sa présence en ligne pour dynamiser son activité. Notre projet vise à lui offrir un site web moderne et élégant qui reflète son talent et facilite la gestion de son entreprise. Ce site permettra à Alex de présenter ses prestations, d'interagir avec ses clients et de recueillir des avis. Il sera conçu avec le framework Symfony et une base de données MySQL afin garantir une expérience exceptionnelle pour ses clients et visiteurs


### Démarrage

Ces instructions vous guideront à travers le processus d'installation et de configuration de l'environnement de développement pour notre projet, vous permettant ainsi de développer et de tester l'application localement.

  #### Prérequis

  Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre système :
    **PHP en version 8 minimum**
    **Composer en version 2.5 minimum**
    **Symfony en version 6 minimum**
    **Un serveur Web : WAMP, MAMP...**

  #### Installation

  1. Clonez ce dépôt Git sur votre machine locale en utilisant la commande suivante :
    git clone https://github.com/Dhelil/AP1-GP2-Photographe.git

  2. Accédez au répertoire du projet avec la commande :
     cd votre-projet
     
  3. Installez les dépendances en utilisant Composer :
     composer install
     
  4. Configurez le fichier .env correctement :
     En décommentant la ligne nécessaire en fonction du SGBD que vous utilisez.
     En vérifiant le nom d'utilisateur et le mot de passe, si vous en avez un (root:root).
     En spécifiant le nom de la base de données que vous allez utiliser.

  6. Lancer le serveur en étant bien positionné sur le répertoire du projet, avec la commande :
     symfony server:start

  7. Créer votre base de données, avec la commande :
     symfony console doctrine:database:create

  8. Si vous effectuez des modifications sur la base et que vous souhaitez les appliquer, utiliser la commande :
     symfony console doctrine:migrations:migrate


  L'application sera accessible à l'adresse http://127.0.0.1:8000 dans votre navigateur web.                                                                                           

### Auteurs

- MEDJENI Dhelil (Chef de projet)
- EZ-ZAOUI Tayeb
- IZZIKI Ilies

### License

Ce projet n'est pas soumis à une licence spécifique. Il s'agit d'un projet scolaire créé dans le cadre de notre formation. Le but principal de ce projet est l'apprentissage et l'évaluation des compétences acquises sur le framework Symfony. Il n'est pas destiné à être distribué publiquement ou utilisé en dehors de cet environnement éducatif.


### Guide et standardisation

Ce projet suit un ensemble de normes et de conventions de développement pour garantir la cohérence du code source. Les directives suivantes ont été adoptées par l'équipe :

- **Langage de Programmation :**
  _PHP(Symfony)_,
  _HTML_,
  _CSS_,
  _JavaScript_,

- **Style de Codage :** _CamelCase_

- **Gestionnaire de Version :** _GitKraken_

- **Documentation :** _Documentation officielle de Symfony_

- **Tests :** _Veuillez vous référer à la section "Exécution et écriture des test"_
  

### API

Notre projet scolaire ne consomme pas d'API externe. Toutes les fonctionnalités et données nécessaires sont générées localement ou saisies manuellement. Par conséquent, il n'y a pas d'API externe à répertorier ou à documenter dans ce projet.


### Exécution et écriture des tests

Nous avons inclus des tests pour garantir le bon fonctionnement de notre projet. Voici les types de tests que nous avons réalisés :

- **Tests unitaires :** Les tests unitaires vérifient des composants spécifiques du code, notamment lors de l'inscription des utilisateurs et de la connexion. Ces tests ont été écrits manuellement pour évaluer le comportement du code.

- **Tests d'acceptation :** Nous avons écrit des tests d'acceptation pour évaluer des scénarios d'utilisation réalistes, tels que l'enregistrement d'un avis et la demande de contact. Ces tests ont également été réalisés manuellement.

- **Tests end-to-end (e2e) :** Les tests e2e simulent des interactions utilisateur réelles pour vérifier le bon fonctionnement de l'ensemble de l'application. De même, ces tests ont été réalisés manuellement.

De plus, nous tenons à souligner que les routes dans nos contrôleurs ont été conçues pour gérer les cas où l'utilisateur entre n'importe quoi après le "/" dans l'URL. Dans ces situations, notre application renvoie une erreur 404 (Page non trouvée) pour indiquer que la ressource demandée n'existe pas. Cela garantit une expérience utilisateur fluide et la gestion appropriée des erreurs.


### Compilation

Avant de déployer notre projet Symfony, assurez-vous de suivre ces étapes de compilation :

Afin de minifier les ressources tel que les fichiers CSS et JavaScript, vous pouvez utilisez la commande :
  symfony console assets:install


### Déploiement

Dans le cadre de ce projet scolaire, le déploiement se limite à l'environnement de développement pour les besoins de l'évaluation par le professeur. Les étapes de déploiement sont similaires à celles de la section "Installation". Pour des instructions détaillées, veuillez vous référer à la section "Installation".

### Fonctionnalités

Notre application offre un ensemble de fonctionnalités qui répondent aux besoins des utilisateurs :

#### En tant qu'administrateur :

1. **Gestion des prestations :** En mode administrateur, vous avez la possibilité de modifier les informations relatives aux prestations offertes par le photographe. Cela inclut la mise à jour des descriptions, des tarifs, des images, etc.

2. **Gestion des présentations :** Vous pouvez également personnaliser les présentations qui s'affichent sur le site. Cela permet de mettre en avant les réalisations du photographe et de les mettre à jour au besoin.

3. **Liste des contacts :** En tant qu'administrateur, vous avez accès à la liste des contacts qui ont utilisé le formulaire de contact. Vous pouvez consulter ces informations pour un suivi ultérieur.

#### En tant qu'utilisateur :

1. **Inscription :** Sur la page d'inscription, les utilisateurs peuvent créer un compte en fournissant leurs informations. Cela permet un accès personnalisé à certaines fonctionnalités de l'application.

2. **Connexion :** Les utilisateurs enregistrés peuvent se connecter sur la page de connexion en utilisant leurs informations d'identification.

3. **Formulaire de contact :** Sur la page de contact, les utilisateurs peuvent saisir leurs informations pour être recontactés ultérieurement. Cela facilite la communication avec le photographe.

4. **Avis sur les prestations :** Les utilisateurs ont la possibilité de laisser des avis sur les prestations qu'ils ont reçues du photographe. Cela contribue à la réputation et à la transparence de l'entreprise.

Chacune de ces fonctionnalités a été conçue pour offrir une expérience utilisateur fluide et faciliter l'interaction avec le photographe et son travail.

### Technologies 

Notre projet n'inclut pas d'autres projets/modules. 

### Comment contribuer

Notre projet est conçu exclusivement à des fins scolaires et d'évaluation, et il n'accepte pas de contributions externes. Il est hébergé sur GitHub à des fins de collaboration entre les élèves et notre professeur. En conséquence, nous n'acceptons pas de contributions de tiers pour ce projet. Il est destiné uniquement à être soumis à notre professeur aux fins d'évaluation.

### Versionnement

Pour la gestion des versions de notre code source, nous avons suivi la méthodologie suivante :

1. **Branches** : Nous avons utilisé des branches Git pour développer de nouvelles fonctionnalités, résoudre des beugs et effectuer des tests séparément, tout en maintenant une branche principale (généralement nommée "main" ou "master") pour la version de production stable.
   
2. **Commits** : Nous avons effectué des commits fréquents pour enregistrer les modifications apportées au code. Chaque commit a été accompagné d'un message descriptif pour expliquer la nature de la modification.


### Crédit

Nous souhaitons exprimer notre reconnaissance envers notre professeur M Gaulier pour ses explications, ses conseils et son évaluation tout au long du développement de ce projet. Son expertise et ses commentaires ont été essentiels pour notre réussite.

Ce projet a été réalisé sans avoir recours à d'autres projets extérieurs. Il est le fruit de notre travail d'apprentissage et d'application des compétences acquises dans le cadre de notre formation scolaire sur le framework Symfony.

