<html>
<body>
<?php
$conn=oci_connect("perpus","perpus","localhost/XE");
$id = $_POST['id'];
$nama = $_POST['nama'];
$id_angg = $_POST['id_angg'];
$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];
$status = $_POST['status'];
$statement=oci_parse($conn, "INSERT INTO PINJAM (ID_PINJAM, NAMA_ANGGOTA, ID_ANGGOTA, ID_BUKU, JUDUL, TANGGAL_PINJAM, TANGGAL_KEMBALI, STATUS) VALUES (:id, :nama, :id_angg, :id_buku, :judul, :tgl_pinjam, :tgl_kembali, :status)");
oci_bind_by_name($statement, ':id', $id);
oci_bind_by_name($statement, ':nama', $nama);
oci_bind_by_name($statement, ':id_angg', $id_angg);
oci_bind_by_name($statement, ':id_buku', $id_buku);
oci_bind_by_name($statement, ':judul', $judul);
oci_bind_by_name($statement, ':tgl_pinjam', $tgl_pinjam);
oci_bind_by_name($statement, ':tgl_kembali', $tgl_kembali);
oci_bind_by_name($statement, ':status', $status);
//oci_bind_by_name($statement, ':hd', $hd);
oci_execute($statement);
oci_commit($conn);
echo "<meta http-equiv='refresh' content='0;url=insertpem.php'>";
?>
</body>
</html>