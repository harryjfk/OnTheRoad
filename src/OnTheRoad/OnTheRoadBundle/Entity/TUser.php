<?php

namespace OnTheRoad\OnTheRoadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * TUser
 *
 * @ORM\Table(name="t_user")
 * @ORM\Entity
 */
class TUser implements UserInterface
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
     * @ORM\Column(name="nameuser", type="string", length=50, nullable=false)
     */
    private $nameuser;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=255, nullable=false)
     */
    private $password;



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
     * Set nameuser
     *
     * @param string $nameuser
     * @return TUser
     */
    public function setNameuser($nameuser)
    {
        $this->nameuser = $nameuser;
    
        return $this;
    }

    /**
     * Get nameuser
     *
     * @return string 
     */
    public function getNameuser()
    {
        return $this->nameuser;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return TUser
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return TUser
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
 /**
   * Returns the roles granted to the user.
   *     
   * <code>*/
    public function getRoles()
    {
        if($this->nameuser=="admin")
            return array('ROLE_ADMIN');

        return array('ROLE_USER'); 
    } 
   /* * </code> 
   *   
  /**           
   * Returns the salt that was originally used to encode the password. 
   *                   
   * This can return null if the password was not encoded using a salt. 
   *                  
   * @return string|null The salt  
   */                              
  public function getSalt()    
  {                            
       return false;
  }                       
  /** 
   * Returns the username used to authenticate the user. 
   *          
   * @return string The username   
   */         
  public function getUsername()     
  {
      return $this->nameuser;
  }                         
  /**                                      
   * Removes sensitive data from the user.  
   *                                          
   * This is important if, at any given point, sensitive information like 
   * the plain-text password is stored on this object. 
   */                                      
  public function eraseCredentials()      
  {                                        
        return false;   
  }
    public function equals(UserInterface $user)
    {
        return $this->getUsername()==$user->getUsername() && $this->getPassword()==$user->getPassword();
    }
 }    
