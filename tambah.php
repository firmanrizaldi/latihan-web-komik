<?php
require "koneksi.php" ;
function tambah($data) {
    global $con ;
    $genre =htmlspecialchars($data["genre"]);
    $flag =htmlspecialchars($data["flag"]);
    $created_add = date('Y-m-d H:i:s');
    

    $query = "INSERT INTO genre
            VALUES
            ('','$genre','$flag','$created_add') " ;

    mysqli_query($con,$query) ;

    return mysqli_affected_rows($con) ;
}


    if( isset($_POST["submit"])) {

        if ( tambah($_POST) > 0 ) {
            echo "<script>
                alert('data berhasil di tambahkan!') ;
                document.location.href='viewGenre.php' ;
            </script>" ;
        }
        else {
            echo "<script>
                alert('data gagal di tambahkan!') ;
                document.location.href='index.php' ;
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
        <table border="1" cellpadding="10" cellspacing="0">
            <th>No</th>
            <th>Genre</th>
            <th>Status</th>

            </tr>
            <tr>
                <td>1</td>
                <td><input type="text" name="genre" id="genre" required>
                </td>
                <td>
                    <p>
                        <label>
                            <input type="radio" name="flag" value="1" id="flag">
                            Aktif</label>
                        <br>
                        <label>
                            <input type="radio" name="flag" value="0" id="flag">
                            Non-Aktif<label>
                </td>

            </tr>
            <button type="submit" name="submit">Tambah data !</button>

    </form>


</body>

</html>