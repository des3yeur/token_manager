<?php

namespace App\Entity;

use App\Repository\LineaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LineaRepository::class)]
class Linea
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Token_name = null;

    #[ORM\Column(length: 5)]
    private ?string $Symbol = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $Initial_supply = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $Decimals = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTokenName(): ?string
    {
        return $this->Token_name;
    }

    public function setTokenName(string $Token_name): static
    {
        $this->Token_name = $Token_name;

        return $this;
    }

    public function getSymbol(): ?string
    {
        return $this->Symbol;
    }

    public function setSymbol(string $Symbol): static
    {
        $this->Symbol = $Symbol;

        return $this;
    }

    public function getInitialSupply(): ?string
    {
        return $this->Initial_supply;
    }

    public function setInitialSupply(string $Initial_supply): static
    {
        $this->Initial_supply = $Initial_supply;

        return $this;
    }

    public function getDecimals(): ?string
    {
        return $this->Decimals;
    }

    public function setDecimals(string $Decimals): static
    {
        $this->Decimals = $Decimals;

        return $this;
    }
}
