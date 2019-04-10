<?php

namespace AppBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Translatable\Translatable;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Resource
 *
 * @ORM\Table(name="resource")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResourceRepository")
 */
class Resource implements Translatable
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
     * @Gedmo\Translatable
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @Gedmo\Translatable
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @Gedmo\SortablePosition
     * @ORM\Column(name="position", type="integer")
     */
    private $position;

    /**
     * @var string
     *
     * @Gedmo\Translatable
     * @ORM\Column(name="key_word", type="string", length=255, nullable=true)
     */
    private $keyWord;

    /**
     * @var string
     *
     * @Gedmo\Translatable
     * @ORM\Column(name="title_SEO", type="string", length=255, nullable=true)
     */
    private $titleSEO;

    /**
     * @var string
     *
     * @Gedmo\Translatable
     * @ORM\Column(name="meta_description", type="text", nullable=true)
     */
    private $metaDescription;

    /**
     * @var string
     *
     * @Gedmo\Translatable
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @var string
     *
     * @Gedmo\Translatable
     * @ORM\Column(name="miniature", type="string", length=255, nullable=true)
     */
    private $miniature;

    /**
     * @Gedmo\Locale
     */
    private $locale;

    /**
     * @var Category
     *
     * @Gedmo\SortableGroup
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="resources")
     * @ORM\JoinColumn(name="id_category", referencedColumnName="id")
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity="Download", mappedBy="resource", cascade={"persist"})
     */
    private $downloads;

    public function __construct()
    {
        $this->downloads = new ArrayCollection();
    }

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
     * @return Resource
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
     * Set description
     *
     * @param string $description
     * @return Resource
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
     * Set position
     *
     * @param integer $position
     * @return Resource
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set keyWord
     *
     * @param string $keyWord
     * @return Resource
     */
    public function setKeyWord($keyWord)
    {
        $this->keyWord = $keyWord;
    
        return $this;
    }

    /**
     * Get keyWord
     *
     * @return string
     */
    public function getKeyWord()
    {
        return $this->keyWord;
    }

    /**
     * Set titleSEO
     *
     * @param string $titleSEO
     * @return Resource
     */
    public function setTitleSEO($titleSEO)
    {
        $this->titleSEO = $titleSEO;
    
        return $this;
    }

    /**
     * Get titleSEO
     *
     * @return string
     */
    public function getTitleSEO()
    {
        return $this->titleSEO;
    }

    /**
     * Set metaDescription
     *
     * @param string $metaDescription
     * @return Resource
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;
    
        return $this;
    }

    /**
     * Get metaDescription
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Resource
     */
    public function setPicture($picture)
    {
        if ($this->picture != null) {
            if (file_exists('upload/'.$this->picture)) {
                unlink('upload/'.$this->picture);
            }
        }
        $this->picture = $picture;
    
        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set miniature
     *
     * @param string $miniature
     * @return Resource
     */
    public function setMiniature($miniature)
    {
        if ($this->miniature != null) {
            if (file_exists('upload/'.$this->miniature)) {
                unlink('upload/'.$this->miniature);
            }
        }
        $this->miniature = $miniature;
    
        return $this;
    }

    /**
     * Get miniature
     *
     * @return string
     */
    public function getMiniature()
    {
        return $this->miniature;
    }

    /**
     * Set locale
     *
     * @param string $locale
     */
    public function setTranslatableLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * Set category
     *
     * @param Category $category
     * @return Resource
     */
    public function setCategory(Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    public function addDownload(Download $download)
    {
        $download->setResource($this);
        $this->downloads->add($download);
    }

    public function removeDownload(Download $download)
    {
        $this->downloads->removeElement($download);
    }

    public function getDownloads()
    {
        return $this->downloads;
    }
}
