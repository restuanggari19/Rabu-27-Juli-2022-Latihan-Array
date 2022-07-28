<?php
$barang = $_POST['barang'];
echo "<h1>Mangga Meser</h1>";
include "daftar-harga.php";

echo "Masukan kode barang dan jumlahnya <br><br>";
echo "<table>";
echo "<form method='post' action='output-tugas-5.php'>";

for ($a = 0; $a < $barang; $a++)  
{ 
    $i=$a+1;
    echo "<tr>
        <td> Kode Barang ke-$i </td> 
        <td> <input type='text' name='kode$a' /> </td>";
    echo "<td> Jumlah </ts>
        <td> <input type='text' name='jumlah$a' /> </td>
        </tr>";
}

echo "</table>";
echo "<input type='hidden' name='kode' value='$barang' />";

echo "<input type='submit' name='submit' value='Submit' />
</form>";
?>