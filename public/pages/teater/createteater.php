<?php
include('../../config/koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_teater = $_POST['nama_teater'];
    $no_kursi = $_POST['no_kursi'];

    // Query untuk mengecek apakah nama teater sudah ada
    $query_check_teater = "SELECT * FROM teater WHERE nama_teater = '$nama_teater'";
    $result_check_teater = mysqli_query($koneksi, $query_check_teater);

    if ($result_check_teater->num_rows == 0) {
        // Query untuk menambah data teater
        $query_insert = "INSERT INTO teater (nama_teater, no_kursi) VALUES ('$nama_teater', '$no_kursi')";
        $result_insert = mysqli_query($koneksi, $query_insert);

        if ($result_insert) {
            echo 'Data berhasil ditambahkan.';
            // Redirect ke penonton.php setelah data berhasil ditambahkan
            header("Location: ../../admin/teater.php");
            exit();
        } else {
            echo 'Error: ' . mysqli_error($koneksi);
        }
    } else {
        echo 'Error: Nama Teater sudah ada.';
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Teater</title>
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
    <h2>Tambah Teater</h2>
    <form method="post" action="">
        <label>Nama Teater:</label>
        <input type="text" name="nama_teater" required><br>

        <label>Nomor Kursi:</label>
        <input type="text" name="no_kursi" required><br>

        <button type="submit">Tambah Data</button>
    </form>
</div>

</body>
</html>
