<?php
require "koneksi.php";

$nama       = $_POST['nm'];
$username   = $_POST['user'];
$email      = $_POST['email'];
$password   = md5($_POST['pass']) ;
$created_add = date('Y-m-d H:i:s');
$sql = "INSERT INTO daftar (nama,username,email,password,flag,created_add) 
VALUES ('$nama','$username','$email','$password',1,'$created_add')" ; 
$query = mysqli_query($con,$sql)  ;

if ($query){
    echo "data berhasil disimpan" ;
?>
<a href="/data_masuk.php">
&nbsp;&nbsp; Lihat Data Masuk
</a>
<?php
}else{
    echo "gagal input data" ;
    echo mysqli_error() ;
}
?>