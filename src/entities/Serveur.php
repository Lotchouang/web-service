<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="serveur")
 **/
class Serveur
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="string") **/
    private $adresseip;
    /** @Column(type="string") **/
    private $salle;
    /**
     * One Serveur have Many Service.
     * @OneToMany(targetEntity="Service", mappedBy="serveur")
     */
    private $services;
    /**
     * Many Serveur have Many Ingenieur.
     * @ManyToMany(targetEntity="Ingenieur")
     */
    private $ingenieurs;

    public function __construct()
    {
        $this->ingenieurs = new ArrayCollection();
        $this->services = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getAdresseIp()
    {
        return $this->adresseip;
    }
    public function setAdresseIP($adresseIp)
    {
        $this->adresseip = $adresseIp;
    }
    public function getSalle()
    {
        return $this->salle;
    }
    public function setSalle($salle)
    {
        $this->salle = $salle;
    }
    public function getServices()
    {
        return $this->services;
    }
    public function setServices($services)
    {
        $this->services = $services;
    }
    public function getIngenieurs()
    {
        return $this->ingenieurs;
    }
    public function setIngenieurs($ingenieurs)
    {
        $this->services = $ingenieurs;
    }
}

?>