<?php

namespace App\Entity;

use App\Repository\FillerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FillerRepository::class)
 */
class Filler
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $AnimeName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Episodes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnimeName(): ?string
    {
        return $this->AnimeName;
    }

    public function setAnimeName(string $AnimeName): self
    {
        $this->AnimeName = $AnimeName;

        return $this;
    }

    public function getEpisodes(): ?string
    {
        return $this->Episodes;
    }

    public function setEpisodes(string $Episodes): self
    {
        $this->Episodes = $Episodes;

        return $this;
    }
}
