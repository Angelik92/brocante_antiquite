<?php

namespace App\Entity;

use App\Repository\DeliveryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DeliveryRepository::class)]
class Delivery
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $del_label = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDelLabel(): ?string
    {
        return $this->del_label;
    }

    public function setDelLabel(string $del_label): static
    {
        $this->del_label = $del_label;

        return $this;
    }
}
