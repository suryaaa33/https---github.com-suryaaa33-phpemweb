<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 PHP</title>
</head>
<body>
<?php
//huruf yang besar jadi kecil semua
echo strtolower("Hello WORLD.");

//huruf yang kecil jdi besar semua
echo "<br>";
echo strtoupper("Hello WORLD!");

//huruf pertamanya jdi kapital
echo "<br>";
echo ucfirst("hello world!");

//
echo "<br>";
echo ucwords("hello world");

//menghitung panjang string (termasuk spasi)
echo "<br>";
echo strlen("Hello");

//memotong yang diinginkan, tapi kata aslinya tetep dimunculin diatas hasil potongannya
echo "<br>";
$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Hed!");

//memotong karakter dari sisi kiri (kalo yang dipotong sisi kanannya tetep ga ngaruh)
echo "<br>";
$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"World");

//memotong karakter dari sisi kanan (kalo yang dipotong sisi kanannya tetep ga ngaruh)
echo "<br>";
$str = "Hello World!";
echo $str . "<br>";
echo rtrim($str,"Hello!");

//ini pake persen" gitu yang nanti pas di print tetap mengacu ke variabel yg sudah ada, tapi untuk huruf disamping persenannya ada ketentuannya (baca aja di w3school)
echo "<br>";
$number = 9;
$str = "Beijing";
$txt = sprintf("There are %u million bicycles in %s.",$number,$str);
echo $txt;

//menghitung jumlah kata yang ada di string
echo "<br>";
echo str_word_count("Hello world!");

//ini tu ngeprint kata pertama yang kita cari trus belakangnya ngikut dan kata sebelum kata yg kita cadi ga diajak
echo "<br>";
echo strstr("Hello world! world! hehe","world!");

//sama aja kayak strstr, cuma yg ini ga case sensitive, jdi mau hurufnya besar/kecil ga ngaruh
echo "<br>";
echo stristr("Hello world!","WORLD");

//ngeganti kata yg kita pilih pakai kata lain
echo "<br>";
echo str_replace("world","Peter","Hello world!");

//mengulang kata sebanyak beberapa kali 
echo "<br>";
echo str_repeat("Wow",13);

//mengambil dan menampilkan kata dari string (dihitung dari index 0), trus yang angka kedua dibelakang index yang kita pilih itu buat menentukan berapa huruf yang mau kita ambil (opsional)
echo "<br>";
echo substr("Hello world",1, 2);

//mencari index dimana kata yang kita cari ditemukan
echo "<br>";
echo strpos("I love php, I love php too!","php");

//menyatukan string-string yang terpisah menjadi satu array
echo "<br>";
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);

//memecahkan string menjadi array
echo "<br>";
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));

//number format
echo "<br>";
echo number_format("1000000")."<br>";
echo number_format("1000000",2)."<br>";
echo number_format("1000000",2,",",".");

//md5
echo "<br>";
$str = "Hello";
echo md5($str);

//
echo "<br>";
parse_str("name=Peter&age=43",$myArray);
print_r($myArray);

//
echo "<br>";
echo substr_compare("Hello world","Hello world",0);

//
echo "<br>";
echo substr_replace("Hello","world",0);

//
echo "<br>";
$str = "An example of a long word is: Supercalifragulistic";
echo wordwrap($str,15,"<br>\n");


?>
</body>
</html>