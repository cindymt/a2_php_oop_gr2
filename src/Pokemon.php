<?php
/**
 * Created by PhpStorm.
 * User: Nounoute
 * Date: 23/01/2015
 * Time: 22:36
 */
namespace cindymt\PokemonBattle;
/**
 * Class Pokemon
 * @package cindymt\PokemonBattle
 *
 * @Entity
 * @Table(name="pokemon")
 */
class Pokemon implements Model\PokemonInterface {
    /**
     * @var int
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(name="id", type="integer")
     */
    private $Id;

    /**
     * @var string
     * @Column(name="name", type="string", length=60)
     */
    private $name;

    /**
     * @var int
     * * @Column(name="hp", type="integer")
     */
    private $hp;

    /**
     * @var int
     * @Column(name="type", type="smallint")
     */
    private $type;

    const TYPE_FIRE     = 0;
    const TYPE_WATER    = 1;
    const TYPE_PLANT    = 2;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     *
     * @return Pokemon
     *
     * @throws \Exception
     */
    public function setName($name)
    {
        if (is_string($name))
            $this->name = $name;
        else
            throw new \Exception('Name must be a string');

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getHP()
    {
        return $this->hp;
    }

    /**
     * {@inheritdoc}
     *
     * @return Pokemon
     *
     * @throws \Exception
     */
    public function setHP($hp)
    {
        if (is_int($hp) && $hp > 0)
            $this->hp = $hp;
        else
            throw new \Exception('HP must be between 0 and 100');

        return $this;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Exception
     */
    public function addHP($hp)
    {
        if (is_int($hp) && $hp > 0)
            $this->hp += $hp;
        else
            throw new \Exception('HP must be an integer > 0');

        return $this->hp;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Exception
     */
    public function removeHP($hp)
    {
        if (is_int($hp) && $hp > 0)
            $this->hp = ($this->hp <= $hp) ? 0 : $this->hp - $hp;
        else
            throw new \Exception('HP must be an integer > 0');

        return $this->hp;
    }

    /**
     * @inheritdoc
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * {@inheritdoc}
     *
     * @return Pokemon
     *
     * @throws \Exception
     */
    public function setType($type)
    {
        if (true === in_array($type, [
                self::TYPE_FIRE,
                self::TYPE_WATER,
                self::TYPE_PLANT,
            ]))
            $this->type = $type;
        else
            throw new \Exception('Type must be TYPE_FIRE, TYPE_WATER OR TYPE_PLANT');

        return $this;
    }
} 