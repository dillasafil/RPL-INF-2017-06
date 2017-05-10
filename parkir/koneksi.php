<?php
@mysql_connect("localhost","root","") or die("Maaf Koneksi Gagal!");
mysql_select_db("parkir")or die ("Database Tidak Ditemukan!");
?>