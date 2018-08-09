<?php

namespace Site\CartronBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Site\CartronBundle\Entity\Produits
 * @ORM\HasLifecycleCallbacks
 */
class Produits {

    /**
     * @var string
     */
    private $titreFr;

    /**
     * @var string
     */
    private $descriptionFr;

    /**
     * @var string
     */
    private $titreEn;

    /**
     * @var string
     */
    private $descriptionEn;

    /**
     * @Assert\File(
     *     mimeTypes = {"application/pdf"},
     *     mimeTypesMessage = "Choisissez un fichier PDF valide"
     * )
     */
    private $ficheProduitFr;

    /**
     * @Assert\File(
     *     mimeTypes = {"application/pdf"},
     *     mimeTypesMessage = "Choisissez un fichier PDF valide"
     * )
     */
    private $ficheProduitEn;

    /**
     * @Assert\File(
     *     mimeTypes = {"image/jpeg"},
     *     mimeTypesMessage = "Choisissez un fichier JPG valide"
     * )
     */
    private $packshotJpgFr;

    /**
     * @Assert\File(
     *     mimeTypes = {"image/jpeg"},
     *     mimeTypesMessage = "Choisissez un fichier JPG valide"
     * )
     */
    private $packshotJpgEn;

   /**
     * @Assert\File(
     *     mimeTypes = {"application/pdf"},
     *     mimeTypesMessage = "Choisissez un fichier PDF valide"
     * )
     */
    private $packshotPdfEn;

    /**
     * @Assert\File(
     *     mimeTypes = {"application/pdf"},
     *     mimeTypesMessage = "Choisissez un fichier PDF valide"
     * )
     */
    private $packshotPdfFr;

    /**
     * @Assert\File(
     *     mimeTypes = {"application/postscrip"},
     *     mimeTypesMessage = "Choisissez un fichier EPS valide"
     * )
     */
    private $packshotEpsFr;

    /**
     * @Assert\File(
     *     mimeTypes = {"application/postscrip"},
     *     mimeTypesMessage = "Choisissez un fichier EPS valide"
     * )
     */
    private $packshotEpsEn;

    /**
     * @Assert\File(
     *     mimeTypes = {"application/pdf"},
     *     mimeTypesMessage = "Choisissez un fichier PDF valide"
     * )
     */
    private $ficheLogistiqueFr;

    /**
     * @Assert\File(
     *     mimeTypes = {"application/pdf"},
     *     mimeTypesMessage = "Choisissez un fichier PDF valide"
     * )
     */
    private $ficheLogistiqueEn;

    /**
     * @Assert\File(
     *     mimeTypes = {"application/pdf"},
     *     mimeTypesMessage = "Choisissez un fichier PDF valide"
     * )
     */
    private $medailles1En;

    /**
     * @Assert\File(
     *     mimeTypes = {"application/pdf"},
     *     mimeTypesMessage = "Choisissez un fichier PDF valide"
     * )
     */
    private $medailles1Fr;

    /**
     * @Assert\File(
     *     mimeTypes = {"application/pdf"},
     *     mimeTypesMessage = "Choisissez un fichier PDF valide"
     * )
     */
    private $medailles2Fr;

    /**
     * @Assert\File(
     *     mimeTypes = {"application/pdf"},
     *     mimeTypesMessage = "Choisissez un fichier PDF valide"
     * )
     */
    private $medailles2En;

    /**
     * @Assert\File(
     *     mimeTypes = {"application/pdf"},
     *     mimeTypesMessage = "Choisissez un fichier PDF valide"
     * )
     */
    private $medailles3En;

    /**
     * @Assert\File(
     *     mimeTypes = {"application/pdf"},
     *     mimeTypesMessage = "Choisissez un fichier PDF valide"
     * )
     */
    private $medailles3Fr;

    /**
     * @Assert\File(
     *     mimeTypes = {"application/pdf"},
     *     mimeTypesMessage = "Choisissez un fichier PDF valide"
     * )
     */
    private $medailles4En;

    /**
     * @Assert\File(
     *     mimeTypes = {"application/pdf"},
     *     mimeTypesMessage = "Choisissez un fichier PDF valide"
     * )
     */
    private $medailles4Fr;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Site\CartronBundle\Entity\DegustationPro
     */
    private $idDegustation;

    /**
     * @var \Site\CartronBundle\Entity\SousMenuProduits
     */
    private $idSousMenu;

    /**
     * Set titreFr
     *
     * @param string $titreFr
     * @return Produits
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
     * Set descriptionFr
     *
     * @param string $descriptionFr
     * @return Produits
     */
    public function setDescriptionFr($descriptionFr) {
        $this->descriptionFr = $descriptionFr;

        return $this;
    }

    /**
     * Get descriptionFr
     *
     * @return string 
     */
    public function getDescriptionFr() {
        return $this->descriptionFr;
    }

    /**
     * Set titreEn
     *
     * @param string $titreEn
     * @return Produits
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
     * Set descriptionEn
     *
     * @param string $descriptionEn
     * @return Produits
     */
    public function setDescriptionEn($descriptionEn) {
        $this->descriptionEn = $descriptionEn;

        return $this;
    }

    /**
     * Get descriptionEn
     *
     * @return string 
     */
    public function getDescriptionEn() {
        return $this->descriptionEn;
    }

    /**
     * Set ficheProduitFr
     *
     * @param string $ficheProduitFr
     * @return Produits
     */
    public function setFicheProduitFr($ficheProduitFr) {
        $this->ficheProduitFr = $ficheProduitFr;

        return $this;
    }

    /**
     * Get ficheProduitFr
     *
     * @return string 
     */
    public function getFicheProduitFr() {
        return $this->ficheProduitFr;
    }

    /**
     * Set ficheProduitEn
     *
     * @param string $ficheProduitEn
     * @return Produits
     */
    public function setFicheProduitEn($ficheProduitEn) {
        $this->ficheProduitEn = $ficheProduitEn;

        return $this;
    }

    /**
     * Get ficheProduitEn
     *
     * @return string 
     */
    public function getFicheProduitEn() {
        return $this->ficheProduitEn;
    }

    /**
     * Set packshotJpgFr
     *
     * @param string $packshotJpgFr
     * @return Produits
     */
    public function setPackshotJpgFr($packshotJpgFr) {
        $this->packshotJpgFr = $packshotJpgFr;

        return $this;
    }

    /**
     * Get packshotJpgFr
     *
     * @return string 
     */
    public function getPackshotJpgFr() {
        return $this->packshotJpgFr;
    }

    /**
     * Set packshotJpgEn
     *
     * @param string $packshotJpgEn
     * @return Produits
     */
    public function setPackshotJpgEn($packshotJpgEn) {
        $this->packshotJpgEn = $packshotJpgEn;

        return $this;
    }

    /**
     * Get packshotJpgEn
     *
     * @return string 
     */
    public function getPackshotJpgEn() {
        return $this->packshotJpgEn;
    }

    /**
     * Set packshotPdfEn
     *
     * @param string $packshotPdfEn
     * @return Produits
     */
    public function setPackshotPdfEn($packshotPdfEn) {
        $this->packshotPdfEn = $packshotPdfEn;

        return $this;
    }

    /**
     * Get packshotPdfEn
     *
     * @return string 
     */
    public function getPackshotPdfEn() {
        return $this->packshotPdfEn;
    }

    /**
     * Set packshotPdfFr
     *
     * @param string $packshotPdfFr
     * @return Produits
     */
    public function setPackshotPdfFr($packshotPdfFr) {
        $this->packshotPdfFr = $packshotPdfFr;

        return $this;
    }

    /**
     * Get packshotPdfFr
     *
     * @return string 
     */
    public function getPackshotPdfFr() {
        return $this->packshotPdfFr;
    }

    /**
     * Set packshotEpsFr
     *
     * @param string $packshotEpsFr
     * @return Produits
     */
    public function setPackshotEpsFr($packshotEpsFr) {
        $this->packshotEpsFr = $packshotEpsFr;

        return $this;
    }

    /**
     * Get packshotEpsFr
     *
     * @return string 
     */
    public function getPackshotEpsFr() {
        return $this->packshotEpsFr;
    }

    /**
     * Set packshotEpsEn
     *
     * @param string $packshotEpsEn
     * @return Produits
     */
    public function setPackshotEpsEn($packshotEpsEn) {
        $this->packshotEpsEn = $packshotEpsEn;

        return $this;
    }

    /**
     * Get packshotEpsEn
     *
     * @return string 
     */
    public function getPackshotEpsEn() {
        return $this->packshotEpsEn;
    }

    /**
     * Set ficheLogistiqueFr
     *
     * @param string $ficheLogistiqueFr
     * @return Produits
     */
    public function setFicheLogistiqueFr($ficheLogistiqueFr) {
        $this->ficheLogistiqueFr = $ficheLogistiqueFr;

        return $this;
    }

    /**
     * Get ficheLogistiqueFr
     *
     * @return string 
     */
    public function getFicheLogistiqueFr() {
        return $this->ficheLogistiqueFr;
    }

    /**
     * Set ficheLogistiqueEn
     *
     * @param string $ficheLogistiqueEn
     * @return Produits
     */
    public function setFicheLogistiqueEn($ficheLogistiqueEn) {
        $this->ficheLogistiqueEn = $ficheLogistiqueEn;

        return $this;
    }

    /**
     * Get ficheLogistiqueEn
     *
     * @return string 
     */
    public function getFicheLogistiqueEn() {
        return $this->ficheLogistiqueEn;
    }

    /**
     * Set medailles1En
     *
     * @param string $medailles1En
     * @return Produits
     */
    public function setMedailles1En($medailles1En) {
        $this->medailles1En = $medailles1En;

        return $this;
    }

    /**
     * Get medailles1En
     *
     * @return string 
     */
    public function getMedailles1En() {
        return $this->medailles1En;
    }

    /**
     * Set medailles1Fr
     *
     * @param string $medailles1Fr
     * @return Produits
     */
    public function setMedailles1Fr($medailles1Fr) {
        $this->medailles1Fr = $medailles1Fr;

        return $this;
    }

    /**
     * Get medailles1Fr
     *
     * @return string 
     */
    public function getMedailles1Fr() {
        return $this->medailles1Fr;
    }

    /**
     * Set medailles2Fr
     *
     * @param string $medailles2Fr
     * @return Produits
     */
    public function setMedailles2Fr($medailles2Fr) {
        $this->medailles2Fr = $medailles2Fr;

        return $this;
    }

    /**
     * Get medailles2Fr
     *
     * @return string 
     */
    public function getMedailles2Fr() {
        return $this->medailles2Fr;
    }

    /**
     * Set medailles2En
     *
     * @param string $medailles2En
     * @return Produits
     */
    public function setMedailles2En($medailles2En) {
        $this->medailles2En = $medailles2En;

        return $this;
    }

    /**
     * Get medailles2En
     *
     * @return string 
     */
    public function getMedailles2En() {
        return $this->medailles2En;
    }

    /**
     * Set medailles3En
     *
     * @param string $medailles3En
     * @return Produits
     */
    public function setMedailles3En($medailles3En) {
        $this->medailles3En = $medailles3En;

        return $this;
    }

    /**
     * Get medailles3En
     *
     * @return string 
     */
    public function getMedailles3En() {
        return $this->medailles3En;
    }

    /**
     * Set medailles3Fr
     *
     * @param string $medailles3Fr
     * @return Produits
     */
    public function setMedailles3Fr($medailles3Fr) {
        $this->medailles3Fr = $medailles3Fr;

        return $this;
    }

    /**
     * Get medailles3Fr
     *
     * @return string 
     */
    public function getMedailles3Fr() {
        return $this->medailles3Fr;
    }

    /**
     * Set medailles4En
     *
     * @param string $medailles4En
     * @return Produits
     */
    public function setMedailles4En($medailles4En) {
        $this->medailles4En = $medailles4En;

        return $this;
    }

    /**
     * Get medailles4En
     *
     * @return string 
     */
    public function getMedailles4En() {
        return $this->medailles4En;
    }

    /**
     * Set medailles4Fr
     *
     * @param string $medailles4Fr
     * @return Produits
     */
    public function setMedailles4Fr($medailles4Fr) {
        $this->medailles4Fr = $medailles4Fr;

        return $this;
    }

    /**
     * Get medailles4Fr
     *
     * @return string 
     */
    public function getMedailles4Fr() {
        return $this->medailles4Fr;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set idDegustation
     *
     * @param \Site\CartronBundle\Entity\DegustationPro $idDegustation
     * @return Produits
     */
    public function setIdDegustation(\Site\CartronBundle\Entity\DegustationPro $idDegustation = null) {
        $this->idDegustation = $idDegustation;

        return $this;
    }

    /**
     * Get idDegustation
     *
     * @return \Site\CartronBundle\Entity\DegustationPro 
     */
    public function getIdDegustation() {
        return $this->idDegustation;
    }

    /**
     * Set idSousMenu
     *
     * @param \Site\CartronBundle\Entity\SousMenuProduits $idSousMenu
     * @return Produits
     */
    public function setIdSousMenu(\Site\CartronBundle\Entity\SousMenuProduits $idSousMenu = null) {
        $this->idSousMenu = $idSousMenu;

        return $this;
    }

    /**
     * Get idSousMenu
     *
     * @return \Site\CartronBundle\Entity\SousMenuProduits 
     */
    public function getIdSousMenu() {
        return $this->idSousMenu;
    }

    /**
     * @var string
     */
    private $image;

    /**
     * Set image
     *
     * @param string $image
     * @return Produits
     */
    public function setImage($image) {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage() {
        return $this->image;
    }

    /**
     * @var string
     */
    private $recetteFr;

    /**
     * @var string
     */
    private $recetteEn;


    /**
     * Set recetteFr
     *
     * @param string $recetteFr
     * @return Produits
     */
    public function setRecetteFr($recetteFr)
    {
        $this->recetteFr = $recetteFr;
    
        return $this;
    }

    /**
     * Get recetteFr
     *
     * @return string 
     */
    public function getRecetteFr()
    {
        return $this->recetteFr;
    }

    /**
     * Set recetteEn
     *
     * @param string $recetteEn
     * @return Produits
     */
    public function setRecetteEn($recetteEn)
    {
        $this->recetteEn = $recetteEn;
    
        return $this;
    }

    /**
     * Get recetteEn
     *
     * @return string 
     */
    public function getRecetteEn()
    {
        return $this->recetteEn;
    }
}