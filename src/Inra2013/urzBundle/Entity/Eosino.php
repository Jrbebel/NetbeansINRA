<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eosino
 *
 * @ORM\Table()
 * @ORM\Entity
 *
 */
class Eosino
{
    
       /**
     *  *@ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\Eosino")
     * 
     */
    private $CodeLabo;
    
    /**
     * @var integer
      * 
     * 
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Eosino_lu
     *
     * @param integer $eosinoLu
     * @return Eosino
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
     * @return Eosino
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
     * @param \Inra2013\urzBundle\Entity\Eosino $codeLabo
     * @return Eosino
     */
    public function setCodeLabo(\Inra2013\urzBundle\Entity\Eosino $codeLabo = null)
    {
        $this->CodeLabo = $codeLabo;
    
        return $this;
    }

    /**
     * Get CodeLabo
     *
     * @return \Inra2013\urzBundle\Entity\Eosino 
     */
    public function getCodeLabo()
    {
        return $this->CodeLabo;
    }
}