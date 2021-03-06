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
    <title>Seoul Library</title>
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
            <h1><i class="fa fa-th-list"></i> Anggota</h1>
            <p>Seoul Library Mall</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Anggota</li>
              <li class="active"><a href="#">Insert Anggota</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
		<div class="col-md-12">
            <div class="card">
              <h3 class="card-title">Insert Anggota </h3>
              <table class="table">
                <thead>
<?php $conn=oci_connect("perpus","perpus","localhost/XE");?>

	<form action='tambahanggota.php' method='POST'>
					<tr> <td>id anggota</td>
						 <td>:</td>
						 <td><input type='text' name='id'><td>
					</tr>
					<tr> <td>nama</td>
						 <td>:</td>
						 <td><input type='text' name='nama'><td>
					</tr>
					<tr> <td>alamat</td>
						 <td>:</td>
						 <td><input type='text' name='alamat'><td>
					</tr>
					<tr> <td>password</td>
						 <td>:</td>
						 <td><input type='text' name='tlp'><td>
					</tr>
					<tr> <td>gelar</td>
						 <td>:</td>
						 <td><input type='text' name='glr'><td>
					</tr>
					<tr> <td><input type='submit' value='Tambah'></td>
					</tr>
	</form>
<table class="table">	
	<th>ID ANGGOTA</th>
	<th>NAMA</th>
	<th>ALAMAT</th>
	<th>PASSWORD</th>
	<th>GELAR</th></tr>
		<?php $query="SELECT * FROM ANGGOTA ORDER BY ID_ANGGOTA";;
								$s=oci_parse($conn,$query);
								oci_execute($s,OCI_DEFAULT);
								
								$s=oci_parse($conn,$query);
								oci_execute($s,OCI_DEFAULT);
								while($res=oci_fetch_array($s,OCI_BOTH)){
								echo " <tr class='success'>\n";
								echo " <td>".($res['ID_ANGGOTA']) ."</td>";
								echo " <td>".($res['NAMA_ANGGOTA']) ."</td>";
								echo " <td>".($res['ALAMAT']) ."</td>";
								echo " <td>".($res['TELEPON']) ."</td>";
								echo " <td>".($res['GELAR']) ."</td>";
								echo " <td> <a href='editanggota.php?action=edit&id=$res[ID_ANGGOTA]'>Edit</a></td>";
								echo " <td> <a href='?action=del&id=$res[ID_ANGGOTA]'>Delete</a></td>\n</tr>\n";
								}
			?>
</table>
			<?php
				error_reporting(0);
				if ($_GET['action'] == 'del') {
					$query="DELETE FROM ANGGOTA WHERE ID_ANGGOTA='$_GET[id]'";
					$s=oci_parse($conn,$query);
					oci_execute($s);
					echo "<script>location='insertanggota.php';</script>";
				}else if ($_GET['action'] == 'edit') {
					$id = $_GET['id'];
					$nama = $_GET['nama'];
					$alamat = $_GET['alamat'];
					$tlp = $_GET['tlp'];
					$glr = $_GET['glr'];
					$query= "UPDATE ANGGOTA SET NAMA_ANGGOTA='$nama', ALAMAT='$alamat', TELEPON='$tlp', GELAR='$glr' WHERE ID_ANGGOTA='$_GET[id]'";
					echo $query;
					$s=oci_parse($conn, $query);
					oci_execute($s);
					echo "<script>location='insertanggota.php';</script>";
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