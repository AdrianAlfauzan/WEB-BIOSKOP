<?php
// Pesan tiket.php

// Konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "bioskop";

// Membuat koneksi ke database
$conn = new mysqli($host, $user, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil parameter id_genre dan id_film dari URL
$id_genre = isset($_GET['id_genre']) ? $_GET['id_genre'] : null;
$id_film = isset($_GET['id_film']) ? $_GET['id_film'] : null;

// Memeriksa apakah parameter id_genre dan id_film valid
if (!$id_genre || !$id_film) {
    die("Parameter tidak valid");
}

// Query SQL untuk mendapatkan informasi film berdasarkan id_genre dan id_film
$sqlFilm = "SELECT film.judul, genre.jenis
            FROM film
            JOIN genre ON film.id_film = genre.id_film
            WHERE film.id_film = $id_film AND genre.id_genre = $id_genre";
$resultFilm = $conn->query($sqlFilm);

// Memeriksa apakah query berhasil dijalankan
if ($resultFilm === false) {
    die("Error: " . $conn->error);
}

// Mengambil data film
$film = $resultFilm->fetch_assoc();

// Mengambil data penonton untuk menampilkan sebagai opsi di formulir
$sqlPenonton = "SELECT id_penonton FROM penonton";
$resultPenonton = $conn->query($sqlPenonton);

// Memeriksa apakah query berhasil dijalankan
if ($resultPenonton === false) {
    die("Error: " . $conn->error);
}

// Mengambil data harga untuk menampilkan sebagai opsi di formulir
$sqlHarga = "SELECT DISTINCT harga FROM tiket";
$resultHarga = $conn->query($sqlHarga);

// Memeriksa apakah query berhasil dijalankan
if ($resultHarga === false) {
    die("Error: " . $conn->error);
}

// Mengambil data teater untuk menampilkan sebagai opsi di formulir
$sqlTeater = "SELECT nama_teater FROM teater";
$resultTeater = $conn->query($sqlTeater);

// Memeriksa apakah query berhasil dijalankan
if ($resultTeater === false) {
    die("Error: " . $conn->error);
}

// Mengambil data pegawai untuk menampilkan sebagai opsi di formulir
$sqlPegawai = "SELECT id_pegawai, nama FROM pegawai";
$resultPegawai = $conn->query($sqlPegawai);

// Memeriksa apakah query berhasil dijalankan
if ($resultPegawai === false) {
    die("Error: " . $conn->error);
}

// Inisialisasi $no_tiket agar tidak terjadi undefined variable warning
$no_tiket = 'XXXX';

// Memproses formulir pemesanan tiket jika disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data formulir
    $id_penonton = $_POST["id_penonton"];
    $harga = $_POST["harga"];
    $nama_teater = $_POST["nama_teater"];
    $id_pegawai = $_POST["id_pegawai"];
    $tgl_pesan = $_POST["tgl"];

    // Generate nomor tiket secara acak dengan 4 digit angka
    $no_tiket = str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);

    // Query SQL untuk menyimpan data tiket ke database
    $sqlInsertTiket = "INSERT INTO tiket (id_film, id_pegawai, id_tiket, id_penonton, harga, nama_teater, tanggal)
                       VALUES ($id_film, $id_pegawai, '$no_tiket', $id_penonton, $harga, '$nama_teater', '$tgl_pesan')";

    // Menjalankan query
    if ($conn->query($sqlInsertTiket) === true) {
        // Pemesanan tiket berhasil, tampilkan pesan dan panggil fungsi tampilkanPopup
        echo "<script>
            tampilkanPopup('$no_tiket');
        </script>";
    } else {
        // Terdapat error, tampilkan pesan error
        echo "<script>
            alert('Error: " . $conn->error . "');
            window.location.href = 'Watching.php';  // Sesuaikan dengan nama file halaman 
        </script>";
    }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Tiket</title>
    <link rel="stylesheet" href="../css/bintang.css">
    <!-- <link rel="stylesheet" href="../css/gaya.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans bg-gradient-to-r from-neutral-900 to-slate-800 min-h-screen flex items-center justify-center">
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

    <div class="bg-slate-700 bg-opacity-50 shadow-lg rounded p-6 max-w-md w-full ">

        <h2 class="text-2xl font-bold mb-4 text-center text-slate-200">Pesan Tiket</h2>

        <div class="bg-slate-700 bg-opacity-50 shadow-lg p-6 rounded-lg mb-6">
            <h2 class="text-2xl font-bold mb-4 text-slate-200">Informasi Film:</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p class="text-lg font-semibold mb-2 text-slate-200">Judul Film:</p>
                    <p class=" text-yellow-400 tracking-wider   ">
                        <?php echo $film['judul']; ?>
                    </p>
                </div>
                <div>
                    <p class="text-lg font-semibold mb-2 text-slate-200">Jenis Genre:</p>
                    <p class=" text-yellow-400 tracking-wider   ">
                        <?php echo $film['jenis']; ?>
                    </p>
                </div>
            </div>
        </div>

        <form action="" method="post" class="max-w-md  mx-auto bg-slate-700 bg-opacity-50 shadow-lg rounded p-6 mt-10">

            <!-- Field ID Penonton akan diisi secara otomatis -->
            <div class="mb-4">
                <label for="id_penonton" class="block text-sm font-medium text-slate-200 ">ID Penonton:</label>
                <?php
                // Fetch data penonton into an array
                $penontonOptions = [];
                while ($penontonRow = $resultPenonton->fetch_assoc()) {
                    $penontonOptions[] = $penontonRow;
                }

                // Pilih secara acak satu ID Penonton dari array
                $randomPenonton = $penontonOptions[array_rand($penontonOptions)];

                // Tampilkan nilai ID Penonton secara langsung
                echo "<input type='text' name='id_penonton' value='" . $randomPenonton['id_penonton'] . "' readonly class='mt-1 p-2 rounded border text-yellow-400 bg-slate-700 border-gray-300 focus:ring focus:border-blue-500 w-full'>";
                ?>
            </div>


            <div class="mb-4 ">
                <label for="harga" class="block text-sm font-medium text-slate-200 ">Harga Tiket:</label>
                <?php
                // Query SQL untuk mendapatkan harga tiket berdasarkan id_film
                $sqlHargaFilm = "SELECT DISTINCT harga FROM film WHERE id_film = $id_film";
                $resultHargaFilm = $conn->query($sqlHargaFilm);

                // Memeriksa apakah query berhasil dijalankan dan hasilnya tidak null
                if ($resultHargaFilm !== false && $resultHargaFilm->num_rows > 0) {
                    // Mengambil nilai harga dari hasil query
                    $hargaFilm = $resultHargaFilm->fetch_assoc()['harga'];

                    // Menampilkan input teks yang hanya dapat dibaca dengan nilai harga
                    echo "<input type='text' name='harga' value='$hargaFilm' readonly class='mt-1 p-2 rounded border text-yellow-400 bg-slate-700 border-gray-300 focus:ring focus:border-blue-500 w-full'>";
                } else {
                    // Menampilkan pesan jika data harga tidak ditemukan
                    echo "Data harga tidak ditemukan.";
                }
                ?>
            </div>





            <div class="mb-4">
                <label for="nama_teater" class="block text-sm font-medium text-slate-200 ">Nama Teater:</label>
                <select name="nama_teater" required
                    class="mt-1 p-2 rounded border bg-slate-700 text-yellow-400 border-gray-300 focus:ring focus:border-blue-500 w-full">
                    <?php
                    // Fetch data into an array
                    $teaterOptions = [];
                    while ($teaterRow = $resultTeater->fetch_assoc()) {
                        $teaterOptions[] = $teaterRow;
                    }

                    // Loop through the array
                    foreach ($teaterOptions as $option) {
                        echo "<option value='" . $option['nama_teater'] . "'>" . $option['nama_teater'] . "</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="mb-4">
                <label for="id_pegawai" class="block text-sm font-medium text-slate-200 ">ID Pegawai:</label>
                <select name="id_pegawai" required
                    class="mt-1 p-2 rounded border text-yellow-400 bg-slate-700 border-gray-300 focus:ring focus:border-blue-500 w-full">
                    <?php
                    // Fetch data into an array
                    $pegawaiOptions = [];
                    while ($pegawaiRow = $resultPegawai->fetch_assoc()) {
                        $pegawaiOptions[] = $pegawaiRow;
                    }

                    // Loop through the array
                    foreach ($pegawaiOptions as $option) {
                        echo "<option value='" . $option['id_pegawai'] . "'>" . $option['id_pegawai'] . " - " . $option['nama'] . "</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="mb-4">
                <label for="tgl" class="block text-sm font-medium text-slate-200 ">Tanggal Pemesanan:</label>
                <input type="date" name="tgl"
                    class="mt-1 p-2 rounded border text-yellow-400 bg-slate-700 border-gray-300 focus:ring focus:border-blue-500 w-full">
            </div>

            <!-- Nomor Tiket diisi secara otomatis -->
            <div class="mb-4">
                <label for="no_tiket" class="block text-sm font-medium text-slate-200 ">Nomor Tiket:</label>
                <?php
                // Nomor Tiket diisi secara otomatis dengan nilai yang dihasilkan secara acak
                echo "<input type='text' name='no_tiket' value='$no_tiket' readonly required class='mt-1 p-2 rounded border text-yellow-400 bg-slate-700 border-gray-300 focus:ring focus:border-blue-500 w-full'>";
                ?>
            </div>

            <button type="submit" class="bg-blue-700 text-white p-2 rounded hover:bg-blue-800 focus:outline-none focus:ring focus:border-blue-500 transition-all duration-300 w-full">
                Pesan Tiket
            </button>

            <!-- Pop-up Terima Kasih -->
            <div id="popup" class="fixed inset-0 bg-black bg-opacity-50 hidden ">
                    <div class="bg-white p-8 rounded-lg shadow-md text-center max-w-md mx-auto mt-56 flex flex-col items-center justify-center">
                        <div class="flex flex-col items-center justify-center">
                            <img src="../Image/Ceklis.png" width="100" alt="" class="mb-4"> <!-- mb-4 untuk memberikan margin bottom jika diperlukan -->
                            <span id="nomorTiket" class="font-bold text-blue-700"></span>
                        </div>
                        <p class="text-lg font-semibold mt-2 mb-2 text-blue-700">Terima kasih telah membeli tiket!</p>
                        <a href="Watching.php" onclick="tutupPopup()" class="mt-6 bg-blue-700 text-white py-2 px-4 rounded-lg hover:bg-blue-800 focus:outline-none focus:ring focus:border-blue-500 transition-all duration-300">
                            OKELAH
                        </a>
                    </div>
            </div>


            <script>
                    function tampilkanPopup(nomorTiket) {
                        document.getElementById('nomorTiket').innerText = "Nomor Tiket Anda : " + nomorTiket;
                        document.getElementById('popup').classList.remove('hidden');
                    }
                    function tutupPopup() {
                        document.getElementById('popup').classList.add('hidden');
                        window.location.href = 'Watching.php';  // Sesuaikan dengan nama file halaman
                    }

                    // Tambahkan script berikut untuk memeriksa apakah pop-up harus ditampilkan setelah formulir dikirim
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        echo "tampilkanPopup('$no_tiket');";
                    }
                    ?>
            </script>

        </form>
    </div>
</body>
<script src="../js/animasiLearning.js"></script>
<script src="../js/containerAnimasi.js"></script>
<script src="../js/textTypingBergantian.js"></script>
<script src="../js/Collapse.js"></script>
<script src="../js/PopUpFilm.js"></script>
<script src="../js/TheatersDropdown.js"></script>

</html>