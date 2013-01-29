<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Echantillon
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Echantillon
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
     * @ORM\Column(name="Code", type="string", length=255)
     */
    private $Code;

    /**
     * @var string
     *
     * @ORM\Column(name="Intitulé", type="text")
     */
    private $Intitulé;


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
     * Set Code
     *
     * @param string $code
     * @return Echantillon
     */
    public function setCode($code)
    {
        $this->Code = $code;
    
        return $this;
    }

    /**
     * Get Code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * Set Intitulé
     *
     * @param string $intitulé
     * @return Echantillon
     */
    public function setIntitulé($intitulé)
    {
        $this->Intitulé = $intitulé;
    
        return $this;
    }

    /**
     * Get Intitulé
     *
     * @return string 
     */
    public function getIntitulé()
    {
        return $this->Intitulé;
    }
}
