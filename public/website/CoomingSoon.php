<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="../css/gaya.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #ticketpopup {
            opacity: 0;
        }
    </style>
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
    </div>
    <nav class="container flex justify-evenly p-2 h-full item text-white">

        <div class="">
            <a href="https://github.com/AdrianAlfauzan" class="flex items-center gap-5">
                <img class="bg-white rounded-full ring ring-black " src="../Image/github.png" width="50" alt="">
                <span class="font-serif">Adrian Musa ALfauzan</span>
            </a>
        </div>
        <div class="flex gap-20 items-center font-serif">
            <ul>
                <li><a href="../website/Watching.php">Watching</a>
                </li>
            </ul>
            <ul class="relative">
                <li>
                    <a href="#" id="theatersDropdown">Theaters</a>
                    <ul id="theatersOptions"
                        class="absolute z-50 left-[-50px] hidden max-w-xl text-yellow-400 bg-slate-900 font-serif rounded-md shadow-md p-2">
                        <li><a class="w-64 inline-flex" href="#">Theater 1, Plaza Indonesia</a></li>
                        <hr class="my-2 text-gray-600">
                        <li><a class="w-64 inline-flex" href="#">Theater 2, One Belpark</a></li>
                        <hr class="my-2 text-gray-600">
                        <li><a class="w-64 inline-flex" href="#">Theater 3, Plaza Senayan</a></li>
                        <hr class="my-2 text-gray-600">
                        <li><a class="w-64 inline-flex" href="#">Theater 4, Pondok Indah</a></li>
                        <hr class="my-2 text-gray-600">
                        <li><a class="w-64 inline-flex" href="#">Theater 5, Taman Anggrek 69</a></li>
                        <hr class="my-2 text-gray-600">
                        <li><a class="w-64 inline-flex" href="#">Theater 6, Kramat Jati</a></li>
                        <hr class="my-2 text-gray-600">
                        <li><a class="w-64 inline-flex" href="#">Theater 7, Kuningan City</a></li>
                        <hr class="my-2 text-gray-600">
                        <li><a class="w-64 inline-flex" href="#">Theater 8, Lotte Shopping Avenue</a></li>
                        <hr class="my-2 text-gray-600">
                        <li><a class="w-64 inline-flex" href="#">Theater 9, Metropole</a></li>
                        <hr class="my-2 text-gray-600">
                        <li><a class="w-64 inline-flex" href="#">Theater 10, Holywood</a></li>
                        <hr class="my-2 text-gray-600">
                        <!-- Tambahkan pilihan lain sesuai kebutuhan -->
                    </ul>
                </li>
            </ul>
            <ul>
                <li><a href="#">Coming Soon</a></li>
            </ul>
        </div>

        <div class="flex items-center mx-8">
            <div class="relative w-full">
                <input type="search"
                    class="block w-[300px] p-2.5 rounded-tr-lg rounded-br-lg text-sm text-gray-900 placeholder-gray-500 bg-gray-100 dark:text-white dark:placeholder-gray-400  border border-gray-300 focus:ring focus:border-blue-500 transition-all duration-300"
                    placeholder="Search Mockups" required>
                <button type="submit"
                    class="absolute top-0 right-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-tr-lg rounded-br-lg  border border-blue-700 ring-blue-500 hover:bg-blue-800 focus:outline-none dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-all duration-300">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
        </div>
    </nav>

    <!-- KUMPULAN FILM -->
    <h1 class="text-white font-bold text-3xl p-4 m-4">UP COMING!</h1>
    <section class="Action grid grid-cols-6 grid-rows-2 gap-6 text-center p-4 m-4" id="Action">
        <div
            class="relative col-span-1 row-span-8 flex items-center justify-center group hover:scale-110 transition-all duration-500">
            <img src="../Foto/Romantic5.jpg" class="w-56 h-72 object-cover rounded-md" alt="Gambar Film">
            <div class="absolute bottom-0 left-0 right-0 bg-opacity-70 bg-black text-white p-2">
                <span class="block text-lg font-bold">When in old Age</span>
                <span>Durasi 01:30:00</span>
            </div>
            <div class="absolute top-2 left-0 right-0 p-4 text-center">
                <button
                    class="ring-1 ring-black px-4 py-2 text-yellow-400 bg-slate-950 font-serif rounded-md hover:bg-gradient-to-r hover:from-blue-500 hover:to-black hover:text-white"
                    onclick="togglePopup('ticketPopup1')">BUY TIKET</button>
            </div>
        </div>
        <div
            class="relative col-span-1 row-span-8 flex items-center justify-center group hover:scale-110 transition-all duration-500">
            <img src="../Foto/tanda_tanya.jpg" class="w-56 h-72 object-cover rounded-md" alt="Gambar Film">
            <div class="absolute bottom-0 left-0 right-0 bg-opacity-70 bg-black text-white p-2">
                <span class="block text-lg font-bold">SOON!</span>
                <span>Durasi 00:00:00</span>
            </div>
            <div class="absolute top-2 left-0 right-0 p-4 text-center">
                <button
                    class="ring-1 ring-black px-4 py-2 text-yellow-400 bg-slate-950 font-serif rounded-md hover:bg-gradient-to-r hover:from-blue-500 hover:to-black hover:text-white"
                    onclick="togglePopup('ticketPopup1')">BUY TIKET</button>
            </div>
        </div>
        <div
            class="relative col-span-1 row-span-8 flex items-center justify-center group hover:scale-110 transition-all duration-500">
            <img src="../Foto/tanda_tanya.jpg" class="w-56 h-72 object-cover rounded-md" alt="Gambar Film">
            <div class="absolute bottom-0 left-0 right-0 bg-opacity-70 bg-black text-white p-2">
                <span class="block text-lg font-bold">SOON!</span>
                <span>Durasi 00:00:00</span>
            </div>
            <div class="absolute top-2 left-0 right-0 p-4 text-center">
                <button
                    class="ring-1 ring-black px-4 py-2 text-yellow-400 bg-slate-950 font-serif rounded-md hover:bg-gradient-to-r hover:from-blue-500 hover:to-black hover:text-white"
                    onclick="togglePopup('ticketPopup1')">BUY TIKET</button>
            </div>
        </div>
        <div
            class="relative col-span-1 row-span-8 flex items-center justify-center group hover:scale-110 transition-all duration-500">
            <img src="../Foto/tanda_tanya.jpg" class="w-56 h-72 object-cover rounded-md" alt="Gambar Film">
            <div class="absolute bottom-0 left-0 right-0 bg-opacity-70 bg-black text-white p-2">
                <span class="block text-lg font-bold">SOON!</span>
                <span>Durasi 00:00:00</span>
            </div>
            <div class="absolute top-2 left-0 right-0 p-4 text-center">
                <button
                    class="ring-1 ring-black px-4 py-2 text-yellow-400 bg-slate-950 font-serif rounded-md hover:bg-gradient-to-r hover:from-blue-500 hover:to-black hover:text-white"
                    onclick="togglePopup('ticketPopup1')">BUY TIKET</button>
            </div>
        </div>
        <div
            class="relative col-span-1 row-span-8 flex items-center justify-center group hover:scale-110 transition-all duration-500">
            <img src="../Foto/tanda_tanya.jpg" class="w-56 h-72 object-cover rounded-md" alt="Gambar Film">
            <div class="absolute bottom-0 left-0 right-0 bg-opacity-70 bg-black text-white p-2">
                <span class="block text-lg font-bold">SOON!</span>
                <span>Durasi 00:00:00</span>
            </div>
            <div class="absolute top-2 left-0 right-0 p-4 text-center">
                <button
                    class="ring-1 ring-black px-4 py-2 text-yellow-400 bg-slate-950 font-serif rounded-md hover:bg-gradient-to-r hover:from-blue-500 hover:to-black hover:text-white"
                    onclick="togglePopup('ticketPopup1')">BUY TIKET</button>
            </div>
        </div>
        <div
            class="relative col-span-1 row-span-8 flex items-center justify-center group hover:scale-110 transition-all duration-500">
            <img src="../Foto/tanda_tanya.jpg" class="w-56 h-72 object-cover rounded-md" alt="Gambar Film">
            <div class="absolute bottom-0 left-0 right-0 bg-opacity-70 bg-black text-white p-2">
                <span class="block text-lg font-bold">SOON!</span>
                <span>Durasi 00:00:00</span>
            </div>
            <div class="absolute top-2 left-0 right-0 p-4 text-center">
                <button
                    class="ring-1 ring-black px-4 py-2 text-yellow-400 bg-slate-950 font-serif rounded-md hover:bg-gradient-to-r hover:from-blue-500 hover:to-black hover:text-white"
                    onclick="togglePopup('ticketPopup1')">BUY TIKET</button>
            </div>
        </div>
        <div
            class="relative col-span-1 row-span-8 flex items-center justify-center group hover:scale-110 transition-all duration-500">
            <img src="../Foto/tanda_tanya.jpg" class="w-56 h-72 object-cover rounded-md" alt="Gambar Film">
            <div class="absolute bottom-0 left-0 right-0 bg-opacity-70 bg-black text-white p-2">
                <span class="block text-lg font-bold">SOON!</span>
                <span>Durasi 00:00:00</span>
            </div>
            <div class="absolute top-2 left-0 right-0 p-4 text-center">
                <button
                    class="ring-1 ring-black px-4 py-2 text-yellow-400 bg-slate-950 font-serif rounded-md hover:bg-gradient-to-r hover:from-blue-500 hover:to-black hover:text-white"
                    onclick="togglePopup('ticketPopup1')">BUY TIKET</button>
            </div>
        </div>
        <div
            class="relative col-span-1 row-span-8 flex items-center justify-center group hover:scale-110 transition-all duration-500">
            <img src="../Foto/tanda_tanya.jpg" class="w-56 h-72 object-cover rounded-md" alt="Gambar Film">
            <div class="absolute bottom-0 left-0 right-0 bg-opacity-70 bg-black text-white p-2">
                <span class="block text-lg font-bold">SOON!</span>
                <span>Durasi 00:00:00</span>
            </div>
            <div class="absolute top-2 left-0 right-0 p-4 text-center">
                <button
                    class="ring-1 ring-black px-4 py-2 text-yellow-400 bg-slate-950 font-serif rounded-md hover:bg-gradient-to-r hover:from-blue-500 hover:to-black hover:text-white"
                    onclick="togglePopup('ticketPopup1')">BUY TIKET</button>
            </div>
        </div>

        <!-- Formulir Popup -->
        <div id="ticketPopup1"
            class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full max-w-md p-8 bg-gradient-to-br from-blue-500 to-black rounded-md shadow-lg hidden">
            <form class="text-center grid grid-cols-2 gap-4">
                <div class="mb-4">
                    <label for="id_ticket" class="text-slate-200">ID Tiket :</label>
                    <input type="text" id="id_ticket" name="id_ticket"
                        class="block w-full px-4 py-2 border-2 rounded-md focus:outline-none focus:border-blue-950"
                        required>
                </div>

                <div class="mb-4">
                    <label for="id_pegawai" class="text-slate-200">ID Pegawai :</label>
                    <input type="text" id="id_pegawai" name="id_pegawai"
                        class="block w-full px-4 py-2 border-2 rounded-md focus:outline-none focus:border-blue-950"
                        required>
                </div>

                <div class="mb-4">
                    <label for="id_penonton" class="text-slate-200">ID Penonton :</label>
                    <input type="text" id="id_penonton" name="id_penonton"
                        class="block w-full px-4 py-2 border-2 rounded-md focus:outline-none focus:border-blue-950"
                        required>
                </div>
                <div class="mb-4">
                    <label for="id_penonton" class="text-slate-200">ID Film :</label>
                    <input type="text" id="id_penonton" name="id_penonton"
                        class="block w-full px-4 py-2 border-2 rounded-md focus:outline-none focus:border-blue-950"
                        required>
                </div>

                <div class="mb-4">
                    <label for="harga" class="text-slate-200">Harga :</label>
                    <input type="text" id="harga" name="harga"
                        class="block w-full px-4 py-2 border-2 rounded-md focus:outline-none focus:border-blue-950"
                        required>
                </div>

                <div class="mb-4">
                    <label for="nama_teater" class="text-slate-200">Nama Teater :</label>
                    <input type="text" id="nama_teater" name="nama_teater"
                        class="block w-full px-4 py-2 border-2 rounded-md focus:outline-none focus:border-blue-950"
                        required>
                </div>

                <div class="mb-4 col-span-2">
                    <button type="submit"
                        class="block w-full px-4 py-2 rounded-md ring-1 hover:bg-gradient-to-r hover:from-blue-500 hover:to-black text-white">Kirim</button>
                </div>
            </form>
            <button class="block w-full mt-4 text-slate-100 hover:text-red-500 focus:outline-none"
                onclick="togglePopup('ticketPopup1')">Tutup</button>
        </div>
    </section>
    <!-- KUMPULAN FILM -->

    <section class="flex-col p-2 xl:flex">
        <div class="xl:flex gap-2 lg:flex">
            <div class="p-4 w-full ">
                <div class="">
                    <div class=" text-center">
                        <span id="text1"
                            class="typing-text text-2xl sm:text-3xl md:text-3xl lg:text-3xl xl:text-3xl bg-gradient-to-r from-slate-200 via-violet-500 to-blue-500 bg-clip-text text-transparent"></span>
                    </div>
                </div>

                <h2 class="mt-6 text-2xl font-semibold text-slate-800 sm:text-4xl lg:h-24 xl:h-14 xl:w-full">
                    <span
                        class=" text-animation bg-gradient-to-r from-slate-200 via-violet-500 to-blue-500 bg-clip-text text-transparent"
                        id="animated-text"></span>
                </h2>
                <p
                    class="mt-2 text-slate-600 sm:mt-4 sm:text-xl bg-gradient-to-r from-blue-600 to-red-600 text-transparent bg-clip-text sm:font-bold md:text-orange-600">
                    Lorem
                    ipsum, dolor sit amet consectetur adipisicing elit. Odit
                    eius nesciunt
                    adipisci quaerat. Voluptatum
                    totam reiciendis cum autem. Consequatur, deserunt! Quasi quis perferendis reprehenderit odit
                    laboriosam
                    distinctio? Reprehenderit molestias, velit voluptates debitis dolores necessitatibus nobis rem odit
                    obcaecati quia distinctio alias sed. Aut ex dicta harum deleniti possimus vel blanditiis. Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Assumenda beatae laboriosam dolorem aliquam.
                    Alias nemo praesentium, perferendis libero animi reiciendis doloremque laboriosam deserunt ea
                    excepturi vero quaerat, voluptatum nesciunt dolorum?</p>
            </div>
            <div class="w-full py-2 xl:py-0">
                <h2 class="text-center rounded-md py-4 border-2 border-solid border-blue-600">Lorem, ipsum dolor
                    sit amet consectetur
                    adipisicing elit.
                    Distinctio, excepturi! Iusto nihil nobis repellendus recusandae accusantium dolore, ad voluptates
                    quos provident ipsam laboriosam. Possimus est nesciunt harum nobis sunt asperiores! Ratione, cum ad!
                    Provident quasi saepe mollitia, nobis vitae natus ducimus officia deserunt autem excepturi fugit,
                    dolor qui reiciendis et!</h2>
                <div class="flex py-4 justify-evenly gap-4">
                    <div
                        class="w-full aspect-[4/3]  sm:aspect-[3/3] md:aspect-video  lg:aspect-[4] xl:aspect-[4/3] border border-solid rounded-md p-2 border-blue-600">
                        Lorem ipsum,
                        dolor sit amet
                        consectetur adipisicing
                        elit. Illo at dolorem reiciendis suscipit, deleniti perferendis temporibus, nihil amet harum
                        numquam nemo blanditiis sed explicabo aperiam nulla rerum eaque ad? Adipisci explicabo libero
                        ipsam sapiente fugiat eveniet fugit ea asperiores iusto quidem? Cumque consequuntur, totam
                        similique velit itaque voluptate quasi exercitationem. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Voluptatem, nemo!</div>
                    <div
                        class="w-full aspect-[4/3] sm:aspect-[3/3] md:aspect-video  lg:aspect-[4] xl:aspect-[4/3] border border-solid rounded-md p-2 border-blue-600">
                        Lorem ipsum,
                        dolor sit amet
                        consectetur adipisicing
                        elit. Illo at dolorem reiciendis suscipit, deleniti perferendis temporibus, nihil amet harum
                        numquam nemo blanditiis sed explicabo aperiam nulla rerum eaque ad? Adipisci explicabo libero
                        ipsam sapiente fugiat eveniet fugit ea asperiores iusto quidem? Cumque consequuntur, totam
                        similique velit itaque voluptate quasi exercitationem. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Voluptatem, nemo!</div>
                </div>
            </div>
        </div>
    </section>

    <h1 class="text-center font-semibold text-white text-3xl mb-10">
        Adrian Developers
    </h1>
    <section class=" sm:flex-none md:flex md:justify-around lg:flex lg:justify-around xl:flex xl:justify-around">
        <div class="p-2 md:max-w-md lg:max-w-xl xl:max-w-3xl">
            <div class="bg-white rounded-xl border-2 mb-2">
                <div class="accordion-header py-4 px-6 cursor-pointer flex justify-between items-center">
                    <span
                        class="font-semibold text-lg text-purple-600 sm:text-red-500 md:text-yellow-300 lg:text-green-600 xl:text-blue-600">What
                        is web Development</span>
                    <i class='bx bx-chevron-down text-3xl'></i>
                </div>
                <div class="accordion-body max-h-0 overflow-hidden transition-all duration-200 ease-out">
                    <div class="p-4 border-t">
                        <p> encompasses the entire process of creating and maintaining websites or web applications
                            on the Internet. It involves a variety of tasks that contribute to the overall
                            functionality, design, and performance of online platforms.
                        </p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl border-2 mb-2">
                <div class="accordion-header py-4 px-6 cursor-pointer flex justify-between items-center">
                    <span
                        class="font-semibold text-lg text-purple-600 sm:text-red-500 md:text-yellow-300 lg:text-green-600 xl:text-blue-600">Web
                        Design</span>
                    <i class='bx bx-chevron-down text-3xl'></i>
                </div>
                <div class="accordion-body max-h-0 overflow-hidden transition-all duration-200 ease-out">
                    <div class="p-4 border-t">
                        <p> At the outset, web development involves web design, where professionals create the visual
                            aspects of a website or web application. This includes designing the layout, choosing color
                            schemes, and determining typography. Web designers typically use tools such as Adobe XD,
                            Figma, or Sketch to craft the user interface (UI) based on aesthetic and usability
                            considerations.
                        </p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl border-2 mb-2">
                <div class="accordion-header py-4 px-6 cursor-pointer flex justify-between items-center">
                    <span
                        class="font-semibold text-lg text-purple-600 sm:text-red-500 md:text-yellow-300 lg:text-green-600 xl:text-blue-600">Front-End
                        Development</span>
                    <i class='bx bx-chevron-down text-3xl'></i>
                </div>
                <div class="accordion-body max-h-0 overflow-hidden transition-all duration-200 ease-out">
                    <div class="p-4 border-t">
                        <p> Front-end development focuses on implementing the designed interface on the client side to
                            ensure the website or application is visually appealing and interactive. Front-end
                            developers employ technologies like HTML, CSS, and JavaScript. Frameworks such as React,
                            Angular, or Vue.js are commonly used to enhance the efficiency and functionality of the user
                            interface.
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl border-2 mb-2">
                <div class="accordion-header py-4 px-6 cursor-pointer flex justify-between items-center">
                    <span
                        class="font-semibold text-lg text-purple-600 sm:text-red-500 md:text-yellow-300 lg:text-green-600 xl:text-blue-600">Web
                        Standards and Best Practices</span>
                    <i class='bx bx-chevron-down text-3xl'></i>
                </div>
                <div class="accordion-body max-h-0 overflow-hidden transition-all duration-200 ease-out">
                    <div class="p-4 border-t">
                        <p> Adhering to industry standards and best practices is fundamental in web development.
                            Developers must ensure websites are accessible, secure, and performant. This includes
                            optimizing for search engines (SEO) and incorporating principles of user experience (UX)
                            design.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-2 md:max-w-md lg:max-w-xl xl:max-w-3xl">
            <div class="bg-white rounded-xl border-2 mb-2">
                <div class="accordion-header py-4 px-6 cursor-pointer flex justify-between items-center">
                    <span
                        class="font-semibold text-lg text-purple-600 sm:text-red-500 md:text-yellow-300 lg:text-green-600 xl:text-blue-600">Full-Stack
                        Development</span>
                    <i class='bx bx-chevron-down text-3xl'></i>
                </div>
                <div class="accordion-body max-h-0 overflow-hidden transition-all duration-200 ease-out">
                    <div class="p-4 border-t">
                        <p> Full-stack developers possess proficiency in both front-end and back-end development. They
                            can work across the entire spectrum of a web project, from designing the user interface to
                            implementing server-side logic and managing databases.
                        </p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl border-2 mb-2">
                <div class="accordion-header py-4 px-6 cursor-pointer flex justify-between items-center">
                    <span
                        class="font-semibold text-lg text-purple-600 sm:text-red-500 md:text-yellow-300 lg:text-green-600 xl:text-blue-600">Web
                        Servers and Hosting</span>
                    <i class='bx bx-chevron-down text-3xl'></i>
                </div>
                <div class="accordion-body max-h-0 overflow-hidden transition-all duration-200 ease-out">
                    <div class="p-4 border-t">
                        <p> Understanding how web servers operate and configuring them to host websites or applications
                            is crucial in web development. Developers also work with hosting services to deploy and
                            manage their projects on the Internet.
                        </p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl border-2 mb-2">
                <div class="accordion-header py-4 px-6 cursor-pointer flex justify-between items-center">
                    <span
                        class="font-semibold text-lg text-purple-600 sm:text-red-500 md:text-yellow-300 lg:text-green-600 xl:text-blue-600">Web
                        Version Control</span>
                    <i class='bx bx-chevron-down text-3xl'></i>
                </div>
                <div class="accordion-body max-h-0 overflow-hidden transition-all duration-200 ease-out">
                    <div class="p-4 border-t">
                        <p> Web developers utilize version control systems like Git, which facilitate collaboration,
                            track changes, and allow developers to revert to previous versions of code. This is
                            essential for managing codebase integrity, especially in collaborative projects.
                        </p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl border-2 mb-2">
                <div class="accordion-header py-4 px-6 cursor-pointer flex justify-between items-center">
                    <span
                        class="font-semibold text-lg text-purple-600 sm:text-red-500 md:text-yellow-300 lg:text-green-600 xl:text-blue-600">The
                        essence of it all</span>
                    <i class='bx bx-chevron-down text-3xl'></i>
                </div>
                <div class="accordion-body max-h-0 overflow-hidden transition-all duration-200 ease-out">
                    <div class="p-4 border-t">
                        <p> Web development is a dynamic field that evolves continuously with the introduction of new
                            frameworks, tools, and programming languages. Staying updated with the latest technologies
                            and trends is an integral part of being a successful web developer.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="my-4 text-gray-600">

    <div class=" max-w-full sm:flex sm:justify-around md:justify-normal xl:flex xl:flex-col text-white font-extralight">
        <div
            class=" grid grid-cols-4 p-4 sm:gap-24 md:grid md:grid-cols-none md:gap-2 md:ps-4 xl:flex xl:justify-center xl:gap-20 xl:w-full xl:mx-auto">
            <div class="m-2 max-w-[50px]">
                <a href="https://www.youtube.com/@CallMeLeeon">
                    <img src="../Image/youtube.png" width="50px" alt="">
                </a>
            </div>
            <div class="m-2 max-w-[50px]">
                <a href="https://github.com/AdrianAlfauzan ">
                    <img src="../Image/github.png" width="50px" alt="">
                </a>
            </div>
            <div class="m-2 max-w-[50px]">
                <a href="https://www.tiktok.com/@onlymeleon">
                    <img src="../Image/tik-tok.png" width="50px" alt="">
                </a>
            </div>
            <div class="m-2 max-w-[50px]">
                <a href="https://www.instagram.com/_leonyr/">
                    <img src="../Image/instagram.png" width="50px" alt="">
                </a>
            </div>
        </div>
        <div class="xl:grid xl:grid-cols-4 xl:mx-auto gap-4 p-4">
            <div class=" p-4">
                <h3 class="text-lg font-bold mb-2">Company</h3>
                <p>Rabobank</p>
                <p>Netherlands, Utrect</p>
                <p>Phone: +62 81222518720</p>
                <p>Email: <a href="mailto:adrianmusaalfauzan@gmail.com">adrianmusaalfauzan@gmail.com</a></p>


            </div>

            <div class=" p-4">
                <h3 class="text-lg font-bold mb-2">Education</h3>
                <p>University Jendral Achmad Yani</p>
                <p>Department: Computer Science</p>
                <p>Graduation Year: 2023</p>
            </div>

            <div class=" p-4">
                <h3 class="text-lg font-bold mb-2">Work Experience</h3>
                <p>Position: Python Developer</p>
                <p>Company: Rabobank</p>
                <p>Duration: 2030</p>
            </div>

            <div class=" p-4">
                <h3 class="text-lg font-bold mb-2">Skills</h3>
                <ul>
                    <li>Web Development</li>
                    <li>Programming Languages</li>
                    <li>Problem Solving</li>
                </ul>
            </div>
        </div>
    </div>



    <script src="../js/animasiLearning.js"></script>
    <script src="../js/containerAnimasi.js"></script>
    <script src="../js/carousel.js"></script>
    <script src="../js/carousel2.js"></script>
    <script src="../js/textTypingBergantian.js"></script>
    <script src="../js/Collapse.js"></script>
    <script src="../js/PopUpFilm.js"></script>
    <script src="../js/TheatersDropdown.js"></script>
</body>

</html>