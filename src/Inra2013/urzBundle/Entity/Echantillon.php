<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Echantillon
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Echantillon {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\TypeEchantillon")

     * 
     */
    private $TypeEchanti;

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
    public function getId() {
        return $this->id;
    }

    /**
     * Set Code
     *
     * @param string $code
     * @return Echantillon
     */
    public function setCode($code) {
        $this->Code = $code;

        return $this;
    }

    /**
     * Get Code
     *
     * @return string 
     */
    public function getCode() {
        return $this->Code;
    }

    /**
     * Set Intitulé
     *
     * @param string $intitulé
     * @return Echantillon
     */
    public function setIntitulé($intitulé) {
        $this->Intitulé = $intitulé;

        return $this;
    }

    /**
     * Get Intitulé
     *
     * @return string 
     */
    public function getIntitulé() {
        return $this->Intitulé;
    }


    /**
     * Set TypeEchanti
     *
     * @param \Inra2013\urzBundle\Entity\TypeEchantillon $typeEchanti
     * @return Echantillon
     */
    public function setTypeEchanti(\Inra2013\urzBundle\Entity\TypeEchantillon $typeEchanti = null)
    {
        $this->TypeEchanti = $typeEchanti;
    
        return $this;
    }

    /**
     * Get TypeEchanti
     *
     * @return \Inra2013\urzBundle\Entity\TypeEchantillon 
     */
    public function getTypeEchanti()
    {
        return $this->TypeEchanti;
    }
}