<?php
if(isset($_GET['ct'])){
    $ct = $_GET['ct'];
    $ct = explode('/',$ct);
    $controller = $ct[0];
    $action = $ct[1];
    $controller = ucfirst($controller).'controller';
    require_once'controllers/'.$controller.'.php';
    $obj = new $controller();
    $obj-> $action();
}
?>