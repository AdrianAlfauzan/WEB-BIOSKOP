<?php
include('../../config/koneksi.php');

// Ambil data film untuk dropdown list
$query_films = "SELECT id_film, judul FROM film";
$result_films = mysqli_query($koneksi, $query_films);

// Ambil data genre berdasarkan id_film
if (isset($_GET["id"])) {
    $id_film = $_GET["id"];
    $query_select = "SELECT * FROM genre WHERE id_film=$id_film";
    $result_select = mysqli_query($koneksi, $query_select);

    // Periksa apakah data genre ditemukan
    if ($result_select) {
        $data_genre = mysqli_fetch_assoc($result_select);

        // Proses edit data
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $jenis = $_POST["jenis"];

            // Query untuk mengedit data genre
            $query_edit = "UPDATE genre SET jenis='$jenis' WHERE id_film=$id_film";
            $result_edit = mysqli_query($koneksi, $query_edit);

            if ($result_edit) {
                header("Location: ../../admin/genre.php");
                exit();
            } else {
                echo "Error: " . $query_edit . "<br>" . mysqli_error($koneksi);
            }
        }
    } else {
        echo "Error: " . $query_select . "<br>" . mysqli_error($koneksi);
    }
} else {
    // Jika tidak ada id_film, redirect ke halaman index.php
    header("Location: ../../admin/genre.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Genre</title>

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

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        button {
            background: none;
            border: none;
            color: #3498db;
            text-decoration: underline;
            cursor: pointer;
        }

        button:hover {
            text-decoration: none;
        }
    </style>
</head>
<body>

    <form method="post" action="">
        <h2>Edit Data Genre</h2>

        <label for="id_film">ID Film:</label>
        <select name="id_film" required>
            <?php
            // Loop untuk menampilkan opsi film pada dropdown
            while ($film = mysqli_fetch_assoc($result_films)) {
                echo '<option value="' . $film['id_film'] . '"';
                // Menandai opsi yang dipilih
                if ($film['id_film'] == $data_genre['id_film']) {
                    echo ' selected';
                }
                echo '>' . $film['judul'] . '</option>';
            }
            ?>
        </select>

        <label for="jenis">Jenis:</label>
        <input type="text" name="jenis" value="<?php echo $data_genre['jenis']; ?>" required>

        <input type="submit" value="Update">

        <button onclick="window.location.href='../../admin/genre.php'">Kembali ke Data Genre</button>
    </form>

</body>
</html>

<?php
// Menutup koneksi database
mysqli_close($koneksi);
?>
