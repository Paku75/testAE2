<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Self_;

/**
 * Post
 *
 * @ORM\Table(name="post", indexes={@ORM\Index(name="FK_CREER", columns={"IDETUDIANT"}), @ORM\Index(name="FK_CONTENIR", columns={"IDFORUM"})})
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
class Post
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDPOST", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpost;

    /**
     * @var int
     *
     * @ORM\Column(name="IDETUDIANT", type="integer", nullable=false)
     */
    private $idetudiant;

    /**
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Forum", mappedBy="post")
     */
    private $idforum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TITRE", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CONTENU", type="text", length=65535, nullable=true)
     */
    private $contenu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IMAGE", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $idcategory;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Category", mappedBy="Posts")
     */
    private $categories;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }

    public function getIdpost(): ?int
    {
        return $this->idpost;
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

    public function getIdforum()
    {
        return $this->idforum;
    }

    public function setIdforum(int $idforum)
    {
        $this->idforum = $idforum;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(?string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection|Category[]
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Category $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
            $category->addPost($this);
        }

        return $this;
    }

    public function removeCategory(Category $category): self
    {
        if ($this->categories->contains($category)) {
            $this->categories->removeElement($category);
            $category->removePost($this);
        }

        return $this;
    }

    /**
     * Get the value of idcategory
     *
     * @return  int
     */ 
    public function getIdcategory()
    {
        return $this->idcategory;
    }

    /**
     * Set the value of idcategory
     *
     * @param  int  $idcategory
     *
     * @return  self
     */ 
    public function setIdcategory(int $idcategory)
    {
        $this->idcategory = $idcategory;

        return $this;
    }
}
