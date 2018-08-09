<?php

namespace Site\CartronBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HomePage
 */
class HomePage
{
    /**
     * @var string
     */
    private $titleFr;

    /**
     * @var string
     */
    private $descFr;

    /**
     * @var string
     */
    private $titreEn;

    /**
     * @var string
     */
    private $descEn;

    /**
     * @var string
     */
    private $image;

    /**
     * @var integer
     */
    private $id;


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
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}