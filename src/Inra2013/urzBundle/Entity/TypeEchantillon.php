<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeEchantillon
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeEchantillon
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
     * @ORM\Column(name="NomEchan", type="string", length=255)
     */
    private $NomEchan;


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
     * Set NomEchan
     *
     * @param string $nomEchan
     * @return TypeEchantillon
     */
    public function setNomEchan($nomEchan)
    {
        $this->NomEchan = $nomEchan;
    
        return $this;
    }

    /**
     * Get NomEchan
     *
     * @return string 
     */
    public function getNomEchan()
    {
        return $this->NomEchan;
    }
}