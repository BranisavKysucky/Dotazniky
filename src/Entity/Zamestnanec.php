<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ZamestnanecRepository")
 */
class Zamestnanec
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
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $datum_nastupu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typ_zmluvy;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Nadriadeny", inversedBy="zamestnanecs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $nadriadeny;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\TyzdennyZaznam", inversedBy="zamestnanec", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $tyzdenny_zaznam;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\MesacnyZaznam", inversedBy="zamestnanec", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="mesacny_zaznam_id", referencedColumnName="id", nullable=false)
     */
    private $mesacny_zaznam;

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

    public function getDatumNastupu(): ?\DateTimeInterface
    {
        return $this->datum_nastupu;
    }

    public function setDatumNastupu(?\DateTimeInterface $datum_nastupu): self
    {
        $this->datum_nastupu = $datum_nastupu;

        return $this;
    }

    public function getTypZmluvy(): ?string
    {
        return $this->typ_zmluvy;
    }

    public function setTypZmluvy(?string $typ_zmluvy): self
    {
        $this->typ_zmluvy = $typ_zmluvy;

        return $this;
    }

    public function getNadriadeny(): ?Nadriadeny
    {
        return $this->nadriadeny;
    }

    public function setNadriadeny(?Nadriadeny $nadriadeny): self
    {
        $this->nadriadeny = $nadriadeny;

        return $this;
    }

    public function getTyzdennyZaznam(): ?TyzdennyZaznam
    {
        return $this->tyzdenny_zaznam;
    }

    public function setTyzdennyZaznam(TyzdennyZaznam $tyzdenny_zaznam): self
    {
        $this->tyzdenny_zaznam = $tyzdenny_zaznam;

        return $this;
    }

    public function getMesacnyZaznam(): ?MesacnyZaznam
    {
        return $this->mesacny_zaznam;
    }

    public function setMesacnyZaznam(MesacnyZaznam $mesacny_zaznam): self
    {
        $this->mesacny_zaznam = $mesacny_zaznam;

        return $this;
    }
}
