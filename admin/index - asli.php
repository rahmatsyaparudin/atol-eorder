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
            <?php menu_utama()?>
        </div>

        <div id="content">
        	<table border="0" width="100%" cellpadding="0" cellspacing="0">
            	<tr valign="top">
                	<td width="50%" style="padding-right:20px;">
                		<table class="table" width="100%">
                            <tr class="th">
                                <th width="5%">No.</th>
                                <th width="25%">Tanggal Tulis</th>
                                <th>Judul Artikel</th>
                                <th width="19%">Setting</th>
                            </tr>
                            <tr class="td" bgcolor="#FFF">
                                <td align="center">1</td>
                                <td align="center">22 Januari 2013</td>
                                <td>Membangun Aplikasi Android</td>
                                <td align="center"><img src="images/detail.png"><img src="images/edit.png"><img src="images/delete.png"></td>
                            </tr>
                            <tr class="td" bgcolor="#EEE">
                                <td align="center">2</td>
                                <td align="center">22 Januari 2013</td>
                                <td>Membangun Aplikasi Android</td>
                                <td align="center"><img src="images/detail.png"><img src="images/edit.png"><img src="images/delete.png"></td>
                            </tr>
                            <tr class="td" bgcolor="#FFF">
                                <td align="center">3</td>
                                <td align="center">22 Januari 2013</td>
                                <td>Membangun Aplikasi Android</td>
                                <td align="center"><img src="images/detail.png"><img src="images/edit.png"><img src="images/delete.png"></td>
                            </tr>
                            <tr class="td" bgcolor="#EEE">
                                <td align="center">4</td>
                                <td align="center">22 Januari 2013</td>
                                <td>Membangun Aplikasi Android</td>
                                <td align="center"><img src="images/detail.png"><img src="images/edit.png"><img src="images/delete.png"></td>
                            </tr>
                            <tr class="td" bgcolor="#FFF">
                                <td align="center">5</td>
                                <td align="center">22 Januari 2013</td>
                                <td>Membangun Aplikasi Android</td>
                                <td align="center"><img src="images/detail.png"><img src="images/edit.png"><img src="images/delete.png"></td>
                            </tr>
                            <tr class="td" bgcolor="#EEE">
                                <td align="center">6</td>
                                <td align="center">22 Januari 2013</td>
                                <td>Membangun Aplikasi Android</td>
                                <td align="center"><img src="images/detail.png"><img src="images/edit.png"><img src="images/delete.png"></td>
                            </tr>
                            <tr class="td" bgcolor="#FFF">
                                <td align="center">7</td>
                                <td align="center">22 Januari 2013</td>
                                <td>Membangun Aplikasi Android</td>
                                <td align="center"><img src="images/detail.png"><img src="images/edit.png"><img src="images/delete.png"></td>
                            </tr>
                            <tr class="td" bgcolor="#EEE">
                                <td align="center">8</td>
                                <td align="center">22 Januari 2013</td>
                                <td>Membangun Aplikasi Android</td>
                                <td align="center"><img src="images/detail.png"><img src="images/edit.png"><img src="images/delete.png"></td>
                            </tr>
                            <tr class="td" bgcolor="#FFF">
                                <td align="center">9</td>
                                <td align="center">22 Januari 2013</td>
                                <td>Membangun Aplikasi Android</td>
                                <td align="center"><img src="images/detail.png"><img src="images/edit.png"><img src="images/delete.png"></td>
                            </tr>
                            <tr class="td" bgcolor="#EEE">
                                <td align="center">10</td>
                                <td align="center">22 Januari 2013</td>
                                <td>Membangun Aplikasi Android</td>
                                <td align="center"><img src="images/detail.png"><img src="images/edit.png"><img src="images/delete.png"></td>
                            </tr>
                        </table>
                    </td>
                    <td width="25%" style="padding-right:10px;">
                        <div id="body">
                            <div class="title">Statistik</div>
                            <div class="body">
                            	<div id="stat" style="background:#FFF"><span class="text">Total Artikel</span><span class="value">3123</span></div>
                                <div id="stat" style="background:#EEE"><span class="text">Total Halaman</span><span class="value">123</span></div>
                                <div id="stat" style="background:#FFF"><span class="text">Total Komentar</span><span class="value">2312</span></div>
                                <div id="stat" style="background:#EEE"><span class="text">Total Member</span><span class="value">2235</span></div>
                                <div id="stat" style="background:#FFF"><span class="text">Total Kunjungan</span><span class="value">56546</span></div>
                                <div id="stat" style="background:#EEE"><span class="text">Total Artikel Dilihat</span><span class="value">223565</span></div>
                            </div>
                        </div>
                    </td>
                    <td width="25%" style="padding-left:10px;">
                    	<div id="body">
                        	<div class="title">Sub Menu</div>
                            <div class="body">
                            	<a class="submenu" href="#"><img src="images/home.png">Menu Pertama</a>
                                <a class="submenu" href="#"><img src="images/menu1.png">Menu 2</a>
                                <a class="submenu" href="#"><img src="images/menu2.png">Menu 3</a>
                                <a class="submenu" href="#"><img src="images/menu3.png">Menu 4</a>
                                <a class="submenu" href="#"><img src="images/menu4.png">Menu 5</a>
                                <a class="submenu" href="#"><img src="images/menu2.png">Menu 6</a>
                                <a class="submenu" href="#"><img src="images/menu1.png">Menu 7</a>
                                <a class="submenu" href="#"><img src="images/home.png">Menu 8</a>
                                <a class="submenu" href="#"><img src="images/menu4.png">Menu 9</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr valign="top">
                	<td colspan="3">
                    	<table class="table" width="100%">
                            <tr class="th">
                                <th width="3%">No.</th>
                                <th width="12%">Tanggal Daftar</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th width="20%">Nama Lengkap</th>
                                <th>Alamat</th>
                                <th width="10%">Setting</th>
                            </tr>
                            <tr class="td" bgcolor="#FFF">
                                <td align="center">1</td>
                                <td align="center">22 Januari 2013</td>
                                <td>pinocchio</td>
                                <td>fatoni.si.pino@gmail.com</td>
                                <td>Sii Pinocchio</td>
                                <td>Jl. Raya Simo Sungelebak, Kec. Karanggeneng, Kab. Lamongan</td>
                                <td align="center"><img src="images/detail.png"><img src="images/edit.png"><img src="images/delete.png"></td>
                            </tr>
                            <tr class="td" bgcolor="#EEE">
                                <td align="center">2</td>
                                <td align="center">22 Januari 2013</td>
                                <td>pinocchio</td>
                                <td>fatoni.si.pino@gmail.com</td>
                                <td>Sii Pinocchio</td>
                                <td>Jl. Raya Simo Sungelebak, Kec. Karanggeneng, Kab. Lamongan</td>
                                <td align="center"><img src="images/detail.png"><img src="images/edit.png"><img src="images/delete.png"></td>
                            </tr>
                            <tr class="td" bgcolor="#FFF">
                                <td align="center">3</td>
                                <td align="center">22 Januari 2013</td>
                                <td>pinocchio</td>
                                <td>fatoni.si.pino@gmail.com</td>
                                <td>Sii Pinocchio</td>
                                <td>Jl. Raya Simo Sungelebak, Kec. Karanggeneng, Kab. Lamongan</td>
                                <td align="center"><img src="images/detail.png"><img src="images/edit.png"><img src="images/delete.png"></td>
                            </tr>
                            <tr class="td" bgcolor="#EEE">
                                <td align="center">4</td>
                                <td align="center">22 Januari 2013</td>
                                <td>pinocchio</td>
                                <td>fatoni.si.pino@gmail.com</td>
                                <td>Sii Pinocchio</td>
                                <td>Jl. Raya Simo Sungelebak, Kec. Karanggeneng, Kab. Lamongan</td>
                                <td align="center"><img src="images/detail.png"><img src="images/edit.png"><img src="images/delete.png"></td>
                            </tr>
                            <tr class="td" bgcolor="#FFF">
                                <td align="center">5</td>
                                <td align="center">22 Januari 2013</td>
                                <td>pinocchio</td>
                                <td>fatoni.si.pino@gmail.com</td>
                                <td>Sii Pinocchio</td>
                                <td>Jl. Raya Simo Sungelebak, Kec. Karanggeneng, Kab. Lamongan</td>
                                <td align="center"><img src="images/detail.png"><img src="images/edit.png"><img src="images/delete.png"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        
        <div id="footer">
        	<?php footer_web() ?>
        </div>
    </div>

</body>
</html>nn