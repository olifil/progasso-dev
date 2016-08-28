<?php

namespace TerritoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commune
 *
 * @ORM\Table(name="commune")
 * @ORM\Entity(repositoryClass="TerritoryBundle\Repository\CommuneRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Commune
{
    /**
     * @var string
     *
     * @ORM\Column(name="codeCommune", type="string", length=5)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeCommune;

    /**
     * @var \Rezopouce\TerritoryBundle\Entity\Region
     *
     * @ORM\ManyToOne(targetEntity="TerritoryBundle\Entity\Region", inversedBy="communes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codeRegion", referencedColumnName="codeRegion")
     * })
     */
    private $region;

    /**
     * @var \Rezopouce\TerritoryBundle\Entity\Departement
     *
     * @ORM\ManyToOne(targetEntity="TerritoryBundle\Entity\Departement", inversedBy="communes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codeDepartement", referencedColumnName="codeDepartement")
     * })
     */
    private $departement;

    /**
     * @var string
     *
     * @ORM\Column(name="article", type="string", length=10, nullable=true)
     */
    private $article;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\OneToOne(targetEntity="TerritoryBundle\Entity\Mairie", mappedBy="commune")
     */
    private $mairie;

    /**
     * @ORM\OneToOne(targetEntity="AssociatifBundle\Entity\Association", mappedBy="commune")
     */
    private $associations;

    /**
     * @ORM\OneToMany(targetEntity="TerritoryBundle\Entity\TerritoryCommune", mappedBy="commune")
     */
    private $territoires;

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;

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
        $this -> updatedAt = new \datetime();
    }

    /**
     * Get codeCommune
     *
     * @return string
     */
    public function getCodeCommune()
    {
        return $this->codeCommune;
    }

    /**
     * Set article
     *
     * @param string $article
     *
     * @return Commune
     */
    public function setArticle($article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return string
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Commune
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
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Commune
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Commune
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
     * @return Commune
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
     * Set region
     *
     * @param \TerritoryBundle\Entity\Region $region
     *
     * @return Commune
     */
    public function setRegion(\TerritoryBundle\Entity\Region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \TerritoryBundle\Entity\Region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set departement
     *
     * @param \TerritoryBundle\Entity\Departement $departement
     *
     * @return Commune
     */
    public function setDepartement(\TerritoryBundle\Entity\Departement $departement = null)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return \TerritoryBundle\Entity\Departement
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set mairie
     *
     * @param \TerritoryBundle\Entity\Mairie $mairie
     *
     * @return Commune
     */
    public function setMairie(\TerritoryBundle\Entity\Mairie $mairie = null)
    {
        $this->mairie = $mairie;

        return $this;
    }

    /**
     * Get mairie
     *
     * @return \TerritoryBundle\Entity\Mairie
     */
    public function getMairie()
    {
        return $this->mairie;
    }

    /**
     * Set associations
     *
     * @param \AssociatifBundle\Entity\Association $associations
     *
     * @return Commune
     */
    public function setAssociations(\AssociatifBundle\Entity\Association $associations = null)
    {
        $this->associations = $associations;

        return $this;
    }

    /**
     * Get associations
     *
     * @return \AssociatifBundle\Entity\Association
     */
    public function getAssociations()
    {
        return $this->associations;
    }

    /**
     * Add territoire
     *
     * @param \TerritoryBundle\Entity\TerritoryCommune $territoire
     *
     * @return Commune
     */
    public function addTerritoire(\TerritoryBundle\Entity\TerritoryCommune $territoire)
    {
        $this->territoires[] = $territoire;

        return $this;
    }

    /**
     * Remove territoire
     *
     * @param \TerritoryBundle\Entity\TerritoryCommune $territoire
     */
    public function removeTerritoire(\TerritoryBundle\Entity\TerritoryCommune $territoire)
    {
        $this->territoires->removeElement($territoire);
    }

    /**
     * Get territoires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTerritoires()
    {
        return $this->territoires;
    }
}
