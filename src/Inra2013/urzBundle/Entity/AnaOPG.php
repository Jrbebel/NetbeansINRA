<?php

namespace Inra2013\urzBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * AnaOPG
 *
 * @ORM\Table(name="AnaOPG")
 * @ORM\Entity
 */
class AnaOPG {

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\Analyse")
     * @ORM\JoinColumn(name="CodeLabo", referencedColumnName="CodeLabo")
     */
    private $CodeLabo;

    /**
     *  
     * @ORM\Column(name="OPG1",type="integer",  nullable=true)
     * 
     * 
     */
    private $OPG1;

    /**
     *
     * 
     * @ORM\Column(name="OPG2",type="integer",  nullable=true)
     */
    private $OPG2;

    /**
     * 
     * @ORM\Column(name="OPG3",type="integer",  nullable=true)
     */
    private $OPG3;

    /**
     *  
     *  @ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\User")
     * 
     * 
     */
    private $User;

    
    public function __construct() {
        //$user=$this->container->get('security.context')->getToken()->getUser();
        //$this->setUser($user);
      
    }

    /**
     * Set OPG1
     *
     * @param integer $oPG1
     * @return AnaOPG
     */
    public function setOPG1($oPG1)
    {
        $this->OPG1 = $oPG1;
    
        return $this;
    }

    /**
     * Get OPG1
     *
     * @return integer 
     */
    public function getOPG1()
    {
        return $this->OPG1;
    }

    /**
     * Set OPG2
     *
     * @param integer $oPG2
     * @return AnaOPG
     */
    public function setOPG2($oPG2)
    {
        $this->OPG2 = $oPG2;
    
        return $this;
    }

    /**
     * Get OPG2
     *
     * @return integer 
     */
    public function getOPG2()
    {
        return $this->OPG2;
    }

    /**
     * Set OPG3
     *
     * @param integer $oPG3
     * @return AnaOPG
     */
    public function setOPG3($oPG3)
    {
        $this->OPG3 = $oPG3;
    
        return $this;
    }

    /**
     * Get OPG3
     *
     * @return integer 
     */
    public function getOPG3()
    {
        return $this->OPG3;
    }

    /**
     * Set CodeLabo
     *
     * @param \Inra2013\urzBundle\Entity\Analyse $codeLabo
     * @return AnaOPG
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
     * @return AnaOPG
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