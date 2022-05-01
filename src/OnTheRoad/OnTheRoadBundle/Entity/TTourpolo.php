<?php

namespace OnTheRoad\OnTheRoadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TTourpolo
 *
 * @ORM\Table(name="t_tourpolo")
 * @ORM\Entity
 */
class TTourpolo
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
     * @ORM\Column(name="namepolo", type="string", length=50, nullable=false)
     */
    private $namepolo;

    /**
     * @var string
     *
     * @ORM\Column(name="datapolo", type="text", nullable=false)
     */
    private $datapolo;

    /**
     * @var string
     *
     * @ORM\Column(name="descpolo", type="text", nullable=false)
     */
    private $descpolo;



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
     * Set namepolo
     *
     * @param string $namepolo
     * @return TTourpolo
     */
    public function setNamepolo($namepolo)
    {
        $this->namepolo = $namepolo;
    
        return $this;
    }

    /**
     * Get namepolo
     *
     * @return string 
     */
    public function getNamepolo()
    {
        return $this->namepolo;
    }

    /**
     * Set datapolo
     *
     * @param string $datapolo
     * @return TTourpolo
     */
    public function setDatapolo($datapolo)
    {
        $this->datapolo = $datapolo;
    
        return $this;
    }

    /**
     * Get datapolo
     *
     * @return string 
     */
    public function getDatapolo()
    {
        return $this->datapolo;
    }

    /**
     * Set descpolo
     *
     * @param string $descpolo
     * @return TTourpolo
     */
    public function setDescpolo($descpolo)
    {
        $this->descpolo = $descpolo;
    
        return $this;
    }

    /**
     * Get descpolo
     *
     * @return string 
     */
    public function getDescpolo()
    {
        return $this->descpolo;
    }
}