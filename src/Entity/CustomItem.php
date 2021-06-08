<?php

namespace App\Entity;

use App\Repository\CustomItemRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CustomItemRepository::class)
 */
class CustomItem
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
    private $craftImage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $itemImage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

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

    public function getCraftImage(): ?string
    {
        return $this->craftImage;
    }

    public function setCraftImage(string $craftImage): self
    {
        $this->craftImage = $craftImage;

        return $this;
    }

    public function getItemImage(): ?string
    {
        return $this->itemImage;
    }

    public function setItemImage(string $itemImage): self
    {
        $this->itemImage = $itemImage;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }
}
