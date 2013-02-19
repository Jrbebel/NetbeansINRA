<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieAnalyse
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Inra2013\urzBundle\Entity\CategorieAnalyseRepository")
 */
class CategorieAnalyse {

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
     * @ORM\ManyToOne(targetEntity = "Inra2013\urzBundle\Entity\TypeCategorie")
     * 
     * 
     */
    private $TypeCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $Nom;

  

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
     * Set Nom
     *
     * @param string $nom
     * @return CategorieAnalyse
     */
    public function setNom($nom)
    {
        $this->Nom = $nom;
    
        return $this;
    }

    /**
     * Get Nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Set TypeCategorie
     *
     * @param \Inra2013\urzBundle\Entity\TypeCategorie $typeCategorie
     * @return CategorieAnalyse
     */
    public function setTypeCategorie(\Inra2013\urzBundle\Entity\TypeCategorie $typeCategorie = null)
    {
        $this->TypeCategorie = $typeCategorie;
    
        return $this;
    }

    /**
     * Get TypeCategorie
     *
     * @return \Inra2013\urzBundle\Entity\TypeCategorie 
     */
    public function getTypeCategorie()
    {
        return $this->TypeCategorie;
    }
}