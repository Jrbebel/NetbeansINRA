<?php

namespace Proxies\__CG__\Inra2013\urzBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Protocole extends \Inra2013\urzBundle\Entity\Protocole implements \Doctrine\ORM\Proxy\Proxy
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

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function setNomProtocole($nomProtocole)
    {
        $this->__load();
        return parent::setNomProtocole($nomProtocole);
    }

    public function getNomProtocole()
    {
        $this->__load();
        return parent::getNomProtocole();
    }

    public function setDateValidation($dateValidation)
    {
        $this->__load();
        return parent::setDateValidation($dateValidation);
    }

    public function getDateValidation()
    {
        $this->__load();
        return parent::getDateValidation();
    }

    public function setResponsable($responsable)
    {
        $this->__load();
        return parent::setResponsable($responsable);
    }

    public function getResponsable()
    {
        $this->__load();
        return parent::getResponsable();
    }

    public function setValidation($validation)
    {
        $this->__load();
        return parent::setValidation($validation);
    }

    public function getValidation()
    {
        $this->__load();
        return parent::getValidation();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function addAnalyse(\Inra2013\urzBundle\Entity\ProtocoleAnalyse $analyse)
    {
        $this->__load();
        return parent::addAnalyse($analyse);
    }

    public function removeAnalyse(\Inra2013\urzBundle\Entity\ProtocoleAnalyse $analyse)
    {
        $this->__load();
        return parent::removeAnalyse($analyse);
    }

    public function getAnalyse()
    {
        $this->__load();
        return parent::getAnalyse();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'NomProtocole', 'DateValidation', 'Validation', 'Description', 'Analyse', 'Responsable');
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