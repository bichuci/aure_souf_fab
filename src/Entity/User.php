<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
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
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $birthday;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $bio;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $siteweb;

    /**
     * @ORM\OneToOne(targetEntity=Brasserie::class, mappedBy="brasseur", cascade={"persist", "remove"})
     */
    private $brasserie;

    /**
     * @ORM\ManyToMany(targetEntity=Biere::class, inversedBy="users")
     */
    private $biere_favorite;

    /**
     * @ORM\ManyToMany(targetEntity=biere::class)
     */
    private $commentaire_id;

    /**
     * @ORM\ManyToMany(targetEntity=biere::class)
     */
    private $note_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bg_image;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $profil_image;

    /**
     * @ORM\OneToOne(targetEntity=Adresse::class, cascade={"persist", "remove"})
     */
    private $adresse_id;

    public function __construct()
    {
        $this->biere_favorite = new ArrayCollection();
        $this->commentaire_id = new ArrayCollection();
        $this->note_id = new ArrayCollection();
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    public function setBirthday(string $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(?string $bio): self
    {
        $this->bio = $bio;

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

    public function getBrasserie(): ?Brasserie
    {
        return $this->brasserie;
    }

    public function setBrasserie(?Brasserie $brasserie): self
    {
        $this->brasserie = $brasserie;

        // set (or unset) the owning side of the relation if necessary
        $newBrasseur = null === $brasserie ? null : $this;
        if ($brasserie->getBrasseur() !== $newBrasseur) {
            $brasserie->setBrasseur($newBrasseur);
        }

        return $this;
    }

    /**
     * @return Collection|Biere[]
     */
    public function getBiereFavorite(): Collection
    {
        return $this->biere_favorite;
    }

    public function addBiereFavorite(Biere $biereFavorite): self
    {
        if (!$this->biere_favorite->contains($biereFavorite)) {
            $this->biere_favorite[] = $biereFavorite;
        }

        return $this;
    }

    public function removeBiereFavorite(Biere $biereFavorite): self
    {
        $this->biere_favorite->removeElement($biereFavorite);

        return $this;
    }

    /**
     * @return Collection|biere[]
     */
    public function getCommentaireId(): Collection
    {
        return $this->commentaire_id;
    }

    public function addCommentaireId(biere $commentaireId): self
    {
        if (!$this->commentaire_id->contains($commentaireId)) {
            $this->commentaire_id[] = $commentaireId;
        }

        return $this;
    }

    public function removeCommentaireId(biere $commentaireId): self
    {
        $this->commentaire_id->removeElement($commentaireId);

        return $this;
    }

    /**
     * @return Collection|biere[]
     */
    public function getNoteId(): Collection
    {
        return $this->note_id;
    }

    public function addNoteId(biere $noteId): self
    {
        if (!$this->note_id->contains($noteId)) {
            $this->note_id[] = $noteId;
        }

        return $this;
    }

    public function removeNoteId(biere $noteId): self
    {
        $this->note_id->removeElement($noteId);

        return $this;
    }

    public function getBgImage(): ?string
    {
        return $this->bg_image;
    }

    public function setBgImage(?string $bg_image): self
    {
        $this->bg_image = $bg_image;

        return $this;
    }

    public function getProfilImage(): ?string
    {
        return $this->profil_image;
    }

    public function setProfilImage(?string $profil_image): self
    {
        $this->profil_image = $profil_image;

        return $this;
    }

    public function getAdresseId(): ?Adresse
    {
        return $this->adresse_id;
    }

    public function setAdresseId(?Adresse $adresse_id): self
    {
        $this->adresse_id = $adresse_id;

        return $this;
    }

}
