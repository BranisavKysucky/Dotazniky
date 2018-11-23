<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TyzdennyZaznamRepository")
 */
class TyzdennyZaznam
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
    private $otazka1_checkbox;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otazka1_komentar;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otazka2_checkbox;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otazka2_komentar;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otazka3_checkbox;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otazka3_komentar;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otazka4_checkbox;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otazka4_komentar;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otazka5_checkbox;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otazka5_komentar;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otazka6_checkbox;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otazka6_komentar;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otazka7_checkbox;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otazka7_komentar;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otazka8_checkbox;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otazka8_komentar;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otazka9_checkbox;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otazka9_komentar;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $datum_vyplnenia;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Zamestnanec", mappedBy="tyzdenny_zaznam", cascade={"persist", "remove"})
     */
    private $zamestnanec;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOtazka1Checkbox(): ?string
    {
        return $this->otazka1_checkbox;
    }

    public function setOtazka1Checkbox(?string $otazka1_checkbox): self
    {
        $this->otazka1_checkbox = $otazka1_checkbox;

        return $this;
    }

    public function getOtazka1Komentar(): ?string
    {
        return $this->otazka1_komentar;
    }

    public function setOtazka1Komentar(?string $otazka1_komentar): self
    {
        $this->otazka1_komentar = $otazka1_komentar;

        return $this;
    }

    public function getOtazka2Checkbox(): ?string
    {
        return $this->otazka2_checkbox;
    }

    public function setOtazka2Checkbox(?string $otazka2_checkbox): self
    {
        $this->otazka2_checkbox = $otazka2_checkbox;

        return $this;
    }

    public function getOtazka2Komentar(): ?string
    {
        return $this->otazka2_komentar;
    }

    public function setOtazka2Komentar(?string $otazka2_komentar): self
    {
        $this->otazka2_komentar = $otazka2_komentar;

        return $this;
    }

    public function getOtazka3Checkbox(): ?string
    {
        return $this->otazka3_checkbox;
    }

    public function setOtazka3Checkbox(?string $otazka3_checkbox): self
    {
        $this->otazka3_checkbox = $otazka3_checkbox;

        return $this;
    }

    public function getOtazka3Komentar(): ?string
    {
        return $this->otazka3_komentar;
    }

    public function setOtazka3Komentar(?string $otazka3_komentar): self
    {
        $this->otazka3_komentar = $otazka3_komentar;

        return $this;
    }

    public function getOtazka4Checkbox(): ?string
    {
        return $this->otazka4_checkbox;
    }

    public function setOtazka4Checkbox(?string $otazka4_checkbox): self
    {
        $this->otazka4_checkbox = $otazka4_checkbox;

        return $this;
    }

    public function getOtazka4Komentar(): ?string
    {
        return $this->otazka4_komentar;
    }

    public function setOtazka4Komentar(?string $otazka4_komentar): self
    {
        $this->otazka4_komentar = $otazka4_komentar;

        return $this;
    }

    public function getOtazka5Checkbox(): ?string
    {
        return $this->otazka5_checkbox;
    }

    public function setOtazka5Checkbox(?string $otazka5_checkbox): self
    {
        $this->otazka5_checkbox = $otazka5_checkbox;

        return $this;
    }

    public function getOtazka5Komentar(): ?string
    {
        return $this->otazka5_komentar;
    }

    public function setOtazka5Komentar(?string $otazka5_komentar): self
    {
        $this->otazka5_komentar = $otazka5_komentar;

        return $this;
    }

    public function getOtazka6Checkbox(): ?string
    {
        return $this->otazka6_checkbox;
    }

    public function setOtazka6Checkbox(?string $otazka6_checkbox): self
    {
        $this->otazka6_checkbox = $otazka6_checkbox;

        return $this;
    }

    public function getOtazka6Komentar(): ?string
    {
        return $this->otazka6_komentar;
    }

    public function setOtazka6Komentar(?string $otazka6_komentar): self
    {
        $this->otazka6_komentar = $otazka6_komentar;

        return $this;
    }

    public function getOtazka7Checkbox(): ?string
    {
        return $this->otazka7_checkbox;
    }

    public function setOtazka7Checkbox(?string $otazka7_checkbox): self
    {
        $this->otazka7_checkbox = $otazka7_checkbox;

        return $this;
    }

    public function getOtazka7Komentar(): ?string
    {
        return $this->otazka7_komentar;
    }

    public function setOtazka7Komentar(?string $otazka7_komentar): self
    {
        $this->otazka7_komentar = $otazka7_komentar;

        return $this;
    }

    public function getOtazka8Checkbox(): ?string
    {
        return $this->otazka8_checkbox;
    }

    public function setOtazka8Checkbox(?string $otazka8_checkbox): self
    {
        $this->otazka8_checkbox = $otazka8_checkbox;

        return $this;
    }

    public function getOtazka8Komentar(): ?string
    {
        return $this->otazka8_komentar;
    }

    public function setOtazka8Komentar(?string $otazka8_komentar): self
    {
        $this->otazka8_komentar = $otazka8_komentar;

        return $this;
    }

    public function getOtazka9Checkbox(): ?string
    {
        return $this->otazka9_checkbox;
    }

    public function setOtazka9Checkbox(?string $otazka9_checkbox): self
    {
        $this->otazka9_checkbox = $otazka9_checkbox;

        return $this;
    }

    public function getOtazka9Komentar(): ?string
    {
        return $this->otazka9_komentar;
    }

    public function setOtazka9Komentar(?string $otazka9_komentar): self
    {
        $this->otazka9_komentar = $otazka9_komentar;

        return $this;
    }

    public function getDatumVyplnenia(): ?\DateTimeInterface
    {
        return $this->datum_vyplnenia;
    }

    public function setDatumVyplnenia(?\DateTimeInterface $datum_vyplnenia): self
    {
        $this->datum_vyplnenia = $datum_vyplnenia;

        return $this;
    }

    public function getZamestnanec(): ?Zamestnanec
    {
        return $this->zamestnanec;
    }

    public function setZamestnanec(Zamestnanec $zamestnanec): self
    {
        $this->zamestnanec = $zamestnanec;

        // set the owning side of the relation if necessary
        if ($this !== $zamestnanec->getTyzdennyZaznam()) {
            $zamestnanec->setTyzdennyZaznam($this);
        }

        return $this;
    }
}
