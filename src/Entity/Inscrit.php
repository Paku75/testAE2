<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscrit
 *
 * @ORM\Table(name="inscrit", indexes={@ORM\Index(name="FK_INSCRIT2", columns={"IDPROMOTION"}), @ORM\Index(name="FK_INSCRIT4", columns={"IDCLASSE"}), @ORM\Index(name="FK_INSCRIT3", columns={"IDETUDIANT"})})
 * @ORM\Entity(repositoryClass="App\Repository\InscritRepository")
 */
class Inscrit
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDFILIERE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idfiliere;

    /**
     * @var int
     *
     * @ORM\Column(name="IDPROMOTION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idpromotion;

    /**
     * @var int
     *
     * @ORM\Column(name="IDETUDIANT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idetudiant;

    /**
     * @var int
     *
     * @ORM\Column(name="IDCLASSE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idclasse;

    public function getIdfiliere(): ?int
    {
        return $this->idfiliere;
    }

    public function getIdpromotion(): ?int
    {
        return $this->idpromotion;
    }

    public function getIdetudiant(): ?int
    {
        return $this->idetudiant;
    }

    public function getIdclasse(): ?int
    {
        return $this->idclasse;
    }


}
