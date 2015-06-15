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
                            <div class="title" align="center">VIEW MEMBER</div>
                            <?php
								$link=koneksi_db(); 
								$sql="select * from member order by nama"; 
								$res=mysql_query($sql); 
								$banyakrecord=mysql_num_rows($res); 
								if($banyakrecord>0){ 
								?> 
								<div class="info" align="center">DATA MEMBER DITEMUKAN SEBANYAK : <b><?=$banyakrecord?></b> Record</div>
								<table class="" border=0 align="center">
								 <tr class="judultable"><td colspan=5>DAFTAR MEMBER</td></tr>
								 <tr class="judultable"><td>ID MEMBER</td><td>NAMA</td><td>ALAMAT</td><td>KATA SANDI</td><td>LOGIN TERAKHIR</td></tr>
								 <?php 
								 $i=0; 
								 while($data=mysql_fetch_array($res)){
								 $i++; 
								 ?> 
								 <tr class="<?php if($i%2==1) echo "isitabelganjil"; else echo"isitabelgenap";?>"> 
								 <td align="center"><?php echo $data['id_member'];?></td> 
								 <td><?php echo $data['nama'];?></td>
								 <td align="center"><?php echo $data['alamat'];?></td>
								 <td align="center"><?php echo $data['katasandi'];?></td>
								 <td align="center"><?php echo $data['loginterakhir'];?></td> 
								  </tr>
								   <?php
								    }
								    ?> 
									</table>
									 <?php 
									 } 
									 else echo "<center> Tidak ada data pada tabel member. </center>"; 
									 ?>
                    </td>

                    <td width="25%" style="padding-left:10px;">
                        <div id="body">
                            <div class="title">Menu Member</div>
                            <div class="body">
                                <?php menu_member() ?>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        
        <div id="footer">
            <?php footer_web () ?>
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