<?php
session_start();
if (!isset($_SESSION['film'])) {
    header("Location: ../website/Watching.php");
    exit;
}
?>x

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body class="bg-blue-950 flex">
    <button
      class="absolute text-white text-4xl top-5 right-0 pr-4 cursor-pointer lg:hidden"
      onclick="toggleSidebar()"
    >
      <i id="menuIcon"><img src="../Image/menu.png" width="30" alt="" /></i>
    </button>
    <div
      class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] duration-1000 p-2 w-[300px] overflow-y-auto text-center bg-gray-900 shadow h-screen"
    >
      <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 flex items-center rounded-md">
          <i><img src="../Image/menu.png" width="25" alt="" /></i>
          <h1 class="text-[15px] ml-3 text-xl text-gray-200 font-bold">
          <a href="../website/Watching.php">Administrator</a>
          </h1>
          <i
            class="bi bi-x ml-20 cursor-pointer lg:hidden"
            onclick="Openbar()"
          ></i>
        </div>
        <hr class="my-2 text-gray-600" />

        <div>
          <div class="bottom-0 left-0 p-4 bg-gray-900 flex items-center">
            <img
              src="../Image/artificial-intelligence.png"
              alt="Profile ../Image"
              class="w-10 h-10 rounded-full"
            />
            <div class="ml-3">
              <h2 class="text-white font-semibold text-sm">Admin</h2>
            </div>
          </div>
          <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700"
          >
            <i class="bi bi-search text-sm"></i>
            <input
              class="text-[15px] ml-4 w-full bg-transparent focus:outline-none"
              placeholder="Serach"
            />
          </div>
          <div
            class="p-2.5 mt-2 flex rounded-md duration-300 cursor-pointer hover:bg-blue-600"
          >
            <a
              href="../admin/Statistik.php"
              class="flex items-center justify-start ml-5 text-[15px] text-gray-200 w-full h-full"
            >
              Statistik
            </a>
          </div>
          <div
            class="p-2.5 mt-2 flex rounded-md duration-300 cursor-pointer hover:bg-blue-600"
          >
            <a
              href="../admin/admin.php"
              class="flex items-center justify-start ml-5 text-[15px] text-gray-200 w-full h-full"
            >
              Admin
            </a>
          </div>
          <div
            class="p-2.5 mt-2 flex rounded-md duration-300 cursor-pointer hover:bg-blue-600"
          >
            <a
              href="../admin/ticket.php"
              class="flex items-center justify-start ml-5 text-[15px] text-gray-200 w-full h-full"
            >
              Ticket
            </a>
          </div>
          <hr class="my-4 text-gray-600" />
          <div
            class="p-2.5 mt-2 flex rounded-md duration-300 cursor-pointer hover:bg-blue-600"
          >
            <a
              href="../admin/genre.php"
              class="flex items-center justify-start ml-5 text-[15px] text-gray-200 w-full h-full"
            >
              Genre
            </a>
          </div>

          <div
            class="p-2.5 mt-2 flex rounded-md duration-300 cursor-pointer hover:bg-blue-600"
          >
            <a
              href="../admin/film.php"
              class="flex items-center justify-start ml-5 text-[15px] text-gray-200 w-full h-full"
            >
              Film
            </a>
          </div>
          <div
            class="p-2.5 mt-2 flex rounded-md duration-300 cursor-pointer hover:bg-blue-600"
          >
            <a
              href="../admin/penonton.php"
              class="flex items-center justify-start ml-5 text-[15px] text-gray-200 w-full h-full"
            >
              Penonton
            </a>
          </div>
          <div
            class="p-2.5 mt-2 flex rounded-md duration-300 cursor-pointer hover:bg-blue-600"
          >
            <a
              href="../admin/teater.php"
              class="flex items-center justify-start ml-5 text-[15px] text-gray-200 w-full h-full"
            >
              Nama Teater
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="Admin xl:ms-[300px]">
      <h1
        class="font-bold italic text-white mx-40 text-[28px] text-center xl:mx-60 xl:text-center mt-10 xl:text-5xl"
      >
        NAMA FILM
      </h1>
      <a href='../pages/film/createfilm.php'>
        <button
            class="rounded-md ring-2 ring-slate-950 flex h-10 p-3 items-center m-4 bg-gradient-to-r hover:from-blue-800 hover:to-black transition ease-in-out duration-700 hover:-translate-y-1 hover:scale-110">
            <img class="mr-2" src="../Image/tambah.png" width="30" alt="">
            <span class="font-extralight text-white">Tambah</span>
        </button>
    </a>

      <table
        border="3"
        class="text-white font-bold bg-gradient-to-r from-slate-900 via-blue-950 to-slate-800"
      >
        <thead>
          <tr class="">
            <th class="border-2 border-slate-950 p-2 w-[100px] text-[10px] xl:text-base xl:w-80">ID FILM</th>
            <th class="border-2 border-slate-950 p-2 w-[] text-[10px] xl:text-base xl:w-80">NAMA FILM</th>
            <th class="border-2 border-slate-950 p-2 w-[100px] text-[10px] xl:text-base xl:w-80"> HARGA </th>
            <th class="border-2 border-slate-950 p-2 w-[100px] text-[10px] xl:text-base xl:w-80"> DURASI </th>
            <th class="border-2 border-slate-950 p-2 w-[100px] text-[10px] xl:text-base xl:w-80"> GAMBAR </th>
            <th class="border-2 border-slate-950 p-2 w-[] text-[10px] xl:text-base xl:w-80">ACTION</th>
          </tr>
        </thead>
        <tbody>
            <?php

              include('../config/koneksi.php');
            
            
                // Cek apakah parameter id_film sudah diterima
                if (isset($_GET['id_film'])) {
                  // Ambil nilai id_film dari parameter GET
                  $id_film = $_GET['id_film'];
              
                  // Query hapus data film berdasarkan id_film
                  $queryDelete = "DELETE FROM film WHERE id_film = '$id_film'";
                  $resultDelete = mysqli_query($koneksi, $queryDelete);
              }
            ?>

               
              
            <?php
             $result = mysqli_query($koneksi, "SELECT * FROM film");
             while ($row = mysqli_fetch_assoc($result)) {
                 echo "<tr>
                         <td class='border-2 border-slate-950 p-2 w-10'>{$row['id_film']}</td>
                         <td class='border-2 border-slate-950 p-2 w-80'>{$row['judul']}</td>
                         <td class='border-2 border-slate-950 p-2 w-80'>{$row['harga']}</td>
                         <td class='border-2 border-slate-950 p-2 w-80'>{$row['durasi']}</td>
                         <td class='border-2 border-slate-950 p-2 w-80'>{$row['gambar']}</td>
                         <td class='border-2 border-slate-950 p-2'>
                             <div class='flex justify-center mt-4'>
                                <a href='../pages/film/updatefilm.php?id=" . $row['id_film'] . "'>
                                    <button class='rounded-full bg-green-400 xl:bg-slate-600 xl:bg-gradient-to-bl xl:hover:from-sky-100 xl:hover:via-green-600 xl:hover:to-green-500 text-white font-bold text-[10px] p-[2px] mx-[4px] xl:p-1 xl:mx-1 xl:text-base'>
                                      <img src='../Image/update.png' width='30' alt=''>
                                    </button>
                                </a>
                                <a href='?id_film={$row['id_film']}' onclick='return confirm(\"Apakah Anda yakin ingin menghapus?\")'>
                                    <button class='rounded-full bg-red-500 xl:bg-slate-600 xl:bg-gradient-to-bl xl:hover:from-sky-100 xl:hover:via-red-700 xl:hover:to-red-600 text-white font-bold text-[10px] p-[2px] mx-[4px] xl:p-1 xl:mx-1 xl:text-base'>
                                        <img src='../Image/delete.png' width='30' alt=''>
                                    </button>
                                </a>
                             </div>
                         </td>
                     </tr>";
             }
             mysqli_close($koneksi);
            ?>
        </tbody>
      </table>
    </div>
    <script src="../js/sidebar.js"></script>
  </body>
</html>
