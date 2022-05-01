<?php

namespace OnTheRoad\OnTheRoadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TComment
 *
 * @ORM\Table(name="t_comment")
 * @ORM\Entity
 */
class TComment
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
     * @ORM\Column(name="topiccomment", type="string", length=50, nullable=false)
     */
    private $topiccomment;

    /**
     * @var string
     *
     * @ORM\Column(name="textcomment", type="text", nullable=false)
     */
    private $textcomment;

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
     * Set topiccomment
     *
     * @param string $topiccomment
     * @return TComment
     */
    public function setTopiccomment($topiccomment)
    {
        $this->topiccomment = $topiccomment;
    
        return $this;
    }

    /**
     * Get topiccomment
     *
     * @return string 
     */
    public function getTopiccomment()
    {
        return $this->topiccomment;
    }

    /**
     * Set textcomment
     *
     * @param string $textcomment
     * @return TComment
     */
    public function setTextcomment($textcomment)
    {
        $this->textcomment = $textcomment;
    
        return $this;
    }

    /**
     * Get textcomment
     *
     * @return string 
     */
    public function getTextcomment()
    {
        return $this->textcomment;
    }

    /**
     * Set iduser
     *
     * @param \OnTheRoad\OnTheRoadBundle\Entity\TUser $iduser
     * @return TComment
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