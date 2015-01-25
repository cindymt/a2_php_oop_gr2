<?php
/**
 * Created by PhpStorm.
 * User: Nounoute
 * Date: 23/01/2015
 * Time: 22:42
 */

namespace cindymt\PokemonBattle;


class Trainer {
    /**
     * @var int
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(name="id", type="integer")
     */
    private $Id;
    /**
     * @var string
     * @Column(name="username", type="string", length=30)
     */
    private $UserName;
    /**
     * @var string
     * @Column(name="password", type="string", length=40)
     */
    private $Password;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * {@inheritdoc}
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     *{@inheritdoc}
     *
     * @throws \Exception
     */
    public function setPassword($Password)
    {
        if(is_string($Password)){
            $this->Password = $Password;
        }
        else{
            throw new \Exception('Password must be a string');
        }
        return $this;
    }
    /**
     * {@inheritdoc}
     *
     */
    public function getUserName()
    {
        return $this->UserName;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Exception
     */
    public function setUserName($UserName)
    {
        if(is_string($UserName)){
            $this->UserName = $UserName;
        }
        else{
            throw new \Exception('Username must be a string');
        }
        return $this;
    }
} 