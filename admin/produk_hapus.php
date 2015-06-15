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
                            <div class="title" align="center">PENGHAPUSAN PRODUK</div>
                            <?php
                                $id_produk=$_POST['id_produk']; 
                                $link=koneksi_db(); 
                                $sql="select * from produk where id_produk='$id_produk'"; 
                                $res=mysql_query($sql); 
                                if(mysql_num_rows($res)==1){ 
                                $data=mysql_fetch_array($res);
                                ?> 
                                <form method=post action="produk_proses_hapus.php"> 
                                <input type=hidden name="id_produk" value="<?=$data['id_produk']?>"> 
                                <table align="center" bgcolor="white" border=0> 
                                <tr><td colspan=2 align=center class="judultable"><b>HAPUS PRODUK</b></td></tr> 
                                <tr><td>ID Produk</td><td><b><?=$data['id_produk']?></b></td></tr>
                                <tr><td>ID Kategori<td><b><?=$data['id_kategori']?></b></td></tr>
                                <tr><td>ID Merk<td><b><?=$data['id_merk']?></b></td></tr>   
                                <tr><td>Nama</td><td><b><?=$data['nama']?></b></td></tr>
                                <tr><td>Harga</td><td><b><?=$data['harga']?></b></td></tr>
                                <tr><td>Berat</td><td><b><?=$data['berat']?></b></td></tr>
                                <tr><td>Diskon</td><td><b><?=$data['diskon']?></b></td></tr>
                                <tr><td>Stok</td><td><b><?=$data['stok']?></b></td></tr>
                                <tr><td>Status Dijual</td><td><b><?=$data['dijual']?></b></td></tr>
                                <tr><td>Deskripsi</td><td><b><?=$data['deskripsi']?></b></td></tr>
                                <tr><td valign="top">File Gambar</td><td><b><?php echo "<img src=\"".$data['filegambar']."\">"."<br>"; ?></b></td></tr>
                                <tr><td>Status Hapus</td><td><b><?=$data['dihapus']?></b></td></tr>
                                 <tr><td></td> <td><input type=submit value="Hapus">
                                  <input type="button" onClick="javascript:history.back()" value="Batal"></td> 
                                  </tr> 
                                  </table>
                                   </form>
                                <?php
                                } else{ 
                                ?>
                                 <div class="warning">Data produk yang akan diedit tidak ditemukan!.</div>
                                 <?php } 
                                 ?>
                    </td>

                    <td width="25%" style="padding-left:10px;">
                        <div id="body">
                            <div class="title">Menu Produk</div>
                            <div class="body">
                                <?php menu_produk()?>
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