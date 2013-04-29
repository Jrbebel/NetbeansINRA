<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Protocole
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Inra2013\urzBundle\Entity\ProtocoleRepository")
 */
class Protocole {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    private $id;

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
     * @var \DateTime
     *
     * @ORM\Column(name="DateValidationAnalyse", type="date",nullable=true)
     */
    private $DateValidationAnalyse;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\User")
     */
    private $Responsable;

    /**
     * @var integer
     *
     * @ORM\Column(name="Validation", type="integer")
     */
    private $Validation;

    /**
     * @var text
     *
     * @ORM\Column(name="Description", type="text")
     */
    private $Description;

    /**
     * @var text
     *
     * @ORM\Column(name="Commentaire", type="text",nullable=true)
     */
    private $Commentaire;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    public function __construct() {

        $this->Analyse = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set NomProtocole
     *
     * @param string $nomProtocole
     * @return Protocole
     */
    public function setNomProtocole($nomProtocole) {
        $this->NomProtocole = $nomProtocole;

        return $this;
    }

    /**
     * Get NomProtocole
     *
     * @return string 
     */
    public function getNomProtocole() {
        return $this->NomProtocole;
    }

    /**
     * Set DateValidation
     *
     * @param \DateTime $dateValidation
     * @return Protocole
     */
    public function setDateValidation($dateValidation) {
        $this->DateValidation = $dateValidation;

        return $this;
    }

    /**
     * Get DateValidation
     *
     * @return \DateTime 
     */
    public function getDateValidation() {
        return $this->DateValidation;
    }

    /**
     * Set Validation
     *
     * @param boolean $validation
     * @return Protocole
     */
    public function setValidation($validation) {
        $this->Validation = $validation;

        return $this;
    }

    /**
     * Get Validation
     *
     * @return boolean 
     */
    public function getValidation() {
        return $this->Validation;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return Protocole
     */
    public function setDescription($description) {
        $this->Description = $description;

        return $this;
    }

    /**
     * Get Description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->Description;
    }

    /**
     * Set Responsable
     *
     * @param \Inra2013\urzBundle\Entity\User $responsable
     * @return Protocole
     */
    public function setResponsable(\Inra2013\urzBundle\Entity\User $responsable = null) {
        $this->Responsable = $responsable;

        return $this;
    }

    /**
     * Get Responsable
     *
     * @return \Inra2013\urzBundle\Entity\User 
     */
    public function getResponsable() {
        return $this->Responsable;
    }

    /**
     * Set Analyse
     *
     * @param \Inra2013\urzBundle\Entity\ProtocoleAnalyse $analyse
     * @return Protocole
     */
    public function setAnalyse(\Inra2013\urzBundle\Entity\ProtocoleAnalyse $analyse = null) {
        $this->Analyse = $analyse;

        return $this;
    }

    /**
     * Get Analyse
     *
     * @return \Inra2013\urzBundle\Entity\ProtocoleAnalyse 
     */
    public function getAnalyse() {
        return $this->Analyse;
    }

    /**
     * Set Commentaire
     *
     * @param string $commentaire
     * @return Protocole
     */
    public function setCommentaire($commentaire) {
        $this->Commentaire = $commentaire;

        return $this;
    }

    /**
     * Get Commentaire
     *
     * @return string 
     */
    public function getCommentaire() {
        return $this->Commentaire;
    }


    /**
     * Set DateValidationAnalyse
     *
     * @param \DateTime $dateValidationAnalyse
     * @return Protocole
     */
    public function setDateValidationAnalyse($dateValidationAnalyse)
    {
        $this->DateValidationAnalyse = $dateValidationAnalyse;
    
        return $this;
    }

    /**
     * Get DateValidationAnalyse
     *
     * @return \DateTime 
     */
    public function getDateValidationAnalyse()
    {
        return $this->DateValidationAnalyse;
    }
}