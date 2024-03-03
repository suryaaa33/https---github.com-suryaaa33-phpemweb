!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 PHP</title>
</head>
<body>
<?php
echo(rand() . "<br>");
echo(rand(10,100));
echo(pow(2,4) . "<br>");
echo(round(0.60) . "<br>");

echo "<br>";
echo "<br>";

echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("d F Y") . "<br>";
echo "Today is " . date("l")     . "<br>";

echo "The time is " . date("h:i:sa") . "<br>";

$d=mktime(11, 14, 54, 3,12, 2020);
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

echo "<br>";
$tgllahir = date_create("2004-04-03");
$tglskrg = date_create();
$umur = date_diff($tgllahir,$tglskrg);

echo 'Umur: ';
echo $umur -> y . ' tahun, ';
echo $umur -> m . ' bulan, ';
echo $umur -> d . ' hari, ';
echo $umur -> h . ' jam, ';
echo $umur -> i . ' menit, ';
echo $umur -> s . ' detik, ';
?>
</body>
</html>