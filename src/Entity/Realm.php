<?php

namespace App\Entity;

use App\Repository\RealmRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint;

/**
 * @ORM\Entity(repositoryClass=RealmRepository::class)
 * @ORM\Table(name="Realm",
 *    uniqueConstraints={
 *        @UniqueConstraint(name="RealmName_unique",
 *            columns={"Name"})
 *    }
 * )
 */
class Realm
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
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Owner;

    /**
     * @ORM\OneToOne(targetEntity=Town::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Capital;

    /**
     * @ORM\OneToMany(targetEntity=Town::class, mappedBy="Realm")
     */
    private $townlist;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $cash;

    public function __construct()
    {
        $this->townlist = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getOwner(): ?string
    {
        return $this->Owner;
    }

    public function setOwner(string $Owner): self
    {
        $this->Owner = $Owner;

        return $this;
    }

    public function getCapital(): ?town
    {
        return $this->Capital;
    }

    public function setCapital(town $Capital): self
    {
        $this->Capital = $Capital;

        return $this;
    }

    /**
     * @return Collection|Town[]
     */
    public function getTownlist(): Collection
    {
        return $this->townlist;
    }

    public function addTownlist(Town $townlist): self
    {
        if (!$this->townlist->contains($townlist)) {
            $this->townlist[] = $townlist;
            $townlist->setRealm($this);
        }

        return $this;
    }

    public function removeTownlist(Town $townlist): self
    {
        if ($this->townlist->removeElement($townlist)) {
            // set the owning side to null (unless already changed)
            if ($townlist->getRealm() === $this) {
                $townlist->setRealm(null);
            }
        }

        return $this;
    }

    public function getCash(): ?float
    {
        return $this->cash;
    }

    public function setCash(?float $cash): self
    {
        $this->cash = $cash;

        return $this;
    }
}
