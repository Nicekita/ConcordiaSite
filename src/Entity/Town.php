<?php

namespace App\Entity;

use App\Repository\TownRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TownRepository::class)
 */
class Town
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
    private $Owner;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\ManyToOne(targetEntity=realm::class, inversedBy="townlist")
     */
    private $Realm;

    /**
     * @ORM\OneToMany(targetEntity=Player::class, mappedBy="Town")
     */
    private $PlayerList;

    public function __construct()
    {
        $this->PlayerList = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOwner(): ?string
    {
        return $this->Owner;
    }

    public function setOwner(string $Owner): self
    {
        $this->Owner = $Owner;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getRealm(): ?realm
    {
        return $this->Realm;
    }

    public function setRealm(?realm $Realm): self
    {
        $this->Realm = $Realm;

        return $this;
    }

    /**
     * @return Collection|Player[]
     */
    public function getPlayerList(): Collection
    {
        return $this->PlayerList;
    }

    public function addPlayerList(Player $playerList): self
    {
        if (!$this->PlayerList->contains($playerList)) {
            $this->PlayerList[] = $playerList;
            $playerList->setTown($this);
        }

        return $this;
    }

    public function removePlayerList(Player $playerList): self
    {
        if ($this->PlayerList->removeElement($playerList)) {
            // set the owning side to null (unless already changed)
            if ($playerList->getTown() === $this) {
                $playerList->setTown(null);
            }
        }

        return $this;
    }
}
