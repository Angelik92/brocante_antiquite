<?php

namespace App\Entity;

use App\Repository\CompanyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompanyRepository::class)]
class Company
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $com_name = null;

    #[ORM\Column(length: 100)]
    private ?string $com_city = null;

    #[ORM\Column(length: 20)]
    private ?string $com_siren = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComName(): ?string
    {
        return $this->com_name;
    }

    public function setComName(string $com_name): static
    {
        $this->com_name = $com_name;

        return $this;
    }

    public function getComCity(): ?string
    {
        return $this->com_city;
    }

    public function setComCity(string $com_city): static
    {
        $this->com_city = $com_city;

        return $this;
    }

    public function getComSiren(): ?string
    {
        return $this->com_siren;
    }

    public function setComSiren(string $com_siren): static
    {
        $this->com_siren = $com_siren;

        return $this;
    }
}
