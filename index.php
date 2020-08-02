<?php
require 'animal.php';
require 'frog.php';
require 'ape.php';


$sheep = new Animal("shaun");

echo $sheep->getName(). "<br>"; // "shaun"
echo $sheep->getLegs(). "<br>"; // 2
echo $sheep->getCold_Blooded(); // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

echo "<br> <br>";

//index.php
$sungokong = new Ape("kera sakti");
echo $sungokong->yell(); // "Auooo"

echo "<br>";

$kodok = new Frog("buduk");
echo $kodok->jump() ; // "hop hop"
?>