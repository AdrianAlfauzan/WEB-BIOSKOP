<?php
include('../../config/koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_tiket = $_POST['id_tiket'];
    $id_film = $_POST['id_film'];
    $id_pegawai = $_POST['id_pegawai'];
    $id_penonton = $_POST['id_penonton'];
    $harga = $_POST['harga'];
    $nama_teater = $_POST['nama_teater'];

    // Check if the ID Penonton exists
    $query_check_penonton = "SELECT * FROM penonton WHERE id_penonton = '$id_penonton'";
    $result_check_penonton = $koneksi->query($query_check_penonton);

    // Check if the Nama Teater exists
    $query_check_teater = "SELECT * FROM teater WHERE nama_teater = '$nama_teater'";
    $result_check_teater = $koneksi->query($query_check_teater);

    if ($result_check_penonton->num_rows > 0 && $result_check_teater->num_rows > 0) {
        // ID Penonton and Nama Teater exist, proceed with other checks

        // Pastikan ID tiket belum ada sebelum menyisipkan data tiket
        $query_check_tiket = "SELECT * FROM tiket WHERE id_tiket = '$id_tiket'";
        $result_check_tiket = $koneksi->query($query_check_tiket);

        if ($result_check_tiket->num_rows == 0) {
            // Pastikan ID film sudah ada di tabel film sebelum menyisipkan data tiket
            $query_check_film = "SELECT * FROM film WHERE id_film = '$id_film'";
            $result_check_film = $koneksi->query($query_check_film);

            if ($result_check_film->num_rows > 0) {
                // Pastikan ID pegawai sudah ada di tabel pegawai sebelum menyisipkan data tiket
                $query_check_pegawai = "SELECT * FROM pegawai WHERE id_pegawai = '$id_pegawai'";
                $result_check_pegawai = $koneksi->query($query_check_pegawai);

                if ($result_check_pegawai->num_rows > 0) {
                    // Query untuk menambahkan data tiket
                    $query_insert_tiket = "INSERT INTO tiket (id_tiket, id_film, id_pegawai, id_penonton, harga, nama_teater) VALUES ('$id_tiket', '$id_film', '$id_pegawai', '$id_penonton', '$harga', '$nama_teater')";
                    $result_insert_tiket = $koneksi->query($query_insert_tiket);

                    if ($result_insert_tiket) {
                        // Redirect ke halaman tiket.php setelah data berhasil ditambahkan
                        header("Location: ../../admin/ticket.php");
                        exit();
                    } else {
                        echo 'Error: ' . $koneksi->error;
                    }
                } else {
                    echo 'Debug: ID Pegawai tidak ditemukan.';
                }
            } else {
                echo 'Error: ID Film tidak ditemukan.';
            }
        } else {
            echo 'Error: ID Tiket sudah ada.';
        }
    } else {
        // ID Penonton or Nama Teater does not exist, handle the error accordingly
        echo 'Error: ID Penonton or Nama Teater not found.';
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tiket</title>
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

        input, select {
            width: 100%;
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
    <h2>Tambah Tiket</h2>
    <form method="post" action="createtiket.php">
        <label>ID Tiket:</label>
        <input type="text" name="id_tiket" required><br>

        <label>ID Film:</label>
        <div class="form-group">
            <select class="form-control" name="id_film" required>
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
        </div>

        <label>ID Pegawai:</label>
        <div class="form-group">
            <select class="form-control" name="id_pegawai" required>
                <?php
                // Query untuk mengambil data teater dari tabel teater
                $querypegawai = "SELECT id_pegawai FROM pegawai";
                $resultpegawai = mysqli_query($koneksi, $querypegawai);

                while ($rowpegawai = mysqli_fetch_assoc($resultpegawai)) {
                    $idPegawai = $rowpegawai['id_pegawai'];
                    echo "<option value=\"$idPegawai\">$idPegawai</option>";
                }
                ?>
            </select>
        </div>

        <label>ID Penonton:</label>
        <div class="form-group">
            <select class="form-control" name="id_penonton" required>
                <?php
                // Query untuk mengambil data teater dari tabel teater
                $querypenonton = "SELECT id_penonton FROM penonton";
                $resultpenonton = mysqli_query($koneksi, $querypenonton);

                while ($rowpenonton = mysqli_fetch_assoc($resultpenonton)) {
                    $idPenonton = $rowpenonton['id_penonton'];
                    echo "<option value=\"$idPenonton\">$idPenonton</option>";
                }
                ?>
            </select>
        </div>

        <label>Harga:</label>
        <input type="text" name="harga" required><br>

        <label>Nama Teater:</label>
        <div class="form-group">
            <select class="form-control" name="nama_teater" required>
                <?php
                // Query untuk mengambil data teater dari tabel teater
                $queryTeater = "SELECT nama_teater FROM teater";
                $resultTeater = mysqli_query($koneksi, $queryTeater);

                while ($rowTeater = mysqli_fetch_assoc($resultTeater)) {
                    $teaterNama = $rowTeater['nama_teater'];
                    echo "<option value=\"$teaterNama\">$teaterNama</option>";
                }
                ?>
            </select>
        </div>

        <button type="submit">Tambah Data</button>
    </form>
</div>

</body>
</html>
