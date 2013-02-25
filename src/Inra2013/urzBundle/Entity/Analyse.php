<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Analyse
 *
 * @ORM\Table(name="Analyse")
 * @ORM\Entity
 */
class Analyse {

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="CodeLabo", type="integer", length=255)
     */
    private $CodeLabo;
    
     /**
     *  *@ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\Protocole")
     * 
     */
    private $Protocole;

    /**
     *  *@ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\Animal")
     *  @ORM\JoinColumn(name="Animal", referencedColumnName="id") 
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Animal;

    /**
     * @var \Date
     *
     * @ORM\Column(name="DatePrelev", type="date")
     */
    private $DatePrelev;

    /**
     * @var \Date
     * @ORM\Column(name="DateAnalyse", type="date")
     */
    private $DateAnalyse;

    /**
     * @var string
     *
     * @ORM\Column(name="Observation", type="string", length=255 , nullable=true)
     */
    private $Observation;

    /**
     * @var string
     *
     * @ORM\Column(name="Lot_Groupe", type="text",nullable=true)
     */
    private $Lot_Groupe;

    /**
     * @var string
     *
     * @ORM\Column(name="NaturEchant", type="string", length=255 ,nullable=true)
     */
    private $NaturEchant;

    /**
     * Set Animal
     *
     * @param integer $animal
     * @return Analyse
     */
    public function setAnimal($animal) {
        $this->Animal = $animal;

        return $this;
    }

    /**
     * Get Animal
     *
     * @return integer 
     */
    public function getAnimal() {
        return $this->Animal;
    }

    /**
     * Set CodeLabo
     *
     * @param integer $codeLabo
     * @return Analyse
     */
    public function setCodeLabo($codeLabo) {
        $this->CodeLabo = $codeLabo;

        return $this;
    }

    /**
     * Get CodeLabo
     *
     * @return integer 
     */
    public function getCodeLabo() {
        return $this->CodeLabo;
    }

    /**
     * Set DatePrelev
     *
     * @param \DateTime $datePrelev
     * @return Analyse
     */
    public function setDatePrelev($datePrelev) {
        $this->DatePrelev = $datePrelev;

        return $this;
    }

    /**
     * Get DatePrelev
     *
     * @return \DateTime 
     */
    public function getDatePrelev() {
        return $this->DatePrelev;
    }

    /**
     * Set DateAnalyse
     *
     * @param \DateTime $dateAnalyse
     * @return Analyse
     */
    public function setDateAnalyse($dateAnalyse) {
        $this->DateAnalyse = $dateAnalyse;

        return $this;
    }

    /**
     * Get DateAnalyse
     *
     * @return \DateTime 
     */
    public function getDateAnalyse() {
        return $this->DateAnalyse;
    }

    /**
     * Set Observation
     *
     * @param string $observation
     * @return Analyse
     */
    public function setObservation($observation) {
        $this->Observation = $observation;

        return $this;
    }

    /**
     * Get Observation
     *
     * @return string 
     */
    public function getObservation() {
        return $this->Observation;
    }

    /**
     * Set Lot_Groupe
     *
     * @param string $lotGroupe
     * @return Analyse
     */
    public function setLotGroupe($lotGroupe) {
        $this->Lot_Groupe = $lotGroupe;

        return $this;
    }

    /**
     * Get Lot_Groupe
     *
     * @return string 
     */
    public function getLotGroupe() {
        return $this->Lot_Groupe;
    }

    /**
     * Set NaturEchant
     *
     * @param string $naturEchant
     * @return Analyse
     */
    public function setNaturEchant($naturEchant) {
        $this->NaturEchant = $naturEchant;

        return $this;
    }

    /**
     * Get NaturEchant
     *
     * @return string 
     */
    public function getNaturEchant() {
        return $this->NaturEchant;
    }

    /**
     * Set User
     *
     * @param \Inra2013\urzBundle\Entity\User $user
     * @return Analyse
     */
    public function setUser(\Inra2013\urzBundle\Entity\User $user = null) {
        $this->User = $user;

        return $this;
    }

    /**
     * Get User
     *
     * @return \Inra2013\urzBundle\Entity\User 
     */
    public function getUser() {
        return $this->User;
    }


    /**
     * Set id
     *
     * @param integer $id
     * @return Analyse
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

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
     * Set Protocole
     *
     * @param \Inra2013\urzBundle\Entity\Protocole $protocole
     * @return Analyse
     */
    public function setProtocole(\Inra2013\urzBundle\Entity\Protocole $protocole = null)
    {
        $this->Protocole = $protocole;
    
        return $this;
    }

    /**
     * Get Protocole
     *
     * @return \Inra2013\urzBundle\Entity\Protocole 
     */
    public function getProtocole()
    {
        return $this->Protocole;
    }
}