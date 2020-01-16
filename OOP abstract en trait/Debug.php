<?php
/**
 * Created by PhpStorm.
 * User: jarco
 * Date: 13-3-2019
 * Time: 13:59
 */

trait Debug
{
    public function dumpObject()
    {
        echo get_called_class() ."<br/>";
        $vars = get_object_vars($this);
        foreach ($vars as $value){
            echo $value ."<br/>";
        }
        $mat =  get_class_methods($this);
        foreach ($mat as $mathods){
            echo $mathods . "<br/>";
        }
    }
}