<?php

namespace TerritoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mairie
 *
 * @ORM\Table(name="mairie")
 * @ORM\Entity(repositoryClass="TerritoryBundle\Repository\MairieRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Mairie
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
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseComplement", type="string", length=255, nullable=true)
     */
    private $adresseComplement;

    /**
     * @var \TerritoryBundle\Entity\Commune
     *
     * @ORM\OneToOne(targetEntity="TerritoryBundle\Entity\Commune", inversedBy="mairie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codeCommune", referencedColumnName="codeCommune")
     * })
     */
    private $commune;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=14, nullable=true, options={"default": "00 00 00 00 00"})
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="telecopie", type="string", length=14, nullable=true, options={"default": "00 00 00 00 00"})
     */
    private $telecopie;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="decimal", precision=18, scale=7, nullable=true, options={"default": 44.1033430})
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="decimal", precision=18, scale=7, nullable=true, options={"default": 1.0898290})
     */
    private $longitude;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;


    public function __construct()
    {
        $this -> createdAt = new \DateTime();
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpdate()
    {
        $this -> updatedAt = new \DateTime();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Mairie
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set adresseComplement
     *
     * @param string $adresseComplement
     *
     * @return Mairie
     */
    public function setAdresseComplement($adresseComplement)
    {
        $this->adresseComplement = $adresseComplement;

        return $this;
    }

    /**
     * Get adresseComplement
     *
     * @return string
     */
    public function getAdresseComplement()
    {
        return $this->adresseComplement;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Mairie
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set telecopie
     *
     * @param string $telecopie
     *
     * @return Mairie
     */
    public function setTelecopie($telecopie)
    {
        $this->telecopie = $telecopie;

        return $this;
    }

    /**
     * Get telecopie
     *
     * @return string
     */
    public function getTelecopie()
    {
        return $this->telecopie;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Mairie
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Mairie
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Mairie
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Mairie
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set commune
     *
     * @param \TerritoryBundle\Entity\Commune $commune
     *
     * @return Mairie
     */
    public function setCommune(\TerritoryBundle\Entity\Commune $commune = null)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return \TerritoryBundle\Entity\Commune
     */
    public function getCommune()
    {
        return $this->commune;
    }
}
