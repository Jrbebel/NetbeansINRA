<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnaOPG
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AnaOPG
{
    /**
     * @ORM\Id
     *  *@ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\Analyse")
     * @ORM\JoinColumn(name="CodeLabo", referencedColumnName="CodeLabo")
     */
    private $CodeLabo;
     /**
     *  *@ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\User")
     * 
     */
    private $User;

    /**
     * @var integer
     *
     * @ORM\Column(name="OeufLu", type="integer")
     */
    private $OeufLu;

    /**
     * @var integer
     *
     * @ORM\Column(name="VolLu", type="integer")
     */
    private $VolLu;

    /**
     * @var integer
     *
     * @ORM\Column(name="Opg", type="integer")
     */
    private $Opg;

    /**
     * @var integer
     *
     * @ORM\Column(name="Conccidies", type="integer")
     */
    private $Conccidies;

    /**
     * @var integer
     *
     * @ORM\Column(name="Monezia", type="integer")
     */
    private $Monezia;

    /**
     * @var integer
     *
     * @ORM\Column(name="Strongeledia", type="integer")
     */
    private $Strongeledia;


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
     * Set OeufLu
     *
     * @param integer $oeufLu
     * @return AnaOPG
     */
    public function setOeufLu($oeufLu)
    {
        $this->OeufLu = $oeufLu;
    
        return $this;
    }

    /**
     * Get OeufLu
     *
     * @return integer 
     */
    public function getOeufLu()
    {
        return $this->OeufLu;
    }

    /**
     * Set VolLu
     *
     * @param integer $volLu
     * @return AnaOPG
     */
    public function setVolLu($volLu)
    {
        $this->VolLu = $volLu;
    
        return $this;
    }

    /**
     * Get VolLu
     *
     * @return integer 
     */
    public function getVolLu()
    {
        return $this->VolLu;
    }

    /**
     * Set Opg
     *
     * @param integer $opg
     * @return AnaOPG
     */
    public function setOpg($opg)
    {
        $this->Opg = $opg;
    
        return $this;
    }

    /**
     * Get Opg
     *
     * @return integer 
     */
    public function getOpg()
    {
        return $this->Opg;
    }

    /**
     * Set Conccidies
     *
     * @param integer $conccidies
     * @return AnaOPG
     */
    public function setConccidies($conccidies)
    {
        $this->Conccidies = $conccidies;
    
        return $this;
    }

    /**
     * Get Conccidies
     *
     * @return integer 
     */
    public function getConccidies()
    {
        return $this->Conccidies;
    }

    /**
     * Set Monezia
     *
     * @param integer $monezia
     * @return AnaOPG
     */
    public function setMonezia($monezia)
    {
        $this->Monezia = $monezia;
    
        return $this;
    }

    /**
     * Get Monezia
     *
     * @return integer 
     */
    public function getMonezia()
    {
        return $this->Monezia;
    }

    /**
     * Set Strongeledia
     *
     * @param integer $strongeledia
     * @return AnaOPG
     */
    public function setStrongeledia($strongeledia)
    {
        $this->Strongeledia = $strongeledia;
    
        return $this;
    }

    /**
     * Get Strongeledia
     *
     * @return integer 
     */
    public function getStrongeledia()
    {
        return $this->Strongeledia;
    }
}
