<?php
include('../../config/koneksi.php');

// Ambil data teater berdasarkan nama_teater
if (isset($_GET["id"])) {
    $nama_teater = $_GET["id"];
    
    // Perhatikan penggunaan tanda kutip pada $nama_teater
    $query_select = "SELECT * FROM teater WHERE nama_teater='$nama_teater'";
    $result_select = mysqli_query($koneksi, $query_select);

    // Periksa apakah data teater ditemukan
    if ($result_select) {
        $data_teater = mysqli_fetch_assoc($result_select);

        // Proses edit data
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama_teater_baru = $_POST["nama_teater"];
            $no_kursi = $_POST["no_kursi"];

            // Perhatikan penggunaan tanda kutip pada $nama_teater_baru
            $query_edit = "UPDATE teater SET no_kursi='$no_kursi' WHERE nama_teater='$nama_teater'";
            $result_edit = mysqli_query($koneksi, $query_edit);

            if ($result_edit) {
                header("Location: ../../admin/teater.php");
            } else {
                echo "Error: " . $query_edit . "<br>" . mysqli_error($koneksi);
            }
        }
    } else {
        echo "Error: " . $query_select . "<br>" . mysqli_error($koneksi);
    }
} else {
    // Jika tidak ada id_teater, redirect ke halaman admin.php
    header("Location: ../../admin/teater.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Teater</title>

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
    <h2>Edit Data Teater</h2>

    <label for="nama_teater">Nama Teater:</label>
    <input type="text" name="nama_teater" value="<?php echo $data_teater['nama_teater']; ?>" disabled>

    <label for="no_kursi">Nomor Kursi:</label>
    <input type="text" name="no_kursi" value="<?php echo $data_teater['no_kursi']; ?>" required>

    <input type="submit" value="Update">

    <button onclick="window.location.href='../../admin/teater.php'">Kembali ke Data Teater</button>
</form>

</body>
</html>

<?php
// Menutup koneksi database
mysqli_close($koneksi);
?>
