<?php

namespace AppBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Download
 *
 * @ORM\Table(name="download")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DownloadRepository")
 */
class Download
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
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=255, nullable=true)
     */
    private $file;

    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="string", length=255, nullable=true)
     */
    private $locale;

    /**
     * @var Resource
     *
     * @ORM\ManyToOne(targetEntity="Resource", inversedBy="downloads")
     * @ORM\JoinColumn(name="id_resource", referencedColumnName="id")
     */
    private $resource;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Download
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set file
     *
     * @param string $file
     * @return Download
     */
    public function setFile($file)
    {
        if ($file != null) {
            if ($this->file != null) {
                if (file_exists('upload/'.$this->file)) {
                    unlink('upload/'.$this->file);
                }
            }
            $nameOriginalFile = $file->getClientOriginalName();
            $name = 'download' . time() . '_' . $nameOriginalFile;
            $file->move(
                'upload',
                $name
            );
            $this->file = $name;
        }
        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set locale
     *
     * @param string $locale
     * @return Download
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    
        return $this;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set resource
     *
     * @param Resource $resource
     * @return Download
     */
    public function setResource(Resource $resource = null)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * Get resource
     *
     * @return Resource
     */
    public function getResource()
    {
        return $this->resource;
    }
}
