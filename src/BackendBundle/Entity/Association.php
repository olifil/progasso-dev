<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Association
 *
 * @ORM\Table(name="association")
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\AssociationRepository")
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
     * @ORM\OneToOne(targetEntity="BackendBundle\Entity\Bureau", inversedBy="association")
     */
    private $bureau;

    /**
     * @var int
     *
     * @ORM\Column(name="benevoles", type="integer", nullable=true)
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

}
