<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeoffre
 *
 * @ORM\Table(name="typeoffre")
 * @ORM\Entity(repositoryClass="App\Repository\TypeoffreRepository")
 */
class Typeoffre
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="IDTYPEOFFRE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeoffre;

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getIdtypeoffre(): ?int
    {
        return $this->idtypeoffre;
    }


}
