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
     * @ORM\Column(name="image", type="text", nullable=true)
     */
    private $image;

    /**
     * @var bool
     *
     * @ORM\Column(name="instagram", type="boolean", nullable=false, options={"default"=0})
     */
    private $instagram = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="string", length=100 , nullable=true)
     */
    private $instagramId;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="text", nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="miniatureVideo", type="text", nullable=true)
     */
    private $miniatureVideo;

    /**
     * @var array
     *
     * @ORM\Column(name="instagramSlider", type="array", nullable=true)
     */
    private $instagramSlider;

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
     * Set instagram
     *
     * @param bool $instagram
     * @return HomePage
     */
    public function setInstagram($instagram)
    {
        $this->instagram = $instagram;
    
        return $this;
    }

    /**
     * Is instagram
     *
     * @return bool
     */
    public function isInstagram()
    {
        return $this->instagram;
    }

    /**
     * Set instagramId
     *
     * @param bool $instagramId
     * @return HomePage
     */
    public function setInstagramId($instagramId)
    {
        $this->instagramId = $instagramId;
    
        return $this;
    }

    /**
     * Get instagramId
     *
     * @return bool
     */
    public function getInstagramId()
    {
        return $this->instagramId;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return HomePage
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set miniature Video
     *
     * @param string $miniatureVideo
     * @return HomePage
     */
    public function setMiniatureVideo($miniatureVideo)
    {
        $this->miniatureVideo = $miniatureVideo;
    
        return $this;
    }

    /**
     * Get miniature video
     *
     * @return string
     */
    public function getMiniatureVideo()
    {
        return $this->miniatureVideo;
    }

     /**
     * Set instagramSlider
     *
     * @param string $instagramSlider
     * @return HomePage
     */
    public function setInstagramSlider($instagramSlider)
    {
        $this->instagramSlider = $instagramSlider;
    
        return $this;
    }

    /**
     * Get instagramSlider
     *
     * @return string
     */
    public function getInstagramSlider()
    {
        return $this->instagramSlider;
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
