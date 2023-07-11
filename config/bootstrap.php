<?php

    /**
     * ----------------------------------------------------------------------------
     *                            Amorceur de l'application
     * 
     * Chargement des fichiers de configuration
     * 
     * Ses rôles : 
     *      - Charger l'autoloader de composer
     *      - Chager les variables d'environnement
     *      - Charger le conteneur de dépendances
     * ----------------------------------------------------------------------------
     */

    // Chargement de l'autoloader de composer
    require __DIR__ . "/../vendor/autoload.php";

    // Chargement des variables d'environnement
    require __DIR__ . "/environnement/dotenv.php";

    // Chargement du conteneur de dépendences
    $container = require __DIR__ . "/di/container.php";

    // dd($container);