<?php

namespace App\Entity;

use App\Repository\PrestationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PrestationRepository::class)]
class Prestation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    private ?string $libellePrestation = null;

    #[ORM\Column]
    private ?float $prixPrestation = null;

    #[ORM\ManyToOne(inversedBy: 'idOptionPrestation')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Option $idOptionPrestation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibellePrestation(): ?string
    {
        return $this->libellePrestation;
    }

    public function setLibellePrestation(string $libellePrestation): static
    {
        $this->libellePrestation = $libellePrestation;

        return $this;
    }

    public function getPrixPrestation(): ?float
    {
        return $this->prixPrestation;
    }

    public function setPrixPrestation(float $prixPrestation): static
    {
        $this->prixPrestation = $prixPrestation;

        return $this;
    }

    public function getIdOptionPrestation(): ?Option
    {
        return $this->idOptionPrestation;
    }

    public function setIdOptionPrestation(?Option $idOptionPrestation): static
    {
        $this->idOptionPrestation = $idOptionPrestation;

        return $this;
    }
}
