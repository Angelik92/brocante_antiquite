<?php

namespace App\Entity;

use App\Repository\InvoicesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InvoicesRepository::class)]
class Invoices
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $inv_created_at = null;

    #[ORM\Column(length: 30)]
    private ?string $inv_number_invoice = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInvCreatedAt(): ?\DateTimeImmutable
    {
        return $this->inv_created_at;
    }

    public function setInvCreatedAt(\DateTimeImmutable $inv_created_at): static
    {
        $this->inv_created_at = $inv_created_at;

        return $this;
    }

    public function getInvNumberInvoice(): ?string
    {
        return $this->inv_number_invoice;
    }

    public function setInvNumberInvoice(string $inv_number_invoice): static
    {
        $this->inv_number_invoice = $inv_number_invoice;

        return $this;
    }
}
