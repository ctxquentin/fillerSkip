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
     * @ORM\Column(type="integer", length=255)
     */
    private $netflixId;

    /**
     * @ORM\Column(type="string")
     */
    private $episodes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNetflixId(): ?int
    {
        return $this->netflixId;
    }

    public function setNetflixId(string $netflixId): self
    {
        $this->netflixId = $netflixId;

        return $this;
    }

    public function getEpisodes(): ?string
    {
        return $this->episodes;
    }

    public function setEpisodes(string $episodes): self
    {
        $this->episodes = $episodes;

        return $this;
    }
}
