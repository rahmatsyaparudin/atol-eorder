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
                            <div class="title" align="center">PENAMBAHAN MERK</div>
                            <form method='post' action="merk_proses_tambah.php"> 
                            <table align="center" bgcolor="white" border=0> 
                                <tr><td colspan=2 align=center class="judultable"><b>TAMBAH MERK BARU</b></td></tr> 
                                <tr><td>Nama Merk</td><td><input type="text" name="namamerk" size=31 maxlength=30></td></tr> 
                                <tr><td></td><td><input type=submit value="Simpan"> <input type=reset></td></tr> 
                                </table> 
                                </form> <!--Awalformpenambahandatamerk-->
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