<?php

namespace TerritoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity(repositoryClass="TerritoryBundle\Repository\DepartementRepository")
 */
class Departement
{
    /**
     * @var string
     *
     * @ORM\Column(name="codeDepartement", type="string", length=3)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeDepartement;

    /**
     * @var \Rezopouce\TerritoryBundle\Entity\Region
     *
     * @ORM\ManyToOne(targetEntity="TerritoryBundle\Entity\Region", inversedBy="departements")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codeRegion", referencedColumnName="codeRegion")
     * })
     */
    private $region;

    /**
     * @var \Rezopouce\TerritoryBundle\Entity\Commune
     *
     * @ORM\OneToOne(targetEntity="TerritoryBundle\Entity\Commune")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codeCommune", referencedColumnName="codeCommune")
     * })
     */
    private $chefLieu;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity="TerritoryBundle\Entity\Commune", mappedBy="departement")
     */
    private $communes;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->communes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get codeDepartement
     *
     * @return string
     */
    public function getCodeDepartement()
    {
        return $this->codeDepartement;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Departement
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
     * Set region
     *
     * @param \TerritoryBundle\Entity\Region $region
     *
     * @return Departement
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
     * Set chefLieu
     *
     * @param \TerritoryBundle\Entity\Commune $chefLieu
     *
     * @return Departement
     */
    public function setChefLieu(\TerritoryBundle\Entity\Commune $chefLieu = null)
    {
        $this->chefLieu = $chefLieu;

        return $this;
    }

    /**
     * Get chefLieu
     *
     * @return \TerritoryBundle\Entity\Commune
     */
    public function getChefLieu()
    {
        return $this->chefLieu;
    }

    /**
     * Add commune
     *
     * @param \TerritoryBundle\Entity\Commune $commune
     *
     * @return Departement
     */
    public function addCommune(\TerritoryBundle\Entity\Commune $commune)
    {
        $this->communes[] = $commune;

        return $this;
    }

    /**
     * Remove commune
     *
     * @param \TerritoryBundle\Entity\Commune $commune
     */
    public function removeCommune(\TerritoryBundle\Entity\Commune $commune)
    {
        $this->communes->removeElement($commune);
    }

    /**
     * Get communes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommunes()
    {
        return $this->communes;
    }
}
