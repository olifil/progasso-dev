<?php

namespace AssociatifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bureau
 *
 * @ORM\Table(name="bureau")
 * @ORM\Entity(repositoryClass="AssociatifBundle\Repository\BureauRepository")
 */
class Bureau
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
     * @ORM\OneToOne(targetEntity="AssociatifBundle\Entity\Association", mappedBy="bureau")
     */
     private $association;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $president;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     */
    private $presidentAdjoint;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $tresorier;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     */
    private $tresorierAdjoint;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     */
    private $secretaire;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     */
    private $secretaireAdjoint;

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
     * Set association
     *
     * @param \AssociatifBundle\Entity\Association $association
     *
     * @return Bureau
     */
    public function setAssociation(\AssociatifBundle\Entity\Association $association = null)
    {
        $this->association = $association;

        return $this;
    }

    /**
     * Get association
     *
     * @return \AssociatifBundle\Entity\Association
     */
    public function getAssociation()
    {
        return $this->association;
    }

    /**
     * Set president
     *
     * @param \UserBundle\Entity\User $president
     *
     * @return Bureau
     */
    public function setPresident(\UserBundle\Entity\User $president)
    {
        $this->president = $president;

        return $this;
    }

    /**
     * Get president
     *
     * @return \UserBundle\Entity\User
     */
    public function getPresident()
    {
        return $this->president;
    }

    /**
     * Set presidentAdjoint
     *
     * @param \UserBundle\Entity\User $presidentAdjoint
     *
     * @return Bureau
     */
    public function setPresidentAdjoint(\UserBundle\Entity\User $presidentAdjoint = null)
    {
        $this->presidentAdjoint = $presidentAdjoint;

        return $this;
    }

    /**
     * Get presidentAdjoint
     *
     * @return \UserBundle\Entity\User
     */
    public function getPresidentAdjoint()
    {
        return $this->presidentAdjoint;
    }

    /**
     * Set tresorier
     *
     * @param \UserBundle\Entity\User $tresorier
     *
     * @return Bureau
     */
    public function setTresorier(\UserBundle\Entity\User $tresorier)
    {
        $this->tresorier = $tresorier;

        return $this;
    }

    /**
     * Get tresorier
     *
     * @return \UserBundle\Entity\User
     */
    public function getTresorier()
    {
        return $this->tresorier;
    }

    /**
     * Set tresorierAdjoint
     *
     * @param \UserBundle\Entity\User $tresorierAdjoint
     *
     * @return Bureau
     */
    public function setTresorierAdjoint(\UserBundle\Entity\User $tresorierAdjoint = null)
    {
        $this->tresorierAdjoint = $tresorierAdjoint;

        return $this;
    }

    /**
     * Get tresorierAdjoint
     *
     * @return \UserBundle\Entity\User
     */
    public function getTresorierAdjoint()
    {
        return $this->tresorierAdjoint;
    }

    /**
     * Set secretaire
     *
     * @param \UserBundle\Entity\User $secretaire
     *
     * @return Bureau
     */
    public function setSecretaire(\UserBundle\Entity\User $secretaire = null)
    {
        $this->secretaire = $secretaire;

        return $this;
    }

    /**
     * Get secretaire
     *
     * @return \UserBundle\Entity\User
     */
    public function getSecretaire()
    {
        return $this->secretaire;
    }

    /**
     * Set secretaireAdjoint
     *
     * @param \UserBundle\Entity\User $secretaireAdjoint
     *
     * @return Bureau
     */
    public function setSecretaireAdjoint(\UserBundle\Entity\User $secretaireAdjoint = null)
    {
        $this->secretaireAdjoint = $secretaireAdjoint;

        return $this;
    }

    /**
     * Get secretaireAdjoint
     *
     * @return \UserBundle\Entity\User
     */
    public function getSecretaireAdjoint()
    {
        return $this->secretaireAdjoint;
    }
}
