<?php

namespace App\Entity;

use App\Repository\TypeEntrepriseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeEntrepriseRepository::class)
 */
class TypeEntreprise
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
     * @ORM\OneToMany(targetEntity=Commerce::class, mappedBy="typeEntreprise")
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
            $commerce->setTypeEntreprise($this);
        }

        return $this;
    }

    public function removeCommerce(Commerce $commerce): self
    {
        if ($this->commerces->removeElement($commerce)) {
            // set the owning side to null (unless already changed)
            if ($commerce->getTypeEntreprise() === $this) {
                $commerce->setTypeEntreprise(null);
            }
        }

        return $this;
    }
}
