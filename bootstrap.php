<?php
/**
 * Created by PhpStorm.
 * User: Nounoute
 * Date: 18/01/2015
 * Time: 15:33
 */

require __DIR__.'/vendor/autoload.php';

//Importe la class setup
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

//chemin vers les entity path
$paths = [
    "src",
];
//mode de dvt
$isDevMode = true;

// the connection configuration
$dbParams = require __DIR__.'/config/config.php';

// :: = opérateur de résolution de portée
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
return $entityManager = EntityManager::create($dbParams, $config);