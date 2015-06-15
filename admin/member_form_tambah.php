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
                            <form method=post action="member_proses_tambah.php"> 
                            <table align="center" bgcolor="white" border=0> 
                                <tr><td colspan=5 align=center class="judultable"><b>TAMBAH MEMBER BARU</b></td></tr> 
                                <tr><td>ID Member</td><td><input type="text" name="idmember" size=31 maxlength=30></td></tr>
                                <tr><td>Nama Member</td><td><input type="text" name="namamember" size=31 maxlength=30></td></tr>
                                <tr><td>Alamat</td><td><input type="text" name="alamat" size=31 maxlength=30></td></tr>
                                <tr><td>Kata Sandi</td><td><input type="text" name="katasandi" size=31 maxlength=30></td></tr>   
                                <tr><td></td><td><input type=submit value="Simpan"> <input type=reset></td></tr> 
                                </table> 
                                </form>
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
