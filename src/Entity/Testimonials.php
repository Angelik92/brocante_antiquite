<?php

namespace App\Entity;

use App\Repository\TestimonialsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestimonialsRepository::class)]
class Testimonials
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $tes_customer = null;

    #[ORM\Column]
    private ?int $tes_rating = null;

    #[ORM\Column(length: 255)]
    private ?string $tes_content = null;

    #[ORM\Column]
    private ?bool $tes_approved = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $tes_created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $tes_updated_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTesCustomer(): ?string
    {
        return $this->tes_customer;
    }

    public function setTesCustomer(string $tes_customer): static
    {
        $this->tes_customer = $tes_customer;

        return $this;
    }

    public function getTesRating(): ?int
    {
        return $this->tes_rating;
    }

    public function setTesRating(int $tes_rating): static
    {
        $this->tes_rating = $tes_rating;

        return $this;
    }

    public function getTesContent(): ?string
    {
        return $this->tes_content;
    }

    public function setTesContent(string $tes_content): static
    {
        $this->tes_content = $tes_content;

        return $this;
    }

    public function isTesApproved(): ?bool
    {
        return $this->tes_approved;
    }

    public function setTesApproved(bool $tes_approved): static
    {
        $this->tes_approved = $tes_approved;

        return $this;
    }

    public function getTesCreatedAt(): ?\DateTimeImmutable
    {
        return $this->tes_created_at;
    }

    public function setTesCreatedAt(\DateTimeImmutable $tes_created_at): static
    {
        $this->tes_created_at = $tes_created_at;

        return $this;
    }

    public function getTesUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->tes_updated_at;
    }

    public function setTesUpdatedAt(?\DateTimeImmutable $tes_updated_at): static
    {
        $this->tes_updated_at = $tes_updated_at;

        return $this;
    }
}
