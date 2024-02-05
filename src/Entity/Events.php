<?php

namespace App\Entity;

use App\Repository\EventsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventsRepository::class)]
class Events
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $ev_name = null;

    #[ORM\Column(length: 255)]
    private ?string $ev_address = null;

    #[ORM\Column]
    private ?int $ev_zip_code = null;

    #[ORM\Column(length: 100)]
    private ?string $ev_city = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    private ?\DateTimeImmutable $ev_date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEvName(): ?string
    {
        return $this->ev_name;
    }

    public function setEvName(string $ev_name): static
    {
        $this->ev_name = $ev_name;

        return $this;
    }

    public function getEvAddress(): ?string
    {
        return $this->ev_address;
    }

    public function setEvAddress(string $ev_address): static
    {
        $this->ev_address = $ev_address;

        return $this;
    }

    public function getEvZipCode(): ?int
    {
        return $this->ev_zip_code;
    }

    public function setEvZipCode(int $ev_zip_code): static
    {
        $this->ev_zip_code = $ev_zip_code;

        return $this;
    }

    public function getEvCity(): ?string
    {
        return $this->ev_city;
    }

    public function setEvCity(string $ev_city): static
    {
        $this->ev_city = $ev_city;

        return $this;
    }

    public function getEvDate(): ?\DateTimeImmutable
    {
        return $this->ev_date;
    }

    public function setEvDate(\DateTimeImmutable $ev_date): static
    {
        $this->ev_date = $ev_date;

        return $this;
    }
}
