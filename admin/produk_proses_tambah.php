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
                                $kategori=$_POST['pilihkategori'];
                                $merk=$_POST['pilihmerk'];
                                $nama=$_POST['namaproduk'];
                                $harga=$_POST['harga'];
                                $berat=$_POST['berat'];
                                $diskon=$_POST['diskon'];
                                $stok=$_POST['stok'];
                                $dijual=$_POST['dijual'];
                                $deskripsi=$_POST['deskripsi'];

                                $lokasi_file = @$_FILES['gambar']['tmp_name'];
                                $tipe_file   = @$_FILES['gambar']['type'];
                                $nama_file   = @$_FILES['gambar']['name'];
                                $direktori   = "images/produk/$nama";

                                if (!empty($_FILES['gambar'])&&!empty($tipe_file)){
                                    $file_path="images/produk/".$nama.substr($tipe_file, -4);
                                    move_uploaded_file($lokasi_file, $file_path);
                                }else{
                                    $file_path = "images/produk/noimage.png";
                                }
                                
                                $link=koneksi_db();
                                
                                $sql = "INSERT INTO produk VALUES(NULL,'$kategori','$merk','$nama','$harga','$berat','$diskon','$stok','$dijual','$deskripsi','$file_path','T')"; // susun SQL
                                $res=mysql_query($sql,$link); // Eksekusi SQL
                                if($res){ // Jika berhasil
                                $id_produk=mysql_insert_id($link);
                                ?>
                                <div class="info">Data produk <b><?=$nama;?></b> telah disimpan dengan id produk <b><?=$id_produk?></b></div>
                                <?php
                                }
                                else { // Jika gagal
                                ?>
                                <div class="error">Terjadi kesalahan dalam penyimpanan data produk baru. Silahkan diulang lagi.<br></div>
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