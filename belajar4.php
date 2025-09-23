<?php
// Operator logika
$hasil1 = true and false;
echo '$hasil1 = ';
var_dump($hasil1); // bool(true)
echo "<br/>";

$hasil2 = (true and false);
echo '$hasil2 = ';
var_dump($hasil2); // bool(false)
echo "<br/>";

$hasil3 = (true xor false);
echo '$hasil3 = ';
var_dump($hasil3); // bool(true)
echo "<br/>";

$hasil4 = (false or true && false);
echo '$hasil4 = ';
var_dump($hasil4); // bool(false)
echo "<br/>";

$a = true;
$b = false;
$hasil5 = ($a and $b || $a or $b);
echo '$hasil5 = ';
var_dump($hasil5); // bool(true)
echo "<br/>";
?>

<?php
// Operator string
$a = "Hello ";
$b = "World!";
$a .= $b;
echo $a; // Hello World!
echo "<br />";

$a = "belajar ";
$b = "PHP ";
$c = "di Politeknik Negeri Jember";
$hasil = "Saya sedang " . $a . $b . $c;
echo $hasil; // Saya sedang belajar PHP di Politeknik Negeri Jember
echo "<br />";
?>

<?php
// Interpolasi string
$a = "Hello ";
$hasil = "{$a}World!";
echo $hasil; // Hello World!
echo "<br />";

$a = "belajar ";
$b = "PHP ";
$c = "di Politeknik Negeri Jember";
$hasil = "Saya sedang {$a}{$b}{$c}";
echo $hasil; // Saya sedang belajar PHP di Politeknik Negeri Jember
?>