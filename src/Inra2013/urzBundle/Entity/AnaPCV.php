<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnaPCV
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AnaPCV
{
      /**
     * @ORM\Id
     *  *@ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\Analyse")
     * @ORM\JoinColumn(name="CodeLabo", referencedColumnName="CodeLabo")
     */
    private $CodeLabo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pcv", type="integer")
     */
    private $Pcv;
    
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
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Pcv
     *
     * @param integer $pcv
     * @return AnaPCV
     */
    public function setPcv($pcv)
    {
        $this->Pcv = $pcv;
    
        return $this;
    }

    /**
     * Get Pcv
     *
     * @return integer 
     */
    public function getPcv()
    {
        return $this->Pcv;
    }
}
