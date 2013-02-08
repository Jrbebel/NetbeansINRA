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
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity = "Inra2013\urzBundle\Entity\Protocole")
     * 
     */
    private $Protocole;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\TypeAnalyse")
     */
    private $TypeAnalyse;

    /**
     *  *@ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\User")
     * 
     */
    private $AnalyseUser;


    /**
     * Set TypeAnalyse
     *
     * @param \Inra2013\urzBundle\Entity\TypeAnalyse $typeAnalyse
     * @return ProtocoleAnalyse
     */
    public function setTypeAnalyse(\Inra2013\urzBundle\Entity\TypeAnalyse $typeAnalyse)
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
     * Set AnalyseUser
     *
     * @param \Inra2013\urzBundle\Entity\User $analyseUser
     * @return ProtocoleAnalyse
     */
    public function setAnalyseUser(\Inra2013\urzBundle\Entity\User $analyseUser = null)
    {
        $this->AnalyseUser = $analyseUser;
    
        return $this;
    }

    /**
     * Get AnalyseUser
     *
     * @return \Inra2013\urzBundle\Entity\User 
     */
    public function getAnalyseUser()
    {
        return $this->AnalyseUser;
    }

    /**
     * Set Protocole
     *
     * @param \Inra2013\urzBundle\Entity\Protocole $protocole
     * @return ProtocoleAnalyse
     */
    public function setProtocole(\Inra2013\urzBundle\Entity\Protocole $protocole)
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