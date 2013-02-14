<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnaEosino
 *
 * @ORM\Table()
 * @ORM\Entity
 *
 */
class AnaEosino {

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\Analyse")
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
     * @ORM\Column(name="Eosino_lu", type="integer")
     */
    private $Eosino_lu;

    /**
     * @var integer
     *
     * @ORM\Column(name="Eosino_val", type="integer")
     */
    private $Eosino_val;

   


    /**
     * Set Eosino_lu
     *
     * @param integer $eosinoLu
     * @return AnaEosino
     */
    public function setEosinoLu($eosinoLu)
    {
        $this->Eosino_lu = $eosinoLu;
    
        return $this;
    }

    /**
     * Get Eosino_lu
     *
     * @return integer 
     */
    public function getEosinoLu()
    {
        return $this->Eosino_lu;
    }

    /**
     * Set Eosino_val
     *
     * @param integer $eosinoVal
     * @return AnaEosino
     */
    public function setEosinoVal($eosinoVal)
    {
        $this->Eosino_val = $eosinoVal;
    
        return $this;
    }

    /**
     * Get Eosino_val
     *
     * @return integer 
     */
    public function getEosinoVal()
    {
        return $this->Eosino_val;
    }

    /**
     * Set CodeLabo
     *
     * @param \Inra2013\urzBundle\Entity\Analyse $codeLabo
     * @return AnaEosino
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
     * @return AnaEosino
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