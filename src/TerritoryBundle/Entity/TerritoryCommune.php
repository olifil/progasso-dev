<?php

namespace TerritoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TerritoryCommune
 *
 * @ORM\Table(name="territory_commune")
 * @ORM\Entity(repositoryClass="TerritoryBundle\Repository\TerritoryCommuneRepository")
 * @ORM\HasLifecycleCallbacks
 */
class TerritoryCommune
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
     * @var \TerritoryBundle\Entity\Commune
     *
     * @ORM\ManyToOne(targetEntity="TerritoryBundle\Entity\Commune", inversedBy="territoires")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codeCommune", referencedColumnName="codeCommune")
     * })
     */
    private $commune;

    /**
     * @ORM\ManyToOne(targetEntity="TerritoryBundle\Entity\Territoire", inversedBy="communes")
     */
    private $territoire;

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
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;


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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return TerritoryCommune
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
     * @return TerritoryCommune
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
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return TerritoryCommune
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
     * Set commune
     *
     * @param \TerritoryBundle\Entity\Commune $commune
     *
     * @return TerritoryCommune
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
     * Set territoire
     *
     * @param \TerritoryBundle\Entity\Territoire $territoire
     *
     * @return TerritoryCommune
     */
    public function setTerritoire(\TerritoryBundle\Entity\Territoire $territoire = null)
    {
        $this->territoire = $territoire;

        return $this;
    }

    /**
     * Get territoire
     *
     * @return \TerritoryBundle\Entity\Territoire
     */
    public function getTerritoire()
    {
        return $this->territoire;
    }
}
