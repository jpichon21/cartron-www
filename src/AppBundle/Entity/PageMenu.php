<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Menu;

/**
 * PageMenu
 *
 * @ORM\Table(name="page_menu")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PageMenuRepository")
 */
class PageMenu
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
     * @ORM\Column(name="fiche_fr", type="string", length=255, nullable=true)
     */
    private $ficheFr;

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
     * @ORM\Column(name="fiche_en", type="string", length=255, nullable=true)
     */
    private $ficheEn;

    /**
     * @var string
     *
     * @ORM\Column(name="label_fr", type="string", length=255, nullable=true)
     */
    private $labelFr;

    /**
     * @var string
     *
     * @ORM\Column(name="label_en", type="string", length=255, nullable=true)
     */
    private $labelEn;

    /**
     * @var Menu
     */
    private $idMenu;


    /**
     * Set titreFr
     *
     * @param string $titreFr
     * @return PageMenu
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
     * @return PageMenu
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
     * Set ficheFr
     *
     * @param string $ficheFr
     * @return PageMenu
     */
    public function setFicheFr($ficheFr)
    {
        $this->ficheFr = $ficheFr;
    
        return $this;
    }

    /**
     * Get ficheFr
     *
     * @return string
     */
    public function getFicheFr()
    {
        return $this->ficheFr;
    }

    /**
     * Set titreEn
     *
     * @param string $titreEn
     * @return PageMenu
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
     * @return PageMenu
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
     * Set ficheEn
     *
     * @param string $ficheEn
     * @return PageMenu
     */
    public function setFicheEn($ficheEn)
    {
        $this->ficheEn = $ficheEn;
    
        return $this;
    }

    /**
     * Get ficheEn
     *
     * @return string
     */
    public function getFicheEn()
    {
        return $this->ficheEn;
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
     * Set idMenu
     *
     * @param Menu $idMenu
     * @return PageMenu
     */
    public function setIdMenu(Menu $idMenu = null)
    {
        $this->idMenu = $idMenu;
    
        return $this;
    }

    /**
     * Get idMenu
     *
     * @return Menu
     */
    public function getIdMenu()
    {
        return $this->idMenu;
    }
    
    /**
     * Set labelFr
     *
     * @param string $labelFr
     * @return PageMenu
     */
    public function setLabelFr($labelFr)
    {
        $this->labelFr = $labelFr;
    
        return $this;
    }

    /**
     * Get labelFr
     *
     * @return string
     */
    public function getLabelFr()
    {
        return $this->labelFr;
    }

    /**
     * Set labelEn
     *
     * @param string $labelEn
     * @return PageMenu
     */
    public function setlabelEn($labelEn)
    {
        $this->labelEn = $labelEn;
    
        return $this;
    }

    /**
     * Get labelEn
     *
     * @return string
     */
    public function getlabelEn()
    {
        return $this->labelEn;
    }
}
