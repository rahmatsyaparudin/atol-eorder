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
                            <div class="title" align="center">PENAMBAHAN KATEGORI</div>
                            <?php
                                $nama=$_POST['namakategori'];//AmbildatadariForm 
                                $link=koneksi_db(); 
                                $sql="insert into kategori values(null,'$nama','T')"; // susunSQL
                                $res=mysql_query($sql,$link); // EksekusiSQL
                                if($res){//Jikaberhasil
                                $id_kategori=mysql_insert_id($link);
                                 ?> 
                                 <div class="info">Data Kategori<b> <?=$nama;?></b> telah disimpan dengan id kategori<b> <?=$id_kategori?></b></div>
                                  <?php
                                  } else {//Jikagagal
                                  ?> 
                                  <div class="error">Terjadi kesalahan dalam penyimpanan data kategori baru.Silahkan diulang lagi.<br></div> 
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
