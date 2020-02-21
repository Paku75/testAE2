<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="FK_COMMENTER", columns={"IDETUDIANT"}), @ORM\Index(name="FK_AVOIR", columns={"IDPOST"})})
 * @ORM\Entity (repositoryClass="App\Repository\CommentaireRepository")
 */
class Commentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDCOMMENAIRE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommenaire;

    /**
     * @var int
     *
     * @ORM\Column(name="IDETUDIANT", type="integer", nullable=false)
     */
    private $idetudiant;

    /**
     * @var int
     *
     * @ORM\Column(name="IDPOST", type="integer", nullable=false)
     */
    private $idpost;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CREATEDAT", type="datetime", nullable=true)
     */
    private $createdat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="COMMENT", type="text", length=65535, nullable=true)
     */
    private $comment;

    public function getIdcommenaire(): ?int
    {
        return $this->idcommenaire;
    }

    public function getIdetudiant(): ?int
    {
        return $this->idetudiant;
    }

    public function setIdetudiant(int $idetudiant): self
    {
        $this->idetudiant = $idetudiant;

        return $this;
    }

    public function getIdpost(): ?int
    {
        return $this->idpost;
    }

    public function setIdpost(int $idpost): self
    {
        $this->idpost = $idpost;

        return $this;
    }

    public function getCreatedat(): ?\DateTimeInterface
    {
        return $this->createdat;
    }

    public function setCreatedat(?\DateTimeInterface $createdat): self
    {
        $this->createdat = $createdat;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }


}
