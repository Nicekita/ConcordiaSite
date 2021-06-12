<?php

namespace App\Entity;

use App\Repository\PlayerRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint;
/**
 * @ORM\Entity(repositoryClass=PlayerRepository::class)
 * @ORM\Table(name="Player",
 *    uniqueConstraints={
 *        @UniqueConstraint(name="UUID_unique",
 *            columns={"UUID"})
 *    }
 * )
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
     * @ORM\JoinColumn(onDelete="SET NULL")
     */
    private $Town;

    /**
     * @ORM\Column(type="float")
     */
    private $Cash;

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

    public function getCash(): ?float
    {
        return $this->Cash;
    }

    public function setCash(float $Cash): self
    {
        $this->Cash = $Cash;

        return $this;
    }
}
