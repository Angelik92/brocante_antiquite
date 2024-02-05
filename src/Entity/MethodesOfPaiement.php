<?php

namespace App\Entity;

use App\Repository\MethodesOfPaiementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MethodesOfPaiementRepository::class)]
class MethodesOfPaiement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $met_label = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMetLabel(): ?string
    {
        return $this->met_label;
    }

    public function setMetLabel(string $met_label): static
    {
        $this->met_label = $met_label;

        return $this;
    }
}
