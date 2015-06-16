<?php 
session_start();
	if(($_SESSION['sudahlogin']==true)&&
		($_SESSION['username']!="")){
		?>
<html >
<head>

<?php include 'lib_func.php';?>

<title>Situs e-Order</title>
<link rel="SHORTCUT ICON" href="favicon.ico">
<link href="style.css" rel="stylesheet" type="text/css">  
</head>
<body>

    <div id="container">
        <div id="header">
            <?php header_web();?>
        </div>
        
        <br>
        <div id="shortcut">
            <?php menu_utama();?>
        </div>
        
        <div id="content">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
                <tr valign="top">
                    <td width="75%" style="padding-right:20px;">
                        <div id="body">
                            <div class="title" align="center">VIEW PRODUK</div>
                            <?php
								$link=koneksi_db(); 
								$sql="select * from produk order by id_produk"; 
								$res=mysql_query($sql); 
								$banyakrecord=mysql_num_rows($res); 
								if($banyakrecord>0){ 
								?> 
								<div class="info">DATA PRODUK DITEMUKAN SEBANYAK : <b><?=$banyakrecord?></b> Record</div>
								<table border=1 align="center" bordercolor="#BBBBBB">
								 <tr class="judultable"><td colspan=12>DAFTAR PRODUK</td></tr>
								 <tr class="judultable"  style="font-size:10;"><td>ID <br> PRODUK</td><td>ID <br> KATEGORI</td><td>ID <br> MERK</td><td>NAMA</td><td>HARGA</td><td>BERAT</td><td>DISKON</td><td>STOK</td><td>DIJUAL</td><td>DESKRIPSI</td><td>GAMBAR</td><td>DIHAPUS</td></tr>
								 <?php 
								 $i=0; 
								 while($data=mysql_fetch_array($res)){
								 $i++; 
								 ?> 
								 <tr class="<?php if($i%2==1) echo "isitabelganjil"; else echo"isitabelgenap";?>" style="font-size:12;"> 
								 <td align="center" width="6%"><?php echo $data['id_produk'];?></td>
								 <td align="center" width="7%"><?php echo $data['id_kategori'];?></td>
								 <td align="center" width="4%"><?php echo $data['id_merk'];?></td> 
								 <td align="center" width="20%"><?php echo $data['nama'];?></td>
								 <td align="center" width="5%"><?php echo $data['harga'];?></td>
								 <td align="center" width="4%"><?php echo $data['berat'];?></td>
								 <td align="center" width="5%"><?php echo $data['diskon'];?></td>
								 <td align="center" width="4%"><?php echo $data['stok'];?></td>
								 <td align="center" width="5%"><?php echo $data['dijual'];?></td>
								 <td align="center" width="28%"><?php echo $data['deskripsi'];?></td>
								 <td align="center" width="6%"><?php echo "<img height=50 width=50 src=\"".$data['filegambar']."\">"."<br>"; ?></td>
								 <td align="center" width="6%"><?php echo $data['dihapus'];?></td> 
								 </tr>
								   <?php
								    }
								    ?> 
									</table>
									 <?php 
									 } 
									 else echo"<center> Tidak ada data pada tabel produk. </center>"; 
									 ?>
                    </td>

                    <td width="25%" style="padding-left:10px;">
                        <div id="body">
                            <div class="title">Menu Produk</div>
                            <div class="body">
                                <?php menu_produk() ?>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        
        <div id="footer">
            <?php footer_web () ?>
        </div>
    </div>

</body>
</html>
<?php
	}
	else {
	header("location: belumlogin.php");
	}
	?>