<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Postuler
 *
 * @ORM\Table(name="postuler", indexes={@ORM\Index(name="FK_POSTULER2", columns={"IDFORUM"})})
 * @ORM\Entity(repositoryClass="App\Repository\PostulerRepository")
 */
class Postuler
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
     * @var string
     *
     * @ORM\Column(name="IDFORUM", type="string", length=10, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idforum;

    public function getIdetudiant(): ?int
    {
        return $this->idetudiant;
    }

    public function getIdforum(): ?string
    {
        return $this->idforum;
    }


}
