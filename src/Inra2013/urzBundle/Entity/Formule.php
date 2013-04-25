<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formule
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Inra2013\urzBundle\Entity\FormuleRepository")
 */
class Formule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="FormuMath", type="string", length=255)
     */
    private $FormuMath;
    
  /**
     *  *@ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\Champ",inversedBy="Champ",cascade={"persist"})
     * 
     */
    private $Champs;

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
     * Set FormuMath
     *
     * @param string $formuMath
     * @return Formule
     */
    public function setFormuMath($formuMath)
    {
        $this->FormuMath = $formuMath;
    
        return $this;
    }

    /**
     * Get FormuMath
     *
     * @return string 
     */
    public function getFormuMath()
    {
        return $this->FormuMath;
    }

    /**
     * Set Champs
     *
     * @param \Inra2013\urzBundle\Entity\Champ $champs
     * @return Formule
     */
    public function setChamps(\Inra2013\urzBundle\Entity\Champ $champs = null)
    {
        $this->Champs = $champs;
    
        return $this;
    }

    /**
     * Get Champs
     *
     * @return \Inra2013\urzBundle\Entity\Champ 
     */
    public function getChamps()
    {
        return $this->Champs;
    }
}