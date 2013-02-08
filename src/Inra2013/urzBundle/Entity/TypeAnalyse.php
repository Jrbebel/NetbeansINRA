<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeAnalyse
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeAnalyse
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
     * @ORM\Column(name="Nom", type="text")
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
     * @return TypeAnalyse
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
     * Constructor
     */
    public function __construct()
    {
        $this->Protocole = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add Protocole
     *
     * @param \Inra2013\urzBundle\Entity\Protocole $protocole
     * @return TypeAnalyse
     */
    public function addProtocole(\Inra2013\urzBundle\Entity\Protocole $protocole)
    {
        $this->Protocole[] = $protocole;
    
        return $this;
    }

    /**
     * Remove Protocole
     *
     * @param \Inra2013\urzBundle\Entity\Protocole $protocole
     */
    public function removeProtocole(\Inra2013\urzBundle\Entity\Protocole $protocole)
    {
        $this->Protocole->removeElement($protocole);
    }

    /**
     * Get Protocole
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProtocole()
    {
        return $this->Protocole;
    }

    /**
     * Set User
     *
     * @param \Inra2013\urzBundle\Entity\User $user
     * @return TypeAnalyse
     */
    public function setUser(\Inra2013\urzBundle\Entity\User $user = null)
    {
        $this->User = $user;
    
        return $this;
    }

    /**
     * Get User
     *
     * @return \Inra2013\urzBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->User;
    }
}