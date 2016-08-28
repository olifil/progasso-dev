<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bureau
 *
 * @ORM\Table(name="bureau")
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\BureauRepository")
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
     * @ORM\OneToOne(targetEntity="BackendBundle\entity\Association", mappedBy="bureau")
     */
     private $association;

    /**
     * @var int
     *
     * @ORM\Column(name="president", type="integer")
     */
    private $president;

    /**
     * @var int
     *
     * @ORM\Column(name="vice_president", type="integer", nullable=true)
     */
    private $vicePresident;

    /**
     * @var int
     *
     * @ORM\Column(name="tresorier", type="integer")
     */
    private $tresorier;

    /**
     * @var int
     *
     * @ORM\Column(name="tresorier_adjoint", type="integer", nullable=true)
     */
    private $tresorierAdjoint;

    /**
     * @var int
     *
     * @ORM\Column(name="secretaire", type="integer", nullable=true)
     */
    private $secretaire;

    /**
     * @var int
     *
     * @ORM\Column(name="secretaire_adjoint", type="integer", nullable=true)
     */
    private $secretaireAdjoint;
}
