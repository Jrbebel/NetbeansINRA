<?php 
   
namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnaEssai
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AnaEssai
{
      /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\Analyse")
     * @ORM\JoinColumn(name="CodeLabo", referencedColumnName="CodeLabo")
     */
    private $CodeLabo;

 /**
     * @var integer
     * 
     * @ORM\Column(name="Essai1", type="integer", nullable=true)
     */
    private $Essai1;  /**
     * @var integer
     * 
     * @ORM\Column(name="Essai2", type="integer", nullable=true)
     */
    private $Essai2;  /**
     * @var integer
     * 
     * @ORM\Column(name="Essai3", type="integer", nullable=true)
     */
    private $Essai3;  /**
     * @var integer
     * 
     * @ORM\Column(name="Essai4", type="integer", nullable=true)
     */
    private $Essai4; 
    
  /**
     *  *@ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\User")
     * 
     */
    private $User;

    /**
     * Get id
     *
     * @return integer 
     */
    
     
    /**
     * Set Essai1
     *
     * @param integer $essai1
     * @return AnaEssai
     */
    public function setEssai1($essai1)
    {
        $this->Essai1 = $essai1;
    
        return $this;
    }

    /**
     * Get Essai1
     *
     * @return integer 
     */
    public function getEssai1()
    {
        return $this->Essai1;
    }

    /**
     * Set Essai2
     *
     * @param integer $essai2
     * @return AnaEssai
     */
    public function setEssai2($essai2)
    {
        $this->Essai2 = $essai2;
    
        return $this;
    }

    /**
     * Get Essai2
     *
     * @return integer 
     */
    public function getEssai2()
    {
        return $this->Essai2;
    }

    /**
     * Set Essai3
     *
     * @param integer $essai3
     * @return AnaEssai
     */
    public function setEssai3($essai3)
    {
        $this->Essai3 = $essai3;
    
        return $this;
    }

    /**
     * Get Essai3
     *
     * @return integer 
     */
    public function getEssai3()
    {
        return $this->Essai3;
    }

    /**
     * Set Essai4
     *
     * @param integer $essai4
     * @return AnaEssai
     */
    public function setEssai4($essai4)
    {
        $this->Essai4 = $essai4;
    
        return $this;
    }

    /**
     * Get Essai4
     *
     * @return integer 
     */
    public function getEssai4()
    {
        return $this->Essai4;
    }

    /**
     * Set CodeLabo
     *
     * @param \Inra2013\urzBundle\Entity\Analyse $codeLabo
     * @return AnaEssai
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
     * @return AnaEssai
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