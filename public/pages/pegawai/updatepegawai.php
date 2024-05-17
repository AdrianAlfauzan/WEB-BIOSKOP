<?php
include('../../config/koneksi.php');

// Ambil data pegawai berdasarkan id_pegawai
if (isset($_GET["id"])) {
    $id_pegawai = $_GET["id"];
    $query_select = "SELECT * FROM pegawai WHERE id_pegawai=$id_pegawai";
    $result_select = mysqli_query($koneksi, $query_select);

    // Periksa apakah data pegawai ditemukan
    if ($result_select) {
        $data_pegawai = mysqli_fetch_assoc($result_select);

        // Proses edit data
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $jobdesk = $_POST["jobdesk"];

            // Query untuk mengedit data pegawai
            $query_edit = "UPDATE pegawai SET nama='$nama', jobdesk='$jobdesk' WHERE id_pegawai=$id_pegawai";
            $result_edit = mysqli_query($koneksi, $query_edit);

            if ($result_edit) {
                header("Location: ../../admin/admin.php");
            } else {
                echo "Error: " . $query_edit . "<br>" . mysqli_error($koneksi);
            }
        }
    } else {
        echo "Error: " . $query_select . "<br>" . mysqli_error($koneksi);
    }
} else {
    // Jika tidak ada id_pegawai, redirect ke halaman index.php
    header("Location: ../../admin/admin.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pegawai</title>

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
        <h2>Edit Data Pegawai</h2>

        <label for="id_pegawai">ID Pegawai:</label>
        <input type="text" name="id_pegawai" value="<?php echo $data_pegawai['id_pegawai']; ?>" disabled>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $data_pegawai['nama']; ?>" required>

        <label for="jobdesk">Jobdesk:</label>
        <input type="text" name="jobdesk" value="<?php echo $data_pegawai['jobdesk']; ?>" required>

        <input type="submit" value="Update">

        <button onclick="window.location.href='../../admin/admin.php'">Kembali ke Data Pegawai</button>
    </form>

</body>
</html>

<?php
// Menutup koneksi database
mysqli_close($koneksi);
?>
