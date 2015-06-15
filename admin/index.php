<?php 
    session_start();
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
            <?php menu_tampil();?>
        </div>

        <div id="content" align="center">
            <?php
            $telahlogin=isset ($_SESSION['sudahlogin']);
            if($telahlogin==false){ ?>    
                <td valign="top"><p class="judul">SELAMAT DATANG ADMIN</p>
            <?php }else{ ?>
                <td valign="top"><p class="judul" style="margin-bottom:250px;">SELAMAT DATANG ADMIN</p>
            <?php } menu()?>
        </div>
        
        <div id="footer">
        	<?php footer_web() ?>
        </div>
    </div>

</body>
</html>