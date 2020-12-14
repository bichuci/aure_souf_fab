<?php

namespace App\Entity;

use App\Repository\CommentaireUserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentaireUserRepository::class)
 */
class CommentaireUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=biere::class, inversedBy="commentaireUsers")
     */
    private $biere_id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="commentaireUsers")
     */
    private $user_id;

    /**
     * @ORM\Column(type="text")
     */
    private $commentaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBiereId(): ?biere
    {
        return $this->biere_id;
    }

    public function setBiereId(?biere $biere_id): self
    {
        $this->biere_id = $biere_id;

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

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }
}
