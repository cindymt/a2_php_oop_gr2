<?php
/**
 * Created by PhpStorm.
 * User: Nounoute
 * Date: 20/01/2015
 * Time: 22:29
 */

namespace cindymt\PokemonBattle\Model;

interface PokemonInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     *
     * @return PokemonInterface
     */
    public function setName($name);

    /**
     * @return int
     */
    public function getHP();

    /**
     * @param int $hp
     *
     * @return PokemonInterface
     */
    public function setHP($hp);

    /**
     * @param int $hp
     *
     * @return int
     */
    public function addHP($hp);

    /**
     * @param int $hp
     *
     * @return int
     */
    public function removeHP($hp);

    /**
     * @return int
     */
    public function getType();

    /**
     * @param int $type
     *
     * @return PokemonInterface
     */
    public function setType($type);
}