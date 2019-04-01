<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="pays")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PaysRepository")
 */
class Pays
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
     * @ORM\Column(name="pays", type="string", length=250, nullable=true)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="pays_en", type="string", length=255, nullable=true)
     */
    private $paysEn;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
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
     *
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
}
