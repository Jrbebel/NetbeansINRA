<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnaEosinophile
 *
 * @ORM\Table()
 * @ORM\Entity
 *
 */
class AnaEosinophile {

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\Analyse", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="CodeLabo", referencedColumnName="CodeLabo")
     */
    private $CodeLabo;

    /**
     *  *@ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\User")
     * 
     */
    private $User;

    /**
     * @var integer
     *
     * @ORM\Column(name="EosinoLu", type="integer", nullable=true)
     */
    private $EosinoLu;

    /**
     * @var integer
     *
     * @ORM\Column(name="EosinoVal", type="integer", nullable=true)
     */
    private $EosinoVal;

   


   

    /**
     * Set EosinoLu
     *
     * @param integer $eosinoLu
     * @return AnaEosinophile
     */
    public function setEosinoLu($eosinoLu)
    {
        $this->EosinoLu = $eosinoLu;
    
        return $this;
    }

    /**
     * Get EosinoLu
     *
     * @return integer 
     */
    public function getEosinoLu()
    {
        return $this->EosinoLu;
    }

    /**
     * Set EosinoVal
     *
     * @param integer $eosinoVal
     * @return AnaEosinophile
     */
    public function setEosinoVal($eosinoVal)
    {
        $this->EosinoVal = $eosinoVal;
    
        return $this;
    }

    /**
     * Get EosinoVal
     *
     * @return integer 
     */
    public function getEosinoVal()
    {
        return $this->EosinoVal;
    }

    /**
     * Set CodeLabo
     *
     * @param \Inra2013\urzBundle\Entity\Analyse $codeLabo
     * @return AnaEosinophile
     */
    public function setCodeLabo(\Inra2013\urzBundle\Entity\Analyse $codeLabo)
    {
        $this->CodeLabo = $codeLabo;
    
        return $this;
    }

    /**
     * Get CodeLabo
     *
     * @return \Inra2013\urzBundle\Entity\Analyse 
     */
    public function getCodeLabo()
    {
        return $this->CodeLabo;
    }

    /**
     * Set User
     *
     * @param \Inra2013\urzBundle\Entity\User $user
     * @return AnaEosinophile
     */
    public function setUser(\Inra2013\urzBundle\Entity\User $user = null)
    {
        $this->User = $user;
    
        return $this;
    }

    /**
     * Get User
     *
     * @return \Inra2013\urzBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->User;
    }
}