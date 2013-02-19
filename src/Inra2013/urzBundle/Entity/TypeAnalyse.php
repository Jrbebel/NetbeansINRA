<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeAnalyse
 *
 * @ORM\Table()
 * @ORM\Entity
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




}