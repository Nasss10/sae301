<?php

namespace App\Entity;

use App\Repository\LieuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LieuRepository::class)]
class Lieu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $lieu_nom = null;

    #[ORM\Column(length: 255)]
    private ?string $lieu_capacite = null;

    #[ORM\Column(length: 255)]
    private ?string $lieu_adr_rue = null;

    #[ORM\OneToMany(mappedBy: 'lieu', targetEntity: Manifestation::class)]
    private Collection $manifestations;

    #[ORM\Column(length: 1000)]
    private ?string $affiche = null;

    public function __construct()
    {
        $this->manifestations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLieuNom(): ?string
    {
        return $this->lieu_nom;
    }

    public function setLieuNom(string $lieu_nom): self
    {
        $this->lieu_nom = $lieu_nom;

        return $this;
    }

    public function getLieuCapacite(): ?string
    {
        return $this->lieu_capacite;
    }

    public function setLieuCapacite(string $lieu_capacite): self
    {
        $this->lieu_capacite = $lieu_capacite;

        return $this;
    }

    public function getLieuAdrRue(): ?string
    {
        return $this->lieu_adr_rue;
    }

    public function setLieuAdrRue(string $lieu_adr_rue): self
    {
        $this->lieu_adr_rue = $lieu_adr_rue;

        return $this;
    }

    /**
     * @return Collection<int, Manifestation>
     */
    public function getManifestations(): Collection
    {
        return $this->manifestations;
    }

    public function addManifestation(Manifestation $manifestation): self
    {
        if (!$this->manifestations->contains($manifestation)) {
            $this->manifestations->add($manifestation);
            $manifestation->setLieu($this);
        }

        return $this;
    }

    public function removeManifestation(Manifestation $manifestation): self
    {
        if ($this->manifestations->removeElement($manifestation)) {
            // set the owning side to null (unless already changed)
            if ($manifestation->getLieu() === $this) {
                $manifestation->setLieu(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->lieu_nom;
    }

    public function getAffiche(): ?string
    {
        return $this->affiche;
    }

    public function setAffiche(string $affiche): self
    {
        $this->affiche = $affiche;

        return $this;
    }
}


