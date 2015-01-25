<?php require __DIR__.'/header.php';

use cindymt\PokemonBattle\Trainer;
$em = require __DIR__ . '/bootstrap.php';

if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {

    /** @var Trainer $trainer */
    $trainer = new Trainer();

    // Définition des valeurs
    $trainer
        ->setUsername($_POST['username'])
        ->setPassword($_POST['password']);

    // récupère la valeur de $trainer
    $em->persist($trainer);

    // envoi dans la base de donnée
    $em->flush();

    echo '<div class="validation">Votre etes inscrit</div>';
}

require 'views/register.php';