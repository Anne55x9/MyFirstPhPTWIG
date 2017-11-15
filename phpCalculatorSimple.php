<?php
/**
 * Created by PhpStorm.
 * User: ASW
 * Date: 01/11/2017
 * Time: 13:52
 */

$a = $_REQUEST["a"];
$b = $_REQUEST["b"];
$operation = $_REQUEST["operation"];
switch ($operation){
    case "+":
        $result = $a + $b;
        break;
    case "-":
        $result = $a - $b;
        break;
    case "*":
        $result = $a * $b;
        break;
    case "/":
        $result = $a / $b;
        break;
    default:
        $result = "Illigal operation:" + $operation;
}
$longResult = $a . $operation . $b . "=" . $result;


require_once 'vendor/autoload.php';
Twig_Autoloader::register();




?>


<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Calculator result</title>-->
<!--</head>-->
<!--<body>-->
<?//= $longResult ?>
<!--</body>-->
<!--</html>-->
