<?php

include 'koneksi.php';
$sql = 'SELECT jumlah,namarek,norek,jumlahdibayar,rekeningdituju,jenisbank FROM bayar';
 
mysql_select_db('parkir');
$ambildata = mysqli_query($conn, $sql);
if(! $ambildata )
{
  die('Gagal ambil data: ' . mysql_error());
}
while($row = mysqli_fetch_array($ambildata, MYSQLI_ASSOC))
{
    echo "Jumlah 				: {$row['jumlah']}  <br> ".
         "Nama Rekening 		: {$row['namarek']} <br> ".
         "Nomor Rekening 		: {$row['norek']} <br> ".
		 "Jumlah Dibayar 		: {$row['jumlahdibayar']} <br> ".
		 "Rekening yang Dituju 	: {$row['rekeningdituju']} <br> ".
		 "Jenis Bank 			: {$row['jenisbank']} <br> ".
         "---------------------------------------------------------------<br>";
} 
echo "Transaksi Berhasil\n";
mysqli_close($conn);
?>

