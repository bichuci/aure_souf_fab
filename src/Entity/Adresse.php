<?php

namespace App\Entity;

use App\Repository\AdresseRepository;
use Doctrine\ORM\Mapping as ORM;
<<<<<<< HEAD
use Symfony\Component\Validator\Constraints as Assert;
=======
>>>>>>> 338681029460064f605f72924903f9060ededaf8

/**
 * @ORM\Entity(repositoryClass=AdresseRepository::class)
 */
class Adresse
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
<<<<<<< HEAD
     * @Assert\Regex(
     *     pattern="^(F-)?((2[A|B])|[0-9]{2})[0-9]{3}$",
     *     match=true,
     *     message="Mauvais code postale"
     * )
=======
>>>>>>> 338681029460064f605f72924903f9060ededaf8
     */
    private $cp;

    /**
     * @ORM\Column(type="string", length=255)
<<<<<<< HEAD
     * @Assert\Regex(
     *     pattern="'/\A[\pL\s\']*\z/m'",
     *     match=true,
     *     message="Caracthére non autorisé"
     * )
=======
>>>>>>> 338681029460064f605f72924903f9060ededaf8
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rue;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pays;

<<<<<<< HEAD
=======
    /**
     * @ORM\OneToOne(targetEntity=Brasserie::class, mappedBy="adresse", cascade={"persist", "remove"})
     */
    private $brasserie;

    /**
     * @ORM\OneToOne(targetEntity=User::class, mappedBy="adresse_id", cascade={"persist", "remove"})
     */
    private $user;
>>>>>>> 338681029460064f605f72924903f9060ededaf8

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getRue(): ?string
    {
        return $this->rue;
    }

    public function setRue(string $rue): self
    {
        $this->rue = $rue;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }
<<<<<<< HEAD
=======

    public function getBrasserie(): ?Brasserie
    {
        return $this->brasserie;
    }

    public function setBrasserie(Brasserie $brasserie): self
    {
        $this->brasserie = $brasserie;

        // set the owning side of the relation if necessary
        if ($brasserie->getAdresse() !== $this) {
            $brasserie->setAdresse($this);
        }

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        // set (or unset) the owning side of the relation if necessary
        $newAdresse_id = null === $user ? null : $this;
        if ($user->getAdresseId() !== $newAdresse_id) {
            $user->setAdresseId($newAdresse_id);
        }

        return $this;
    }
>>>>>>> 338681029460064f605f72924903f9060ededaf8
}
