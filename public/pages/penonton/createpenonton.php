<?php
include('../../config/koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_penonton = $_POST['id_penonton'];

    $query = "INSERT INTO penonton (id_penonton) VALUES ('$id_penonton')";
    $result = $koneksi->query($query);

    if ($result) {
        echo 'Data berhasil ditambahkan.';
        // Redirect ke admin.php setelah data berhasil ditambahkan
        header("Location: ../../admin/penonton.php");
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
    <title>Tambah Penonton</title>
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
    <h2>Tambah Penonton</h2>
    <form method="post" action="">
        <label>ID Penonton:</label>
        <input type="text" name="id_penonton" required><br>

        <button type="submit">Tambah Data</button>
    </form>
</div>

</body>
</html>
