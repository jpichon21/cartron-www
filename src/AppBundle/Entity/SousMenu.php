<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousMenu
 *
 * @ORM\Table(name="sous_menu")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SousMenuRepository")
 */
class SousMenu
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
     */
    private $titre;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $noteDegustation;

    /**
     * @var string
     */
    private $elaboration;

    /**
     * @var float
     *
     * @ORM\Column(name="degre", type="float", nullable=true)
     */
    private $degre;

    /**
     * @var string
     */
    private $contenance;

    /**
     * @var string
     */
    private $conserver;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="icone", type="string", length=255, nullable=true)
     */
    private $icone;

       /**
     * @var string
     *
     * @ORM\Column(name="titre_fr", type="string", length=255, nullable=true)
     */
    private $titreFr;

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
     * @ORM\Column(name="elaboration_fr", type="text", nullable=true)
     */
    private $elaborationFr;

    /**
     * @var string
     *
     * @ORM\Column(name="contenance_fr", type="string", length=255, nullable=true)
     */
    private $contenanceFr;

    /**
     * @var string
     *
     * @ORM\Column(name="conserver_fr", type="string", length=255, nullable=true)
     */
    private $conserverFr;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_en", type="string", length=255, nullable=true)
     */
    private $titreEn;

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
     * @ORM\Column(name="elaboration_en", type="text", nullable=true)
     */
    private $elaborationEn;

    /**
     * @var string
     *
     * @ORM\Column(name="contenance_en", type="string", length=255, nullable=true)
     */
    private $contenanceEn;

    /**
     * @var string
     *
     * @ORM\Column(name="conserver_en", type="string", length=255, nullable=true)
     */
    private $conserverEn;

    /**
     * @var string
     *
     * @ORM\Column(name="recette_fr", type="string", length=255, nullable=true)
     */
    private $recetteFr;

    /**
     * @var string
     *
     * @ORM\Column(name="recette_en", type="string", length=255, nullable=true)
     */
    private $recetteEn;

    /**
     * @var \AppBundle\Entity\Collection
     *
     * @ORM\ManyToOne(targetEntity="Collection")
     * @ORM\JoinColumn(name="id_collection", referencedColumnName="id")
     */
    private $idCollection;

    /**
     * Set titre
     *
     * @param string $titre
     * @return SousMenu
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return SousMenu
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set noteDegustation
     *
     * @param string $noteDegustation
     * @return SousMenu
     */
    public function setNoteDegustation($noteDegustation)
    {
        $this->noteDegustation = $noteDegustation;
    
        return $this;
    }

    /**
     * Get noteDegustation
     *
     * @return string
     */
    public function getNoteDegustation()
    {
        return $this->noteDegustation;
    }

    /**
     * Set elaboration
     *
     * @param string $elaboration
     * @return SousMenu
     */
    public function setElaboration($elaboration)
    {
        $this->elaboration = $elaboration;
    
        return $this;
    }

    /**
     * Get elaboration
     *
     * @return string
     */
    public function getElaboration()
    {
        return $this->elaboration;
    }

    /**
     * Set degre
     *
     * @param float $degre
     * @return SousMenu
     */
    public function setDegre($degre)
    {
        $this->degre = $degre;
    
        return $this;
    }

    /**
     * Get degre
     *
     * @return integer
     */
    public function getDegre()
    {
        return $this->degre;
    }

    /**
     * Set contenance
     *
     * @param string $contenance
     * @return SousMenu
     */
    public function setContenance($contenance)
    {
        $this->contenance = $contenance;
    
        return $this;
    }

    /**
     * Get contenance
     *
     * @return string
     */
    public function getContenance()
    {
        return $this->contenance;
    }

    /**
     * Set conserver
     *
     * @param string $conserver
     * @return SousMenu
     */
    public function setConserver($conserver)
    {
        $this->conserver = $conserver;
    
        return $this;
    }

    /**
     * Get conserver
     *
     * @return string
     */
    public function getConserver()
    {
        return $this->conserver;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return SousMenu
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
     * Set icone
     *
     * @param string $icone
     * @return SousMenu
     */
    public function setIcone($icone)
    {
        $this->icone = $icone;
    
        return $this;
    }

    /**
     * Get icone
     *
     * @return string
     */
    public function getIcone()
    {
        return $this->icone;
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
     * Set idCollection
     *
     * @param \AppBundle\Entity\Collection $idCollection
     * @return SousMenu
     */
    public function setIdCollection(\AppBundle\Entity\Collection $idCollection = null)
    {
        $this->idCollection = $idCollection;
    
        return $this;
    }

    /**
     * Get idCollection
     *
     * @return \AppBundle\Entity\Collection
     */
    public function getIdCollection()
    {
        return $this->idCollection;
    }

    /**
     * Set titreFr
     *
     * @param string $titreFr
     * @return SousMenu
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
     * Set descriptionFr
     *
     * @param string $descriptionFr
     * @return SousMenu
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
     * @return SousMenu
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
        return stripslashes($this->noteDegustationFr);
    }

    /**
     * Set elaborationFr
     *
     * @param string $elaborationFr
     * @return SousMenu
     */
    public function setElaborationFr($elaborationFr)
    {
        $this->elaborationFr = $elaborationFr;
    
        return $this;
    }

    /**
     * Get elaborationFr
     *
     * @return string
     */
    public function getElaborationFr()
    {
        return stripslashes($this->elaborationFr);
    }

    /**
     * Set contenanceFr
     *
     * @param string $contenanceFr
     * @return SousMenu
     */
    public function setContenanceFr($contenanceFr)
    {
        $this->contenanceFr = $contenanceFr;
    
        return $this;
    }

    /**
     * Get contenanceFr
     *
     * @return string
     */
    public function getContenanceFr()
    {
        return $this->contenanceFr;
    }

    /**
     * Set conserverFr
     *
     * @param string $conserverFr
     * @return SousMenu
     */
    public function setConserverFr($conserverFr)
    {
        $this->conserverFr = $conserverFr;
    
        return $this;
    }

    /**
     * Get conserverFr
     *
     * @return string
     */
    public function getConserverFr()
    {
        return $this->conserverFr;
    }

    /**
     * Set titreEn
     *
     * @param string $titreEn
     * @return SousMenu
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

    /**
     * Set descriptionEn
     *
     * @param string $descriptionEn
     * @return SousMenu
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
     * @return SousMenu
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
        return stripslashes($this->noteDegustationEn);
    }

    /**
     * Set elaborationEn
     *
     * @param string $elaborationEn
     * @return SousMenu
     */
    public function setElaborationEn($elaborationEn)
    {
        $this->elaborationEn = $elaborationEn;
    
        return $this;
    }

    /**
     * Get elaborationEn
     *
     * @return string
     */
    public function getElaborationEn()
    {
        return stripslashes($this->elaborationEn);
    }

    /**
     * Set contenanceEn
     *
     * @param string $contenanceEn
     * @return SousMenu
     */
    public function setContenanceEn($contenanceEn)
    {
        $this->contenanceEn = $contenanceEn;
    
        return $this;
    }

    /**
     * Get contenanceEn
     *
     * @return string
     */
    public function getContenanceEn()
    {
        return $this->contenanceEn;
    }

    /**
     * Set conserverEn
     *
     * @param string $conserverEn
     * @return SousMenu
     */
    public function setConserverEn($conserverEn)
    {
        $this->conserverEn = $conserverEn;
    
        return $this;
    }

    /**
     * Get conserverEn
     *
     * @return string
     */
    public function getConserverEn()
    {
        return $this->conserverEn;
    }

    /**
     * Set recetteFr
     *
     * @param string $recetteFr
     * @return SousMenu
     */
    public function setRecetteFr($recetteFr)
    {
        
        $this->recetteFr = $recetteFr;
    
        return $this;
    }

    /**
     * Get recetteFr
     *
     * @return string
     */
    public function getRecetteFr()
    {
        return $this->recetteFr;
    }

    /**
     * Set recetteEn
     *
     * @param string $recetteEn
     * @return SousMenu
     */
    public function setRecetteEn($recetteEn)
    {
        $this->recetteEn = $recetteEn;
    
        return $this;
    }

    /**
     * Get recetteEn
     *
     * @return string
     */
    public function getRecetteEn()
    {
        return $this->recetteEn;
    }
}
