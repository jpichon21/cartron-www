<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * VideoHp
 *
 * @ORM\Table(name="video_hp")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VideoHpRepository")
 */
class VideoHp
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
     * @Assert\File(
     *     mimeTypes = {"video/x-flv"},
     *     mimeTypesMessage = "Choisissez un fichier FLV valide"
     * )
     * @ORM\Column(name="video_fr", type="string", length=250, nullable=true)
     */
    private $videoFr;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_fr", type="string", length=255, nullable=true)
     */
    private $titreFr;

    /**
     * @var string
     *
     * @Assert\File(
     *     mimeTypes = {"video/x-flv"},
     *     mimeTypesMessage = "Choisissez un fichier FLV valide"
     * )
     * @ORM\Column(name="video_en", type="string", length=255, nullable=true)
     */
    private $videoEn;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_en", type="string", length=255, nullable=true)
     */
    private $titreEn;

    /**
     * Set videoFr
     *
     * @param string $videoFr
     * @return VideoHp
     */
    public function setVideoFr($videoFr)
    {
        $this->videoFr = $videoFr;

        return $this;
    }

    /**
     * Get videoFr
     *
     * @return string
     */
    public function getVideoFr()
    {
        return $this->videoFr;
    }

    /**
     * Set titreFr
     *
     * @param string $titreFr
     * @return VideoHp
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
     * Set videoEn
     *
     * @param string $videoEn
     * @return VideoHp
     */
    public function setVideoEn($videoEn)
    {
        $this->videoEn = $videoEn;

        return $this;
    }

    /**
     * Get videoEn
     *
     * @return string
     */
    public function getVideoEn()
    {
        return $this->videoEn;
    }

    /**
     * Set titreEn
     *
     * @param string $titreEn
     * @return VideoHp
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
