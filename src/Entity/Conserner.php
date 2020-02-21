<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conserner
 *
 * @ORM\Table(name="conserner", indexes={@ORM\Index(name="FK_CONSERNER2", columns={"IDOFFRE"})})
 * @ORM\Entity (repositoryClass="App\Repository\ConsernerRepository")
 */
class Conserner
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDCLASSE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idclasse;

    /**
     * @var int
     *
     * @ORM\Column(name="IDOFFRE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idoffre;

    public function getIdclasse(): ?int
    {
        return $this->idclasse;
    }

    public function getIdoffre(): ?int
    {
        return $this->idoffre;
    }


}
