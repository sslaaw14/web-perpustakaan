<?php
$conn=oci_connect("perpus","perpus","localhost/XE");

$id = $_GET['id'];
$judulb = $_GET['judulb'];
$pengarang = $_GET['pengarang'];
$penerbit = $_GET['penerbit'];
$tahun = $_GET['tahun'];
$j_buku = $_GET['j_buku'];
$kategori = $_GET['kategori'];
$genre = $_GET['genre'];
$jumlah = $_GET['jumlah'];
$query= "UPDATE DAFTAR_BUKU SET JUDUL='$judulb', PENGRANAG='$pengarang', PENERBIT='$penerbit', TANGGAL='$tahun', JENIS_BUKU='$j_buku', KATEGORI='$kategori', GENRE='$genre', JUMLAH='$jumlah'  WHERE ID_BUKU=$id";
//echo $query;
$s=oci_parse($conn, $query);
$eksekusi=oci_execute($s, OCI_DEFAULT);

if($eksekusi)  
{  
oci_commit($conn); //*** Commit Transaction ***// 
echo "<script>alert('DATA BERHASIL UPDATE');</script>";
echo "<meta http-equiv='refresh' content='0;url=insertumum.php'>";
}  
else  
{  
oci_rollback($conn); //*** RollBack Transaction ***//  
$e = oci_error($s);  
echo "Error Save [".$e['message']."]";  
}  
oci_close($conn);  
?>  
