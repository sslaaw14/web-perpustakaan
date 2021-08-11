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
                <li><a href="editumum.php"><i class="fa fa-circle-o"></i> Delete Buku</a></li>
              </ul>
            </li>
			<li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>Majalah</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="insertmajalah.php"><i class="fa fa-circle-o"></i> List Buku</a></li>
                <li><a href="editmajalah.php"><i class="fa fa-circle-o"></i> Delete Buku</a></li>
              </ul>
            </li>
			<li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Anggota</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="insertanggota.php"><i class="fa fa-circle-o"></i> List Anggota</a></li>
				<li><a href="editanggota.php"><i class="fa fa-circle-o"></i> Delete Anggota</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Peminjaman</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="insertpem.php"><i class="fa fa-circle-o"></i> Daftar Peminjaman</a></li>
                <li><a href="deletepem.php"><i class="fa fa-circle-o"></i> Delete Peminjaman</a></li>
              </ul>
            </li>
			<li><a href="allbook.php"><i class="fa fa-file-text"></i> All Book</a></li>
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-th-list"></i> All Book</h1>
            <p>Seoul Library Mall</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>All Book</li>
              <li class="active"><a href="#">List Buku</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
		<div class="col-md-12">
            <div class="card">
              <h3 class="card-title">Daftar Buku </h3>
              <table class="table">
                <thead>
                  <tr>
                    <th>ID BUKU</th>
                    <th>JUDUL</th>
                    <th>PENGARANG</th>
                    <th>PENERBIT</th>
					<th>TAHUN</th>
					<th>JENIS BUKU</th>
					<th>KATEGORI</th>
					<th>GENRE</th>
					<th>JUMLAH</th>
                  </tr>
                </thead>
                <tbody>
					<?php
					error_reporting(0);
					$conn=oci_connect('perpus','perpus','localhost/xe');
					
					$query="SELECT * FROM DAFTAR_BUKU ";
					$s=oci_parse($conn,$query);
					oci_execute($s,OCI_DEFAULT);
					while($res=oci_fetch_array($s,OCI_BOTH)){
					echo " <tr class='success'>\n";
					echo " <td>".($res['ID_BUKU']) ."</td>";
					echo " <td>".($res['JUDUL']) ."</td>";
					echo " <td>".($res['PENGRANAG']) ."</td>";
					echo " <td>".($res['PENERBIT']) ."</td>";
					echo " <td>".($res['TANGGAL']) ."</td>";
					echo " <td>".($res['JENIS_BUKU']) ."</td>";
					echo " <td>".($res['KATEGORI']) ."</td>";
					echo " <td>".($res['GENRE']) ."</td>";
					echo " <td>".($res['JUMLAH']) ."</td>";
					}
					
					?>
                </tbody>
              </table>
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