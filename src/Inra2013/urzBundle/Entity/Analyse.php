<?php

namespace Inra2013\urzBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
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
     * @ORM\Column(name="DatePrelev",type="date",nullable=true)
     */
    private $DatePrelev;

    /**
     * @var \Date
     * @ORM\Column(name="DateAnalyse", type="date", nullable=true)
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
    * @Assert\Collection(
     *     fields = {
     *       
     *         "OPG1" = {
     *             
     *             @Assert\Type(
     *                 type = "integer",message="I pa bon"
     *                 
     *             ),
     *             @Assert\Max(limit = "5", message = "The max value for the note is 5")
     *         },
     *         
  
     *         "OPG2" = {
     *             
     *             @Assert\Type(
     *                 type = "integer",message="I pa bon"
     *                 
     *             ),
     *             @Assert\Max(limit = "5", message = "The max value for the note is 5")
     *         },
     *         
  
     *         "OPG3" = {
     *             
     *             @Assert\Type(
     *                 type = "integer",message="I pa bon"
     *                 
     *             ),
     *             @Assert\Max(limit = "5", message = "The max value for the note is 5")
     *         },
     *         
   
     *            },
     *     allowMissingFields = true,
     *     allowExtraFields = true
     * )
     *
     * @ORM\OneToMany(targetEntity ="Inra2013\urzBundle\Entity\AnaOPG",mappedBy="CodeLabo",cascade={"persist"})
     * 
     */
    private $ChampsOPG;
        
       /**
    * @Assert\Collection(
     *     fields = {
     *       
     *         "PCV1" = {
     *             
     *             @Assert\Type(
     *                 type = "integer",message="I pa bon"
     *                 
     *             ),
     *             @Assert\Max(limit = "5", message = "The max value for the note is 5")
     *         },
     *         
  
     *         "PCV2" = {
     *             
     *             @Assert\Type(
     *                 type = "integer",message="I pa bon"
     *                 
     *             ),
     *             @Assert\Max(limit = "5", message = "The max value for the note is 5")
     *         },
     *         
   
     *            },
     *     allowMissingFields = true,
     *     allowExtraFields = true
     * )
     *
     * @ORM\OneToMany(targetEntity ="Inra2013\urzBundle\Entity\AnaPCV",mappedBy="CodeLabo",cascade={"persist"})
     * 
     */
    private $ChampsPCV;
        
       /**
    * @Assert\Collection(
     *     fields = {
     *       
     *         "Eosinophile1" = {
     *             
     *             @Assert\Type(
     *                 type = "integer",message="I pa bon"
     *                 
     *             ),
     *             @Assert\Max(limit = "5", message = "The max value for the note is 5")
     *         },
     *         
  
     *         "Eosinophile2" = {
     *             
     *             @Assert\Type(
     *                 type = "integer",message="I pa bon"
     *                 
     *             ),
     *             @Assert\Max(limit = "5", message = "The max value for the note is 5")
     *         },
     *         
   
     *            },
     *     allowMissingFields = true,
     *     allowExtraFields = true
     * )
     *
     * @ORM\OneToMany(targetEntity ="Inra2013\urzBundle\Entity\AnaEosinophile",mappedBy="CodeLabo",cascade={"persist"})
     * 
     */
    private $ChampsEosinophile;
        

        
 /**
     * Constructor
     */
    public function __construct()
    { 
                
  $this->ChampsOPG = new \Doctrine\Common\Collections\ArrayCollection();
 
                
  $this->ChampsPCV = new \Doctrine\Common\Collections\ArrayCollection();
 
                
  $this->ChampsEosinophile = new \Doctrine\Common\Collections\ArrayCollection();
 

}
    /**
     * Set CodeLabo
     *
     * @param integer $codeLabo
     * @return Analyse
     */
    public function setCodeLabo($codeLabo)
    {
        $this->CodeLabo = $codeLabo;
    
        return $this;
    }

    /**
     * Get CodeLabo
     *
     * @return integer 
     */
    public function getCodeLabo()
    {
        return $this->CodeLabo;
    }

    /**
     * Set Animal
     *
     * @param integer $animal
     * @return Analyse
     */
    public function setAnimal($animal)
    {
        $this->Animal = $animal;
    
        return $this;
    }

    /**
     * Get Animal
     *
     * @return integer 
     */
    public function getAnimal()
    {
        return $this->Animal;
    }

    /**
     * Set DatePrelev
     *
     * @param string $datePrelev
     * @return Analyse
     */
    public function setDatePrelev($datePrelev)
    {
        $this->DatePrelev = $datePrelev;
    
        return $this;
    }

    /**
     * Get DatePrelev
     *
     * @return string 
     */
    public function getDatePrelev()
    {
        return $this->DatePrelev;
    }

    /**
     * Set DateAnalyse
     *
     * @param \DateTime $dateAnalyse
     * @return Analyse
     */
    public function setDateAnalyse($dateAnalyse)
    {
        $this->DateAnalyse = $dateAnalyse;
    
        return $this;
    }

    /**
     * Get DateAnalyse
     *
     * @return \DateTime 
     */
    public function getDateAnalyse()
    {
        return $this->DateAnalyse;
    }

    /**
     * Set Observation
     *
     * @param string $observation
     * @return Analyse
     */
    public function setObservation($observation)
    {
        $this->Observation = $observation;
    
        return $this;
    }

    /**
     * Get Observation
     *
     * @return string 
     */
    public function getObservation()
    {
        return $this->Observation;
    }

    /**
     * Set Lot_Groupe
     *
     * @param string $lotGroupe
     * @return Analyse
     */
    public function setLotGroupe($lotGroupe)
    {
        $this->Lot_Groupe = $lotGroupe;
    
        return $this;
    }

    /**
     * Get Lot_Groupe
     *
     * @return string 
     */
    public function getLotGroupe()
    {
        return $this->Lot_Groupe;
    }

    /**
     * Set NaturEchant
     *
     * @param string $naturEchant
     * @return Analyse
     */
    public function setNaturEchant($naturEchant)
    {
        $this->NaturEchant = $naturEchant;
    
        return $this;
    }

    /**
     * Get NaturEchant
     *
     * @return string 
     */
    public function getNaturEchant()
    {
        return $this->NaturEchant;
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

    /**
     * Add ChampsOPG
     *
     * @param \Inra2013\urzBundle\Entity\AnaOPG $champsOPG
     * @return Analyse
     */
    public function addChampsOPG(\Inra2013\urzBundle\Entity\AnaOPG $champsOPG)
    {
        $this->ChampsOPG[] = $champsOPG;
    
        return $this;
    }

    /**
     * Remove ChampsOPG
     *
     * @param \Inra2013\urzBundle\Entity\AnaOPG $champsOPG
     */
    public function removeChampsOPG(\Inra2013\urzBundle\Entity\AnaOPG $champsOPG)
    {
        $this->ChampsOPG->removeElement($champsOPG);
    }

    /**
     * Get ChampsOPG
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChampsOPG()
    {
        return $this->ChampsOPG;
    }

    /**
     * Add ChampsPCV
     *
     * @param \Inra2013\urzBundle\Entity\AnaPCV $champsPCV
     * @return Analyse
     */
    public function addChampsPCV(\Inra2013\urzBundle\Entity\AnaPCV $champsPCV)
    {
        $this->ChampsPCV[] = $champsPCV;
    
        return $this;
    }

    /**
     * Remove ChampsPCV
     *
     * @param \Inra2013\urzBundle\Entity\AnaPCV $champsPCV
     */
    public function removeChampsPCV(\Inra2013\urzBundle\Entity\AnaPCV $champsPCV)
    {
        $this->ChampsPCV->removeElement($champsPCV);
    }

    /**
     * Get ChampsPCV
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChampsPCV()
    {
        return $this->ChampsPCV;
    }

    /**
     * Add ChampsEosinophile
     *
     * @param \Inra2013\urzBundle\Entity\AnaEosinophile $champsEosinophile
     * @return Analyse
     */
    public function addChampsEosinophile(\Inra2013\urzBundle\Entity\AnaEosinophile $champsEosinophile)
    {
        $this->ChampsEosinophile[] = $champsEosinophile;
    
        return $this;
    }

    /**
     * Remove ChampsEosinophile
     *
     * @param \Inra2013\urzBundle\Entity\AnaEosinophile $champsEosinophile
     */
    public function removeChampsEosinophile(\Inra2013\urzBundle\Entity\AnaEosinophile $champsEosinophile)
    {
        $this->ChampsEosinophile->removeElement($champsEosinophile);
    }

    /**
     * Get ChampsEosinophile
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChampsEosinophile()
    {
        return $this->ChampsEosinophile;
    }

    /**
     * Add ChampsEssai
     *
     * @param \Inra2013\urzBundle\Entity\AnaEssai $champsEssai
     * @return Analyse
     */
    public function addChampsEssai(\Inra2013\urzBundle\Entity\AnaEssai $champsEssai)
    {
        $this->ChampsEssai[] = $champsEssai;
    
        return $this;
    }

    /**
     * Remove ChampsEssai
     *
     * @param \Inra2013\urzBundle\Entity\AnaEssai $champsEssai
     */
    public function removeChampsEssai(\Inra2013\urzBundle\Entity\AnaEssai $champsEssai)
    {
        $this->ChampsEssai->removeElement($champsEssai);
    }

    /**
     * Get ChampsEssai
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChampsEssai()
    {
        return $this->ChampsEssai;
    }
}