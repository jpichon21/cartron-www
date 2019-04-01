<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HomePage
 *
 * @ORM\Table(name="home_page")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HomePageRepository")
 */
class HomePage
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
     * @ORM\Column(name="title_fr", type="string", length=255, nullable=true)
     */
    private $titleFr;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_fr", type="text", nullable=true)
     */
    private $descFr;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_en", type="string", length=255, nullable=true)
     */
    private $titreEn;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_en", type="text", nullable=true)
     */
    private $descEn;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=300, nullable=true)
     */
    private $image;

    /**
     * Set titleFr
     *
     * @param string $titleFr
     * @return HomePage
     */
    public function setTitleFr($titleFr)
    {
        $this->titleFr = $titleFr;
    
        return $this;
    }

    /**
     * Get titleFr
     *
     * @return string
     */
    public function getTitleFr()
    {
        return $this->titleFr;
    }

    /**
     * Set descFr
     *
     * @param string $descFr
     * @return HomePage
     */
    public function setDescFr($descFr)
    {
        $this->descFr = $descFr;
    
        return $this;
    }

    /**
     * Get descFr
     *
     * @return string
     */
    public function getDescFr()
    {
        return $this->descFr;
    }

    /**
     * Set titreEn
     *
     * @param string $titreEn
     * @return HomePage
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
     * Set descEn
     *
     * @param string $descEn
     * @return HomePage
     */
    public function setDescEn($descEn)
    {
        $this->descEn = $descEn;
    
        return $this;
    }

    /**
     * Get descEn
     *
     * @return string
     */
    public function getDescEn()
    {
        return $this->descEn;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return HomePage
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
