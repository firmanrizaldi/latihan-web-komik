<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="komik.css" />
    <title>komik</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">TABLE KOMIK</h1>
        <?php 
        include "koneksi.php" ;
        $query = mysqli_query($con, "SELECT * FROM komik" ) ; 
 		
	?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID_KOMIK</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">GAMBAR</th>
                    <th scope="col">SINOPSIS</th>
                    <th scope="col">RATING</th>
                    <th scope="col">FLAG</th>
                    <th scope="col">CREATE_DATE </th>
                    <th scope="col">ID_GENRE </th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)){ ?>
                <tr>
                    <td><?= $row['id_komik'] ; ?></td>
                    <td><?= $row['judul_komik'] ; ?></td>
                    <td><?= $row['gambar'] ; ?></td>
                    <td><?= $row['sinopsis'] ; ?></td>
                    <td><?= $row['rating'] ; ?></td>
                    <td><?= $row['flag'] ; ?></td>
                    <td><?= $row['created_add'] ; ?></td>
                    <td><?= $row['id_genre'] ; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="container">
        <h1 class="text-center">TABLE EPISODE</h1>
        <?php 
        
        $query2 = mysqli_query($con, "SELECT * FROM episode" ) ; 
 		
	?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id_episode</th>
                    <th scope="col">episode</th>
                    <th scope="col">id_komik</th>
                    <th scope="col">FLAG</th>
                    <th scope="col">CREATE_DATE</th> </tr> 
                </thead> 
                <tbody>
                <?php while ($row = mysqli_fetch_array($query2)){ ?>
                <tr>
                    <td><?= $row['id_episode'] ; ?></td>
                    <td><?= $row['episode'] ; ?></td>
                    <td><?= $row['id_komik'] ; ?></td>
                    <td><?= $row['flag'] ; ?></td>
                    <td><?= $row['created_add'] ; ?></td>
                </tr>
                <?php } ?>
                </tbody>
        </table>
    </div>

    <div class="container">
        <h1 class="text-center">TABLE GENRE</h1>
        <?php 
        
        $query3 = mysqli_query($con, "SELECT * FROM genre" ) ; 
 		
	?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id_genre</th>
                    <th scope="col">genre</th>
                    <th scope="col">flag</th>
                    <th scope="col">created_add </th>
                </tr>
            </thead>
            <tbody>
            <?php while ($row = mysqli_fetch_array($query3)){ ?>
                <tr>
                    <td><?= $row['id_genre'] ; ?></td>
                    <td><?= $row['genre'] ; ?></td>
                    <td><?= $row['flag'] ; ?></td>
                    <td><?= $row['created_add'] ; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>