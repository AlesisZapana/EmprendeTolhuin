<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SectorproductivoRepository")
 */
class Sectorproductivo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Solicitud", mappedBy="sectorproductivo")
     */
    private $solicitudes;

    public function __construct()
    {
        $this->solicitudes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

	public function __toString() {
                        		return $this->getNombre();
                        	}

    /**
     * @return Collection|Solicitud[]
     */
    public function getSolicitudes(): Collection
    {
        return $this->solicitudes;
    }

    public function addSolicitude(Solicitud $solicitude): self
    {
        if (!$this->solicitudes->contains($solicitude)) {
            $this->solicitudes[] = $solicitude;
            $solicitude->setSectorproductivo($this);
        }

        return $this;
    }

    public function removeSolicitude(Solicitud $solicitude): self
    {
        if ($this->solicitudes->contains($solicitude)) {
            $this->solicitudes->removeElement($solicitude);
            // set the owning side to null (unless already changed)
            if ($solicitude->getSectorproductivo() === $this) {
                $solicitude->setSectorproductivo(null);
            }
        }

        return $this;
    }
}
