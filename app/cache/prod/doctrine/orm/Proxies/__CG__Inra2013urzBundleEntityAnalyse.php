<?php

namespace Proxies\__CG__\Inra2013\urzBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Analyse extends \Inra2013\urzBundle\Entity\Analyse implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setAnimal($animal)
    {
        $this->__load();
        return parent::setAnimal($animal);
    }

    public function getAnimal()
    {
        $this->__load();
        return parent::getAnimal();
    }

    public function setCodeLabo($codeLabo)
    {
        $this->__load();
        return parent::setCodeLabo($codeLabo);
    }

    public function getCodeLabo()
    {
        $this->__load();
        return parent::getCodeLabo();
    }

    public function setDatePrelev($datePrelev)
    {
        $this->__load();
        return parent::setDatePrelev($datePrelev);
    }

    public function getDatePrelev()
    {
        $this->__load();
        return parent::getDatePrelev();
    }

    public function setDateAnalyse($dateAnalyse)
    {
        $this->__load();
        return parent::setDateAnalyse($dateAnalyse);
    }

    public function getDateAnalyse()
    {
        $this->__load();
        return parent::getDateAnalyse();
    }

    public function setObservation($observation)
    {
        $this->__load();
        return parent::setObservation($observation);
    }

    public function getObservation()
    {
        $this->__load();
        return parent::getObservation();
    }

    public function setLotGroupe($lotGroupe)
    {
        $this->__load();
        return parent::setLotGroupe($lotGroupe);
    }

    public function getLotGroupe()
    {
        $this->__load();
        return parent::getLotGroupe();
    }

    public function setNaturEchant($naturEchant)
    {
        $this->__load();
        return parent::setNaturEchant($naturEchant);
    }

    public function getNaturEchant()
    {
        $this->__load();
        return parent::getNaturEchant();
    }

    public function setUser(\Inra2013\urzBundle\Entity\User $user = NULL)
    {
        $this->__load();
        return parent::setUser($user);
    }

    public function getUser()
    {
        $this->__load();
        return parent::getUser();
    }

    public function setId($id)
    {
        $this->__load();
        return parent::setId($id);
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setProtocole(\Inra2013\urzBundle\Entity\Protocole $protocole = NULL)
    {
        $this->__load();
        return parent::setProtocole($protocole);
    }

    public function getProtocole()
    {
        $this->__load();
        return parent::getProtocole();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'CodeLabo', 'Animal', 'DatePrelev', 'DateAnalyse', 'Observation', 'Lot_Groupe', 'NaturEchant', 'Protocole');
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