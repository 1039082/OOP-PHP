<?php
/**
 * Created by PhpStorm.
 * User: jarco
 * Date: 13-3-2019
 * Time: 13:43
 */
require_once ('Debug.php');
require_once ('Figuur.php');
class Rechthoek extends Figuur
{
    use Debug;
    private $breedte;
    private $lengte;


    public function __construct($breedte, $lengte)
    {
        $this->breedte = $breedte;
        $this->lengte = $lengte;
    }

    protected function getOppervlakte()
    {
        return $this->breedte * $this->lengte;
    }

    protected function getOmtrek()
    {
        return ($this->lengte + $this->breedte) * 2 ;
    }

    /**
     * @return mixed
     */
    public function getBreedte()
    {
        return $this->breedte;
    }

    /**
     * @param mixed $breedte
     */
    public function setBreedte($breedte)
    {
        $this->breedte = $breedte;
    }

    /**
     * @return mixed
     */
    public function getLengte()
    {
        return $this->lengte;
    }

    /**
     * @param mixed $lengte
     */
    public function setLengte($lengte)
    {
        $this->lengte = $lengte;
    }
    public function isVierkant(){
        if ($this->breedte == $this->lengte){
            return TRUE ;
        }
        else {
            return FALSE ;
        }
    }

}