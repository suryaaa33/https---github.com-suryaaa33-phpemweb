<?php
$beli = 11;
$jeniscat = "Mowilex";


switch($jeniscat){
    case 'Mowilex':
        $MOWILEX = 20000;
        $total_harga = $beli * $MOWILEX;
        //echo "Total Harga = ".$total_harga;
        break;
    case 'Danapaint':
        $DANAPAINT = 30000;
        $total_harga = $beli * $DANAPAINT;
       // echo "Total Harga = ".$total_harga;
        break;
    case 'Catylac':
        $CATYLAC = 40000;
        $total_harga = $beli * $CATYLAC;
       // echo "Total Harga = ".$total_harga;
        break;
    default:
        echo "CAT TIDAK VALID";
}

if($beli >= 5){
    $total_diskon = ($total_harga * 0.05);
    //echo "Total Diskon = ".$total_diskon;

    $total_bayar = $total_harga - $total_diskon;
    //echo "Total Bayar = ".$total_bayar;
}
else if($beli >= 10){
    $total_diskon = ($total_harga * 0.1);
    //echo "Total Diskon = ".$total_diskon;

    $total_bayar = $total_harga - $total_diskon;
    //echo "Total Bayar = ".$total_bayar;
}
else{
    $total_diskon = $total_harga;
    //echo "Total Harga = ".$total_harga;
}

echo '<table border = "1">';
echo '<h2>TOKO CAT BANGUNAN JAYA</h2>';
echo 'Jenis cat yang dibeli = '.$jeniscat;
echo '<br>';
echo 'Jumlah beli = '.$beli;
echo '<br>';
echo 'Total harga = '.$total_harga;
echo '<br>';
echo 'Total diskon = '.$total_diskon;
echo '<br>';
echo 'Total bayar = '.$total_bayar;

?>