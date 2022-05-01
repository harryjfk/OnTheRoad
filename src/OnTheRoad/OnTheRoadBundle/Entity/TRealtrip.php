<?php

namespace OnTheRoad\OnTheRoadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TRealtrip
 *
 * @ORM\Table(name="t_realtrip")
 * @ORM\Entity
 */
class TRealtrip
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
     * @ORM\Column(name="isclosed", type="integer", nullable=false)
     */
    private $isclosed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateinitrip", type="date", nullable=false)
     */
    private $dateinitrip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefintrip", type="date", nullable=false)
     */
    private $datefintrip;

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
     * @var \TTrip
     *
     * @ORM\ManyToOne(targetEntity="TTrip")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtrip", referencedColumnName="id")
     * })
     */
    private $idtrip;



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
     * Set isclosed
     *
     * @param integer $isclosed
     * @return TRealtrip
     */
    public function setIsclosed($isclosed)
    {
        $this->isclosed = $isclosed;
    
        return $this;
    }

    /**
     * Get isclosed
     *
     * @return integer 
     */
    public function getIsclosed()
    {
        return $this->isclosed;
    }

    /**
     * Set dateinitrip
     *
     * @param \DateTime $dateinitrip
     * @return TRealtrip
     */
    public function setDateinitrip($dateinitrip)
    {
        $this->dateinitrip = $dateinitrip;
    
        return $this;
    }

    /**
     * Get dateinitrip
     *
     * @return \DateTime 
     */
    public function getDateinitrip()
    {
        return $this->dateinitrip;
    }

    /**
     * Set datefintrip
     *
     * @param \DateTime $datefintrip
     * @return TRealtrip
     */
    public function setDatefintrip($datefintrip)
    {
        $this->datefintrip = $datefintrip;
    
        return $this;
    }

    /**
     * Get datefintrip
     *
     * @return \DateTime 
     */
    public function getDatefintrip()
    {
        return $this->datefintrip;
    }

    /**
     * Set iduser
     *
     * @param \OnTheRoad\OnTheRoadBundle\Entity\TUser $iduser
     * @return TRealtrip
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

    /**
     * Set idtrip
     *
     * @param \OnTheRoad\OnTheRoadBundle\Entity\TTrip $idtrip
     * @return TRealtrip
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
}