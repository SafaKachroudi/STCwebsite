<?php
namespace STC\visitorBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class Event {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue     
     * @ORM\Column(type="integer", length=20)
     */
    private $idEvent;
    /**
     * @ORM\Column(type="string", length=500)
     */
    private $titreEvent;
    /**
     * @ORM\Column(type="string", length=500)
     */
    private $descEvent;
        /**
     * @ORM\Column(type="string", length=100)
     */
    private $ciblageEvent;
    /**
     * @ORM\Column(type="date")
     */
    private $dateDebutEvent;
    /**
     * @ORM\Column(type="date")
     */
    private $dateFinEvent;
        /**
     * @ORM\Column(type="string", length=5)
     */
    private $heureDebut;
    /**
     * @ORM\Column(type="string", length=5)
     */
    private $heureFin;
     /**
     * @ORM\Column(type="string", length=500)
     */
    private $remarqueEvent;
    /**
     * @ORM\ManyToOne(targetEntity="STC\visitorBundle\Entity\TypeEvent")
     */
    private $typeEvent;
    
    function getIdEvent() {
        return $this->idEvent;
    }

    function getTitreEvent() {
        return $this->titreEvent;
    }

    function getDescEvent() {
        return $this->descEvent;
    }

    function getCiblageEvent() {
        return $this->ciblageEvent;
    }

    function getDateDebutEvent() {
        return $this->dateDebutEvent;
    }

    function getDateFinEvent() {
        return $this->dateFinEvent;
    }

    function getHeureDebut() {
        return $this->heureDebut;
    }

    function getHeureFin() {
        return $this->heureFin;
    }

    function getRemarqueEvent() {
        return $this->remarqueEvent;
    }

    function setIdEvent($idEvent) {
        $this->idEvent = $idEvent;
    }

    function setTitreEvent($titreEvent) {
        $this->titreEvent = $titreEvent;
    }

    function setDescEvent($descEvent) {
        $this->descEvent = $descEvent;
    }

    function setCiblageEvent($ciblageEvent) {
        $this->ciblageEvent = $ciblageEvent;
    }

    function setDateDebutEvent($dateDebutEvent) {
        $this->dateDebutEvent = $dateDebutEvent;
    }

    function setDateFinEvent($dateFinEvent) {
        $this->dateFinEvent = $dateFinEvent;
    }

    function setHeureDebut($heureDebut) {
        $this->heureDebut = $heureDebut;
    }

    function setHeureFin($heureFin) {
        $this->heureFin = $heureFin;
    }

    function setRemarqueEvent($remarqueEvent) {
        $this->remarqueEvent = $remarqueEvent;
    }
    function getTypeEvent() {
        return $this->typeEvent;
    }

    function setTypeEvent($typeEvent) {
        $this->typeEvent = $typeEvent;
    }

}