<?php

namespace App\Entity;

use App\Repository\BiereRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BiereRepository::class)
 */
class Biere
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
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_creation;

    /**
     * @ORM\ManyToOne(targetEntity=Brasserie::class, inversedBy="bieres")
<<<<<<< HEAD
     * @ORM\JoinColumn(nullable=true)
=======
<<<<<<< HEAD
     * @ORM\JoinColumn(nullable=true)
=======
     * @ORM\JoinColumn(nullable=false)
>>>>>>> 338681029460064f605f72924903f9060ededaf8
>>>>>>> Fabien
     */
    private $brasserie_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $note;

    /**
<<<<<<< HEAD
     * @ORM\Column(type="text", nullable=true)
=======
<<<<<<< HEAD
     * @ORM\Column(type="text", nullable=true)
=======
     * @ORM\Column(type="text")
>>>>>>> 338681029460064f605f72924903f9060ededaf8
>>>>>>> Fabien
     */
    private $commentaire;

    /**
<<<<<<< HEAD
     * @ORM\ManyToOne(targetEntity=Categorie::class)
=======
<<<<<<< HEAD
     * @ORM\ManyToOne(targetEntity=Categorie::class)
=======
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="bieres")
>>>>>>> 338681029460064f605f72924903f9060ededaf8
>>>>>>> Fabien
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie_id;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, mappedBy="biere_favorite")
     */
    private $users;

    /**
     * @ORM\ManyToOne(targetEntity=NoteUser::class, inversedBy="biere_id")
     */
    private $noteUser;

    /**
     * @ORM\OneToMany(targetEntity=CommentaireUser::class, mappedBy="biere_id")
     */
    private $commentaireUsers;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->commentaireUsers = new ArrayCollection();
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

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDateCreation(?\DateTimeInterface $date_creation): self
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    public function getBrasserieId(): ?brasserie
    {
        return $this->brasserie_id;
    }

    public function setBrasserieId(?brasserie $brasserie_id): self
    {
        $this->brasserie_id = $brasserie_id;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(?int $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getCategorieId(): ?Categorie
    {
        return $this->categorie_id;
    }

    public function setCategorieId(?Categorie $categorie_id): self
    {
        $this->categorie_id = $categorie_id;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addBiereFavorite($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeBiereFavorite($this);
        }

        return $this;
    }

    public function getNoteUser(): ?NoteUser
    {
        return $this->noteUser;
    }

    public function setNoteUser(?NoteUser $noteUser): self
    {
        $this->noteUser = $noteUser;

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
            $commentaireUser->setBiereId($this);
        }

        return $this;
    }

    public function removeCommentaireUser(CommentaireUser $commentaireUser): self
    {
        if ($this->commentaireUsers->removeElement($commentaireUser)) {
            // set the owning side to null (unless already changed)
            if ($commentaireUser->getBiereId() === $this) {
                $commentaireUser->setBiereId(null);
            }
        }

        return $this;
    }
}
