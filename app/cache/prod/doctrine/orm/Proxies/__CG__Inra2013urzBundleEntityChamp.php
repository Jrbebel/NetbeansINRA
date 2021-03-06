<?php

namespace Proxies\__CG__\Inra2013\urzBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Champ extends \Inra2013\urzBundle\Entity\Champ implements \Doctrine\ORM\Proxy\Proxy
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

    public function setChamp($champ)
    {
        $this->__load();
        return parent::setChamp($champ);
    }

    public function getChamp()
    {
        $this->__load();
        return parent::getChamp();
    }

    public function setChampCalcule($champCalcule)
    {
        $this->__load();
        return parent::setChampCalcule($champCalcule);
    }

    public function getChampCalcule()
    {
        $this->__load();
        return parent::getChampCalcule();
    }

    public function setAnalyse(\Inra2013\urzBundle\Entity\TypeAnalyse $analyse = NULL)
    {
        $this->__load();
        return parent::setAnalyse($analyse);
    }

    public function getAnalyse()
    {
        $this->__load();
        return parent::getAnalyse();
    }

    public function addChampsFormule(\Inra2013\urzBundle\Entity\Formule $champsFormule)
    {
        $this->__load();
        return parent::addChampsFormule($champsFormule);
    }

    public function removeChampsFormule(\Inra2013\urzBundle\Entity\Formule $champsFormule)
    {
        $this->__load();
        return parent::removeChampsFormule($champsFormule);
    }

    public function getChampsFormule()
    {
        $this->__load();
        return parent::getChampsFormule();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'Champ', 'ChampCalcule', 'Analyse');
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