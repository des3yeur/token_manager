<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\BlockchainRustRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BlockchainRustRepository::class)]
#[ApiResource]
class BlockchainRust
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $token_name = null;

    #[ORM\Column(nullable: true)]
    private ?int $decimals = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTokenName(): ?string
    {
        return $this->token_name;
    }

    public function setTokenName(?string $token_name): static
    {
        $this->token_name = $token_name;

        return $this;
    }

    public function getDecimals(): ?int
    {
        return $this->decimals;
    }

    public function setDecimals(?int $decimals): static
    {
        $this->decimals = $decimals;

        return $this;
    }
}
