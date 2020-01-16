<?php
/**
 * Created by PhpStorm.
 * User: jarco
 * Date: 23-11-2018
 * Time: 11:03
 */

class AutoStatic
{

    private $nummerplaat;
    private $merk;
    private static $aantalAutos;

    public function __construct($nummerplaat, $merk)
    {
        $this->nummerplaat = $nummerplaat;
        $this->merk = $merk;
        self::$aantalAutos++;
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
    public static function getAantalAutos()
    {
        return self::$aantalAutos;
    }

    /**
     * @param mixed $aantalAutos
     */
    public static function setAantalAutos($aantalAutos)
    {
        self::$aantalAutos = $aantalAutos;
    }

}