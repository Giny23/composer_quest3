<?php

require 'vendor/autoload.php';

use CowSay\Cow;
use CowSay\CrazyCow;
use CowSay\Bear;

$bear = new Bear('Hello je suis un Bear');
echo $bear;

$cow = new Cow('Hello je suis une cow');
echo $cow;

$crazyCow = new CrazyCow('Hello je suis une CrazyCow, évite de me manger !!!!!');
echo $crazyCow;

