<?php

namespace App\Entity;

use App\Repository\SpecialiteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SpecialiteRepository::class)
 */
class Specialite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity=Commerce::class, mappedBy="specialite")
     */
    private $commerces;

    public function __construct()
    {
        $this->commerces = new ArrayCollection();
    }

  

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Commerce[]
     */
    public function getCommerces(): Collection
    {
        return $this->commerces;
    }

    public function addCommerce(Commerce $commerce): self
    {
        if (!$this->commerces->contains($commerce)) {
            $this->commerces[] = $commerce;
            $commerce->addSpecialite($this);
        }

        return $this;
    }

    public function removeCommerce(Commerce $commerce): self
    {
        if ($this->commerces->removeElement($commerce)) {
            $commerce->removeSpecialite($this);
        }

        return $this;
    }

   
}
