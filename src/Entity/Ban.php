<?php

namespace App\Entity;

use App\Repository\BanRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BanRepository::class)
 */
class Ban
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
    private $Nickname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $StartingDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EndingDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Reason;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNickname(): ?string
    {
        return $this->Nickname;
    }

    public function setNickname(string $Nickname): self
    {
        $this->Nickname = $Nickname;

        return $this;
    }

    public function getStartingDate(): ?string
    {
        return $this->StartingDate;
    }

    public function setStartingDate(string $StartingDate): self
    {
        $this->StartingDate = $StartingDate;

        return $this;
    }

    public function getEndingDate(): ?string
    {
        return $this->EndingDate;
    }

    public function setEndingDate(string $EndingDate): self
    {
        $this->EndingDate = $EndingDate;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->Reason;
    }

    public function setReason(?string $Reason): self
    {
        $this->Reason = $Reason;

        return $this;
    }
}
