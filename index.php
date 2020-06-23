<?php

session_start();
include "core/autoload.php";
date_default_timezone_set("America/Mexico_City");

$lb = new Lb();
$lb->loadModule("index");


?>