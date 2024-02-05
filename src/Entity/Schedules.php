<?php

namespace App\Entity;

use App\Repository\SchedulesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SchedulesRepository::class)]
class Schedules
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $sche_day = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $sche_morning_schedule = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $sche_afternoon_schedule = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScheDay(): ?string
    {
        return $this->sche_day;
    }

    public function setScheDay(string $sche_day): static
    {
        $this->sche_day = $sche_day;

        return $this;
    }

    public function getScheMorningSchedule(): ?string
    {
        return $this->sche_morning_schedule;
    }

    public function setScheMorningSchedule(?string $sche_morning_schedule): static
    {
        $this->sche_morning_schedule = $sche_morning_schedule;

        return $this;
    }

    public function getScheAfternoonSchedule(): ?string
    {
        return $this->sche_afternoon_schedule;
    }

    public function setScheAfternoonSchedule(?string $sche_afternoon_schedule): static
    {
        $this->sche_afternoon_schedule = $sche_afternoon_schedule;

        return $this;
    }
}
