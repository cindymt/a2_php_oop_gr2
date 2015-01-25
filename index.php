<?php

require __DIR__.'/vendor/autoload.php';

require __DIR__.'/header.php';

if ($_SESSION ==  TRUE){

    echo "Bonjour ".$_SESSION['username'];

    require 'pokemon.php';

}else{
    echo '<div id="index">Merci de vous connecter</div>';
    require 'views/connexion.php';
}

?>