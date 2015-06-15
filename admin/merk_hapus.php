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
                            <div class="title" align="center">PENGHAPUSAN MERK</div>
                            <?php
                                $id_merk=$_POST['id_merk']; 
                                $link=koneksi_db(); 
                                $sql="select * from merk where id_merk='$id_merk'"; 
                                $res=mysql_query($sql); 
                                
                                if(mysql_num_rows($res)==1){ 
                                    $data=mysql_fetch_array($res);
                                ?> 
                                <form method=post action="merk_proses_hapus.php"> 
                                    <input type=hidden name="id_merk" value="<?=$data['id_merk']?>"> 
                                    <table align="center" bgcolor="white" border=0> 
                                        <tr><td colspan=2 align=center class="judultable"><b>HAPUS MERK</b></td></tr> 
                                        <tr><td>ID Merk</td>
                                            <td><b><?=$data['id_merk']?></b></td></tr> 
                                        <tr><td>Nama Merk</td><td><b><?=$data['nama']?></b></td></tr> 
                                        <tr><td>Status Hapus</td><td><b><?=$data['dihapus']?></b></td></tr>
                                        <tr><td></td> <td><input type=submit value="Hapus">
                                        <input type="button" onClick="javascript:history.back()" value="Batal"></td> 
                                        </tr> 
                                    </table>
                                </form>
                                <?php
                                } else{ 
                                ?>
                                 <div class="warning">Data merk yang akan diedit tidak ditemukan!.</div>
                                 <?php } 
                                 ?>
                                
                                </p>
                                <p>&nbsp;</p></td>
                    </td>

                    <td width="25%" style="padding-left:10px;">
                        <div id="body">
                            <div class="title">Menu Merk</div>
                            <div class="body">
                                <?php menu_merk()?>
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