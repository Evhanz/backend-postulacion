<?php

/**
 * Created by PhpStorm.
 * User: ehernandez
 * Date: 22/03/2017
 * Time: 03:24 PM
 */

namespace Proy\clases;
class ChangeString
{

    protected $cadena;

    public function __construct($cadena)
    {
        $this->cadena = $cadena;

    }

    public function build(){

        $c = ($this->cadena);
        $c = str_split($c);

        foreach ($c as $i){

            echo 'caracter: '.$i.'---- : '.ord($i).'<br>';
        }




        return implode($c) ;


    }


}