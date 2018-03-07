<?php
namespace STC\visitorBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class RoleExecutif {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue     
     * @ORM\Column(type="integer", length=20)
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $abvRole;
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $libelleRole;
    /**
     * @ORM\Column(type="string", length=500)
     */
    private $descRole;
    /**
     * @ORM\Column(type="string", length=500)
     */
    private $tachesRole;

    function getId() {
        return $this->id;
    }

    function getLibelleRole() {
        return $this->libelleRole;
    }

    function getDescRole() {
        return $this->descRole;
    }

    function getTachesRole() {
        return $this->tachesRole;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLibelleRole($libelleRole) {
        $this->libelleRole = $libelleRole;
    }

    function setDescRole($descRole) {
        $this->descRole = $descRole;
    }

    function setTachesRole($tachesRole) {
        $this->tachesRole = $tachesRole;
    }
    function getAbvRole() {
        return $this->abvRole;
    }

    function setAbvRole($abvRole) {
        $this->abvRole = $abvRole;
    }

    public function __toString() {
    return $this-> libelleRole;
    }
}
