<html>
<body>
<?php
$conn=oci_connect("perpus","perpus","localhost/XE");
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tlp = $_POST['tlp'];
$glr = $_POST['glr'];
$statement=oci_parse($conn, "INSERT INTO ANGGOTA (ID_ANGGOTA, NAMA_ANGGOTA, ALAMAT, TELEPON, GELAR) VALUES (:id, :nama, :alamat, :tlp, :glr)");
oci_bind_by_name($statement, ':id', $id);
oci_bind_by_name($statement, ':nama', $nama);
oci_bind_by_name($statement, ':alamat', $alamat);
oci_bind_by_name($statement, ':tlp', $tlp);
oci_bind_by_name($statement, ':glr', $glr);
//oci_bind_by_name($statement, ':hd', $hd);
oci_execute($statement);
oci_commit($conn);
echo "<script>alert('DATA BERHASIL DITAMBAHKAN');</script>";
echo "<meta http-equiv='refresh' content='0;url=insertanggota.php'>";
?>
</body>
</html>