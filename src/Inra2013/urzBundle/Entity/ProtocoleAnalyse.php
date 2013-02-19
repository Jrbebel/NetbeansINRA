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
     * 
     * @ORM\ManyToOne(targetEntity = "Inra2013\urzBundle\Entity\Protocole")
     * 
     */
    private $Protocole;

    /**
     * @ORM\Id
     * 
     * @ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\CategorieAnalyse")
     */
    private $TypeAnalyse;



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
     * Set TypeAnalyse
     *
     * @param \Inra2013\urzBundle\Entity\CategorieAnalyse $typeAnalyse
     * @return ProtocoleAnalyse
     */
    public function setTypeAnalyse(\Inra2013\urzBundle\Entity\CategorieAnalyse $typeAnalyse)
    {
        $this->TypeAnalyse = $typeAnalyse;
    
        return $this;
    }

    /**
     * Get TypeAnalyse
     *
     * @return \Inra2013\urzBundle\Entity\CategorieAnalyse 
     */
    public function getTypeAnalyse()
    {
        return $this->TypeAnalyse;
    }
}