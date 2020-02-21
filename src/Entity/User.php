<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="FK_APPARTENIR24", columns={"IDTYPEUSER"})})
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDUSER", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;

    /**
     * @var int
     *
     * @ORM\Column(name="IDTYPEUSER", type="integer", nullable=false)
     */
    private $idtypeuser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LOGIN", type="string", length=255, nullable=true)
     */
    private $login;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MPD", type="string", length=255, nullable=true)
     */
    private $mpd;

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function getIdtypeuser(): ?int
    {
        return $this->idtypeuser;
    }

    public function setIdtypeuser(int $idtypeuser): self
    {
        $this->idtypeuser = $idtypeuser;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getMpd(): ?string
    {
        return $this->mpd;
    }

    public function setMpd(?string $mpd): self
    {
        $this->mpd = $mpd;

        return $this;
    }


}
