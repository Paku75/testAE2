<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeuser
 *
 * @ORM\Table(name="typeuser")
 * @ORM\Entity(repositoryClass="App\Repository\TypeuserRepository")
 */
class Typeuser
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDTYPEUSER", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeuser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=255, nullable=true)
     */
    private $nom;

    public function getIdtypeuser(): ?int
    {
        return $this->idtypeuser;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }


}
