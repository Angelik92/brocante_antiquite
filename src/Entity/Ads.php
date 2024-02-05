<?php

namespace App\Entity;

use App\Repository\AdsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdsRepository::class)]
class Ads
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    private ?string $ad_title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $ad_description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ad_path = null;

    #[ORM\Column]
    private ?float $ad_price = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $ad_period = null;

    #[ORM\Column(length: 255)]
    private ?string $ad_material = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ad_title_of_artwork = null;

    #[ORM\Column]
    private ?bool $ad_sign = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ad_edition = null;

    #[ORM\Column(nullable: true)]
    private ?int $ad_year = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $ad_country_of_origin = null;

    #[ORM\Column]
    private ?float $ad_height = null;

    #[ORM\Column]
    private ?float $ad_width = null;

    #[ORM\Column]
    private ?float $ad_depth = null;

    #[ORM\Column(nullable: true)]
    private ?float $ad_weight = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdTitle(): ?string
    {
        return $this->ad_title;
    }

    public function setAdTitle(string $ad_title): static
    {
        $this->ad_title = $ad_title;

        return $this;
    }

    public function getAdDescription(): ?string
    {
        return $this->ad_description;
    }

    public function setAdDescription(string $ad_description): static
    {
        $this->ad_description = $ad_description;

        return $this;
    }

    public function getAdPath(): ?string
    {
        return $this->ad_path;
    }

    public function setAdPath(?string $ad_path): static
    {
        $this->ad_path = $ad_path;

        return $this;
    }

    public function getAdPrice(): ?float
    {
        return $this->ad_price;
    }

    public function setAdPrice(float $ad_price): static
    {
        $this->ad_price = $ad_price;

        return $this;
    }

    public function getAdPeriod(): ?string
    {
        return $this->ad_period;
    }

    public function setAdPeriod(?string $ad_period): static
    {
        $this->ad_period = $ad_period;

        return $this;
    }

    public function getAdMaterial(): ?string
    {
        return $this->ad_material;
    }

    public function setAdMaterial(string $ad_material): static
    {
        $this->ad_material = $ad_material;

        return $this;
    }

    public function getAdTitleOfArtwork(): ?string
    {
        return $this->ad_title_of_artwork;
    }

    public function setAdTitleOfArtwork(?string $ad_title_of_artwork): static
    {
        $this->ad_title_of_artwork = $ad_title_of_artwork;

        return $this;
    }

    public function isAdSign(): ?bool
    {
        return $this->ad_sign;
    }

    public function setAdSign(bool $ad_sign): static
    {
        $this->ad_sign = $ad_sign;

        return $this;
    }

    public function getAdEdition(): ?string
    {
        return $this->ad_edition;
    }

    public function setAdEdition(?string $ad_edition): static
    {
        $this->ad_edition = $ad_edition;

        return $this;
    }

    public function getAdYear(): ?int
    {
        return $this->ad_year;
    }

    public function setAdYear(?int $ad_year): static
    {
        $this->ad_year = $ad_year;

        return $this;
    }

    public function getAdCountryOfOrigin(): ?string
    {
        return $this->ad_country_of_origin;
    }

    public function setAdCountryOfOrigin(?string $ad_country_of_origin): static
    {
        $this->ad_country_of_origin = $ad_country_of_origin;

        return $this;
    }

    public function getAdHeight(): ?float
    {
        return $this->ad_height;
    }

    public function setAdHeight(float $ad_height): static
    {
        $this->ad_height = $ad_height;

        return $this;
    }

    public function getAdWidth(): ?float
    {
        return $this->ad_width;
    }

    public function setAdWidth(float $ad_width): static
    {
        $this->ad_width = $ad_width;

        return $this;
    }

    public function getAdDepth(): ?float
    {
        return $this->ad_depth;
    }

    public function setAdDepth(float $ad_depth): static
    {
        $this->ad_depth = $ad_depth;

        return $this;
    }

    public function getAdWeight(): ?float
    {
        return $this->ad_weight;
    }

    public function setAdWeight(?float $ad_weight): static
    {
        $this->ad_weight = $ad_weight;

        return $this;
    }
}
