<?php

/**
 * Created by PhpStorm.
 * User: Evhanz-PC
 * Date: 23/03/2017
 * Time: 20:02
 */
class CompleteRange
{

    protected $datos;

    public function __construct($datos)
    {
        $this->datos = $datos;

    }

    public function build(){

        $response = [];
        $d = $this->datos;

        for($i=0;$i<count($d);$i++){

            if($i == count($d)-1){

                array_push($response,$d[$i]);

            }else{

                $temp = $d[$i+1]-$d[$i];

                if($temp == 1){
                    array_push($response,$d[$i]);

                }else{

                    array_push($response,$d[$i]);

                    $bandera = $d[$i];
                    while($bandera< ($d[$i+1]-1)){

                        $bandera++;
                        array_push($response,$bandera);

                    }
                }

            }
        }

        return $response;



    }

}


//aca empieza el test

$a_1 = [1,2,4,5];
$a_2 = [2,4,9];
$a_3 = [55,58,60];

$test = new CompleteRange($a_1);
$res = $test->build();
echo implode($res,',').'<br>' ;


$test = new CompleteRange($a_2);
$res = $test->build();
echo implode($res,',').'<br>' ;

$test = new CompleteRange($a_3);
$res = $test->build();
echo implode($res,',').'<br>' ;

