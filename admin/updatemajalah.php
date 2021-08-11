<?php
$conn=oci_connect("perpus","perpus","localhost/XE");

$id = $_GET['id'];
$judulb = $_GET['judulb'];
$pengarang = $_GET['pengarang'];
$penerbit = $_GET['penerbit'];
$j_buku = $_GET['j_buku'];

$query= "UPDATE DAFTAR_BUKU SET JUDUL='$judulb', PENGRANAG='$pengarang', PENERBIT='$penerbit', JENIS_BUKU='$j_buku' WHERE ID_BUKU=$id";
//echo $query;
$s=oci_parse($conn, $query);
$eksekusi=oci_execute($s, OCI_DEFAULT);

if($eksekusi)  
{  
oci_commit($conn); //*** Commit Transaction ***// 
echo "<script>alert('DATA BERHASIL UPDATE');</script>";
echo "<meta http-equiv='refresh' content='0;url=insertmajalah.php'>";
}  
else  
{  
oci_rollback($conn); //*** RollBack Transaction ***//  
$e = oci_error($s);  
echo "Error Save [".$e['message']."]";  
}  
oci_close($conn);  
?>  
