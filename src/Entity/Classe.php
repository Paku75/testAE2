<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe
 *
 * @ORM\Table(name="classe", indexes={@ORM\Index(name="FK_APPARTENIR", columns={"IDFILIERE"})})
 * @ORM\Entity (repositoryClass="App\Repository\ClasseRepository")
 */
class Classe
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDCLASSE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclasse;

    /**
     * @var int
     *
     * @ORM\Column(name="IDFILIERE", type="integer", nullable=false)
     */
    private $idfiliere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=255, nullable=true)
     */
    private $nom;

    public function getIdclasse(): ?int
    {
        return $this->idclasse;
    }

    public function getIdfiliere(): ?int
    {
        return $this->idfiliere;
    }

    public function setIdfiliere(int $idfiliere): self
    {
        $this->idfiliere = $idfiliere;

        return $this;
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
