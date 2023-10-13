<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Presentation
 *
 * @ORM\Table(name="presentation")
 * @ORM\Entity
 */
class Presentation
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
     * @var string|null
     *
     * @ORM\Column(name="libellePresentation", type="text", length=65535, nullable=true)
     */
    private $libellepresentation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelleExpertise", type="text", length=65535, nullable=true)
     */
    private $libelleexpertise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelleCreate", type="text", length=65535, nullable=true)
     */
    private $libellecreate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelleTransformation", type="text", length=65535, nullable=true)
     */
    private $libelletransformation;


}
