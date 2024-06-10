<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_ecommerce");

if($koneksi){

} else {
	echo "gagal Connect";
}

?>