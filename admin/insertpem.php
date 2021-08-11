<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Seoul Library </title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="index.php">Admin</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="photo.jpg.png" alt="User Image"></div>
            <div class="pull-left info">
              <p>Admin</p>
              <p class="designation">Seoul Library Mall</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i><span>Home</span></a></li>
			<li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>Buku Umum</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="insertumum.php"><i class="fa fa-circle-o"></i> List Buku</a></li>
                <li><a href="editumum.php"><i class="fa fa-circle-o"></i> Update Buku</a></li>
              </ul>
            </li>
			<li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>Majalah</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="insertmajalah.php"><i class="fa fa-circle-o"></i> List Buku</a></li>
                <li><a href="editmajalah.php"><i class="fa fa-circle-o"></i> Update Buku</a></li>
              </ul>
            </li>
			<li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Anggota</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="insertanggota.php"><i class="fa fa-circle-o"></i> List Anggota</a></li>
				<li><a href="editanggota.php"><i class="fa fa-circle-o"></i> Update Anggota</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Peminjaman</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="insertpem.php"><i class="fa fa-circle-o"></i> Daftar Peminjaman</a></li>
                <li><a href="deletepem.php"><i class="fa fa-circle-o"></i> Update Peminjaman</a></li>
              </ul>
            </li>
			<li><a href="allbook.php"><i class="fa fa-file-text"></i> All Book</a></li>
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-th-list"></i> Transaksi</h1>
            <p>Seoul Library Mall</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Peminjaman</li>
              <li class="active"><a href="#">Insert Peminjaman</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
		<div class="col-md-12">
            <div class="card">
              <h3 class="card-title">Insert Peminjaman </h3>
              <table class="table">
                <thead>
<?php $conn=oci_connect("perpus","perpus","localhost/XE");?>

<form action='tambahpem.php' method='POST'>
					<tr> <td>id peminjaman</td>
						 <td>:</td>
						 <td><input type='text' name='id'><td>
					</tr>
					<tr> <td>nama</td>
						 <td>:</td>
						 <td><input type='text' name='nama'><td>
					</tr>
					<tr> <td>id anggota</td>
						 <td>:</td>
						 <td><input type='text' name='id_angg'><td>
					</tr>
					<tr> <td>id buku</td>
						 <td>:</td>
						 <td><input type='text' name='id_buku'><td>
					</tr>
					<tr> <td>judul</td>
						 <td>:</td>
						 <td><input type='text' name='judul'><td>
					</tr>
					<tr> <td>tanggal pinjam</td>
						 <td>:</td>
						 <td><input type='text' name='tgl_pinjam'><td>
					</tr>
					<tr> <td>tanggal kembali</td>
						 <td>:</td>
						 <td><input type='text' name='tgl_kembali'><td>
					</tr>
					<tr> <td>status</td>
						 <td>:</td>
						 <td><input type='text' name='status'><td>
					</tr>
					<tr> <td><input type='submit' value='Tambah'></td>
					</tr>
</form>
<table class="table">	
	<th>ID PEMINJAMAN</th>
	<th>NAMA</th>
	<th>ID ANGGOTA</th>
	<th>ID BUKU</th>
	<th>JUDUL</th>
	<th>TANGGAL PINJAM</th>
	<th>TANGGAL KEMBALI</th>
	<th>STATUS</th></tr>
		<?php $query="SELECT * FROM PINJAM ";
								$s=oci_parse($conn,$query);
								oci_execute($s,OCI_DEFAULT);
								while($res=oci_fetch_array($s,OCI_BOTH)){
								echo " <tr class='info'>\n";
								echo " <td>".($res['ID_PINJAM']) ."</td>";
								echo " <td>".($res['NAMA_ANGGOTA']) ."</td>";
								echo " <td>".($res['ID_ANGGOTA']) ."</td>";
								echo " <td>".($res['ID_BUKU']) ."</td>";
								echo " <td>".($res['JUDUL']) ."</td>";
								echo " <td>".($res['TANGGAL_PINJAM']) ."</td>";
								echo " <td>".($res['TANGGAL_KEMBALI']) ."</td>";
								echo " <td>".($res['STATUS']) ."</td>";
								echo " <td> <a href='deletepem.php?action=edit&id=$res[ID_PINJAM]'>Edit</a></td>";
								echo " <td> <a href='?action=del&id=$res[ID_PINJAM]'>Delete</a></td>\n</tr>\n";
								}
			?>
</table>
<?php
				error_reporting(0);
				if ($_GET['action'] == 'del') {
					$query="DELETE FROM PINJAM WHERE ID_PINJAM='$_GET[id]'";
					$s=oci_parse($conn,$query);
					oci_execute($s);
					echo "<script>location='insertpem.php';</script>";
				}else if ($_GET['action'] == 'edit') {
					$id = $_GET['id'];
					$nama = $_GET['nama'];
					$id_angg = $_GET['id_angg'];
					$id_buku = $_GET['id_buku'];
					$judul = $_GET['judul'];
					$tgl_pinjam = $_GET['tgl_pinjam'];
					$tgl_kembali = $_GET['tgl_kembali'];
					$status = $_GET['status'];
					$query= "UPDATE PINJAM SET NAMA_ANGGOTA='$nama', ID_ANGGOTA='$id_angg', ID_BUKU='$id_buku', JUDUL='$judul', TANGGAL_PINJAM='$tgl_pinjam', TANGGAL_KEMBALI='$tgl_kembali', STATUS='$status'  WHERE ID_PINJAM='$_GET[id]'";
					echo $query;
					$s=oci_parse($conn, $query);
					oci_execute($s);
					echo "<script>location='insertpem.php';</script>";
				} 
			?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>