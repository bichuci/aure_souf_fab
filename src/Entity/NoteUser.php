<?php

namespace App\Entity;

use App\Repository\NoteUserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NoteUserRepository::class)
 */
class NoteUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=biere::class, mappedBy="noteUser")
     */
    private $biere_id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="noteUsers")
     */
    private $user_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $note;

    public function __construct()
    {
        $this->biere_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|biere[]
     */
    public function getBiereId(): Collection
    {
        return $this->biere_id;
    }

    public function addBiereId(biere $biereId): self
    {
        if (!$this->biere_id->contains($biereId)) {
            $this->biere_id[] = $biereId;
            $biereId->setNoteUser($this);
        }

        return $this;
    }

    public function removeBiereId(biere $biereId): self
    {
        if ($this->biere_id->removeElement($biereId)) {
            // set the owning side to null (unless already changed)
            if ($biereId->getNoteUser() === $this) {
                $biereId->setNoteUser(null);
            }
        }

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->user_id;
    }

    public function setUserId(?User $user_id): self
    {
        $this->user_id = $user_id;

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
}
