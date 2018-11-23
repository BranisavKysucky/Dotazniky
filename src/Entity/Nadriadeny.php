<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NadriadenyRepository")
 */
class Nadriadeny
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $meno;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Zamestnanec", mappedBy="nadriadeny")
     */
    private $zamestnanecs;

    public function __construct()
    {
        $this->zamestnanecs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMeno(): ?string
    {
        return $this->meno;
    }

    public function setMeno(?string $meno): self
    {
        $this->meno = $meno;

        return $this;
    }

    /**
     * @return Collection|Zamestnanec[]
     */
    public function getZamestnanecs(): Collection
    {
        return $this->zamestnanecs;
    }

    public function addZamestnanec(Zamestnanec $zamestnanec): self
    {
        if (!$this->zamestnanecs->contains($zamestnanec)) {
            $this->zamestnanecs[] = $zamestnanec;
            $zamestnanec->setNadriadeny($this);
        }

        return $this;
    }

    public function removeZamestnanec(Zamestnanec $zamestnanec): self
    {
        if ($this->zamestnanecs->contains($zamestnanec)) {
            $this->zamestnanecs->removeElement($zamestnanec);
            // set the owning side to null (unless already changed)
            if ($zamestnanec->getNadriadeny() === $this) {
                $zamestnanec->setNadriadeny(null);
            }
        }

        return $this;
    }
}
