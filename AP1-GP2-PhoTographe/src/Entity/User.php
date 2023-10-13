<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_8D93D649E7927C74", columns={"email"})}, indexes={@ORM\Index(name="IDX_8D93D6497EC7ABB2", columns={"id_demande_user_id"})})
 * @ORM\Entity
 */
class User
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
     * @ORM\Column(name="email", type="string", length=180, nullable=false)
     */
    private $email;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="json", nullable=false)
     */
    private $roles;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_user", type="string", length=100, nullable=false)
     */
    private $nomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_user", type="string", length=100, nullable=false)
     */
    private $prenomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_user", type="string", length=255, nullable=false)
     */
    private $adresseUser;

    /**
     * @var string
     *
     * @ORM\Column(name="cp_user", type="string", length=5, nullable=false)
     */
    private $cpUser;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_user", type="string", length=150, nullable=false)
     */
    private $villeUser;

    /**
     * @var string
     *
     * @ORM\Column(name="genre_user", type="string", length=80, nullable=false)
     */
    private $genreUser;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone_user", type="integer", nullable=false)
     */
    private $telephoneUser;

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
