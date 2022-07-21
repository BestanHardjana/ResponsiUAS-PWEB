<?php 

echo "<head><title>Data Penerima</title></head>";
$fp = fopen("datapenerima.txt", "r");
echo ("<center><h1><h1>Table Data Penerima Wonderbolt Express</h1>");
echo "<table border='1' width='70%' style='text-align: center';>";
echo "<tr style='background-color: yellow';><td>Tanggal </td> <td>Nama </td><td>Alamat </td><td>Email </td><td>Jarak (KM) </td><td>Total (Rp)</td></tr>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>$pisah[0]</td> <td>$pisah[1] </td><td>$pisah[2] </td><td>$pisah[3] </td><td>$pisah[4] </td><td> $pisah[5] </td></tr>";
}

echo "</table>";
echo "<a href='formpenerima.php'> -Isi Data Penerima- </a>";
echo "<a href='index.php'> -home- </a>";

?>


    
    
    
    
    



