<?php

namespace Proxies\__CG__\OnTheRoad\OnTheRoadBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class TRealtripdesc extends \OnTheRoad\OnTheRoadBundle\Entity\TRealtripdesc implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setTime($time)
    {
        $this->__load();
        return parent::setTime($time);
    }

    public function getTime()
    {
        $this->__load();
        return parent::getTime();
    }

    public function setIdtrip(\OnTheRoad\OnTheRoadBundle\Entity\TRealtrip $idtrip = NULL)
    {
        $this->__load();
        return parent::setIdtrip($idtrip);
    }

    public function getIdtrip()
    {
        $this->__load();
        return parent::getIdtrip();
    }

    public function setIdtourpolo(\OnTheRoad\OnTheRoadBundle\Entity\TTourpolo $idtourpolo = NULL)
    {
        $this->__load();
        return parent::setIdtourpolo($idtourpolo);
    }

    public function getIdtourpolo()
    {
        $this->__load();
        return parent::getIdtourpolo();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'time', 'idtrip', 'idtourpolo');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}