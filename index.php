<?php
require 'classes/house.php';

//Opretter House og putter info i variabel
$house = new House;
$house->$area = 200;

echo "Husets areal er " . $house->$area . " m2";
