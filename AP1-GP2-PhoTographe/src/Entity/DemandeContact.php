<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemandeContact
 *
 * @ORM\Table(name="demande_contact", indexes={@ORM\Index(name="IDX_7C955D977EC7ABB2", columns={"id_demande_user_id"})})
 * @ORM\Entity
 */
class DemandeContact
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
     * @ORM\Column(name="description_demande", type="text", length=0, nullable=false)
     */
    private $descriptionDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="objet_demande", type="text", length=0, nullable=false)
     */
    private $objetDemande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_demande", type="date", nullable=false)
     */
    private $dateDemande;

    /**
     * @var int
     *
     * @ORM\Column(name="enfant", type="integer", nullable=false)
     */
    private $enfant;

    /**
     * @var \DemandeContact
     *
     * @ORM\ManyToOne(targetEntity="DemandeContact")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_demande_user_id", referencedColumnName="id")
     * })
     */
    private $idDemandeUser;


}
