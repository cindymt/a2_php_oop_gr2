<?php
/**
 * Created by PhpStorm.
 * User: Nounoute
 * Date: 18/01/2015
 * Time: 22:14
 */

require __DIR__.'/vendor/autoload.php';

$config = new \Doctrine\DBAL\Configuration();

$connectionParams = require __DIR__.'/config/config.php';

$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

var_dump($conn->errorInfo());