<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\MaxDepth;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactoRepository")
 */
class Contacto
{
    /**
     * @Groups("contacto")
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dato;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $tipo;

    /**
     * @Groups("emprendimiento_detalle")
     * @ORM\ManyToOne(targetEntity="App\Entity\Emprendimiento", inversedBy="datoscontacto")
     * @ORM\JoinColumn(nullable=false)
     */
    private $emprendimiento;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDato(): ?string
    {
        return $this->dato;
    }

    public function setDato(string $dato): self
    {
        $this->dato = $dato;

        return $this;
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

    public function getEmprendimiento(): ?Emprendimiento
    {
        return $this->emprendimiento;
    }

    public function setEmprendimiento(?Emprendimiento $emprendimiento): self
    {
        $this->emprendimiento = $emprendimiento;

        return $this;
    }
}
