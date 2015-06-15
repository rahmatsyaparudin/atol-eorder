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
                            <div class="title" align="center">PENGHAPUSAN MEMBER</div>
                            <?php
								$id_member=$_POST['id_member']; 
								$link=koneksi_db(); 
								$sql="select * from member where id_member='$id_member'"; 
								$res=mysql_query($sql); 
								if(mysql_num_rows($res)==1){ 
								$data=mysql_fetch_array($res);
								?> 
								<form method=post action="member_proses_hapus.php"> 
								<input type=hidden name="id_member" value="<?=$data['id_member']?>"> 
								<table align="center" bgcolor="white" border=0> 
								<tr><td colspan=5 align=center class="judultable"><b>HAPUS MEMBER</b></td></tr> 
								<tr><td>ID Member</td>
								<td><b><?=$data['id_member']?></b></td></tr> 
								<tr><td>Nama Member</td><td><b><?=$data['nama']?></b></td></tr> 
								<tr><td>Alamat</td><td><b><?=$data['alamat']?></b></td></tr>
								<tr><td>Kata Sandi</td><td><b><?=$data['katasandi']?></b></td></tr>
								<tr><td>Login Terakhir</td><td><b><?=$data['loginterakhir']?></b></td></tr>
								 <tr><td></td> <td><input type=submit value="Hapus">
								  <input type="button" onClick="javascript:history.back()" value="Batal"></td> 
								  </tr> 
								  </table>
								   </form>
								<?php
								} else{ 
								?>
								 <div class="warning">Data member yang akan diedit tidak ditemukan!.</div>
								 <?php } 
								 ?>
                    </td>

                    <td width="25%" style="padding-left:10px;">
                        <div id="body">
                            <div class="title">Menu Member</div>
                            <div class="body">
                                <?php menu_member()?>
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
    header("location:  belumlogin.php");
    }
    ?>
