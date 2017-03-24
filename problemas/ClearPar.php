<?php

/**
 * Created by PhpStorm.
 * User: Evhanz-PC
 * Date: 23/03/2017
 * Time: 21:28
 */
class ClearPar
{

    protected $datos;

    public function __construct($datos)
    {
        $this->datos = $datos;

    }

    public function build(){

        $response = '';
        $d = $c = str_split( utf8_decode($this->datos));

        for($i=0;$i<count($d);$i++){
            if($d[$i] == '(' && $i < count($d)-1){
                if($d[$i+1] == ')'){
                    $response .= '()';
                }
            }

        }
        return $response;
    }

}

//area de test
$case_1 ='()())()';
$case_2 ='()(()';
$case_3 =')(';
$case_4 ='((()';



$test = new ClearPar($case_1);
echo  'Entrada: '.$case_1.' Salida : '.$test->build().'<br>';

$test = new ClearPar($case_2);
echo  'Entrada: '.$case_2.' Salida : '.$test->build().'<br>';

$test = new ClearPar($case_3);
echo  'Entrada: '.$case_3.' Salida : '.$test->build().'<br>';

$test = new ClearPar($case_4);
echo  'Entrada: '.$case_4.' Salida : '.$test->build().'<br>';

