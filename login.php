<!DOCTYPE html>
<html>
<?php
	$conn=oci_connect("perpus","perpus","localhost/XE");
	if(isset($_POST['login']))
	{
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$sql = "SELECT * FROM ANGGOTA where NAMA_ANGGOTA='$user' and TELEPON='$pass'";
	$sqlparse = oci_parse($conn, $sql);
	$retval = oci_execute($sqlparse) or die(oci_error());
	$row = oci_fetch_assoc($sqlparse);
	
		session_start();
		if($row['NAMA_ANGGOTA']==$user && $row['TELEPON']==$pass && $row['GELAR']=='admin')
		{
			$_SESSION['NAMA_ANGGOTA'] = $row['NAMA_ANGGOTA'];
			$_SESSION['TELEPON'] = $row['TELEPON'];
	?>
			<script language="javascript">
					<!--
			location.href='admin';
			//--> 
			</script>
	<?php
		}else{
	?>
	 <script language="javascript">
			<!--
			window.alert('Login Gagal!\nAnda Bukan Aadmin!');
			location.href='login.php';
			//--> 
			</script>
	<?php
		}
	}else{
	?>

<body>
	<div class="container">
		<div class="main">
	      <form action="" method="post">
			<h2>Masukkan Nama dan Password</h2>
			<label>Username :</label>
			<input id="user" name="user" placeholder="ex : park chanyeol" type="text">
			
			<label>Password :</label>
			<input id="pass" name="pass" placeholder="**********" type="password">
			
			<input type="submit" name="login" id="submit" value="Login">
		  </form>
  
    </div>
  </body>
<style>
.container {
    margin-top: 7%;
    margin-left: 35%;
}

	body{
		background: url('img/Library.jpg');
	}
	
	
h2{
 padding: 30px 35px;
 margin: -10px -50px;
 text-align:center;
 color: #fff;
}
 
span{
 display: block;
 margin-bottom: 20px;
 color: red;
}
 
.success{
 display: block;
 margin-top: 20px;
 margin-bottom: 0;
 font-size: 14px;
} 

b{
 color:#000000;
}

hr{
 margin: 10px -50px;
 border: 0;
 margin-bottom: 25px;
}
 
div.main{
 width: 306px;
 padding: 10px 50px 30px;
 font-family: raleway;
 float:left;
 margin-top:15px;
}
 
input[type=text]{
 width: 96%;
 height: 25px;
 padding: 5px;
 margin-bottom: 25px;
 margin-top: 5px;
 border: 2px solid #ccc;
 color: #000000;
 font-size: 16px;
}

input[type=password]{
 width: 96%;
 height: 25px;
 padding: 5px;
 margin-bottom: 25px;
 margin-top: 5px;
 border: 2px solid #ccc;
 color: #000000;
 font-size: 16px;
}
 
label{
 color: #fff;
 text-shadow: 0 1px 0 #fff;
 font-size: 16px;
}
 
input[type=submit]{
 font-size: 16px;
 background: linear-gradient( #DCDCDC 5%, #fff 100%);
 color: #4E4D4B;
 font-weight: bold;
 cursor: pointer;
 width: 100%;
 padding: 10px 0;
 outline:none;
}

#profile {
padding:50px;
border:1px solid grey;
font-size:20px;
background-color:#A2DED0;
}
#logout {
float:right;
padding:5px;
border:dashed 1px gray
}
a {
text-decoration:none;
color:#6495ed
}
i {
color:#6495ed
}


</style>
</html>
<?php } ?>