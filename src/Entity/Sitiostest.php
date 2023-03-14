<?php

namespace App\Entity;

use App\Repository\SitiostestRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SitiostestRepository::class)]
class Sitiostest
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $sitiostest = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSitiostest(): ?string
    {
        return $this->sitiostest;
    }

    public function setSitiostest(string $sitiostest): self
    {
        $this->sitiostest = $sitiostest;

        return $this;
    }
}
