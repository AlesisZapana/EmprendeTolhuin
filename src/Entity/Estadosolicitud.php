<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="estadosolicitudes")
 * @ORM\Entity(repositoryClass="App\Repository\EstadosolicitudRepository")
 */
class Estadosolicitud
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Solicitud", mappedBy="estado")
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
            $solicitude->setEstado($this);
        }

        return $this;
    }

    public function removeSolicitude(Solicitud $solicitude): self
    {
        if ($this->solicitudes->contains($solicitude)) {
            $this->solicitudes->removeElement($solicitude);
            // set the owning side to null (unless already changed)
            if ($solicitude->getEstado() === $this) {
                $solicitude->setEstado(null);
            }
        }

        return $this;
    }

    public function __toString() {
        return $this->getNombre();
    }
}
