<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * v_commissiondernieredate
 *
 * @ORM\Table(name="v_commissiondernieredate")
 * @ORM\Entity(readOnly=true)
 * )
 */
class VueCommissiondernieredate
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="Societe")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    private $societe;
}

