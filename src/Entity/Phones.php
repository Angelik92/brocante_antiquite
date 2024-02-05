<?php

namespace App\Entity;

use App\Repository\PhonesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PhonesRepository::class)]
class Phones
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $pho_number = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhoNumber(): ?int
    {
        return $this->pho_number;
    }

    public function setPhoNumber(int $pho_number): static
    {
        $this->pho_number = $pho_number;

        return $this;
    }
}
