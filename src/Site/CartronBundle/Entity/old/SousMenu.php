<?php

namespace Site\CartronBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Site\CartronBundle\Entity\SousMenu
 * @ORM\HasLifecycleCallbacks
 */
class SousMenu
{
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
     * @var integer
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
     */
    private $image;

    /**
     * @var string
     */
    private $icone;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Site\CartronBundle\Entity\Collection
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
     * @param integer $degre
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
     * @param \Site\CartronBundle\Entity\Collection $idCollection
     * @return SousMenu
     */
    public function setIdCollection(\Site\CartronBundle\Entity\Collection $idCollection = null)
    {
        $this->idCollection = $idCollection;
    
        return $this;
    }

    /**
     * Get idCollection
     *
     * @return \Site\CartronBundle\Entity\Collection 
     */
    public function getIdCollection()
    {
        return $this->idCollection;
    }
    /**
     * @var string
     */
    private $titreFr;

    /**
     * @var string
     */
    private $descriptionFr;

    /**
     * @var string
     */
    private $noteDegustationFr;

    /**
     * @var string
     */
    private $elaborationFr;

    /**
     * @var string
     */
    private $contenanceFr;

    /**
     * @var string
     */
    private $conserverFr;

    /**
     * @var string
     */
    private $titreEn;

    /**
     * @var string
     */
    private $descriptionEn;

    /**
     * @var string
     */
    private $noteDegustationEn;

    /**
     * @var string
     */
    private $elaborationEn;

    /**
     * @var string
     */
    private $contenanceEn;

    /**
     * @var string
     */
    private $conserverEn;


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
        return $this->noteDegustationFr;
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
        return $this->elaborationFr;
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
        return $this->noteDegustationEn;
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
        return $this->elaborationEn;
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
     * @var string
     */
    private $recetteFr;

    /**
     * @var string
     */
    private $recetteEn;


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