<?php
require "koneksi.php" ;

function query($query) {

    global $con ;
    $result = mysqli_query($con,$query) ;
    $rows =[] ;
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row ;
    }
    return $rows;
}

$id_genre =$_GET["id_genre"] ;

$rowss = query("SELECT * FROM genre WHERE id_genre= $id_genre")[0];

function ubah($data) {
    global $con ;
    $id_genre = ($data["id_genre"]) ;
    $genre =htmlspecialchars($data["genre"]);
    $flag =$data["flag"];
    $created_add = date('Y-m-d H:i:s');

    $query = "UPDATE genre SET
                genre = '$genre',
                flag = '$flag',
                created_add = '$created_add'
                WHERE
                id_genre= $id_genre
                " ;

    mysqli_query($con,$query) ;

    return mysqli_affected_rows($con) ;


}



    if( isset($_POST["submit"])) {

        if ( ubah($_POST) > 0 ) {
            echo "<script>
                alert('data berhasil di ubah!') ;
                document.location.href='viewGenre.php' ;
            </script>" ;
        }
        else {
            echo "<script>
                alert('data gagal di ubah!') ;
                document.location.href='edit.php' ;
            </script>" ;
        }

    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tambah data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <h1>Tambah data Genre</h1>

    <form action="" method="POST">
    <input type="hidden" name="id_genre" value="<?=$rowss['id_genre']?>">
        <table border="1" cellpadding="10" cellspacing="0">
            <th>No</th>
            <th>Genre</th>
            <th>Status</th>

            </tr>
            <tr>
                <td>1</td>
                <td><input type="text" name="genre" id="genre" required value="<?=$rowss['genre']?>">
                </td>
                <td>
                    <p>
                        <label>
                            <input type="radio" name="flag" value="1" id="flag" ">
                            Aktif</label>
                        <br>
                        <label>
                            <input type="radio" name="flag" value="0" id="flag" ">
                            Non-Aktif<label>
                </td>

            </tr>
            <button type="submit" name="submit">Tambah data !</button>

    </form>


</body>

</html>