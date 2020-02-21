<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consulter
 *
 * @ORM\Table(name="consulter", indexes={@ORM\Index(name="FK_CONSULTER2", columns={"IDOFFRE"})})
 * @ORM\Entity(repositoryClass="App\Repository\ConsulterRepository")
 */
class Consulter
{
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
     * @ORM\Column(name="IDOFFRE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idoffre;

    public function getIdetudiant(): ?int
    {
        return $this->idetudiant;
    }

    public function getIdoffre(): ?int
    {
        return $this->idoffre;
    }


}
