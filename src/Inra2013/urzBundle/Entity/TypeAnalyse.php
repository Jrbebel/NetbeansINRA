<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeAnalyse
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Inra2013\urzBundle\Entity\TypeAnalyseRepository")
 */
class TypeAnalyse {

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
     * @ORM\ManyToOne(targetEntity = "Inra2013\urzBundle\Entity\CategorieAnalyse")
     * 
     * 
     */
    private $TypeCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="text")
     */
    private $Nom;

    public function __toString() {
        return $this->getNom();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set Nom
     *
     * @param string $nom
     * @return TypeAnalyse
     */
    public function setNom($nom) {
        $this->Nom = $nom;

        return $this;
    }

    /**
     * Get Nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->Nom;
    }


    /**
     * Set TypeAnalyse
     *
     * @param \Inra2013\urzBundle\Entity\TypeAnalyse $typeAnalyse
     * @return TypeAnalyse
     */
    public function setTypeAnalyse(\Inra2013\urzBundle\Entity\TypeAnalyse $typeAnalyse = null)
    {
        $this->TypeAnalyse = $typeAnalyse;
    
        return $this;
    }

    /**
     * Get TypeAnalyse
     *
     * @return \Inra2013\urzBundle\Entity\TypeAnalyse 
     */
    public function getTypeAnalyse()
    {
        return $this->TypeAnalyse;
    }
}