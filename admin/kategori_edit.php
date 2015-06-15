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
                            <div class="title" align="center">PENGEDITAN KATEGORI</div>
                           <?php
								$id_kategori=$_POST['id_kategori']; 
								$link=koneksi_db(); 
								$sql="select*from kategori where id_kategori='$id_kategori'"; 
								$res=mysql_query($sql); 
								if(mysql_num_rows($res)==1){ 
								$data=mysql_fetch_array($res); 
								?> 
								<form method=post action="kategori_proses_update.php"> 
								<table align="center" bgcolor="white" border=0> 
								<tr><td colspan=2 align=center class="judultable"><b>EDIT KATEGORI</b></td></tr> 
								<tr><td>ID Kategori</td>
								 <td><input type=text name="id_kategori" value="<?=$data['id_kategori']?>" readonly></td></tr> 
								 <tr><td>Nama Kategori</td> <td>
								 <input type=text name="nama" value="<?=$data['nama']?>" size=31 maxlength=30></td></tr> 
								 	<tr><td valign=top>Status Dihapus</td> 
									<td><input type=radio name="dihapus" value="Y" <?php if($data['dihapus']=="Y") echo"checked";?>>Ya<br> 
									<input type=radio name="dihapus" value="T" <?php if($data['dihapus']=="T") echo"checked";?>>Tidak
									</td>
									 </tr>
									<tr><td></td> 
									<td><input type=submit value="Update"> 
									<input type="button" onClick="javascript:history.back()" value="Batal"></td> 
									</tr> 
									</table> 
									</form> 
									<?php 
									} else{ 
									?> <div class="warning">Data kategori tidak ditemukan!.</div>
									<?php
									} 
									?>
                    </td>

                    <td width="25%" style="padding-left:10px;">
                        <div id="body">
                            <div class="title">Menu Kategori</div>
                            <div class="body">
                                <?php menu_kategori()?>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        
        <div id="footer">
            <?php footer_web()?>
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
