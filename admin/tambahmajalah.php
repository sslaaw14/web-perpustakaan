<html>
<body>
<?php
$conn=oci_connect("perpus","perpus","localhost/XE");
$id = $_POST['id'];
$judulb = $_POST['judulb'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$j_buku = $_POST['j_buku'];
$statement=oci_parse($conn, "INSERT INTO DAFTAR_BUKU (ID_BUKU, JUDUL, PENGRANAG, PENERBIT, JENIS_BUKU) VALUES (:id, :judulb, :pengarang, :penerbit, :j_buku)");
oci_bind_by_name($statement, ':id', $id);
oci_bind_by_name($statement, ':judulb', $judulb);
oci_bind_by_name($statement, ':pengarang', $pengarang);
oci_bind_by_name($statement, ':penerbit', $penerbit);
oci_bind_by_name($statement, ':penerbit', $penerbit);
oci_bind_by_name($statement, ':j_buku', $j_buku);
//oci_bind_by_name($statement, ':hd', $hd);
oci_execute($statement);
oci_commit($conn);
echo "<script>location='insertmajalah.php';</script>";
?>
</body>
</html>