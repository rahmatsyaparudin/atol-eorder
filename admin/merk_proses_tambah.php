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
                            <div class="title" align="center">PENGEDITAN MERK</div>
                            <?php
                                $nama=$_POST['namamerk'];//AmbildatadariForm 
                                $link=koneksi_db(); 
                                $sql="insert into merk values(null,'$nama','T')"; // susunSQL
                                $res=mysql_query($sql,$link); // EksekusiSQL
                                if($res){//Jikaberhasil
                                $id_merk=mysql_insert_id($link);
                                 ?> 
                                 <div class="info">Data Merk<b> <?=$nama;?></b> telah disimpan dengan id merk<b> <?=$id_merk?></b></div>
                                  <?php
                                  } else {//Jikagagal
                                  ?> 
                                  <div class="error">Terjadi kesalahan dalam penyimpanan data merk baru.Silahkan diulang lagi.<br></div> 
                                  <?php } 
                                  ?>
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