<?php
/**
 * Created by PhpStorm.
 * User: Nounoute
 * Date: 20/01/2015
 * Time: 22:58
 */

namespace cindymt\PokemonBattle\Model;


interface TrainerInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getUsername();

    /**
     * @param string $username
     *
     * @return TrainerInterface
     */
    public function setUsername($username);

    /**
     * @return string
     */
    public function getPassword();

    /**
     * @param string $password
     *
     * @return TrainerInterface
     */
    public function setPassword($password);
}