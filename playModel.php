<?php
session_start();

function __autoload($class_name){
    require_once((dirname(__FILE__)."/$class_name.php"));
}


