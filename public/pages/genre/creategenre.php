<?php
include('../../config/koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jenis = $_POST['jenis'];
    $id_genre = $_POST['id_genre'];
    $id_film = $_POST['id_film'];

    // Query untuk menambahkan data genre
    $query = "INSERT INTO genre (jenis, id_genre, id_film) VALUES ('$jenis', '$id_genre', '$id_film')";
    $result = $koneksi->query($query);

    if ($result) {
        // Redirect ke halaman genre.php setelah data berhasil ditambahkan
        header("Location: ../../admin/genre.php");
        exit();
    } else {
        echo 'Error: ' . $koneksi->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Genre</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-top: 20px;
            display: inline-block;
        }

        label {
            display: block;
            margin: 10px 0;
            color: #555;
        }

        input {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            padding: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Tambah Genre</h2>
        <form method="post" action="creategenre.php">
            <label for="id_genre">ID Genre:</label>
            <input type="text" name="id_genre" required>

            <label for="jenis">Jenis Genre:</label>
            <input type="text" name="jenis" required>

            <label for="id_film">ID Film:</label>
            <select name="id_film">
                <?php
                // Query untuk mengambil data film dari tabel film
                $queryfilm = "SELECT id_film FROM film";
                $resultfilm = mysqli_query($koneksi, $queryfilm);

                while ($rowfilm = mysqli_fetch_assoc($resultfilm)) {
                    $idfilm = $rowfilm['id_film'];
                    echo "<option value=\"$idfilm\">$idfilm</option>";
                }
                ?>
            </select>

            <input type="submit" value="Tambah Data">
        </form>
    </div>

</body>

</html>
