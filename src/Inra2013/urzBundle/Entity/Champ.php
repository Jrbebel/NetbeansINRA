<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Champ
 *
 * @ORM\Table()
 *  @ORM\Entity(repositoryClass="Inra2013\urzBundle\Entity\ChampRepository")
 */
class Champ {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Champ", type="string", length=255)
     */
    private $Champ;

    /**
     * @var string
     *
     * @ORM\Column(name="ChampCalcule", type="boolean", nullable=true)
     */
    private $ChampCalcule;

    /**
     *  *@ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\TypeAnalyse",inversedBy="Analyse",cascade={"persist"})
     * 
     */
    private $Analyse;



  

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ChampsFormule = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set Champ
     *
     * @param string $champ
     * @return Champ
     */
    public function setChamp($champ)
    {
        $this->Champ = $champ;
    
        return $this;
    }

    /**
     * Get Champ
     *
     * @return string 
     */
    public function getChamp()
    {
        return $this->Champ;
    }

    /**
     * Set ChampCalcule
     *
     * @param boolean $champCalcule
     * @return Champ
     */
    public function setChampCalcule($champCalcule)
    {
        $this->ChampCalcule = $champCalcule;
    
        return $this;
    }

    /**
     * Get ChampCalcule
     *
     * @return boolean 
     */
    public function getChampCalcule()
    {
        return $this->ChampCalcule;
    }

    /**
     * Set Analyse
     *
     * @param \Inra2013\urzBundle\Entity\TypeAnalyse $analyse
     * @return Champ
     */
    public function setAnalyse(\Inra2013\urzBundle\Entity\TypeAnalyse $analyse = null)
    {
        $this->Analyse = $analyse;
    
        return $this;
    }

    /**
     * Get Analyse
     *
     * @return \Inra2013\urzBundle\Entity\TypeAnalyse 
     */
    public function getAnalyse()
    {
        return $this->Analyse;
    }

    /**
     * Add ChampsFormule
     *
     * @param \Inra2013\urzBundle\Entity\Formule $champsFormule
     * @return Champ
     */
    public function addChampsFormule(\Inra2013\urzBundle\Entity\Formule $champsFormule)
    {
        $this->ChampsFormule[] = $champsFormule;
    
        return $this;
    }

    /**
     * Remove ChampsFormule
     *
     * @param \Inra2013\urzBundle\Entity\Formule $champsFormule
     */
    public function removeChampsFormule(\Inra2013\urzBundle\Entity\Formule $champsFormule)
    {
        $this->ChampsFormule->removeElement($champsFormule);
    }

    /**
     * Get ChampsFormule
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChampsFormule()
    {
        return $this->ChampsFormule;
    }
}