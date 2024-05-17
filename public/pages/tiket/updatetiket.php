<?php
include('../../config/koneksi.php');

// Ambil data tiket berdasarkan id_tiket
if (isset($_GET["id"])) {
    $id_tiket = $_GET["id"];
    $query_select = "SELECT * FROM tiket WHERE id_tiket=$id_tiket";
    $result_select = mysqli_query($koneksi, $query_select);

    // Periksa apakah data tiket ditemukan
    if ($result_select) {
        $data_tiket = mysqli_fetch_assoc($result_select);

        // Proses edit data tiket
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id_film = $_POST["id_film"];
            $id_pegawai = $_POST["id_pegawai"];
            $id_penonton = $_POST["id_penonton"];
            $harga = $_POST["harga"];
            $nama_teater = $_POST["nama_teater"];
            $tanggal = $_POST["tanggal"];

            // Check if the Nama Teater exists
            $query_check_teater = "SELECT * FROM teater WHERE nama_teater = '$nama_teater'";
            $result_check_teater = mysqli_query($koneksi, $query_check_teater);

            if ($result_check_teater->num_rows > 0) {
                // Query untuk mengedit data tiket
                $query_edit = "UPDATE tiket SET id_film='$id_film', id_pegawai='$id_pegawai', id_penonton='$id_penonton', harga='$harga',tanggal='$tanggal', nama_teater='$nama_teater' WHERE id_tiket=$id_tiket";
                $result_edit = mysqli_query($koneksi, $query_edit);

                if ($result_edit) {
                    header("Location: ../../admin/ticket.php");
                    exit();
                } else {
                    echo "Error: " . $query_edit . "<br>" . mysqli_error($koneksi);
                }
            } else {
                echo "Error: Nama Teater tidak valid.";
            }
        }
    } else {
        echo "Error: " . $query_select . "<br>" . mysqli_error($koneksi);
        exit();
    }
} else {
    // Jika tidak ada id_tiket, redirect ke halaman ticket.php
    header("Location: ../../admin/ticket.php");
    exit();
}

// Menutup koneksi database
mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Tiket</title>

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

        input, select {
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
        <h2>Edit Data Tiket</h2>

        <label for="id_tiket">ID Tiket:</label>
        <input type="text" name="id_tiket" value="<?php echo $data_tiket['id_tiket']; ?>" disabled>

        <label for="id_film">ID Film:</label>
        <input type="text" name="id_film" value="<?php echo $data_tiket['id_film']; ?>" required>

        <label for="id_pegawai">ID Pegawai:</label>
        <input type="text" name="id_pegawai" value="<?php echo $data_tiket['id_pegawai']; ?>" required>

        <label for="tanggal">Tanggal Pemesanan :</label>
        <input type="date" name="tanggal" value="<?php echo $data_tiket['tanggal']; ?>" required>

        <label for="id_penonton">ID Penonton:</label>
        <input type="text" name="id_penonton" value="<?php echo $data_tiket['id_penonton']; ?>" required>

        <label for="harga">Harga:</label>
        <input type="text" name="harga" value="<?php echo $data_tiket['harga']; ?>" required>

        <label for="nama_teater">Nama Teater:</label>
        <select name="nama_teater">
            <?php
            include('../../config/koneksi.php');
            // Query untuk mengambil data teater dari tabel teater
            $queryTeater = "SELECT nama_teater FROM teater";
            $resultTeater = mysqli_query($koneksi, $queryTeater);

            while ($rowTeater = mysqli_fetch_assoc($resultTeater)) {
                $teaterNama = $rowTeater['nama_teater'];
                echo "<option value=\"$teaterNama\" " . ($teaterNama == $data_tiket['nama_teater'] ? 'selected' : '') . ">$teaterNama</option>";
            }
            ?>
        </select>

        <input type="submit" value="Update">

        <button onclick="window.location.href='../../admin/ticket.php'">Kembali ke Data Tiket</button>
    </form>
</body>
</html>
