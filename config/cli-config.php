<?php
/**
 * Created by PhpStorm.
 * User: Nounoute
 * Date: 06/01/2015
 * Time: 12:23
 */

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager = require __DIR__.'/../bootstrap.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;

return ConsoleRunner::createHelperSet($entityManager);