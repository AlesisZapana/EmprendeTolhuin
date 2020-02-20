<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\MaxDepth;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FotoRepository")
 */
class Foto
{
    /**
     * @Groups("foto")
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre_foto;

    /**
     * @Groups("emprendimiento_detalle")
     * @ORM\ManyToOne(targetEntity="App\Entity\Emprendimiento", inversedBy="fotos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $emprendimiento;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreFoto(): ?string
    {
        return $this->nombre_foto;
    }

    public function setNombreFoto(string $nombre_foto): self
    {
        $this->nombre_foto = $nombre_foto;

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

    public function __toString(){
        return $this->getNombreFoto();
    }

}
