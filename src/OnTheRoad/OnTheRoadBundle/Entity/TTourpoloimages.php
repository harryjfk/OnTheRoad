<?php

namespace OnTheRoad\OnTheRoadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TTourpoloimages
 *
 * @ORM\Table(name="t_tourpoloimages")
 * @ORM\Entity
 */
class TTourpoloimages
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
     * @ORM\Column(name="pathimage", type="string", length=255, nullable=false)
     */
    private $pathimage;

    /**
     * @var \TTourpolo
     *
     * @ORM\ManyToOne(targetEntity="TTourpolo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtour", referencedColumnName="id")
     * })
     */
    private $idtour;



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
     * Set pathimage
     *
     * @param string $pathimage
     * @return TTourpoloimages
     */
    public function setPathimage($pathimage)
    {
        $this->pathimage = $pathimage;
    
        return $this;
    }

    /**
     * Get pathimage
     *
     * @return string 
     */
    public function getPathimage()
    {
        return $this->pathimage;
    }

    /**
     * Set idtour
     *
     * @param \OnTheRoad\OnTheRoadBundle\Entity\TTourpolo $idtour
     * @return TTourpoloimages
     */
    public function setIdtour(\OnTheRoad\OnTheRoadBundle\Entity\TTourpolo $idtour = null)
    {
        $this->idtour = $idtour;
    
        return $this;
    }

    /**
     * Get idtour
     *
     * @return \OnTheRoad\OnTheRoadBundle\Entity\TTourpolo 
     */
    public function getIdtour()
    {
        return $this->idtour;
    }
}