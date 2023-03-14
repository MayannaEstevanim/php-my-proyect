<?php

namespace App\Entity;

use App\Repository\YesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: YesRepository::class)]
class Yes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Yes = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getYes(): ?string
    {
        return $this->Yes;
    }

    public function setYes(?string $Yes): self
    {
        $this->Yes = $Yes;

        return $this;
    }
}
