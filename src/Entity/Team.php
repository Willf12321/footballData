<?php

namespace App\Entity;

use App\Repository\TeamRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TeamRepository::class)]
class Team
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $team_id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $logo = null;

    #[ORM\Column]
    private ?int $points = null;

    #[ORM\Column]
    private ?int $goal_diff = null;

    #[ORM\Column]
    private ?int $form = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTeamId(): ?int
    {
        return $this->team_id;
    }

    public function setTeamId(int $team_id): static
    {
        $this->team_id = $team_id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): static
    {
        $this->logo = $logo;

        return $this;
    }

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(int $points): static
    {
        $this->points = $points;

        return $this;
    }

    public function getGoalDiff(): ?int
    {
        return $this->goal_diff;
    }

    public function setGoalDiff(int $goal_diff): static
    {
        $this->goal_diff = $goal_diff;

        return $this;
    }

    public function getForm(): ?int
    {
        return $this->form;
    }

    public function setForm(int $form): static
    {
        $this->form = $form;

        return $this;
    }
}
