<?php
// Arithmetic Operations Example
$x = 10;
$y = 6;

// Basic arithmetic operations with formatted output
echo "Arithmetic Operations: <br>";
echo "Addition: " . ($x + $y) . "<br>";
echo "Subtraction: " . ($x - $y) . "<br>";
echo "Multiplication: " . ($x * $y) . "<br>";
echo "Division: " . ($x / $y) . "<br>";
echo "Modulo: " . ($x % $y) . "<br><br>";

// String Concatenation Example
$a = "Hello";
$b = $a . " world!";
echo "String Concatenation: <br>";
echo $b . "<br>";
echo $a . " -- " . $b . " ini string operator " . "<br><br>";

// String Types and Escape Characters Example
echo "String Examples: <br>";
$string1 = 'Ini adalah string sederhana';
$string2 = 'Ini adalah
string yang bisa
memiliki beberapa
baris';
$string3 = 'Dia berkata: "I\'ll be back"';
$string4 = 'Anda telah berhasil menghapus C:\\xampp\\htdoc';
$string5 = 'Kalimat ini tidak akan pindah ke: \n baris baru';
$string6 = 'Variabel juga tidak otomatis ditampilkan $string1 dan $string3';

// Display all strings with proper formatting
echo "String 1: " . $string1 . "<br>";
echo "String 2: " . $string2 . "<br>";
echo "String 3: " . $string3 . "<br>";
echo "String 4: " . $string4 . "<br>";
echo "String 5: " . $string5 . "<br>";
echo "String 6: " . $string6 . "<br><br>";

// Task 3: String Concatenation to create "9080"
$tugas1 = "90";
$tugas2 = "80";
$gabungan = $tugas1 . $tugas2;
echo "Hasil Concatenation Task: " . $gabungan;
?>