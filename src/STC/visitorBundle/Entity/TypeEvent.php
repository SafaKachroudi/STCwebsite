<?php
namespace STC\visitorBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class TypeEvent {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue     
     * @ORM\Column(type="integer", length=20)
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $libelleType;
    /**
     * @ORM\Column(type="string", length=500)
     */
    private $descriptionType;

    function getIdType() {
        return $this->idType;
    }

    function getLibelleType() {
        return $this->libelleType;
    }

    function getDescriptionType() {
        return $this->descriptionType;
    }

    function setIdType($idType) {
        $this->idType = $idType;
    }

    function setLibelleType($libelleType) {
        $this->libelleType = $libelleType;
    }

    function setDescriptionType($descriptionType) {
        $this->descriptionType = $descriptionType;
    }
    public function __toString() {
    return $this-> libelleType;
    }
}
