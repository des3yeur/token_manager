<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\BlockchainSolidityRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BlockchainSolidityRepository::class)]
#[ApiResource]
class BlockchainSolidity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $token_name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $symbol = null;

    #[ORM\Column]
    private ?int $initialSupply = null;

    #[ORM\Column]
    private ?int $decimals = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTokenName(): ?string
    {
        return $this->token_name;
    }

    public function setTokenName(string $token_name): static
    {
        $this->token_name = $token_name;

        return $this;
    }

    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    public function setSymbol(?string $symbol): static
    {
        $this->symbol = $symbol;

        return $this;
    }

    public function getInitialSupply(): ?int
    {
        return $this->initialSupply;
    }

    public function setInitialSupply(int $initialSupply): static
    {
        $this->initialSupply = $initialSupply;

        return $this;
    }

    public function getDecimals(): ?int
    {
        return $this->decimals;
    }

    public function setDecimals(int $decimals): static
    {
        $this->decimals = $decimals;

        return $this;
    }
}
