<?php
require "koneksi.php" ;

function hapus($id_genre) {
    global $con ;
    mysqli_query($con,"DELETE FROM genre where id_genre = $id_genre") ;

    return mysqli_affected_rows($con) ;
}

$id_genre = $_GET["id_genre"];

if (hapus($id_genre) > 0){
    echo "<script>
    alert('data berhasil di hapus!') ;
    document.location.href='viewGenre.php' ;
</script>" ;
}
else {
echo "<script>
    alert('data gagal di hapus!') ;
    document.location.href='viewGenre.php' ;
</script>" ; }


?>