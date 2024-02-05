<?php

namespace App\Entity;

use App\Repository\PicturesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PicturesRepository::class)]
class Pictures
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $pict_path = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPictPath(): ?string
    {
        return $this->pict_path;
    }

    public function setPictPath(string $pict_path): static
    {
        $this->pict_path = $pict_path;

        return $this;
    }
}
