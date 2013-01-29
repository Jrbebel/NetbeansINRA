<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Analyse
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Analyse {

    
        /**
     *  *@ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\User")
     * 
     */
    
    private $idUser;
    
       /**
     *  *@ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\Animal")
     * 
     */
    private $idAnimal;

    /**
     * @var integer
     * * @ORM\Id
     * @ORM\Column(name="CodeLabo", type="integer", length=255)
     */
    private $CodeLabo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DatePrelev", type="date")
     */
    private $DatePrelev;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateAnalyse", type="date")
     */
    private $DateAnalyse;

    /**
     * @var string
     *
     * @ORM\Column(name="Observation", type="string", length=255)
     */
    private $Observation;

    /**
     * @var string
     *
     * @ORM\Column(name="Lot_Groupe", type="text")
     */
    private $Lot_Groupe;

    /**
     * @var string
     *
     * @ORM\Column(name="NaturEchant", type="string", length=255)
     */
    private $NaturEchant;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set CodeLabo
     *
     * @param string $codeLabo
     * @return Analyse
     */
    public function setCodeLabo($codeLabo) {
        $this->CodeLabo = $codeLabo;

        return $this;
    }

    /**
     * Get CodeLabo
     *
     * @return string 
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
     * Set idUser
     *
     * @param \Inra2013\urzBundle\Entity\User $idUser
     * @return Analyse
     */
    public function setIdUser(\Inra2013\urzBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;
    
        return $this;
    }

    /**
     * Get idUser
     *
     * @return \Inra2013\urzBundle\Entity\User 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idAnimal
     *
     * @param \Inra2013\urzBundle\Entity\Animal $idAnimal
     * @return Analyse
     */
    public function setIdAnimal(\Inra2013\urzBundle\Entity\Animal $idAnimal = null)
    {
        $this->idAnimal = $idAnimal;
    
        return $this;
    }

    /**
     * Get idAnimal
     *
     * @return \Inra2013\urzBundle\Entity\Animal 
     */
    public function getIdAnimal()
    {
        return $this->idAnimal;
    }
}