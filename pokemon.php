<?php

use cindymt\PokemonBattle\Pokemon;


$em = require __DIR__ . '/bootstrap.php';

/** @var \Doctrine\ORM\EntityRepository $trainerRepo */
$trainerRepo = $em->getRepository('cindymt\PokemonBattle\Trainer');

/** @var \cindymt\PokemonBattle\Trainer $trainer */
$trainer = $trainerRepo->findOneBy([
    'username' => $_SESSION['username'],
]);

/** @var  \Doctrine\ORM\EntityRepository $pokemonRepo */
$pokemonRepo = $em->getRepository('cindymt\PokemonBattle\Pokemon');

$pokemon = $pokemonRepo->findOneBy([
    'trainer' => $trainer,
]);


if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['type']) && !empty($_POST['type'])) {

    /** @var Pokemon $pokemon */
    $pokemon = new Pokemon();

    $pokemon
        ->setName($_POST['name'])
        ->setHP(100);
    if($_POST['type'] == 'plant') {
        $pokemon->setType(Pokemon::TYPE_PLANT);
    }
    elseif($_POST['type'] == 'fire'){
        $pokemon->setType(Pokemon::TYPE_WATER);
    }
    elseif($_POST['type'] == 'water') {
        $pokemon->setType(Pokemon::TYPE_FIRE);
    }

    $em->persist($pokemon);

    $em->flush();

}

require 'views/pokemon.php';