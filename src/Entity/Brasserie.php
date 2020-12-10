<?php

namespace App\Entity;

use App\Repository\BrasserieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BrasserieRepository::class)
 */
class Brasserie
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
     * @ORM\OneToOne(targetEntity=Adresse::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $adresse;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $siteweb;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="brasserie", cascade={"persist", "remove"})
     */
    private $brasseur;

    /**
     * @ORM\OneToMany(targetEntity=Biere::class, mappedBy="brasserie_id")
     * @ORM\JoinColumn(nullable=true)
     */
    private $bieres;

    public function __construct()
    {
        $this->bieres = new ArrayCollection();
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

    public function getAdresse(): ?Adresse
    {
        return $this->adresse;
    }

    public function setAdresse(adresse $adresse): self
    {
        $this->adresse = $adresse;

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

    public function getSiteweb(): ?string
    {
        return $this->siteweb;
    }

    public function setSiteweb(?string $siteweb): self
    {
        $this->siteweb = $siteweb;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(?int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getBrasseur(): ?User
    {
        return $this->brasseur;
    }

    public function setBrasseur(?User $brasseur): self
    {
        $this->brasseur = $brasseur;

        return $this;
    }

    /**
     * @return Collection|Biere[]
     */
    public function getBieres(): Collection
    {
        return $this->bieres;
    }

    public function addBiere(Biere $biere): self
    {
        if (!$this->bieres->contains($biere)) {
            $this->bieres[] = $biere;
            $biere->setBrasserieId($this);
        }

        return $this;
    }

    public function removeBiere(Biere $biere): self
    {
        if ($this->bieres->removeElement($biere)) {
            // set the owning side to null (unless already changed)
            if ($biere->getBrasserieId() === $this) {
                $biere->setBrasserieId(null);
            }
        }

        return $this;
    }
}
