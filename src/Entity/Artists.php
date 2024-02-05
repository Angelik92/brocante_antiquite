<?php

namespace App\Entity;

use App\Repository\ArtistsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArtistsRepository::class)]
class Artists
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $art_fullname = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArtFullname(): ?string
    {
        return $this->art_fullname;
    }

    public function setArtFullname(string $art_fullname): static
    {
        $this->art_fullname = $art_fullname;

        return $this;
    }
}
