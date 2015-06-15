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
                            <div class="title" align="center">PENGHAPUSAN KATEGORI</div>
                            <form method=post action="kategori_proses_tambah.php"> 
                            <table align="center" bgcolor="white" border=0> 
                                <tr><td colspan=2 align=center class="judultable"><b>TAMBAH KATEGORI BARU</b></td></tr> 
                                <?php
                                    $id_kategori=$_POST['id_kategori']; 
                                    $link=koneksi_db(); 
                                    $sql="select * from kategori where id_kategori='$id_kategori'"; 
                                    $res=mysql_query($sql); 
                                    if(mysql_num_rows($res)==1){ 
                                    $data=mysql_fetch_array($res);
                                    ?> 
                                    <form method=post action="kategori_proses_hapus.php"> 
                                    <input type=hidden name="id_kategori" value="<?=$data['id_kategori']?>"> 
                                    <table align="center" bgcolor="white" border=0> 
                                    <tr><td colspan=2 align=center class="judultable"><b>HAPUS KATEGORI</b></td></tr> 
                                    <tr><td>ID Kategori</td>
                                    <td><b><?=$data['id_kategori']?></b></td></tr> 
                                    <tr><td>Nama Kategori</td><td><b><?=$data['nama']?></b></td></tr> 
                                    <tr><td>Status Hapus</td><td><b><?=$data['dihapus']?></b></td></tr>
                                     <tr><td></td> <td><input type=submit value="Hapus">
                                      <input type="button" onClick="javascript:history.back()" value="Batal"></td> 
                                      </tr> 
                                      </table>
                                       </form>
                                    <?php
                                    } else{ 
                                    ?>
                                     <div class="warning">Data kategori yang akan diedit tidak ditemukan!.</div>
                                     <?php } 
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

    