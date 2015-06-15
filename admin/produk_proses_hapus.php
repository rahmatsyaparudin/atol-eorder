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
                                $sql="update produk set dihapus= 'Y' where id_produk='$id_produk'"; 
                                $res=mysql_query($sql,$link); 
                                if($res){ 
                                ?> 
                                <div class="info">Data Produk dengan ID <?=$id_produk?> telah dihapus.</div> 
                                <?php
                                } else{ 
                                ?> 
                                <div class="error"> Data produk dengan ID <?=$id_produk?> gagal dihapus,dengan pesan kesalahan<b><?=mysql_error()?></b>. </div> 
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