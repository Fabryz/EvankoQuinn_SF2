<?php

namespace EvankoQuinn\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="EvankoQuinn\UserBundle\Entity\Player", cascade={"persist"})
     * @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     */
    protected $player;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set player
     *
     * @param \EvankoQuinn\UserBundle\Entity\Player $player
     * @return User
     */
    public function setPlayer(\EvankoQuinn\UserBundle\Entity\Player $player = null)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return \EvankoQuinn\UserBundle\Entity\Player
     */
    public function getPlayer()
    {
        return $this->player;
    }
}