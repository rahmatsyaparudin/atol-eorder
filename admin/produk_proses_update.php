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
                            <div class="title" align="center">PENAMBAHAN PRODUK</div>
                            <?php
                                $id_produk=$_POST['id_produk'];
                                $id_kategori=$_POST['id_kategori'];
                                $id_merk=$_POST['id_merk'];  
                                $nama=$_POST['nama'];
                                $harga=$_POST['harga'];
                                $berat=$_POST['berat'];
                                $diskon=$_POST['diskon'];
                                $stok=$_POST['stok'];
                                $dijual=$_POST['dijual'];
                                $deskripsi=$_POST['deskripsi']; 
                                $dihapus=$_POST['dihapus']; 
                                $link=koneksi_db(); $sql="update produk set id_produk='$id_produk',id_kategori='$id_kategori',id_merk='$id_merk',nama='$nama',harga='$harga',berat='$berat',diskon='$diskon',stok='$stok',dijual='$dijual',deskripsi='$deskripsi', dihapus='$dihapus' where id_produk='$id_produk'"; 
                                $res=mysql_query($sql);
                                if($res)
                                { 
                                ?> 
                                <div class="info">Data Produk dengan ID
                                <?=$id_produk?> telah di update.</div> 
                                <?php
                                } else{ 
                                ?> 
                                <div class="error"> Data produk dengan ID
                                <?=$id_produk
                                ?> gagal di update,dengan pesan kesalahan<b>
                                <?=mysql_error()?></b>. 
                                </div> 
                                <?php
                                } 
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