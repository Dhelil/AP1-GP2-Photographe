<?php

namespace App\Entity;

use App\Repository\OptionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OptionRepository::class)]
#[ORM\Table(name: '`option`')]
class Option
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    private ?string $libelleOption = null;

    #[ORM\Column]
    private ?float $prixOption = null;

    #[ORM\OneToMany(mappedBy: 'idOptionPrestation', targetEntity: Prestation::class)]
    private Collection $idOptionPrestation;

    public function __construct()
    {
        $this->idOptionPrestation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleOption(): ?string
    {
        return $this->libelleOption;
    }

    public function setLibelleOption(string $libelleOption): static
    {
        $this->libelleOption = $libelleOption;

        return $this;
    }

    public function getPrixOption(): ?float
    {
        return $this->prixOption;
    }

    public function setPrixOption(float $prixOption): static
    {
        $this->prixOption = $prixOption;

        return $this;
    }

    /**
     * @return Collection<int, Prestation>
     */
    public function getIdOptionPrestation(): Collection
    {
        return $this->idOptionPrestation;
    }

    public function addIdOptionPrestation(Prestation $idOptionPrestation): static
    {
        if (!$this->idOptionPrestation->contains($idOptionPrestation)) {
            $this->idOptionPrestation->add($idOptionPrestation);
            $idOptionPrestation->setIdOptionPrestation($this);
        }

        return $this;
    }

    public function removeIdOptionPrestation(Prestation $idOptionPrestation): static
    {
        if ($this->idOptionPrestation->removeElement($idOptionPrestation)) {
            // set the owning side to null (unless already changed)
            if ($idOptionPrestation->getIdOptionPrestation() === $this) {
                $idOptionPrestation->setIdOptionPrestation(null);
            }
        }

        return $this;
    }
}
