<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\MaxDepth;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ORM\Entity(repositoryClass="App\Repository\EmprendimientoRepository")
 */
class Emprendimiento
{
    /**
     * @Groups("emprendimiento")
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Groups("emprendimiento")
     * @ORM\Column(type="string", length=255)
     */
    private $razonsocial;

    /**
     * @Groups("emprendimiento")
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $direccion;

    /**
     * @Groups("emprendimiento")
     * @ORM\Column(type="bigint")
     */
    private $cuit;

    /**
     * @Groups("emprendimiento")
     * @ORM\ManyToOne(targetEntity="App\Entity\Ambito")
     */
    private $ambito;

    /**
     * @Groups("emprendimiento")
     * @ORM\ManyToOne(targetEntity="App\Entity\Rubro")
     * @ORM\JoinColumn(nullable=false)
     */
    private $rubro;

    /**
     * @Groups("emprendimiento")
     * @ORM\OneToMany(targetEntity="App\Entity\Foto", mappedBy="emprendimiento")
     */
    private $fotos;

    /**
     * @Groups("emprendimiento")
     * @ORM\OneToMany(targetEntity="App\Entity\Contacto", mappedBy="emprendimiento", orphanRemoval=true)
     */
    private $datoscontacto;

    /**
     * @Groups("emprendimiento")
     * @ORM\Column(type="text", nullable=true)
     */
    private $descripcion;

    /**
     * @Groups("emprendimiento")
     * @ORM\Column(type="float", nullable=true)
     */
    private $latitud;

    /**
     * @Groups("emprendimiento")
     * @ORM\Column(type="float", nullable=true)
     */
    private $longitud;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="emprendimientos")
     */
    private $titular;

    public function __construct()
    {
        $this->fotos = new ArrayCollection();
        $this->datoscontacto = new ArrayCollection();
    }

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

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(?string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getCuit(): ?int
    {
        return $this->cuit;
    }

    public function setCuit(int $cuit): self
    {
        $this->cuit = $cuit;

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

    public function getRubro(): ?Rubro
    {
        return $this->rubro;
    }

    public function setRubro(?Rubro $rubro): self
    {
        $this->rubro = $rubro;

        return $this;
    }

    /**
     * @return Collection|Foto[]
     */
    public function getFotos(): Collection
    {
        return $this->fotos;
    }

    public function addFoto(Foto $foto): self
    {
        if (!$this->fotos->contains($foto)) {
            $this->fotos[] = $foto;
            $foto->setEmprendimiento($this);
        }

        return $this;
    }

    public function removeFoto(Foto $foto): self
    {
        if ($this->fotos->contains($foto)) {
            $this->fotos->removeElement($foto);
            // set the owning side to null (unless already changed)
            if ($foto->getEmprendimiento() === $this) {
                $foto->setEmprendimiento(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Contacto[]
     */
    public function getDatoscontacto(): Collection
    {
        return $this->datoscontacto;
    }

    public function addDatoscontacto(Contacto $datoscontacto): self
    {
        if (!$this->datoscontacto->contains($datoscontacto)) {
            $this->datoscontacto[] = $datoscontacto;
            $datoscontacto->setEmprendimiento($this);
        }

        return $this;
    }

    public function removeDatoscontacto(Contacto $datoscontacto): self
    {
        if ($this->datoscontacto->contains($datoscontacto)) {
            $this->datoscontacto->removeElement($datoscontacto);
            // set the owning side to null (unless already changed)
            if ($datoscontacto->getEmprendimiento() === $this) {
                $datoscontacto->setEmprendimiento(null);
            }
        }

        return $this;
    }

    
    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }
    
    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;
        
        return $this;
    }
    
    public function __toString(){
        return $this->getRazonsocial();
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

    public function jsonSerialize(){
        return [
            'id'=>$this->getId(),
            'razonsocal'=>$this->getRazonsocial(),
            

        ];
    }

    public function getTitular(): ?User
    {
        return $this->titular;
    }

    public function setTitular(?User $titular): self
    {
        $this->titular = $titular;

        return $this;
    }
}