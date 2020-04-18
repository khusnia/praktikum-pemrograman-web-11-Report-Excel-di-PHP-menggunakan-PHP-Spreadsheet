<?php
include "connect.php";

$sql = "INSERT INTO tbl_siswa (nama,jenis_kelamin,no_hp,email,alamat) VALUES('Khusnia Nur Rachmah','perempuan','089687286950','khusnianur.07@gmail.com','wiyung surabaya')";
$sql = "INSERT INTO tbl_siswa (nama,jenis_kelamin,no_hp,email,alamat) VALUES('Dava Almer Dzaky','laki-laki','089687286775','dava.almerdb@gmail.com','kenjeran surabaya')";
$sql = "INSERT INTO tbl_siswa (nama,jenis_kelamin,no_hp,email,alamat) VALUES('Nabila Farah Rachmawati','perempuan','082140639898','nabila.fr@gmail.com','rungkut surabaya')";
$hasil=mysqli_query($koneksi,$sql);
if ($hasil) {
	echo "Berhasil simpan data siswa";
	exit;
}
else {
	echo "Gagal simpan data siswa";
	exit;
}
?>