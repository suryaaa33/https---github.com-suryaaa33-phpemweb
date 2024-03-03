<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Tabel PHP</title>
    <style>
        table, tr, td, th{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Merk</th>
            <th>Stock</th>
            <th>Sold</th>
        </tr>
<?php
//print array pakai foreach (biasa)
// echo '<h2>print array pakai foreach (biasa)</h2>';
// $nama = array("Asep","John","Doni","Anti");
// foreach($nama as $value){
//     echo $value;
//     echo "<br>";
// }

// //print array asosiatif pakai foreach
// echo '<h2>print array asosiatif pakai foreach</h2>';
// $nama = array("Asep"=>35,"John"=>12,"Doni"=>19,"Anti"=>16);
// foreach($nama as $key=>$value){
//     echo 'Nama: '.$key.", umur: ".$value;
//     echo "<br>";
// }

// //print array multidimensi pakai foreach
// echo '<h2>print array multidimensi pakai foreach</h2>';
// $cars = array(
//     array("Volvo",22,18),
//     array("BMW",15,13),
//     array("Saab",5,2),
//     array("Land Rover",17,15)
// );

// foreach ($cars as $subAray){
//     echo $subAray[0]. ', '.$subAray[1]. ', '.$subAray[2];
//     echo "<br>";
// }


//print array asosiatif dan multidimensi pakai foreach
echo '<h2>print array asosiatif dan multidimensi pakai foreach</h2>';
$cars2 = array(
    array("Merk"=>"Volvo","Stock"=>22,"Sold"=>18),
    array("Merk"=>"BMW","Stock"=>15,"Sold"=>13),
    array("Merk"=>"Saab","Stock"=>5,"Sold"=>2),
    array("Merk"=>"Land Rover","Stock"=>17,"Sold"=>15)
);

foreach ($cars2 as $subAray)
{
    ?>
    <tr>
    <td><?php echo $subAray["Merk"];?></td>
    <td><?php echo $subAray["Stock"];?></td>
    <td><?php echo$subAray["Sold"];?></td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>