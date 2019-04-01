<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Degustation;

/**
 * SousMenuDegustation
 *
 * @ORM\Table(name="sous_menu_degustation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SousMenuDegustationRepository")
 */
class SousMenuDegustation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

   /**
     * @var string
     *
     * @ORM\Column(name="description_fr", type="text", nullable=true)
     */
    private $descriptionFr;

    /**
     * @var string
     *
     * @ORM\Column(name="note_degustation_fr", type="text", nullable=true)
     */
    private $noteDegustationFr;

    /**
     * @var string
     *
     * @ORM\Column(name="description_en", type="text", nullable=true)
     */
    private $descriptionEn;

    /**
     * @var string
     *
     * @ORM\Column(name="note_degustation_en", type="text", nullable=true)
     */
    private $noteDegustationEn;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur_arriere_plan", type="string", length=200, nullable=true)
     */
    private $couleurArrierePlan;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_fr", type="string", length=255, nullable=true)
     */
    private $titreFr;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_en", type="string", length=255, nullable=true)
     */
    private $titreEn;

    /**
     * @var Degustation
     *
     * @ORM\ManyToOne(targetEntity="Degustation")
     * @ORM\JoinColumn(name="id_degustation", referencedColumnName="id")
     */
    private $idDegustation;


    /**
     * Set descriptionFr
     *
     * @param string $descriptionFr
     * @return SousMenuDegustation
     */
    public function setDescriptionFr($descriptionFr)
    {
        $this->descriptionFr = $descriptionFr;
    
        return $this;
    }

    /**
     * Get descriptionFr
     *
     * @return string
     */
    public function getDescriptionFr()
    {
        return $this->descriptionFr;
    }

    /**
     * Set noteDegustationFr
     *
     * @param string $noteDegustationFr
     * @return SousMenuDegustation
     */
    public function setNoteDegustationFr($noteDegustationFr)
    {
        $this->noteDegustationFr = $noteDegustationFr;
    
        return $this;
    }

    /**
     * Get noteDegustationFr
     *
     * @return string
     */
    public function getNoteDegustationFr()
    {
        return $this->noteDegustationFr;
    }

    /**
     * Set descriptionEn
     *
     * @param string $descriptionEn
     * @return SousMenuDegustation
     */
    public function setDescriptionEn($descriptionEn)
    {
        $this->descriptionEn = $descriptionEn;
    
        return $this;
    }

    /**
     * Get descriptionEn
     *
     * @return string
     */
    public function getDescriptionEn()
    {
        return $this->descriptionEn;
    }

    /**
     * Set noteDegustationEn
     *
     * @param string $noteDegustationEn
     * @return SousMenuDegustation
     */
    public function setNoteDegustationEn($noteDegustationEn)
    {
        $this->noteDegustationEn = $noteDegustationEn;
    
        return $this;
    }

    /**
     * Get noteDegustationEn
     *
     * @return string
     */
    public function getNoteDegustationEn()
    {
        return $this->noteDegustationEn;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return SousMenuDegustation
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set couleurArrierePlan
     *
     * @param string $couleurArrierePlan
     * @return SousMenuDegustation
     */
    public function setCouleurArrierePlan($couleurArrierePlan)
    {
        $this->couleurArrierePlan = $couleurArrierePlan;
    
        return $this;
    }

    /**
     * Get couleurArrierePlan
     *
     * @return string
     */
    public function getCouleurArrierePlan()
    {
        return $this->couleurArrierePlan;
    }

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
     * Set idDegustation
     *
     * @param Degustation $idDegustation
     * @return SousMenuDegustation
     */
    public function setIdDegustation(Degustation $idDegustation = null)
    {
        $this->idDegustation = $idDegustation;
    
        return $this;
    }

    /**
     * Get idDegustation
     *
     * @return Degustation
     */
    public function getIdDegustation()
    {
        return $this->idDegustation;
    }

    /**
     * Set titreFr
     *
     * @param string $titreFr
     * @return SousMenuDegustation
     */
    public function setTitreFr($titreFr)
    {
        $this->titreFr = $titreFr;
    
        return $this;
    }

    /**
     * Get titreFr
     *
     * @return string
     */
    public function getTitreFr()
    {
        return $this->titreFr;
    }

    /**
     * Set titreEn
     *
     * @param string $titreEn
     * @return SousMenuDegustation
     */
    public function setTitreEn($titreEn)
    {
        $this->titreEn = $titreEn;
    
        return $this;
    }

    /**
     * Get titreEn
     *
     * @return string
     */
    public function getTitreEn()
    {
        return $this->titreEn;
    }
}
