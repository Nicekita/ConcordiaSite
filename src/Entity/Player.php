<?php

namespace App\Entity;

use App\Repository\PlayerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlayerRepository::class)
 */
class Player
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
    private $UUID;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NickName;

    /**
     * @ORM\ManyToOne(targetEntity=Town::class, inversedBy="PlayerList")
     */
    private $Town;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUUID(): ?string
    {
        return $this->UUID;
    }

    public function setUUID(string $UUID): self
    {
        $this->UUID = $UUID;

        return $this;
    }

    public function getNickName(): ?string
    {
        return $this->NickName;
    }

    public function setNickName(string $NickName): self
    {
        $this->NickName = $NickName;

        return $this;
    }

    public function getTown(): ?Town
    {
        return $this->Town;
    }

    public function setTown(?Town $Town): self
    {
        $this->Town = $Town;

        return $this;
    }
}
