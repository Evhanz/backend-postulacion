<?php

/**
 * Created by PhpStorm.
 * User: Evhanz-PC
 * Date: 23/03/2017
 * Time: 18:50
 */
class ChangeString
{

    protected $cadena;

    public function __construct($cadena)
    {
        $this->cadena = $cadena;

    }

    public function build(){

        $a_result = [];
        $c = ($this->cadena);
        $c = str_split( utf8_decode($c));

        //chr(27);

        for ($i=0;$i<count($c);$i++){
            $val = $c[$i];

            if(ctype_alpha ($val) || (ord($val)==241 || ord($val)==209)){

                switch (ord($val)) {
                    case 122:
                       // $val = chr(ord($val)+1);
                        $val = 'a';
                        break;
                    case 90:
                        $val = 'A';
                        break;
                    case 241:
                        $val = 'o';
                        break;
                    case 209:
                        $val = 'O';
                        break;
                    case 110:
                        $val = 'ñ';
                        break;
                    case 78:
                        $val = 'Ñ';
                        break;
                    default:
                        $val = chr(ord($val)+1);

                        break;
                }
            }

            array_push($a_result,$val);

        }

        return implode($a_result) ;
    }

}

$output = '';

if(isset($_POST['enviar'])){


    $string = $_POST['string'];
    $obj = new ChangeString($string);

    $output =  $obj->build();

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form  method="post">
    <label for="string">Input</label>
    <input name="string" type="text">
    <label for="">Output</label>
    <input type="text" value="<?= $output ?>" disabled>

    <input type="submit" name="enviar" value="Enviar">
</form>
</body>
</html>

