# TI2

## WEB 2023-2024


### PDF des consignes et la grille d'évaluation

Vous les trouverez dans le dossier `datas/` du dépôt.

### Structure des fichiers

Tous ces fichiers **doivent** être dans le dossier `TI2-2024` :

    .gitignore
    README.md
    config.php // copie de config.php.ini
    config.php.ini
    datas/
        datas/ti2web2024.sql
        datas/fig1_vue_smartphone.png
        datas/fig2_vue_tablette.png
        datas/fig3_vue_desktop.png
    model/
        model/livreorModel.php
    public/
        public/index.php
        public/js/
            public/js/validation.js
        public/css/
            public/css/style.css
            public/css/validation.css
        public/img/
            public/img/email.png
            public/img/favicon.png
    view/
        view/livreorView.php

### Structure de la base de données

Et de la table `livreor` :

```sql

    USE `ti2web2024`;
    
    DROP TABLE IF EXISTS `livreor`;
    CREATE TABLE IF NOT EXISTS `livreor` (
        `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
        `firstname` varchar(100) NOT NULL,
        `lastname` varchar(100) DEFAULT NULL,
        `usermail` varchar(200) NOT NULL,
        `message` varchar(600) NOT NULL,
        `datemessage` datetime NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

```

## Marche à suivre

- Créez un fork du dépôt `TI2-2024` sur github.com puis clonez-le sur votre machine
- Créez un hôte virtuel dans WAMP sur le dossier `…/TI2-2024/public/` nommé `TI2-2024`
- Créez une base de données dans `phpMyAdmin` en important le fichier `ti2web2024.sql` (en `MariaDB`)
- Enregistrez `config.php.ini` en `config.php` en vérifiant que celà correspond aux paramètres de votre base de données !

## Consignes

Vous pouvez vous aider des fichiers vus au cours pour réaliser ce TP.

Évitez de copier/coller des bouts de code sans les comprendre. Pour prouver que vous avez compris, vous devrez être capable de les expliquer avec des **commentaires personnels**.

Les IA ne doivent pas être utilisées pour ce TP. **Nous le verrons**. Vous pouvez par contre vous aider d'internet pour des bouts de code précis.

#### Faites un `commit` à chaque étape validée

Il doit y avoir un minimum de 10 `commit` pour ce TP.

### Pull Request

Faites un `Pull Request` à la fin de votre TP. Vérifiez que vous avez bien suivi les consignes avant de le faire.

Si vous avez fini et que vous êtes satisfait de votre travail, faites les points Bonus (vous pouvez les faire sur une autre branche).

Si tout est bon, faites un `Pull Request` sur le dépôt original.

### N'envoyez pas votre pull request avant `16h30`

Occupez-vous ailleurs en attendant, n'aidez pas les autres stagiaires.

Des formateurs pourront vous aider si vous avez des questions.

## Design

Le captcha n'est pas demandé pour ce TP (ne créez pas de champ pour le captcha).

### Formats responsive

#### Smartphone


![alt text](https://github.com/mikhawa/PHP-base/blob/main/datas/fig1_vue_smartphone.png?raw=true "Smartphone")

#### Tablettes 


![alt text](https://github.com/mikhawa/PHP-base/blob/main/datas/fig2_vue_tablette.png?raw=true "Tablettes")

#### Desktop


![alt text](https://github.com/mikhawa/PHP-base/blob/main/datas/fig3_vue_desktop.png?raw=true "Desktop")
