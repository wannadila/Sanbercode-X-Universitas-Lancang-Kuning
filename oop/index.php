<?php
require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

$sheep = new Animal("shaun");
echo "Nama: ";
echo $sheep->name; // "shaun"
echo "<br>";
echo "Legs: ";
echo $sheep->legs; // 4
echo "<br>";
echo "Cold Blooded: ";
echo $sheep->cold_blooded; // "no"
echo "<br><br>";

$kodok = new Frog("buduk");
echo "Nama: ";
echo $kodok->name; // "buduk"
echo "<br>";
echo "Legs: ";
echo $kodok->legs; // 4
echo "<br>";
echo "Cold Blooded: ";
echo $sheep->cold_blooded; // "no"
echo "<br>";
echo "Jump: ";
$kodok->jump(); // "hop hop"
echo "<br><br>";

$sungokong = new Ape("kera sakti");
echo "Nama: ";
echo $sungokong->name; // "kera sakti"
echo "<br>";
echo "Legs: ";
echo $sungokong->legs; // 2
echo "<br>";
echo "Cold Blooded: ";
echo $sheep->cold_blooded; // "no"
echo "<br>";
echo "Yell: ";
$sungokong->yell(); // "Auooo"
echo "<br><br>";

?>
