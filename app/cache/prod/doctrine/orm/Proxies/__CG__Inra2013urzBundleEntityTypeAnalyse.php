<?php

namespace Proxies\__CG__\Inra2013\urzBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class TypeAnalyse extends \Inra2013\urzBundle\Entity\TypeAnalyse implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setNom($nom)
    {
        $this->__load();
        return parent::setNom($nom);
    }

    public function getNom()
    {
        $this->__load();
        return parent::getNom();
    }

    public function setTypeCategorie(\Inra2013\urzBundle\Entity\CategorieAnalyse $typeCategorie = NULL)
    {
        $this->__load();
        return parent::setTypeCategorie($typeCategorie);
    }

    public function getTypeCategorie()
    {
        $this->__load();
        return parent::getTypeCategorie();
    }

    public function addChamp(\Inra2013\urzBundle\Entity\Champ $champs)
    {
        $this->__load();
        return parent::addChamp($champs);
    }

    public function removeChamp(\Inra2013\urzBundle\Entity\Champ $champs)
    {
        $this->__load();
        return parent::removeChamp($champs);
    }

    public function getChamps()
    {
        $this->__load();
        return parent::getChamps();
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


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'Nom', 'TypeCategorie', 'Champs');
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