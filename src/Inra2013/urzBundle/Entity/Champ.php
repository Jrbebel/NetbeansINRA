<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Champ
 *
 * @ORM\Table()
 *  @ORM\Entity(repositoryClass="Inra2013\urzBundle\Entity\ChampRepository")
 */
class Champ
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
     * @ORM\Column(name="Champ", type="string", length=255)
     */
    private $Champ;

    /**
     *  *@ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\TypeAnalyse",inversedBy="Analyse")
     * 
     */
    private $Analyse;


  

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
     * Set Champ
     *
     * @param string $champ
     * @return Champ
     */
    public function setChamp($champ)
    {
        $this->Champ = $champ;
    
        return $this;
    }

    /**
     * Get Champ
     *
     * @return string 
     */
    public function getChamp()
    {
        return $this->Champ;
    }

    /**
     * Set Analyse
     *
     * @param \Inra2013\urzBundle\Entity\TypeAnalyse $analyse
     * @return Champ
     */
    public function setAnalyse(\Inra2013\urzBundle\Entity\TypeAnalyse $analyse = null)
    {
        $this->Analyse = $analyse;
    
        return $this;
    }

    /**
     * Get Analyse
     *
     * @return \Inra2013\urzBundle\Entity\TypeAnalyse 
     */
    public function getAnalyse()
    {
        return $this->Analyse;
    }
}