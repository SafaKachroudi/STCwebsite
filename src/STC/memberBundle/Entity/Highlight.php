<?php
namespace STC\memberBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class Highlight {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue     
     * @ORM\Column(type="integer")
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
    
    function getId() {
        return $this->id;
    }

    function getLibelle() {
        return $this->Libelle;
    }

    function getDescription() {
        return $this->Description;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLibelle($Libelle) {
        $this->Libelle = $Libelle;
    }

    function setDescription($Description) {
        $this->Description = $Description;
    }
    
    public function __toString() {
    return $this-> Libelle;
    }
}