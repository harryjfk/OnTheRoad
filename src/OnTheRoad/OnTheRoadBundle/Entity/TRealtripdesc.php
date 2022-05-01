<?php

namespace OnTheRoad\OnTheRoadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TRealtripdesc
 *
 * @ORM\Table(name="t_realtripdesc")
 * @ORM\Entity
 */
class TRealtripdesc
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
     * @var integer
     *
     * @ORM\Column(name="time", type="integer", nullable=false)
     */
    private $time;

    /**
     * @var \TRealtrip
     *
     * @ORM\ManyToOne(targetEntity="TRealtrip")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtrip", referencedColumnName="id")
     * })
     */
    private $idtrip;

    /**
     * @var \TTourpolo
     *
     * @ORM\ManyToOne(targetEntity="TTourpolo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtourpolo", referencedColumnName="id")
     * })
     */
    private $idtourpolo;



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
     * Set time
     *
     * @param integer $time
     * @return TRealtripdesc
     */
    public function setTime($time)
    {
        $this->time = $time;
    
        return $this;
    }

    /**
     * Get time
     *
     * @return integer 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set idtrip
     *
     * @param \OnTheRoad\OnTheRoadBundle\Entity\TRealtrip $idtrip
     * @return TRealtripdesc
     */
    public function setIdtrip(\OnTheRoad\OnTheRoadBundle\Entity\TRealtrip $idtrip = null)
    {
        $this->idtrip = $idtrip;
    
        return $this;
    }

    /**
     * Get idtrip
     *
     * @return \OnTheRoad\OnTheRoadBundle\Entity\TRealtrip 
     */
    public function getIdtrip()
    {
        return $this->idtrip;
    }

    /**
     * Set idtourpolo
     *
     * @param \OnTheRoad\OnTheRoadBundle\Entity\TTourpolo $idtourpolo
     * @return TRealtripdesc
     */
    public function setIdtourpolo(\OnTheRoad\OnTheRoadBundle\Entity\TTourpolo $idtourpolo = null)
    {
        $this->idtourpolo = $idtourpolo;
    
        return $this;
    }

    /**
     * Get idtourpolo
     *
     * @return \OnTheRoad\OnTheRoadBundle\Entity\TTourpolo 
     */
    public function getIdtourpolo()
    {
        return $this->idtourpolo;
    }
}