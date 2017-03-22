<?php
/**
 * Created by PhpStorm.
 * User: ehernandez
 * Date: 22/03/2017
 * Time: 03:39 PM
 */

$output = '';

require_once('../clases/ChangeString.php');
use Proy\clases\ChangeString;

if(isset($_POST['enviar'])){



    $string = $_POST['string'];
    $obj = new ChangeString($string);


    $res =  $obj->build();


    echo $res;


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
