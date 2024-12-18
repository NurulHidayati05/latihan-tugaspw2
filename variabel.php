<?php

$a ="hello";
$hello ="hello world";

// menampilkan isi variabel $a
//hello
echo $a . "</br>";

// menampilkan isi variabel $a
// hello world !
echo $hello . "</br>";

// menampilkan isi dari variabel dengan nama yang sama seperti isi variabel $a
// isi variabel $a = hello. jadi, nanti akan menampilkan isi dari variabel $hello
// hello world
echo $$a . "</br>";

?>