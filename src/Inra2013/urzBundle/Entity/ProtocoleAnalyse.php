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
     * @ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\TypeAnalyse")
     * 
     */
    private $TypeAnalyse ;
    
    
    
    /**
     * 
     *
     * @ORM\ManyToOne(targetEntity = "Inra2013\urzBundle\Entity\Protocole")
     * 
     */
    private $Protocole;
 
public function __construct() { 
    
        $this->TypeAnalyse= new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set TypeAnalyse
     *
     * @param \Inra2013\urzBundle\Entity\TypeAnalyse $typeAnalyse
     * @return ProtocoleAnalyse
     */
    public function setTypeAnalyse(\Inra2013\urzBundle\Entity\TypeAnalyse $typeAnalyse = null)
    {
        $this->TypeAnalyse = $typeAnalyse;
    
        return $this;
    }

    /**
     * Get TypeAnalyse
     *
     * @return \Inra2013\urzBundle\Entity\TypeAnalyse 
     */
    public function getTypeAnalyse()
    {
        return $this->TypeAnalyse;
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
}