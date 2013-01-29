<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Animal
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Animal
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
     * @ORM\Column(name="NomAnimal", type="string", length=255)
     */
    private $NomAnimal;

    /**
     * @var string
     *
     * @ORM\Column(name="Sexe", type="string", length=255)
     */
    private $Sexe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="Espece", type="string", length=255)
     */
    private $Espece;


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
     * Set NomAnimal
     *
     * @param string $nomAnimal
     * @return Animal
     */
    public function setNomAnimal($nomAnimal)
    {
        $this->NomAnimal = $nomAnimal;
    
        return $this;
    }

    /**
     * Get NomAnimal
     *
     * @return string 
     */
    public function getNomAnimal()
    {
        return $this->NomAnimal;
    }

    /**
     * Set Sexe
     *
     * @param string $sexe
     * @return Animal
     */
    public function setSexe($sexe)
    {
        $this->Sexe = $sexe;
    
        return $this;
    }

    /**
     * Get Sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->Sexe;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Animal
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    
        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set Espece
     *
     * @param string $espece
     * @return Animal
     */
    public function setEspece($espece)
    {
        $this->Espece = $espece;
    
        return $this;
    }

    /**
     * Get Espece
     *
     * @return string 
     */
    public function getEspece()
    {
        return $this->Espece;
    }
}