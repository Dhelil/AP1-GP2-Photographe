<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avis
 *
 * @ORM\Table(name="avis", indexes={@ORM\Index(name="IDX_8F91ABF0AFAC36E1", columns={"id_avis_user_id"})})
 * @ORM\Entity
 */
class Avis
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description_avis", type="text", length=0, nullable=false)
     */
    private $descriptionAvis;

    /**
     * @var float
     *
     * @ORM\Column(name="niveau_avis", type="float", precision=10, scale=0, nullable=false)
     */
    private $niveauAvis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_avis", type="date", nullable=false)
     */
    private $dateAvis;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_avis_user_id", referencedColumnName="id")
     * })
     */
    private $idAvisUser;


}
