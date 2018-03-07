<?php
namespace STC\visitorBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class Member {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue     
     * @ORM\Column(type="integer", length=20)
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=500)
     */
    private $nom;
    /**
     * @ORM\Column(type="string", length=500)
     */
    private $prenom;
        /**
     * @ORM\Column(type="string", length=100)
     */
    private $classe;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $biography;
    /**
     * @ORM\Column(type="date")
     */
    private $dateNaissance;


}

