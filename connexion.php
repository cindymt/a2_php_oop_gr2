<?php

use cindymt\PokemonBattle\Trainer;

$em = require __DIR__ . '/bootstrap.php';


if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {

    /** @var \Doctrine\ORM\EntityRepository $trainerRepo */
    $trainerRepo = $em->getRepository('cindymt\PokemonBattle\Trainer');

    /** @var cindymt\PokemonBattle\Trainer $trainer */
    $trainer = $trainerRepo->findOneBy([
        'username' => $_POST['username'],
        'password' => $_POST['password']
    ]);

    if(is_object($trainer)){
        $_SESSION['status'] = 'connected';
        $_SESSION['username'] = $trainer->getUsername();

        echo '<div class="validation">Vous etes bien connecte</div>' ;
    }

    else{
        echo '<div class="echec">Invalide</div>';
    }

}

require 'views/sign_in.php';
