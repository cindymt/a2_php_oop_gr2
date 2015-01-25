<?php

require __DIR__.'/vendor/autoload.php';

require __DIR__.'/header.php';

if ($_SESSION ==  TRUE){

    echo "Bonjour ".$_SESSION['username'];

    require 'pokemon.php';

}else{
    echo '<h3>Merci de vous connecter</h3>';
    require 'views/connexion.php';
}

?>