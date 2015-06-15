<?php
	function header_web(){ 
	?> 
		<div id="logo">
               <img src="images/logo.png">
        </div>
        <div class="clear"></div> 
	<?php
	} 
	function footer_web(){ 
	?> 
	<center> 
		<small>Developed By Mahasiswa IF</small> 
	</center> 
	<?php
	} 
	function form_login(){
	?>

<p align="center" style="margin-bottom: -5px;">Halaman ini hanya dipergunakan oleh Administrator untuk mengolah data situs. Silahkan login untuk dapat masuk ke menu kami</p>
<br>
<form method=post action="login.php">
<div class="login" align="center"><br>
                <img src="images/admin.png" height="100" width="100"> <br>
                Username <input type="text" placeholder="username" name="username" maxlength="8"><br><br>
                Password <input type="password" placeholder="password" name="userpass" maxlength="8"><br><br>
                <input class="tombol" type="submit" value="Login" style="padding: 10px 30px 10px 30px;">
            </div>
</form>
<?php

}
	
	function menu_utama(){
		?>
		<a href="index.php"><img src="images/home.png"><br>Home</a>
		<a href="merk_view.php"><img src="images/short4.png"><br>Data Merk</a>
        <a href="kategori_view.php"><img src="images/short4.png"><br>Data Kategori</a>
        <a href="produk_view.php"><img src="images/short4.png"><br>Data Produk</a>
        <a href="member_view.php"><img src="images/short4.png"><br>Data Member</a>
        <a href="logout.php"><img src="images/logout.png"><br>Log Out</a>
	<?php
	}

	function menu_merk(){ 
	?> 
		<a class="submenu" href="merk_form_tambah.php"><img src="images/add.png">Tambah Merk</a>
        <a class="submenu" href="merk_form_edit.php"><img src="images/edit.png">Edit Merk</a>
        <a class="submenu" href="merk_view.php"><img src="images/detail.png">View Merk</a>
        <a class="submenu" href="merk_form_hapus.php"><img src="images/delete.png">Hapus Merk</a>
        <a class="submenu" href="merk_pencarian.php"><img src="images/search.png">Pencarian Merk</a>
	<?php
	}

	function menu_member(){ 
	?> 
		<a class="submenu" href="member_form_tambah.php"><img src="images/add.png">Tambah Member</a>
        <a class="submenu" href="member_form_edit.php"><img src="images/edit.png">Edit Member</a>
        <a class="submenu" href="member_view.php"><img src="images/detail.png">View Member</a>
        <a class="submenu" href="member_form_hapus.php"><img src="images/delete.png">Hapus Member</a>
        <a class="submenu" href="member_pencarian.php"><img src="images/search.png">Pencarian Member</a>
	<?php
	}

	function menu_kategori(){ 
	?> 
		<a class="submenu" href="kategori_form_tambah.php"><img src="images/add.png">Tambah Kategori</a>
        <a class="submenu" href="kategori_form_edit.php"><img src="images/edit.png">Edit Kategori</a>
        <a class="submenu" href="kategori_view.php"><img src="images/detail.png">View Kategori</a>
        <a class="submenu" href="kategori_form_hapus.php"><img src="images/delete.png">Hapus Kategori</a>
        <a class="submenu" href="kategori_pencarian.php"><img src="images/search.png">Pencarian Kategori</a>
	<?php
	}

	function menu_produk(){ 
	?> 
		<a class="submenu" href="produk_form_tambah.php"><img src="images/add.png">Tambah Produk</a>
        <a class="submenu" href="produk_form_edit.php"><img src="images/edit.png">Edit Produk</a>
        <a class="submenu" href="produk_view.php"><img src="images/detail.png">View Produk</a>
        <a class="submenu" href="produk_form_hapus.php"><img src="images/delete.png">Hapus Produk</a>
        <a class="submenu" href="produk_pencarian.php"><img src="images/search.png">Pencarian Produk</a>
	<?php
	}

	function menu(){
		$telahlogin=isset ($_SESSION['sudahlogin']);
			if($telahlogin==false)
			form_login();
	}

	function menu_tampil(){
		$telahlogin=isset ($_SESSION['sudahlogin']);
			if($telahlogin==true)
			menu_utama();
	}

	function koneksi_db(){ 
		$host ="localhost"; 
		$database ="dbeorder_10112747"; 
		$user="root"; 
		$password=""; 
		$link=mysql_connect($host,$user,$password); 
		mysql_select_db($database,$link); 
		if(!$link) 
			echo "Error:".mysql_error(); 
		return $link; 
	} 
?>