<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="solicitudes")
 * @ORM\Entity(repositoryClass="App\Repository\SolicitudRepository")
 */
class Solicitud
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
    private $razonsocial;

    /**
     * @ORM\Column(type="bigint")
     */
    private $cuit;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $direccion;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ambito")
     */
    private $ambito;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $rubro;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Sectorproductivo", inversedBy="solicitudes")
     */
    private $sectorproductivo;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="float")
     */
    private $latitud;

    /**
     * @ORM\Column(type="float")
     */
    private $longitud;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $titularnombre;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $titularapellido;

    /**
     * @ORM\Column(type="bigint")
     */
    private $dni;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Estadosolicitud", inversedBy="solicitudes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $estado;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRazonsocial(): ?string
    {
        return $this->razonsocial;
    }

    public function setRazonsocial(string $razonsocial): self
    {
        $this->razonsocial = $razonsocial;

        return $this;
    }

    public function getCuit(): ?string
    {
        return $this->cuit;
    }

    public function setCuit(string $cuit): self
    {
        $this->cuit = $cuit;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getAmbito(): ?Ambito
    {
        return $this->ambito;
    }

    public function setAmbito(?Ambito $ambito): self
    {
        $this->ambito = $ambito;

        return $this;
    }

    public function getRubro(): ?string
    {
        return $this->rubro;
    }

    public function setRubro(string $rubro): self
    {
        $this->rubro = $rubro;

        return $this;
    }

    public function getSectorproductivo(): ?Sectorproductivo
    {
        return $this->sectorproductivo;
    }

    public function setSectorproductivo(?Sectorproductivo $sectorproductivo): self
    {
        $this->sectorproductivo = $sectorproductivo;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getLatitud(): ?float
    {
        return $this->latitud;
    }

    public function setLatitud(float $latitud): self
    {
        $this->latitud = $latitud;

        return $this;
    }

    public function getLongitud(): ?float
    {
        return $this->longitud;
    }

    public function setLongitud(float $longitud): self
    {
        $this->longitud = $longitud;

        return $this;
    }

    public function getTitularnombre(): ?string
    {
        return $this->titularnombre;
    }

    public function setTitularnombre(string $titularnombre): self
    {
        $this->titularnombre = $titularnombre;

        return $this;
    }

    public function getTitularapellido(): ?string
    {
        return $this->titularapellido;
    }

    public function setTitularapellido(string $titularapellido): self
    {
        $this->titularapellido = $titularapellido;

        return $this;
    }

    public function getDni(): ?string
    {
        return $this->dni;
    }

    public function setDni(string $dni): self
    {
        $this->dni = $dni;

        return $this;
    }

    public function getEstado(): ?Estadosolicitud
    {
        return $this->estado;
    }

    public function setEstado(?Estadosolicitud $estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}
