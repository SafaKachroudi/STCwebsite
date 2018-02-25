<?php
namespace STC\visitorBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class Highlight {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue     
     * @ORM\Column(type="integer", length=20)
     */
        private $idHighlight;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titreHighlight;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descHighlight;
        /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageHighlight;
    /**
     * @ORM\Column(type="date")
     */
    private $dateHighlight;
    
    function getIdHighlight() {
        return $this->idHighlight;
    }

    function getTitreHighlight() {
        return $this->titreHighlight;
    }

    function getDescHighlight() {
        return $this->descHighlight;
    }

    function getImageHighlight() {
        return $this->imageHighlight;
    }

    function getDateHighlight() {
        return $this->dateHighlight;
    }
        
    function setIdHighlight($idHighlight) {
        $this->idHighlight = $idHighlight;
    }

    function setTitreHighlight($titreHighlight) {
        $this->titreHighlight = $titreHighlight;
    }

    function setDescHighlight($descHighlight) {
        $this->descHighlight = $descHighlight;
    }

    function setImageHighlight($imageHighlight) {
        $this->imageHighlight = $imageHighlight;
    }

    function setDateHighlight($dateHighlight) {
        $this->dateHighlight = $dateHighlight;
    }
}
