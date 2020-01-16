<?php
/**
 * Created by PhpStorm.
 * User: jarco
 * Date: 23-11-2018
 * Time: 11:02
 */

require_once('Auto.php');
require_once ('AutoStatic.php');
AutoStatic::setAantalAutos(0);
$auto = new AutoStatic("23-fff-23", "Tesla");
$sAuto = new AutoStatic("jsdflj","dhfk");
$sAuto = new AutoStatic("jsdflj","dhfk");
echo AutoStatic::getAantalAutos();