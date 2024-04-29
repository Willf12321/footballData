<?php

namespace App\Entity;

use App\Repository\HomeFixtureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HomeFixtureRepository::class)]
class FixtureStats
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $fixture_id = null;

    #[ORM\Column]
    private ?int $team_id = null;

    #[ORM\Column]
    private ?int $shots_target = null;

    #[ORM\Column]
    private ?int $shots_total = null;

    #[ORM\Column]
    private ?int $possession = null;

    #[ORM\Column]
    private ?int $red_cards = null;

    #[ORM\Column]
    private ?int $passes_total = null;

    #[ORM\Column]
    private ?int $passes_percentage = null;

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

    public function getTeamId(): ?int
    {
        return $this->team_id;
    }

    public function setTeamId(int $team_id): static
    {
        $this->team_id = $team_id;

        return $this;
    }

    public function getShotsTarget(): ?int
    {
        return $this->shots_target;
    }

    public function setShotsTarget(int $shots_target): static
    {
        $this->shots_target = $shots_target;

        return $this;
    }

    public function getShotsTotal(): ?int
    {
        return $this->shots_total;
    }

    public function setShotsTotal(int $shots_total): static
    {
        $this->shots_total = $shots_total;

        return $this;
    }

    public function getPossession(): ?int
    {
        return $this->possession;
    }

    public function setPossession(int $possession): static
    {
        $this->possession = $possession;

        return $this;
    }

    public function getRedCards(): ?int
    {
        return $this->red_cards;
    }

    public function setRedCards(int $red_cards): static
    {
        $this->red_cards = $red_cards;

        return $this;
    }

    public function getPassesTotal(): ?int
    {
        return $this->passes_total;
    }

    public function setPassesTotal(int $passes_total): static
    {
        $this->passes_total = $passes_total;

        return $this;
    }

    public function getPassesPercentage(): ?int
    {
        return $this->passes_percentage;
    }

    public function setPassesPercentage(int $passes_percentage): static
    {
        $this->passes_percentage = $passes_percentage;

        return $this;
    }
}
