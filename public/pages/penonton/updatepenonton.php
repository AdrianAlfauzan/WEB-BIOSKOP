<?php
include('../../config/koneksi.php');

// Ambil data penonton berdasarkan id_penonton
if (isset($_GET["id"])) {
    $id_penonton = $_GET["id"];
    $query_select = "SELECT * FROM penonton WHERE id_penonton=$id_penonton";
    $result_select = mysqli_query($koneksi, $query_select);

    // Periksa apakah data penonton ditemukan
    if ($result_select) {
        $data_penonton = mysqli_fetch_assoc($result_select);

        // Proses edit data
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Hapus bagian tgl dari formulir dan query SQL
            // $tgl = $_POST["tgl"];

            // Query untuk mengedit data penonton
            $query_edit = "UPDATE penonton SET tgl='' WHERE id_penonton=$id_penonton";
            $result_edit = mysqli_query($koneksi, $query_edit);

            if ($result_edit) {
                header("Location: ../../admin/penonton.php");
            } else {
                echo "Error: " . $query_edit . "<br>" . mysqli_error($koneksi);
            }
        }
    } else {
        echo "Error: " . $query_select . "<br>" . mysqli_error($koneksi);
    }
} else {
    // Jika tidak ada id_penonton, redirect ke halaman admin.php
    header("Location: ../../admin/penonton.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Penonton</title>

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
    <h2>Edit Data Penonton</h2>

    <label for="id_penonton">ID Penonton:</label>
    <input type="text" name="id_penonton" value="<?php echo $data_penonton['id_penonton']; ?>" requaired>

    <input type="submit" value="Update">

    <button onclick="window.location.href='../../admin/penonton.php'">Kembali ke Data Penonton</button>
</form>

</body>
</html>

<?php
// Menutup koneksi database
mysqli_close($koneksi);
?>
