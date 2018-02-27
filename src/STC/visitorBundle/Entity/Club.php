<?php
namespace STC\visitorBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class Club {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue     
     * @ORM\Column(type="integer", length=20)
     */
    private $idClub;
    /**
     * @ORM\Column(type="string", length=500)
     */
    private $presentation;
    /**
     * @ORM\Column(type="string", length=500)
     */
    private $historique;
    /**
     * @ORM\Column(type="string", length=500)
     */
    private $objectifs;
    /**
     * @ORM\Column(type="string", length=500)
     */
    private $activites;
    /**
     * @ORM\Column(type="date")
     */
    private $dateDebut;
    /**
     * @ORM\Column(type="string", length=500)
     */
    private $lienVideo;
    
    function getPresentation() {
        return $this->presentation;
    }

    function getHistorique() {
        return $this->historique;
    }

    function getObjectifs() {
        return $this->objectifs;
    }

    function getActivites() {
        return $this->activites;
    }

    function getDateDebut() {
        return $this->dateDebut;
    }

    function setPresentation($presentation) {
        $this->presentation = $presentation;
    }

    function setHistorique($historique) {
        $this->historique = $historique;
    }

    function setObjectifs($objectifs) {
        $this->objectifs = $objectifs;
    }

    function setActivites($activites) {
        $this->activites = $activites;
    }

    function setDateDebut($dateDebut) {
        $this->dateDebut = $dateDebut;
    }

    function getIdClub() {
        return $this->idClub;
    }

    function setIdClub($idClub) {
        $this->idClub = $idClub;
    }
    function getLienVideo() {
        return $this->lienVideo;
    }

    function setLienVideo($lienVideo) {
        $this->lienVideo = $lienVideo;
    }


}

