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
     *
     * @ORM\OneToMany(targetEntity = "Inra2013\urzBundle\Entity\Champ",mappedBy="Analyse")
     * 
     * 
     */
    private $Champs;


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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Champs = new \Doctrine\Common\Collections\ArrayCollection();
       
    }
    
    /**
     * Set TypeCategorie
     *
     * @param \Inra2013\urzBundle\Entity\CategorieAnalyse $typeCategorie
     * @return TypeAnalyse
     */
    public function setTypeCategorie(\Inra2013\urzBundle\Entity\CategorieAnalyse $typeCategorie = null)
    {
        $this->TypeCategorie = $typeCategorie;
    
        return $this;
    }

    /**
     * Get TypeCategorie
     *
     * @return \Inra2013\urzBundle\Entity\CategorieAnalyse 
     */
    public function getTypeCategorie()
    {
        return $this->TypeCategorie;
    }

    /**
     * Add Champs
     *
     * @param \Inra2013\urzBundle\Entity\CategorieAnalyse $champs
     * @return TypeAnalyse
     */
    public function addChamp(\Inra2013\urzBundle\Entity\CategorieAnalyse $champs)
    {
        $this->Champs[] = $champs;
    
        return $this;
    }

    /**
     * Remove Champs
     *
     * @param \Inra2013\urzBundle\Entity\CategorieAnalyse $champs
     */
    public function removeChamp(\Inra2013\urzBundle\Entity\CategorieAnalyse $champs)
    {
        $this->Champs->removeElement($champs);
    }

    /**
     * Get Champs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChamps()
    {
        return $this->Champs;
    }
}