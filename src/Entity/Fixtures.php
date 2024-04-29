<?php

namespace App\Entity;

use App\Repository\FixturesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FixturesRepository::class)]
class Fixtures
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $fixture_id = null;

    #[ORM\Column(length: 255)]
    private ?string $round = null;

    #[ORM\Column(length: 255)]
    private ?string $home_team = null;

    #[ORM\Column(length: 255)]
    private ?string $away_team = null;

    #[ORM\Column]
    private ?int $home_team_goals = null;

    #[ORM\Column]
    private ?int $away_team_goals = null;

    #[ORM\Column(length: 255)]
    private ?string $current_season = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFixtureId(): ?int
    {
        return $this->fixture_id;
    }

    public function setFixtureId(int $fixture_id): static
    {
        $this->fixture_id = $fixture_id;

        return $this;
    }

    public function getRound(): ?string
    {
        return $this->round;
    }

    public function setRound(string $round): static
    {
        $this->round = $round;

        return $this;
    }

    public function getHomeTeam(): ?string
    {
        return $this->home_team;
    }

    public function setHomeTeam(string $home_team): static
    {
        $this->home_team = $home_team;

        return $this;
    }

    public function getAwayTeam(): ?string
    {
        return $this->away_team;
    }

    public function setAwayTeam(string $away_team): static
    {
        $this->away_team = $away_team;

        return $this;
    }

    public function getHomeTeamGoals(): ?int
    {
        return $this->home_team_goals;
    }

    public function setHomeTeamGoals(int $home_team_goals): static
    {
        $this->home_team_goals = $home_team_goals;

        return $this;
    }

    public function getAwayTeamGoals(): ?int
    {
        return $this->away_team_goals;
    }

    public function setAwayTeamGoals(int $away_team_goals): static
    {
        $this->away_team_goals = $away_team_goals;

        return $this;
    }

    public function getCurrentSeason(): ?string
    {
        return $this->current_season;
    }

    public function setCurrentSeason(string $current_season): static
    {
        $this->current_season = $current_season;

        return $this;
    }
}
