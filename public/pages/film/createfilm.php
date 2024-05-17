<?php
include('../../config/koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_film = $_POST['id_film'];
    $judul = $_POST['judul'];
    $durasi = $_POST['durasi'];
    $harga = $_POST['harga']; // Tambahkan ini untuk mengambil nilai harga

    // Proses upload gambar
    $gambar = $_FILES['gambar']['name'];
    $tmp_gambar = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($tmp_gambar, "../../path/ke/direktori/uploads/" . $gambar);

    $query = "INSERT INTO film (id_film, judul, durasi, harga, gambar) VALUES ('$id_film', '$judul', '$durasi', '$harga', '$gambar')";
    $result = $koneksi->query($query);

    if ($result) {
        // Redirect ke film.php setelah data berhasil ditambahkan
        header("Location: ../../admin/film.php");
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
    <title>Tambah film</title>
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
        <div class="bg-slate-700 bg-opacity-50 shadow-lg p-6 rounded">
            <h2 class="text-2xl font-bold mb-4 text-center text-slate-200">Tambah film</h2>
            <form method="post" action="createfilm.php" enctype="multipart/form-data">
                <label class="block p-2 text-sm font-medium  text-slate-200">ID film:</label>
                <input type="text" name="id_film" required
                    class="mt-1 p-2 rounded border border-gray-300 focus:ring focus:border-blue-500 w-full"><br>

                <label class="block p-2 text-sm font-medium  text-slate-200">Judul Film:</label>
                <input type="text" name="judul" required
                    class="mt-1 p-2 rounded border border-gray-300 focus:ring focus:border-blue-500 w-full"><br>

                <label for="harga" class="block p-2 text-sm font-medium  text-slate-200">Harga:</label>
                <input type="text" name="harga" required
                    class="mt-1 p-2 rounded border border-gray-300 focus:ring focus:border-blue-500 w-full"><br>

                <label class="block p-2 text-sm font-medium  text-slate-200">Durasi:</label>
                <input type="text" name="durasi" required
                    class="mt-1 p-2 rounded border border-gray-300 focus:ring focus:border-blue-500 w-full"><br>

                <!-- Tambahkan input file untuk gambar -->
                <label class="block p-2 text-sm font-medium  text-slate-200">Gambar:</label>
                <input type="file" name="gambar"
                    class="mt-1 p-2 rounded text-slate-200 border border-gray-300 focus:ring focus:border-blue-500 w-full"><br>

                <button type="submit"
                    class="mx-auto block mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Tambah
                    Data</button>
            </form>
        </div>
    </div>




</body>

</html>