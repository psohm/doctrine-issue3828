<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VueStatutContratEmporium
 *
 * @ORM\Table(name="v_contratdateemporium")
 * @ORM\Entity(readOnly=true)
 */
class VueContratDateEmporium
{
    /**
     * @var int
     *
     * @ORM\Column(name="idsociete", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     */
    private $idsociete;

    /**.
     * @ORM\OneToOne(targetEntity="Societe")
     * @ORM\JoinColumn(name="idsociete", referencedColumnName="idsociete")
     */
    private $societe;
}

