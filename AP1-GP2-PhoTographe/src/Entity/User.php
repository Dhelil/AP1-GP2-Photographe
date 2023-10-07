<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 100)]
    private ?string $nomUser = null;

    #[ORM\Column(length: 100)]
    private ?string $prenomUser = null;

    #[ORM\Column(length: 255)]
    private ?string $adresseUser = null;

    #[ORM\Column(length: 5)]
    private ?string $cpUser = null;

    #[ORM\Column(length: 150)]
    private ?string $villeUser = null;

    #[ORM\Column(length: 80)]
    private ?string $genreUser = null;

    #[ORM\Column]
    private ?int $telephoneUser = null;

    #[ORM\ManyToOne(inversedBy: 'parent')]
    private ?DemandeContact $idDemandeUser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNomUser(): ?string
    {
        return $this->nomUser;
    }

    public function setNomUser(string $nomUser): static
    {
        $this->nomUser = $nomUser;

        return $this;
    }

    public function getPrenomUser(): ?string
    {
        return $this->prenomUser;
    }

    public function setPrenomUser(string $prenomUser): static
    {
        $this->prenomUser = $prenomUser;

        return $this;
    }

    public function getAdresseUser(): ?string
    {
        return $this->adresseUser;
    }

    public function setAdresseUser(string $adresseUser): static
    {
        $this->adresseUser = $adresseUser;

        return $this;
    }

    public function getCpUser(): ?string
    {
        return $this->cpUser;
    }

    public function setCpUser(string $cpUser): static
    {
        $this->cpUser = $cpUser;

        return $this;
    }

    public function getVilleUser(): ?string
    {
        return $this->villeUser;
    }

    public function setVilleUser(string $villeUser): static
    {
        $this->villeUser = $villeUser;

        return $this;
    }

    public function getGenreUser(): ?string
    {
        return $this->genreUser;
    }

    public function setGenreUser(string $genreUser): static
    {
        $this->genreUser = $genreUser;

        return $this;
    }

    public function getTelephoneUser(): ?int
    {
        return $this->telephoneUser;
    }

    public function setTelephoneUser(int $telephoneUser): static
    {
        $this->telephoneUser = $telephoneUser;

        return $this;
    }

    public function getIdDemandeUser(): ?DemandeContact
    {
        return $this->idDemandeUser;
    }

    public function setIdDemandeUser(?DemandeContact $idDemandeUser): static
    {
        $this->idDemandeUser = $idDemandeUser;

        return $this;
    }
}
