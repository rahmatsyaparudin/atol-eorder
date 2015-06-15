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
        <?php
            $link=koneksi_db();
            $sql="select * from kategori";
            $res=mysql_query($sql,$link);
            $sql1="select * from merk";
            $res1=mysql_query($sql1,$link);
            $sql2="select * from produk";
            $res2=mysql_query($sql2,$link);

            $data=mysql_fetch_array($res2);
        ?>
        <div id="content">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
                <tr valign="top">
                    <td width="75%" style="padding-right:20px;">
                        <div id="body">
                            <div class="title" align="center">PENAMBAHAN PRODUK</div>
                            <form method=post action="produk_proses_tambah.php">
                            <table align="center" bgcolor="white" border=0>
                            <tr><td colspan=2 align=center class="judultable"><b>TAMBAH PRODUK BARU</b></td></tr>
                            <tr><td>Pilih Kategori</td>
                                <td> <select name="pilihkategori">
                                    <?php
                                    while ($hasil = mysql_fetch_assoc($res)) { ?>
                                    <option value="<?php echo $hasil ['id_kategori']; ?>" <?php if(isset($_POST['pilihkategori']) && $_POST['pilihkategori']=="echo $hasil ['id_kategori'];") echo "selected";?>><?php echo $hasil ['nama']; ?></option>
                                    <?php }
                                    ?>
                                    </select> </td></tr>
                                <tr><td>Pilih Merk</td>
                                <td> <select name="pilihmerk">
                                    <?php
                                    while ($hasil1 = mysql_fetch_assoc($res1)) { ?>
                                    <option value="<?php echo $hasil1 ['id_merk']; ?>" <?php if(isset($_POST['pilihmerk']) && $_POST['pilihmerk']=="echo $hasil1 ['id_merk'];") echo "selected";?>><?php echo $hasil1 ['nama']; ?></option>
                                    <?php }
                                    ?>
                                    </select> </td></tr>
                                <tr><td>Nama</td><td><input type=text name="namaproduk" size=31 maxlength=30></td></tr>
                                <tr><td>Harga</td><td><input type=text name="harga" size=31 maxlength=30></td></tr>
                                <tr><td>Berat</td><td><input type=text name="berat" size=31 maxlength=30></td></tr>
                                <tr><td>Diskon</td><td><input type=text name="diskon" size=31 maxlength=30></td></tr>
                                <tr><td>Stok</td><td><input type=text name="stok" size=31 maxlength=30></td></tr>
                                <tr><td>Dijual</td><td><input type=radio name="dijual" value="Y" <?php if($data['dijual']=="Y") echo "checked"; ?> > Ya<br>
                                                       <input type=radio name="dijual" value="T" <?php if($data['dijual']=="T") echo "checked"; ?> > Tidak</td></tr>                        
                                <tr><td>Deskripsi</td><td><input type=textarea name="deskripsi"></td></tr>
                                <tr><td>Gambar</td><td><input type="file" name="gambar"></td></tr>
                                <tr><td></td><td><input type=submit value="Simpan"><input type=reset></td></tr>
                                </table>
                                </form>
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