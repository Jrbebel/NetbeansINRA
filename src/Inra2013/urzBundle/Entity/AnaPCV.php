<?php 
   
namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnaEssai
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AnaPCV
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
     * @ORM\Column(name="PCV1", type="integer", nullable=true)
     */
    private $PCV1; 
    
    /**
     * @var integer
     * 
     * @ORM\Column(name="PCV2", type="integer", nullable=true)
     */
    
    private $PCV2; 
    
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
     * Set PCV1
     *
     * @param integer $pCV1
     * @return AnaPCV
     */
    public function setPCV1($pCV1)
    {
        $this->PCV1 = $pCV1;
    
        return $this;
    }

    /**
     * Get PCV1
     *
     * @return integer 
     */
    public function getPCV1()
    {
        return $this->PCV1;
    }

    /**
     * Set PCV2
     *
     * @param integer $pCV2
     * @return AnaPCV
     */
    public function setPCV2($pCV2)
    {
        $this->PCV2 = $pCV2;
    
        return $this;
    }

    /**
     * Get PCV2
     *
     * @return integer 
     */
    public function getPCV2()
    {
        return $this->PCV2;
    }

    /**
     * Set CodeLabo
     *
     * @param \Inra2013\urzBundle\Entity\Analyse $codeLabo
     * @return AnaPCV
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
     * @return AnaPCV
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