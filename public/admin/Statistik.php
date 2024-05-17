<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: ../website/Watching.php");
    exit;
}
?>

<!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
  </head>

  <body class="bg-blue-950 flex">
  <button class="absolute text-white text-4xl top-5 right-0 pr-4 cursor-pointer lg:hidden" onclick="toggleSidebar()">
        <i id="menuIcon"><img src="../Image/menu.png" width="30" alt=""></i>
    </button>
    <div
        class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] duration-1000 p-2 w-[300px] overflow-y-auto text-center bg-gray-900 shadow h-screen">
        <div class="text-gray-100 text-xl">
            <div class="p-2.5 mt-1 flex items-center rounded-md ">
                <i><img src="../Image/menu.png" width="25" alt=""></i>
                <h1 class="text-[15px]  ml-3 text-xl text-gray-200 font-bold"><a href="../website/Watching.php">Administrator</a></h1>
                <i class="bi bi-x ml-20 cursor-pointer lg:hidden" onclick="Openbar()"></i>
            </div>
            <hr class="my-2 text-gray-600">

            <div>
                <div class="bottom-0 left-0 p-4 bg-gray-900 flex items-center">
                    <img src="../Image/artificial-intelligence.png" alt="Profile ../Image"
                        class="w-10 h-10 rounded-full">
                    <div class="ml-3">
                        <h2 class="text-white font-semibold text-sm">Admin</h2>
                    </div>
                </div>
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  bg-gray-700">
                    <i class="bi bi-search text-sm"></i>
                    <input class="text-[15px] ml-4 w-full bg-transparent focus:outline-none" placeholder="Serach" />
                </div>
                <div class="p-2.5 mt-2 flex rounded-md duration-300 cursor-pointer hover:bg-blue-600">
                    <a href="../admin/Statistik.php"
                        class="flex items-center justify-start ml-5 text-[15px] text-gray-200 w-full h-full">
                        Statistik
                    </a>
                </div>
                <div class="p-2.5 mt-2 flex rounded-md duration-300 cursor-pointer hover:bg-blue-600">
                    <a href="../admin/Admin.php"
                        class="flex items-center justify-start ml-5 text-[15px] text-gray-200 w-full h-full">
                        Admin
                    </a>
                </div>
                <div class="p-2.5 mt-2 flex rounded-md duration-300 cursor-pointer hover:bg-blue-600">
                    <a href="../admin/Ticket.php"
                        class="flex items-center justify-start ml-5 text-[15px] text-gray-200 w-full h-full">
                        Ticket
                    </a>
                </div>
                <hr class="my-4 text-gray-600">
                <div class="p-2.5 mt-2 flex rounded-md duration-300 cursor-pointer hover:bg-blue-600">
                    <a href="../admin/Genre.php"
                        class="flex items-center justify-start ml-5 text-[15px] text-gray-200 w-full h-full">
                        Genre
                    </a>
                </div>

                <div class="p-2.5 mt-2 flex rounded-md duration-300 cursor-pointer hover:bg-blue-600">
                    <a href="../admin/Film.php"
                        class="flex items-center justify-start ml-5 text-[15px] text-gray-200 w-full h-full">
                        Film
                    </a>
                </div>
                <div class="p-2.5 mt-2 flex rounded-md duration-300 cursor-pointer hover:bg-blue-600">
                    <a href="../admin/Penonton.php"
                        class="flex items-center justify-start ml-5 text-[15px] text-gray-200 w-full h-full">
                        Penonton
                    </a>
                </div>
                <div class="p-2.5 mt-2 flex rounded-md duration-300 cursor-pointer hover:bg-blue-600">
                    <a href="../admin/Teater.php"
                        class="flex items-center justify-start ml-5 text-[15px] text-gray-200 w-full h-full">
                        Nama Teater
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class=" text-white flex flex-wrap xl:justify-around xl:gap-4 xl:ms-[310px] xl:max-w-none m-4">
        <div
            class="flex m-1 flex-row w-[250px] xl:w-[250px] border border-collapse p-2 xl:p-4 rounded-xl
            cursor-pointer bg-gradient-to-r from-slate-900 via-blue-950 to-slate-800 hover:scale-110 transition-all duration-500">
            <div class="bg-blue-400 w-[70px] xl:p-4 border rounded-xl flex h-full items-center">
                <img class="mx-auto" src="../Image/checkout.png" width="40" alt="">
            </div>
            <div class="p-4">
                <span class="font-bold">83457</span>
                <p>New Order</p>
            </div>
        </div>

        <div
            class="flex m-1 flex-row w-[250px] xl:w-[250px] border border-collapse p-2 xl:p-4 rounded-xl cursor-pointer bg-gradient-to-r from-slate-900 via-blue-950 to-slate-800 hover:scale-110 transition-all duration-500">
            <div class="bg-blue-400 w-[70px] xl:p-4 border rounded-xl flex h-full items-center">
                <img class="mx-auto" src="../Image/user.png" width="40" alt="">
            </div>
            <div class="p-4">
                <span class="font-bold">83457</span>
                <p>Visitors</p>
            </div>
        </div>

        <div
            class="flex m-1 flex-row w-[250px] xl:w-[250px] border border-collapse p-2 xl:p-4 rounded-xl cursor-pointer bg-gradient-to-r from-slate-900 via-blue-950 to-slate-800 hover:scale-110 transition-all duration-500">
            <div class="bg-blue-400 w-[70px] xl:p-4 border rounded-xl flex h-full items-center">
                <img class="mx-auto" src="../Image/dollar.png" width="40" alt="">
            </div>
            <div class="p-4">
                <span class="font-bold">$739,456,21</span>
                <p>Total Sales</p>
            </div>
        </div>
        <div
            class="flex m-1 flex-row w-[250px] xl:w-[250px] border border-collapse p-2 xl:p-4 rounded-xl cursor-pointer bg-gradient-to-r from-slate-900 via-blue-950 to-slate-800 hover:scale-110 transition-all duration-500">
            <div class="bg-blue-400 w-[70px] xl:p-4 border rounded-xl flex h-full items-center">
                <img class="mx-auto" src="../Image/admin.png" width="40" alt="">
            </div>
            <div class="p-4">
                <span class="font-bold">591</span>
                <p>Admin Online</p>
            </div>
        </div>
    </div>
    <div class="Admin xl:ms-[300px] flex justify-start">
        <div id="chartContainer" class="bg-blue-500 w-[800px] h-[500px] rounded-lg shadow-md p-6 m-4"></div>
        <div class="bg-slate-700 p-4 shadow-md rounded-md w-96">
            <!-- Chat header -->
            <div class="flex flex-col items-center justify-between border-b-2 border-gray-300 pb-2 mb-4">
                <div class="flex items-center">
                    <img src="../Foto/AdrianNEW.jpg" alt="User Avatar" class="w-12 h-12 rounded-full mr-2 ring-black">
                    <div class="flex flex-row">
                        <div class="w-64 ">
                            <p class="text-lg font-semibold">Adrian</p>
                            <p class="text-sm text-gray-500">How was your day?</p>
                        </div>
                        <div class=" flex flex-col justify-end items-end gap-2">
                            <div class="bg-green-500 w-4 h-4 rounded-lg"></div>
                            <p>17.55</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center justify-between border-b-2 border-gray-300 pb-2 mb-4">
                <div class="flex items-center">
                    <img src="../Foto/AdrianNEW.jpg" alt="User Avatar" class="w-12 h-12 rounded-full mr-2 ring-black">
                    <div class="flex flex-row">
                        <div class="w-64 ">
                            <p class="text-lg font-semibold">Adrian</p>
                            <p class="text-sm text-gray-500">How was your day?</p>
                        </div>
                        <div class=" flex flex-col justify-end items-end gap-2">
                            <div class="bg-green-500 w-4 h-4 rounded-lg"></div>
                            <p>17.55</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center justify-between border-b-2 border-gray-300 pb-2 mb-4">
                <div class="flex items-center">
                    <img src="../Foto/AdrianNEW.jpg" alt="User Avatar" class="w-12 h-12 rounded-full mr-2 ring-black">
                    <div class="flex flex-row">
                        <div class="w-64 ">
                            <p class="text-lg font-semibold">Adrian</p>
                            <p class="text-sm text-gray-500">How was your day?</p>
                        </div>
                        <div class=" flex flex-col justify-end items-end gap-2">
                            <div class="bg-green-500 w-4 h-4 rounded-lg"></div>
                            <p>17.55</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center justify-between border-b-2 border-gray-300 pb-2 mb-4">
                <div class="flex items-center">
                    <img src="../Foto/AdrianNEW.jpg" alt="User Avatar" class="w-12 h-12 rounded-full mr-2 ring-black">
                    <div class="flex flex-row">
                        <div class="w-64 ">
                            <p class="text-lg font-semibold">Adrian</p>
                            <p class="text-sm text-gray-500">How was your day?</p>
                        </div>
                        <div class=" flex flex-col justify-end items-end gap-2">
                            <div class="bg-green-500 w-4 h-4 rounded-lg"></div>
                            <p>17.55</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center justify-between border-b-2 border-gray-300 pb-2 mb-4">
                <div class="flex items-center">
                    <img src="../Foto/AdrianNEW.jpg" alt="User Avatar" class="w-12 h-12 rounded-full mr-2 ring-black">
                    <div class="flex flex-row">
                        <div class="w-64 ">
                            <p class="text-lg font-semibold">Adrian</p>
                            <p class="text-sm text-gray-500">How was your day?</p>
                        </div>
                        <div class=" flex flex-col justify-end items-end gap-2">
                            <div class="bg-green-500 w-4 h-4 rounded-lg"></div>
                            <p>17.55</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center justify-between border-b-2 border-gray-300 pb-2 mb-4">
                <div class="flex items-center">
                    <img src="../Foto/AdrianNEW.jpg" alt="User Avatar" class="w-12 h-12 rounded-full mr-2 ring-black">
                    <div class="flex flex-row">
                        <div class="w-64 ">
                            <p class="text-lg font-semibold">Adrian</p>
                            <p class="text-sm text-gray-500">How was your day?</p>
                        </div>
                        <div class=" flex flex-col justify-end items-end gap-2">
                            <div class="bg-green-500 w-4 h-4 rounded-lg"></div>
                            <p>17.55</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center justify-between border-b-2 border-gray-300 pb-2 mb-4">
                <div class="flex items-center">
                    <img src="../Foto/AdrianNEW.jpg" alt="User Avatar" class="w-12 h-12 rounded-full mr-2 ring-black">
                    <div class="flex flex-row">
                        <div class="w-64 ">
                            <p class="text-lg font-semibold">Adrian</p>
                            <p class="text-sm text-gray-500">How was your day?</p>
                        </div>
                        <div class=" flex flex-col justify-end items-end gap-2">
                            <div class="bg-green-500 w-4 h-4 rounded-lg"></div>
                            <p>17.55</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/statistik.js"></script>
    <script src="../js/sidebar.js"></script>
  </body>
</php>
