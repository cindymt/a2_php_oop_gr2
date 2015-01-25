<?php require __DIR__.'/header.php';
$em = require __DIR__ . '/bootstrap.php';

use cindymt\PokemonBattle\Pokemon;
use cindymt\PokemonBattle\Trainer;


/** @var  \Doctrine\ORM\EntityRepository $pokemonRepo */
$pokemonRepo = $em->getRepository('cindymt\PokemonBattle\Pokemon');

/** @var \Doctrine\ORM\EntityRepository $trainerRepo */
$trainerRepo = $em->getRepository('cindymt\PokemonBattle\Trainer');
$trainer = $trainerRepo->findOneBy([
    'username' => $_SESSION['username'],
]);

/** @var \cindymt\PokemonBattle\Pokemon $pokemon */
$pokemon = $pokemonRepo->findAll(); ?>


<div class="container">
    <div id="tableau">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>HP</th>
            </tr>
            </thead>
            <tbody> <?php foreach ($pokemon as $var) {
                $tr = $var->getTrainer(); ?>
                <tr>
                    <!-- Name-->
                    <td>

                        <?php
                        echo $var->getName();
                        ?>
                    </td>
                    <!-- Type -->
                    <td>
                        <?php echo $var->getType(); ?>
                    </td>

                    <!-- Hp -->
                    <td><?php echo $var->getHp(); ?></td>
                </tr>

            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

?>

