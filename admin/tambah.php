<html>
<body>
<?php
$conn=oci_connect("perpus","perpus","localhost/XE");
$id = $_POST['id'];
$judulb = $_POST['judulb'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun=$_POST['tahun'];
$j_buku = $_POST['j_buku'];
$kategori = $_POST['kategori'];
$genre = $_POST['genre'];
$jumlah = $_POST['jumlah'];
$statement=oci_parse($conn, "INSERT INTO DAFTAR_BUKU (ID_BUKU, JUDUL, PENGRANAG, PENERBIT, TANGGAL, JENIS_BUKU, KATEGORI, GENRE, JUMLAH) VALUES (:id, :judulb, :pengarang, :penerbit, :tahun, :j_buku, :kategori, :genre, :jumlah)");
oci_bind_by_name($statement, ':id', $id);
oci_bind_by_name($statement, ':judulb', $judulb);
oci_bind_by_name($statement, ':pengarang', $pengarang);
oci_bind_by_name($statement, ':penerbit', $penerbit);
oci_bind_by_name($statement, ':penerbit', $penerbit);
oci_bind_by_name($statement, ':tahun', $tahun);
oci_bind_by_name($statement, ':j_buku', $j_buku);
oci_bind_by_name($statement, ':kategori', $kategori);
oci_bind_by_name($statement, ':genre', $genre);
oci_bind_by_name($statement, ':jumlah', $jumlah);
//oci_bind_by_name($statement, ':hd', $hd);
oci_execute($statement);
oci_commit($conn);
//echo "sukses";
echo "<script>alert('DATA BERHASIL DITAMBAHKAN');</script>";
echo "<meta http-equiv='refresh' content='0;url=insertumum.php'>";
?>
</body>
</html>