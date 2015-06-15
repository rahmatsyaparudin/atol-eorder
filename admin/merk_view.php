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
                            <div class="title" align="center">VIEW MERK</div>
                            <?php
                                $link=koneksi_db(); 
                                $sql="select * from merk order by nama"; 
                                $res=mysql_query($sql); 
                                $banyakrecord=mysql_num_rows($res); 
                                if($banyakrecord>0){ 
                            ?> 
                            <div class="info">DATA MERK DITEMUKAN SEBANYAK : <b><?=$banyakrecord?></b> Record</div>
                            <table border=0 align="center">
                                <tr class="judultable"><td colspan=3>DAFTAR MERK</td></tr>
                                <tr class="judultable"><td>ID MERK</td><td>NAMA</td><td>DIHAPUS</td></tr>
                                <?php 
                                    $i=0; 
                                    while($data=mysql_fetch_array($res)){
                                    $i++; 
                                ?> 
                                <tr class="<?php if($i%2==1) echo "isitabelganjil"; else echo"isitabelgenap";?>"> 
                                    <td align="center"><?php echo $data['id_merk'];?></td> 
                                    <td><?php echo $data['nama'];?></td>
                                    <td align="center"><?php echo $data['dihapus'];?></td> 
                                </tr>
                                <?php
                                    }
                                ?> 
                            </table>
                                <?php 
                                    } 
                                    else echo"<center> Tidak ada data pada tabel merk. </center>"; 
                                ?>
                        	</div>
                    </td>

                    <td width="25%" style="padding-left:10px;">
                        <div id="body">
                            <div class="title">Menu Merk</div>
                            <div class="body">
                                <?php menu_merk () ?>
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