<?php

namespace App\Entity;

use App\Repository\PrestationsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PrestationsRepository::class)]
class Prestations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    private ?string $titre = null;

    #[ORM\Column]
    private ?float $prix = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $opt = null;

    #[ORM\Column]
    private ?int $nbPhotosRetouche = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getOpt(): ?string
    {
        return $this->opt;
    }

    public function setOpt(string $opt): static
    {
        $this->opt = $opt;

        return $this;
    }

    public function getNbPhotosRetouche(): ?int
    {
        return $this->nbPhotosRetouche;
    }

    public function setNbPhotosRetouche(int $nbPhotosRetouche): static
    {
        $this->nbPhotosRetouche = $nbPhotosRetouche;

        return $this;
    }
}
