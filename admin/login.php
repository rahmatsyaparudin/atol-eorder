<?php
include("lib_func.php");
$username=$_POST['username'];
$userpass=$_POST['userpass'];
$link=koneksi_db();
$sql="select * from admin where username='$username' and userpass='$userpass'";
$res=mysql_query($sql,$link);
if(mysql_num_rows($res)==1){ // Jika username dan userpass benar
$data=mysql_fetch_array($res);
session_start();
$_SESSION['username']=$data['username']; // Isi variable username
$_SESSION['nama']=$data['nama']; // Isi variable nama
$_SESSION['level']=$data['level']; // Isi variable level
$_SESSION['sudahlogin']=true;// Variable ststus sudah login
header("Location: index.php"); // Pindah ke halaman index.php
}
else {
header("Location: gagallogin.php"); // Pindah ke halaman gagallogin.php
}
?>
