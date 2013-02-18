<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Protocole
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Inra2013\urzBundle\Entity\ProtocoleRepository")
 */
class Protocole
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    
    /**
     *
     * @ORM\OneToOne(targetEntity = "Inra2013\urzBundle\Entity\ProtocoleAnalyse",mappedBy="Protocole")
     * 
     * 
     */
    
    private $Analyse;


    /**
     * @var string
     *
     * @ORM\Column(name="NomProtocole", type="string", length=255)
     */
    private $NomProtocole;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateValidation", type="date")
     */
    private $DateValidation;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\User")
     */
    private $Responsable;
    
        /**
     * @var boolean
     *
     * @ORM\Column(name="Validation", type="boolean")
     */
    private $Validation;
    
          /**
     * @var text
     *
     * @ORM\Column(name="Description", type="text")
     */
    private $Description;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function __toString() {
        
        return $this->getNomProtocole();
    }
    /**
     * Set NomProtocole
     *
     * @param string $nomProtocole
     * @return Protocole
     */
    public function setNomProtocole($nomProtocole)
    {
        $this->NomProtocole = $nomProtocole;
    
        return $this;
    }

    /**
     * Get NomProtocole
     *
     * @return string 
     */
    public function getNomProtocole()
    {
        return $this->NomProtocole;
    }

    /**
     * Set DateValidation
     *
     * @param \DateTime $dateValidation
     * @return Protocole
     */
    public function setDateValidation($dateValidation)
    {
        $this->DateValidation = $dateValidation;
    
        return $this;
    }

    /**
     * Get DateValidation
     *
     * @return \DateTime 
     */
    public function getDateValidation()
    {
        return $this->DateValidation;
    }

    /**
     * Set Responsable
     *
     * @param integer $responsable
     * @return Protocole
     */
    public function setResponsable($responsable)
    {
        $this->Responsable = $responsable;
    
        return $this;
    }

    /**
     * Get Responsable
     *
     * @return integer 
     */
    public function getResponsable()
    {
        return $this->Responsable;
    }

    /**
     * Set Validation
     *
     * @param boolean $validation
     * @return Protocole
     */
    public function setValidation($validation)
    {
        $this->Validation = $validation;
    
        return $this;
    }

    /**
     * Get Validation
     *
     * @return boolean 
     */
    public function getValidation()
    {
        return $this->Validation;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return Protocole
     */
    public function setDescription($description)
    {
        $this->Description = $description;
    
        return $this;
    }

    /**
     * Get Description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Analyse = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add Analyse
     *
     * @param \Inra2013\urzBundle\Entity\ProtocoleAnalyse $analyse
     * @return Protocole
     */
    public function addAnalyse(\Inra2013\urzBundle\Entity\ProtocoleAnalyse $analyse)
    {
        $this->Analyse[] = $analyse;
    
        return $this;
    }

    /**
     * Remove Analyse
     *
     * @param \Inra2013\urzBundle\Entity\ProtocoleAnalyse $analyse
     */
    public function removeAnalyse(\Inra2013\urzBundle\Entity\ProtocoleAnalyse $analyse)
    {
        $this->Analyse->removeElement($analyse);
    }

    /**
     * Get Analyse
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnalyse()
    {
        return $this->Analyse;
    }

    /**
     * Set Analyse
     *
     * @param \Inra2013\urzBundle\Entity\ProtocoleAnalyse $analyse
     * @return Protocole
     */
    public function setAnalyse(\Inra2013\urzBundle\Entity\ProtocoleAnalyse $analyse = null)
    {
        $this->Analyse = $analyse;
    
        return $this;
    }
}