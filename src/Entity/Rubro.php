<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RubroRepository")
 */
class Rubro
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Groups("emprendimiento")
     * @ORM\Column(type="string", length=255)
     */
    private $tipo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Sectorproductivo")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sector;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getSector(): ?Sectorproductivo
    {
        return $this->sector;
    }

    public function setSector(?Sectorproductivo $sector): self
    {
        $this->sector = $sector;

        return $this;
    }

    public function __toString() {
        return $this->getTipo();
    }        
}
