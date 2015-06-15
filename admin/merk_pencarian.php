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
                            <div class="title" align="center">PENCARIAN MERK</div>
                            <div align="center"> <br>
								<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
									Pencarian
									<select name="fieldcari">
										<option value= "id_merk" <?php if (@$_POST['fieldcari'] == "id_merk") echo "selected" ;?>>ID Merk</option>
										<option value= "nama" <?php if (@$_POST['fieldcari'] == "nama") echo "selected" ;?>>Nama Merk</option>
									</select>
								<input type= "text" name="keyword" size=10 maxlength="30" value="<?=@$_POST['keyword'];?>">
								<input type="submit" name="tblcari" value="Cari">
								</form>
							</div> 
							
							<p>
							<?php 
								$link =koneksi_db();
								$sql =" select * from merk";
								@$fieldcari = $_POST['fieldcari']; 
								@$keyword= $_POST['keyword']; 
								if( @$_POST['tblcari']=="Cari")//Jikatblcaridiklik,tambahkanperintahWHERE... 
									$sql=$sql." where $fieldcari like '%$keyword%' ";
								$sql.="order by nama";
								$res=mysql_query($sql,$link);
								@$banyakrecord=mysql_num_rows($res); 
								
								if($banyakrecord>0){ 
									?> <div class="info">Data Merk ditemukan sebanyak: <b><?=$banyakrecord?></b> Record</div> 
									<table border=0 align="center">
										<tr class="judultable"><td colspan=3>DAFTAR MERK</td></tr> 
										<tr class="judultable"><td>ID MERK</td><td>NAMA</td><td>DIHAPUS</td></tr> 
										<?php 
											$i=0; 
											while($data=mysql_fetch_array($res)){ 
												$i++; 
												?> 
												<tr class="<?php if($i%2==1)echo "isitabelganjil";else echo"isitabelgenap";?>"> 
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
								else{ 
								?> 
									<div class="warning">Data merk tidak ditemukan!.</div>
							<?php
							}	 
							?></p> 
							
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