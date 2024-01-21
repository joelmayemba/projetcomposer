<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Projetcomposer\App\Hello;

$hello = new Hello();
echo $hello->hello();

