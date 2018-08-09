<?php

namespace Site\CartronBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 */
class Pays
{
    /**
     * @var string
     */
    private $pays;

    /**
     * @var string
     */
    private $paysEn;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set pays
     *
     * @param string $pays
     * @return Pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    
        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set paysEn
     *
     * @param string $paysEn
     * @return Pays
     */
    public function setPaysEn($paysEn)
    {
        $this->paysEn = $paysEn;
    
        return $this;
    }

    /**
     * Get paysEn
     *
     * @return string 
     */
    public function getPaysEn()
    {
        return $this->paysEn;
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
