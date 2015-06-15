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
                            <div class="title" align="center">PENAMBAHAN MEMBER</div>
                        <?php
                            $id_member=$_POST['id_member'];
                            $nama=$_POST['nama'];
                            $alamat=$_POST['alamat'];
                            $katasandi=$_POST['katasandi'];
                            $loginterakhir=date("y/m/d/ h:m:s");
                            $link=koneksi_db(); $sql="update member set id_member='$id_member', nama='$nama', alamat='$alamat' , katasandi='$katasandi', loginterakhir='$loginterakhir' where id_member='$id_member'"; 
                            $res=mysql_query($sql);
                            if($res)
                            { 
                            ?> 
                            <div class="info">Data Member dengan ID
                            <?=$id_member?> telah di update.</div> 
                            <?php
                            } else{ 
                            ?> 
                            <div class="error"> Data member dengan ID
                            <?=$id_member
                            ?> gagal di update,dengan pesan kesalahan<b>
                            <?=mysql_error()?></b>. 
                            </div> 
                            <?php
                            } 
                            ?>    
                    </td>

                    <td width="25%" style="padding-left:10px;">
                        <div id="body">
                            <div class="title">Menu Member</div>
                            <div class="body">
                                <?php menu_member()?>
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