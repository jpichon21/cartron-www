<?php

namespace Site\CartronBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * VideoHp
 */
class VideoHp {

    /**
     * @Assert\File(
     *     mimeTypes = {"video/x-flv"},
     *     mimeTypesMessage = "Choisissez un fichier FLV valide"
     * )
     */
    private $videoFr;

    /**
     * @var string
     */
    private $titreFr;

    /**
     * @Assert\File(
     *     mimeTypes = {"video/x-flv"},
     *     mimeTypesMessage = "Choisissez un fichier FLV valide"
     * )
     */
    private $videoEn;

    /**
     * @var string
     */
    private $titreEn;

    /**
     * @var integer
     */
    private $id;

    /**
     * Set videoFr
     *
     * @param string $videoFr
     * @return VideoHp
     */
    public function setVideoFr($videoFr) {
        $this->videoFr = $videoFr;

        return $this;
    }

    /**
     * Get videoFr
     *
     * @return string 
     */
    public function getVideoFr() {
        return $this->videoFr;
    }

    /**
     * Set titreFr
     *
     * @param string $titreFr
     * @return VideoHp
     */
    public function setTitreFr($titreFr) {
        $this->titreFr = $titreFr;

        return $this;
    }

    /**
     * Get titreFr
     *
     * @return string 
     */
    public function getTitreFr() {
        return $this->titreFr;
    }

    /**
     * Set videoEn
     *
     * @param string $videoEn
     * @return VideoHp
     */
    public function setVideoEn($videoEn) {
        $this->videoEn = $videoEn;

        return $this;
    }

    /**
     * Get videoEn
     *
     * @return string 
     */
    public function getVideoEn() {
        return $this->videoEn;
    }

    /**
     * Set titreEn
     *
     * @param string $titreEn
     * @return VideoHp
     */
    public function setTitreEn($titreEn) {
        $this->titreEn = $titreEn;

        return $this;
    }

    /**
     * Get titreEn
     *
     * @return string 
     */
    public function getTitreEn() {
        return $this->titreEn;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

}