<?php
include('../../config/koneksi.php');

// Ambil data film berdasarkan id_film
if (isset($_GET["id"])) {
    $id_film = $_GET["id"];
    $query_select = "SELECT * FROM film WHERE id_film=$id_film";
    $result_select = mysqli_query($koneksi, $query_select);

    // Periksa apakah data film ditemukan
    if ($result_select) {
        $data_film = mysqli_fetch_assoc($result_select);

        // Proses edit data
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $judul = $_POST["judul"];
            $durasi = $_POST["durasi"];
            $harga = $_POST["harga"]; // Tambahkan ini untuk mengambil nilai harga

            // Ambil file gambar yang diunggah
            $gambar = $_FILES["gambar"]["name"];
            $tmp_gambar = $_FILES["gambar"]["tmp_name"];

            // Upload gambar ke direktori yang diinginkan (ganti "uploads" sesuai kebutuhan)
            move_uploaded_file($tmp_gambar, "../../path/ke/direktori/uploads/" . $gambar);

            // Query untuk mengedit data film
            $query_edit = "UPDATE film SET judul='$judul', durasi='$durasi', harga='$harga', gambar='$gambar' WHERE id_film=$id_film";
            $result_edit = mysqli_query($koneksi, $query_edit);

            if ($result_edit) {
                header("Location: ../../admin/film.php");
            } else {
                echo "Error: " . $query_edit . "<br>" . mysqli_error($koneksi);
            }
        }
    } else {
        echo "Error: " . $query_select . "<br>" . mysqli_error($koneksi);
    }
} else {
    // Jika tidak ada id_film, redirect ke halaman index.php
    header("Location: ../../admin/film.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Film</title>
    <link rel="stylesheet" href="/bioskop/public/css/bintang.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-neutral-900 to-slate-800">
    <div class="wrapper">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="flex items-center justify-center h-screen">
        <div class="bg-slate-700 bg-opacity-50 shadow-lg p-2 rounded">
            <h2 class="text-2xl font-bold mb-4 text-center text-slate-200">Edit Data Film</h2>
            <form method="post" action="" enctype="multipart/form-data" class="mx-auto max-w-md p-4 shadow-md rounded">
                <label for="id_film" class="block p-2 text-sm font-medium text-slate-200">ID Film:</label>
                <input type="text" name="id_film" value="<?php echo $data_film['id_film']; ?>" required class="mt-1 p-2 rounded border border-gray-300 focus:ring focus:border-blue-500 w-full">

                <label for="judul" class="block p-2 text-sm font-medium text-slate-200">Judul:</label>
                <input type="text" name="judul" value="<?php echo $data_film['judul']; ?>" required class="mt-1 p-2 rounded border border-gray-300 focus:ring focus:border-blue-500 w-full">

                <label for="harga" class="block p-2 text-sm font-medium text-slate-200">Harga:</label>
                <input type="text" name="harga" value="<?php echo $data_film['harga']; ?>" required class="mt-1 p-2 rounded border border-gray-300 focus:ring focus:border-blue-500 w-full">

                <label for="durasi" class="block p-2 text-sm font-medium text-slate-200">Durasi:</label>
                <input type="text" name="durasi" value="<?php echo $data_film['durasi']; ?>" required class="mt-1 p-2 rounded border border-gray-300 focus:ring focus:border-blue-500 w-full">

                <label for="gambar" class="block p-2 text-sm font-medium text-slate-200">Gambar:</label>
                <input type="file" name="gambar" class="mt-1 p-2 rounded border border-gray-300 focus:ring focus:border-blue-500 w-full">
                <!-- Jika ingin menampilkan gambar yang sudah ada -->
                <img src="/bioskop/public/Foto/<?php echo $data_film['gambar']; ?>" width="100" alt="Gambar Film" class="mt-2">
                <div class="grid">
                    <input type="submit" value="Update" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                    <button onclick="window.location.href='../../admin/film.php'" class="mt-2 bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400 focus:outline-none focus:ring focus:border-gray-500">Kembali ke Data Film</button>
                </div>
            </form>
        </div>
    </div>



</body>

</html>

<?php
// Menutup koneksi database
mysqli_close($koneksi);
?>