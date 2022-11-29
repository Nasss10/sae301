<?php

namespace App\Entity;

use App\Repository\GenreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GenreRepository::class)]
class Genre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $DiffGenre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDiffGenre(): ?string
    {
        return $this->DiffGenre;
    }

    public function setDiffGenre(string $DiffGenre): self
    {
        $this->DiffGenre = $DiffGenre;

        return $this;
    }
}
