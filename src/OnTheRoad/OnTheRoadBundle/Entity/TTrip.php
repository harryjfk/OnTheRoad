<?php

namespace OnTheRoad\OnTheRoadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TTrip
 *
 * @ORM\Table(name="t_trip")
 * @ORM\Entity
 */
class TTrip
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nametrip", type="string", length=50, nullable=false)
     */
    private $nametrip;

    /**
     * @var \TUser
     *
     * @ORM\ManyToOne(targetEntity="TUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="id")
     * })
     */
    private $iduser;



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
     * Set nametrip
     *
     * @param string $nametrip
     * @return TTrip
     */
    public function setNametrip($nametrip)
    {
        $this->nametrip = $nametrip;
    
        return $this;
    }

    /**
     * Get nametrip
     *
     * @return string 
     */
    public function getNametrip()
    {
        return $this->nametrip;
    }

    /**
     * Set iduser
     *
     * @param \OnTheRoad\OnTheRoadBundle\Entity\TUser $iduser
     * @return TTrip
     */
    public function setIduser(\OnTheRoad\OnTheRoadBundle\Entity\TUser $iduser = null)
    {
        $this->iduser = $iduser;
    
        return $this;
    }

    /**
     * Get iduser
     *
     * @return \OnTheRoad\OnTheRoadBundle\Entity\TUser 
     */
    public function getIduser()
    {
        return $this->iduser;
    }
}