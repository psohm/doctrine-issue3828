<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Societe
 *
 * @ORM\Table(name="societe")
 * @ORM\Entity()
 */
class Societe
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var VueContratDateEmporium
     * @ORM\OneToOne(targetEntity="VueContratDateEmporium")
     * @ORM\JoinColumn(name="id", referencedColumnName="idsociete")
     */
    private $statut;

    /**
     * @var VueCommissiondernieredate|null
     * @ORM\OneToOne(targetEntity="VueCommissiondernieredate")
     * @ORM\JoinColumn(name="id", referencedColumnName="id",nullable=true)
     */
    private $statutcommissionfournisseur;
}

