<?php

namespace TerritoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="region")
 * @ORM\Entity(repositoryClass="TerritoryBundle\Repository\RegionRepository")
 */
class Region
{
    /**
     * @var string
     *
     * @ORM\Column(name="codeRegion", type="string", length=3)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeRegion;

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
     * @ORM\OneToMany(targetEntity="TerritoryBundle\Entity\Departement", mappedBy="region")
     */
    private $departements;

    /**
     * @ORM\OneToMany(targetEntity="TerritoryBundle\Entity\Commune", mappedBy="region")
     */
    private $communes;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->departements = new \Doctrine\Common\Collections\ArrayCollection();
        $this->communes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get codeRegion
     *
     * @return string
     */
    public function getCodeRegion()
    {
        return $this->codeRegion;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Region
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
     * Set chefLieu
     *
     * @param \TerritoryBundle\Entity\Commune $chefLieu
     *
     * @return Region
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
     * Add departement
     *
     * @param \TerritoryBundle\Entity\Departement $departement
     *
     * @return Region
     */
    public function addDepartement(\TerritoryBundle\Entity\Departement $departement)
    {
        $this->departements[] = $departement;

        return $this;
    }

    /**
     * Remove departement
     *
     * @param \TerritoryBundle\Entity\Departement $departement
     */
    public function removeDepartement(\TerritoryBundle\Entity\Departement $departement)
    {
        $this->departements->removeElement($departement);
    }

    /**
     * Get departements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDepartements()
    {
        return $this->departements;
    }

    /**
     * Add commune
     *
     * @param \TerritoryBundle\Entity\Commune $commune
     *
     * @return Region
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
