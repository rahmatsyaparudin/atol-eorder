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
                            <div class="title" align="center">PENCARIAN PRODUK</div>
                            <div align="center"><br>
                            <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
                            Pencarian
                            <select name="fieldcari">
                                <option value= "id_produk" <?php if (@$_POST['fieldcari'] == "id_produk") echo "selected" ;?>>ID Produk</option>
                                <option value= "id_kategori" <?php if (@$_POST['fieldcari'] == "id_kategori") echo "selected" ;?>>ID Kategori</option>
                                <option value= "id_merk" <?php if (@$_POST['fieldcari'] == "id_merk") echo "selected" ;?>>ID Merk</option>
                            <option value= "nama" <?php if (@$_POST['fieldcari'] == "nama") echo "selected" ;?>>Nama </option>
                            </select>
                            <input type= "text" name="keyword" size=10 maxlength="30" value="<?=@$_POST['keyword'];?>">
                            <input type="submit" name="tblcari" value="Cari">
                        </form>
                    </div> 
                        <p>
                        <?php 
                            $link =koneksi_db();
                            $sql =" select * from produk";
                            @$fieldcari = $_POST['fieldcari']; 
                            @$keyword= $_POST['keyword']; 
                            if( @$_POST['tblcari']=="Cari")//Jikatblcaridiklik,tambahkanperintahWHERE... 
                                $sql=$sql." where $fieldcari like '%$keyword%' ";
                            $sql.="order by nama";
                            $res=mysql_query($sql,$link);
                            @$banyakrecord=mysql_num_rows($res); 
                        if($banyakrecord>0){ 
                            ?> <div class="info">Data kategori ditemukan sebanyak: <b><?=$banyakrecord?></b> Record</div> 
                            <table border=0 align="center">
                            <tr class="judultable"><td colspan=12>DAFTAR PRODUK</td></tr> 
                            <tr class="judultable"><td>ID Produk</td><td>ID Kategori</td><td>ID Merk</td><td>Nama</td><td>Harga</td><td>Berat</td><td>Diskon</td>
                            <td>Stok</td><td>Dijual</td><td>Deskripsi</td><td>Gambar</td><td>Dihapus</td>
                            </tr> 
                            <?php 
                                $i=0; 
                                while($data=mysql_fetch_array($res)){ 
                                    $i++; 
                                    ?> 
                                    <tr class="<?php if($i%2==1)echo "isitabelganjil";else echo"isitabelgenap";?>"> 
                                        <td align="center"><?php echo $data['id_produk'];?></td> 
                                        <td><?php echo $data['id_kategori'];?></td>
                                        <td><?php echo $data['id_merk'];?></td>
                                        <td><?php echo $data['nama'];?></td> 
                                        <td><?php echo $data['harga'];?></td>
                                        <td><?php echo $data['berat'];?></td>
                                        <td><?php echo $data['diskon'];?></td>
                                        <td><?php echo $data['stok'];?></td>
                                        <td><?php echo $data['dijual'];?></td>
                                        <td><?php echo $data['deskripsi'];?></td>
                                        <td><?php echo $data['filegambar'];?></td>
                                        <td><?php echo $data['dihapus'];?></td>
                                        
                                    </tr> 
                                    <?php
                                }
                            ?> 
                            </table> 
                            <?php
                        }
                                else{ 
                                ?> 
                                <div class="warning">Data produk tidak ditemukan!.</div>
                                <?php
                                }    
                            ?></p> 
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