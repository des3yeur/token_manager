<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\EthereumRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EthereumRepository::class)]
#[ApiResource]
class Ethereum
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Tokenname = null;

    #[ORM\Column(length: 5)]
    private ?string $Symbol = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $initialsupply = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $decimals = null;

    #[ORM\Column(length: 255)]
    private ?string $template = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTokenname(): ?string
    {
        return $this->Tokenname;
    }

    public function setTokenname(string $Tokenname): static
    {
        $this->Tokenname = $Tokenname;

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

    public function getInitialsupply(): ?string
    {
        return $this->initialsupply;
    }

    public function setInitialsupply(string $initialsupply): static
    {
        $this->initialsupply = $initialsupply;

        return $this;
    }

    public function getDecimals(): ?string
    {
        return $this->decimals;
    }

    public function setDecimals(string $decimals): static
    {
        $this->decimals = $decimals;

        return $this;
    }

    public function getTemplate(): ?string
    {
        return $this->template;
    }

    public function setTemplate(string $template): static
    {
        $this->template = $template;

        return $this;
    }
}
