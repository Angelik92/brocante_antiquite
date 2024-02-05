<?php

namespace App\Entity;

use App\Repository\StatusRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StatusRepository::class)]
class Status
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $sta_label = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStaLabel(): ?string
    {
        return $this->sta_label;
    }

    public function setStaLabel(string $sta_label): static
    {
        $this->sta_label = $sta_label;

        return $this;
    }
}
