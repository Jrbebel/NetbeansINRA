<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProtocoleAnalyse
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ProtocoleAnalyse {
    
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
     *
     * 
     * @ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\CategorieAnalyse")
     * 
     */
    private $CategorieAnalyse ;
    
    
    
    /**
     * 
     *
     * @ORM\ManyToOne(targetEntity = "Inra2013\urzBundle\Entity\Protocole")
     * 
     */
    private $Protocole;
 
public function __construct() { 
    
        $this->CategorieAnalyse= new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set CategorieAnalyse
     *
     * @param \Inra2013\urzBundle\Entity\CategorieAnalyse $categorieAnalyse
     * @return ProtocoleAnalyse
     */
    public function setCategorieAnalyse(\Inra2013\urzBundle\Entity\CategorieAnalyse $categorieAnalyse)
    {
        $this->CategorieAnalyse = $categorieAnalyse;
    
        return $this;
    }

    /**
     * Get CategorieAnalyse
     *
     * @return \Inra2013\urzBundle\Entity\CategorieAnalyse 
     */
    public function getCategorieAnalyse()
    {
        return $this->CategorieAnalyse;
    }

    /**
     * Set Protocole
     *
     * @param \Inra2013\urzBundle\Entity\Protocole $protocole
     * @return ProtocoleAnalyse
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}