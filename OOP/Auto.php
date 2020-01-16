<?php
/**
 * Created by PhpStorm.
 * User: jarco
 * Date: 23-11-2018
 * Time: 11:02
 */

class Auto
{
    private $nummerplaat;
    private $merk;
    private $aantalAutos;

    public function __construct($nummerplaat, $merk)
    {
        $this->nummerplaat = $nummerplaat;
        $this->merk = $merk;
        $this->aantalAutos++;
    }

    public function setNummerplaat($nummerplaat) {
        $this->nummerplaat = $nummerplaat;
    }

    public function getNummerplaat()
    {
        return $this->nummerplaat;
    }

    public function setMerk($merk)
    {
        $this->merk = $merk;
    }

    public function getMerk()
    {
        return $this->merk;
    }

    /**
     * @return mixed
     */
    public function getAantalAutos()
    {
        return $this->aantalAutos;
    }

    /**
     * @param mixed $aantalAutos
     */
    public function setAantalAutos($aantalAutos)
    {
        $this->aantalAutos = $aantalAutos;
    }



}