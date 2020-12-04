<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

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
    private $username;

    /**
     * @ORM\OneToOne(targetEntity=Adresse::class, cascade={"persist", "remove"})
     */
    private $adresse_id;

    /**
     * @ORM\Column(type="date")
     */
    private $date_naissance;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $bio;

    /**
     * @ORM\ManyToMany(targetEntity=Biere::class)
     */
    private $biere_favorite;

    /**
     * @ORM\OneToMany(targetEntity=NoteUser::class, mappedBy="user_id")
     */
    private $noteUsers;

    /**
     * @ORM\OneToMany(targetEntity=CommentaireUser::class, mappedBy="user_id")
     */
    private $commentaireUsers;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $profil_image;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bg_image;

    public function __construct()
    {
        $this->biere_favorite = new ArrayCollection();
        $this->noteUsers = new ArrayCollection();
        $this->commentaireUsers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getAdresseId(): ?adresse
    {
        return $this->adresse_id;
    }

    public function setAdresseId(?adresse $adresse_id): self
    {
        $this->adresse_id = $adresse_id;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(\DateTimeInterface $date_naissance): self
    {
        $this->date_naissance = $date_naissance;

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

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(?string $bio): self
    {
        $this->bio = $bio;

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
     * @return Collection|NoteUser[]
     */
    public function getNoteUsers(): Collection
    {
        return $this->noteUsers;
    }

    public function addNoteUser(NoteUser $noteUser): self
    {
        if (!$this->noteUsers->contains($noteUser)) {
            $this->noteUsers[] = $noteUser;
            $noteUser->setUserId($this);
        }

        return $this;
    }

    public function removeNoteUser(NoteUser $noteUser): self
    {
        if ($this->noteUsers->removeElement($noteUser)) {
            // set the owning side to null (unless already changed)
            if ($noteUser->getUserId() === $this) {
                $noteUser->setUserId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CommentaireUser[]
     */
    public function getCommentaireUsers(): Collection
    {
        return $this->commentaireUsers;
    }

    public function addCommentaireUser(CommentaireUser $commentaireUser): self
    {
        if (!$this->commentaireUsers->contains($commentaireUser)) {
            $this->commentaireUsers[] = $commentaireUser;
            $commentaireUser->setUserId($this);
        }

        return $this;
    }

    public function removeCommentaireUser(CommentaireUser $commentaireUser): self
    {
        if ($this->commentaireUsers->removeElement($commentaireUser)) {
            // set the owning side to null (unless already changed)
            if ($commentaireUser->getUserId() === $this) {
                $commentaireUser->setUserId(null);
            }
        }

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

    public function getBgImage(): ?string
    {
        return $this->bg_image;
    }

    public function setBgImage(?string $bg_image): self
    {
        $this->bg_image = $bg_image;

        return $this;
    }
}
