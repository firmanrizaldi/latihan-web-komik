<?php
session_start();
require "koneksi.php" ;
$username = $_POST['user']; 
$password = md5($_POST['pass']); 

$cek = mysqli_query($con,"SELECT * FROM daftar WHERE username='$username' and password='$password'"); 
$rowcount = mysqli_num_rows($cek);
$row= mysqli_fetch_array($cek) ;

$_SESSION['nama'] = $row['nama'] ;

if ($rowcount == 1) {
$_SESSION['username'] = $username;
header('Location: ../komik/index.php');
}
else
{
header('Location:./komik/login.php');
}
?>