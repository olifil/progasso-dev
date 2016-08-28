<?php

namespace AssociatifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Benevole
 *
 * @ORM\Table(name="benevole")
 * @ORM\Entity(repositoryClass="AssociatifBundle\Repository\BenevoleRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Benevole
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
     * @ORM\ManyToOne(targetEntity="AssociatifBundle\Entity\Association", inversedBy="benevoles")
     */
    private $association;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Contact", inversedBy="benevolat")
     */
    private $contact;

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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Benevole
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
     * @return Benevole
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
     * Set association
     *
     * @param \AssociatifBundle\Entity\Association $association
     *
     * @return Benevole
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
     * Set contact
     *
     * @param \UserBundle\Entity\Contact $contact
     *
     * @return Benevole
     */
    public function setContact(\UserBundle\Entity\Contact $contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return \UserBundle\Entity\Contact
     */
    public function getContact()
    {
        return $this->contact;
    }
}
