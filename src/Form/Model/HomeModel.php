<?php
/**
 * Created by PhpStorm.
 * User: U555746
 * Date: 11/21/2018
 * Time: 1:52 PM
 */

namespace App\Form\Model;


use App\Entity\Zamestnanec;

class HomeModel
{
    /**
     * @var Zamestnanec|null
     */
    private $zamestnanec;

    /**
     * @var string|null
     */
    private $typZobrazenia;

    /**
     * @return Zamestnanec|null
     */
    public function getZamestnanec(): ?Zamestnanec
    {
        return $this->zamestnanec;
    }

    /**
     * @param Zamestnanec|null $zamestnanec
     */
    public function setZamestnanec(?Zamestnanec $zamestnanec): void
    {
        $this->zamestnanec = $zamestnanec;
    }

    /**
     * @return string|null
     */
    public function getTypZobrazenia(): ?string
    {
        return $this->typZobrazenia;
    }

    /**
     * @param string|null $typZobrazenia
     */
    public function setTypZobrazenia(?string $typZobrazenia): void
    {
        $this->typZobrazenia = $typZobrazenia;
    }
}