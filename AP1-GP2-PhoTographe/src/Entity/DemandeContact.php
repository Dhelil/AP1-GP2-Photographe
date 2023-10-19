<?php

namespace App\Entity;

use App\Repository\DemandeContactRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DemandeContactRepository::class)]
class DemandeContact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $descriptionDemande = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $objetDemande = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateDemande = null;

    #[ORM\OneToMany(mappedBy: 'idDemandeUser', targetEntity: User::class)]
    private Collection $parent;

    #[ORM\Column]
    private ?int $enfant = null;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'idDemandeUser')]
    private ?self $idDemandeUser = null;

    public function __construct()
    {
        $this->parent = new ArrayCollection();
        #$this->idDemandeUser = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionDemande(): ?string
    {
        return $this->descriptionDemande;
    }

    public function setDescriptionDemande(string $descriptionDemande): static
    {
        $this->descriptionDemande = $descriptionDemande;

        return $this;
    }

    public function getObjetDemande(): ?string
    {
        return $this->objetDemande;
    }

    public function setObjetDemande(string $objetDemande): static
    {
        $this->objetDemande = $objetDemande;

        return $this;
    }

    public function getDateDemande(): ?\DateTimeInterface
    {
        return $this->dateDemande;
    }

    public function setDateDemande(\DateTimeInterface $dateDemande): static
    {
        $this->dateDemande = $dateDemande;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getParent(): Collection
    {
        return $this->parent;
    }

    public function addParent(User $parent): static
    {
        if (!$this->parent->contains($parent)) {
            $this->parent->add($parent);
            $parent->setIdDemandeUser($this);
        }

        return $this;
    }

    public function removeParent(User $parent): static
    {
        if ($this->parent->removeElement($parent)) {
            // set the owning side to null (unless already changed)
            if ($parent->getIdDemandeUser() === $this) {
                $parent->setIdDemandeUser(null);
            }
        }

        return $this;
    }

    public function getEnfant(): ?int
    {
        return $this->enfant;
    }

    public function setEnfant(int $enfant): static
    {
        $this->enfant = $enfant;

        return $this;
    }

    public function getIdDemandeUser(): ?self
    {
        return $this->idDemandeUser;
    }

    public function setIdDemandeUser(?self $idDemandeUser): static
    {
        $this->idDemandeUser = $idDemandeUser;

        return $this;
    }

    public function addIdDemandeUser(self $idDemandeUser): static
    {
        if (!$this->idDemandeUser->contains($idDemandeUser)) {
            $this->idDemandeUser->add($idDemandeUser);
            $idDemandeUser->setIdDemandeUser($this);
        }

        return $this;
    }

    public function removeIdDemandeUser(self $idDemandeUser): static
    {
        if ($this->idDemandeUser->removeElement($idDemandeUser)) {
            // set the owning side to null (unless already changed)
            if ($idDemandeUser->getIdDemandeUser() === $this) {
                $idDemandeUser->setIdDemandeUser(null);
            }
        }

        return $this;
    }
}
