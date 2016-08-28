<?php

namespace AssociatifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Association
 *
 * @ORM\Table(name="association")
 * @ORM\Entity(repositoryClass="AssociatifBundle\Repository\AssociationRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Association
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
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var text
     *
     * @ORM\Column(name="objet", type="text")
     */
    private $objet;

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
     * @var \BackendBundle\Entity\Commune
     *
     * @ORM\ManyToOne(targetEntity="TerritoryBundle\Entity\Commune", inversedBy="associations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codeCommune", referencedColumnName="codeCommune")
     * })
     */
    private $commune;

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
     * @ORM\OneToOne(targetEntity="AssociatifBundle\Entity\Bureau", inversedBy="association")
     * @ORM\JoinColumn(nullable=false)
     */
    private $bureau;

    /**
     * @ORM\OneToMany(targetEntity="AssociatifBundle\Entity\Benevole", mappedBy="association")
     */
    private $benevoles;

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

    /**
     * @var int
     *
     * @ORM\Column(name="createdBy", type="integer")
     */
    private $createdBy;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->benevoles = new \Doctrine\Common\Collections\ArrayCollection();
        $this -> createdAt = new \DateTime();
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpdate()
    {
        $this -> updatedAt = new \datetime();
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Association
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return Association
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Association
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
     * @return Association
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
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Association
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
     * @return Association
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
     * @return Association
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
     * @return Association
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
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return Association
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return integer
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set commune
     *
     * @param \TerritoryBundle\Entity\Commune $commune
     *
     * @return Association
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

    /**
     * Set bureau
     *
     * @param \AssociatifBundle\Entity\Bureau $bureau
     *
     * @return Association
     */
    public function setBureau(\AssociatifBundle\Entity\Bureau $bureau)
    {
        $this->bureau = $bureau;

        return $this;
    }

    /**
     * Get bureau
     *
     * @return \AssociatifBundle\Entity\Bureau
     */
    public function getBureau()
    {
        return $this->bureau;
    }

    /**
     * Add benevole
     *
     * @param \AssociatifBundle\Entity\Benevole $benevole
     *
     * @return Association
     */
    public function addBenevole(\AssociatifBundle\Entity\Benevole $benevole)
    {
        $this->benevoles[] = $benevole;

        return $this;
    }

    /**
     * Remove benevole
     *
     * @param \AssociatifBundle\Entity\Benevole $benevole
     */
    public function removeBenevole(\AssociatifBundle\Entity\Benevole $benevole)
    {
        $this->benevoles->removeElement($benevole);
    }

    /**
     * Get benevoles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBenevoles()
    {
        return $this->benevoles;
    }
}
