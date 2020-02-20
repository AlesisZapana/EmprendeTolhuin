<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AmbitoRepository")
 */
class Ambito
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Groups("emprendimiento")
     * @ORM\Column(type="string", length=100)
     */
    private $tipoambito;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipoambito(): ?string
    {
        return $this->tipoambito;
    }

    public function setTipoambito(string $tipoambito): self
    {
        $this->tipoambito = $tipoambito;

        return $this;
    }

    public function __toString() {
		return $this->getTipoambito();
	}
}
