<?php

namespace OnTheRoad\OnTheRoadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TTripdesc
 *
 * @ORM\Table(name="t_tripdesc")
 * @ORM\Entity
 */
class TTripdesc
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
     * @var \TTrip
     *
     * @ORM\ManyToOne(targetEntity="TTrip")
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
     * Set idtrip
     *
     * @param \OnTheRoad\OnTheRoadBundle\Entity\TTrip $idtrip
     * @return TTripdesc
     */
    public function setIdtrip(\OnTheRoad\OnTheRoadBundle\Entity\TTrip $idtrip = null)
    {
        $this->idtrip = $idtrip;
    
        return $this;
    }

    /**
     * Get idtrip
     *
     * @return \OnTheRoad\OnTheRoadBundle\Entity\TTrip 
     */
    public function getIdtrip()
    {
        return $this->idtrip;
    }

    /**
     * Set idtourpolo
     *
     * @param \OnTheRoad\OnTheRoadBundle\Entity\TTourpolo $idtourpolo
     * @return TTripdesc
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