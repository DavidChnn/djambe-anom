<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>DjambeNom</title>

        <!-- TailwindScript -->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- TailwindScript -->
        
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Fonts -->
    </head>
    <body class="">
        <!-- Navbar -->
        <Navbar class="flex justify-between p-2 md:px-10 md:py-4 lg:px-20 lg:py-4 xl:px-56 xl:py-6 shadow-xl bg-cover bg-[url('images/bgawan.jpg')] opacity-85 border-b-4 border-[#584d33]">
            <div>
                <!-- LOGO DJAMBENOM -->
                <a href="#">
                    <img src="{{ url('images/logodjambe1.png') }}" alt="Deskripsi Gambar" class="w-56">
                </a>
                
            </div>
            <div class="flex justify-center items-center fonts-mono text-[8px] sm:text-xl">
                <a href="#home" class="px-4 hover:text-gray-700 hover:underline">HOME</a>
                <a href="#manfaat" class="px-4 hover:text-gray-700 hover:underline">MANFAAT</a>
                <a href="#gallery" class="px-4 hover:text-gray-700 hover:underline">GALLERY</a>
                <a href="#review" class="px-4 hover:text-gray-700 hover:underline">REVIEW</a>
                <a href="#kontakkami" class="px-4 hover:text-gray-700 hover:underline">KONTAK KAMI</a>
            </div>
        </Navbar>
        <!-- Navbar -->
        <!-- Content -->
        <div class="bg-cover bg-[url('images/bg-tree.jpg')] text-white grid grid-cols-2 justify-center py-10 sm:py-10 lg:py-40 sm:px-20 gap-4">
            <div class="sm:mx-10 lg:mx-20 flex justify-center items-center sm:hidden">
                <img src="{{ url('images/djambetangan.jpg') }}" alt="Deskripsi Gambar" class="w-28 sm:w-86 md:w-80 lg:w-fit xl:w-fit 2xl:w-[350px] rounded-xl">
            </div>
             <!-- component -->
            <!-- This is an example component -->
            <div id="home" class="max-w-2xl sm:block hidden">

                <div id="default-carousel" class="relative" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-[450px] 2xl:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                            <img src="{{ url('images/djambeawan.jpg') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ url('images/djambetangan.jpg') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ url('images/djambeasap1.jpg') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                            <span class="hidden">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            <span class="hidden">Next</span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="flex">
                <div class="px-2">
                    <h1 class="text-xl md:text-5xl lg:text-7xl pb-4 text-lime-300 fonts-capuche font-bold">
                        Deskripsi
                    </h1>
                    <p class="text-[8px] sm:text-xs md:text-md lg:text-xl">
                        "Selamat datang, Sobat Sehat! Apakah Anda sudah mengetahui tentang Jus Djambe Anom? Ini adalah minuman tradisional yang luar biasa, berbeda dari sinom, temulawak, beras kencur dan lainnya. Jus Djambe Anom, yang terbuat dari pinang muda, adalah kreasi unik dari Djambewangi yang telah menarik perhatian semua kalangan, mulai dari anak-anak hingga orang dewasa. Meski pinang muda memiliki rasa pahit dan sepat serta kaya akan getah, namun dengan olahan yang tepat, kami berhasil mengubahnya menjadi minuman segar yang siap Anda nikmati. Jadi, tunggu apa lagi? Cobalah Jus Djambe Anom dan rasakan keunikan rasanya!"
                    </p>
                    <a href="https://wa.me/6282229749706" class="flex xl:my-8 sm:my-4 items-center" target="_blank">
                        <button class="flex bg-green-900 hover:bg-green-300 py-2 pr-4 rounded-xl">
                            <img src="{{ url('images/whatsapp.png') }}" alt="logo WhatsApp" class="sm:w-10 w-4 mx-4">
                            <p class="text-lime-300 sm:text-xl lg:text-2xl xl:text-3xl text-xs text-center fonts-capuche font-bold">WhatsApp</p>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="">
            <img src="{{ url('images/vector.png')}}" alt="" class="absolute w-full bottom-0 hidden sm:block sm:-translate-y- md:-translate-y-[410px] lg:translate-y-14 xl:translate-y-16 2xl:-translate-y-36">
        </div> -->
        <div class="md:py-10 lg:py-20 bg-gray-300">
            <div class="text-center">
                <h1 id="manfaat" class="md:text-4xl lg:text-6xl font-bold fonts-capuche">
                    MANFAAT
                </h1>
            </div>
            <div class="relative grid sm:grid-cols-2 lg:grid-cols-4 px-20 py-10 gap-10">
                <div class="bg-white h-50 py-2 px-4 shadow-xl rounded-xl">
                    <div class="flex justify-center items-center">
                        <img src="{{ url('images/strong.png') }}" alt="Deskripsi Gambar" class="w-20 md:w-32 lg:w-40">
                    </div>
                    <h1 class="text-md sm:text-lg xl:text-xl text-center font-bold">
                        Energi dan Stamina
                    </h1>
                    <p class="text-xs sm:text-xs lg:text-md xl:text-lg">
                        Jus Djambe Anom dapat membantu meningkatkan energi dan stamina Anda, membuat Anda merasa lebih segar dan berenergi sepanjang hari.
                    </p>
                </div>
                <div class="bg-white h-50 py-2 px-4 shadow-xl rounded-xl">
                    <div class="flex justify-center items-center">
                        <img src="{{ url('images/foster-family.png') }}" alt="Deskripsi Gambar" class="w-20 md:w-32 lg:w-40">
                    </div>
                    <h1 class="text-md sm:text-lg xl:text-xl text-center font-bold">
                        Kesehatan Reproduksi
                    </h1>
                    <p class="text-xs sm:text-xs lg:text-md xl:text-lg">
                        Jus ini dikenal dengan khasiatnya yang luar biasa untuk menjaga kesuburan dan kesehatan alat reproduksi, baik pada pria maupun wanita.
                    </p>
                </div>
                <div class="bg-white h-50 py-2 px-4 shadow-xl rounded-xl">
                    <div class="flex justify-center items-center">
                        <img src="{{ url('images/milk-tooth.png') }}" alt="Deskripsi Gambar" class="w-20 md:w-32 lg:w-40">
                    </div>
                    <h1 class="text-md sm:text-lg xl:text-xl text-center font-bold">
                        Pemutih Gigi
                    </h1>
                    <p class="text-xs sm:text-xs lg:text-md xl:text-lg">
                        Dengan kandungan alami di dalamnya, Jus Djambe Anom dapat membantu memutihkan gigi Anda.
                    </p>
                </div>
                <div class="bg-white h-50 py-2 px-4 shadow-xl rounded-xl">
                    <div class="flex justify-center items-center">
                        <img src="{{ url('images/fight.png') }}" alt="Deskripsi Gambar" class="w-20 md:w-32 lg:w-40">
                    </div>
                    <h1 class="text-md sm:text-lg xl:text-xl text-center font-bold">
                        Melawan Kanker
                    </h1>
                    <p class="text-xs sm:text-xs lg:text-md xl:text-lg">
                        Berdasarkan beberapa penelitian, Jus Djambe Anom memiliki sifat anti-kanker yang dapat membantu melindungi tubuh Anda dari risiko kanker.
                    </p>
                </div>
            </div>
        </div>
        <div class="bg-cover bg-[url('images/bg-grass.jpeg')] justify-center py-10">
            <div id="gallery">
                <h1 class="md:text-4xl lg:text-6xl font-bold fonts-capuche text-white text-center">
                    GALLERY
                </h1>
                <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-24">
                    <div class="-m-1 flex flex-wrap md:-m-2">
                    <div class="flex w-1/2 flex-wrap">
                        <div class="w-1/2 p-1 md:p-2">
                        <img
                            alt="gallery"
                            class="block h-full w-full rounded-lg object-cover object-center"
                            src="{{ url('images/djambe.jpg') }}" />
                        </div>
                        <div class="w-1/2 p-1 md:p-2">
                        <img
                            alt="gallery"
                            class="block h-full w-full rounded-lg object-cover object-center"
                            src="{{ url('images/djambeawan.jpg') }}" />
                        </div>
                        <div class="w-full p-1 md:p-2">
                        <img
                            alt="gallery"
                            class="block h-full w-full rounded-lg object-cover object-center"
                            src="{{ url('images/djambetangan.jpg') }}" />
                        </div>
                    </div>
                    <div class="flex w-1/2 flex-wrap">
                        <div class="w-full p-1 md:p-2">
                        <img
                            alt="gallery"
                            class="block h-full w-full rounded-lg object-cover object-center"
                            src="{{ url('images/djambeasap1.jpg') }}" />
                        </div>
                        <div class="w-1/2 p-1 md:p-2">
                        <img
                            alt="gallery"
                            class="block h-full w-full rounded-lg object-cover object-center"
                            src="{{ url('images/djambepagar.jpg') }}" />
                        </div>
                        <div class="w-1/2 p-1 md:p-2">
                        <img
                            alt="gallery"
                            class="block h-full w-full rounded-lg object-cover object-center"
                            src="{{ url('images/djambeasap2.jpg') }}" />
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div id="review" class="md:py-10 lg:py-20 bg-gray-300">
                <h1 class="md:text-4xl lg:text-6xl font-bold fonts-capuche text-center">
                    REVIEW
                </h1>
                <div class="relative grid sm:grid-cols-2 lg:grid-cols-4 px-20 py-10 gap-10">
                    <div class="bg-white h-fit p-4 shadow-xl rounded-xl">
                        <div class="flex justify-center items-center">
                            <img src="{{ url('images/djambe.jpg') }}" alt="Deskripsi Gambar" class="w-20 md:w-32 lg:w-40">
                        </div>
                        <h1 class="text-md sm:text-lg text-center font-bold">
                            Menambah Kenjantanan
                        </h1>
                        <p class="text-xs sm:text-xs lg:text-md">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="bg-white h-fit p-4 shadow-xl rounded-xl">
                        <div class="flex justify-center items-center">
                            <img src="{{ url('images/djambe.jpg') }}" alt="Deskripsi Gambar" class="w-20 md:w-32 lg:w-40">
                        </div>
                        <h1 class="text-md sm:text-lg text-center font-bold">
                            Menambah Kenjantanan
                        </h1>
                        <p class="text-xs sm:text-xs lg:text-md">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="bg-white h-fit p-4 shadow-xl rounded-xl">
                        <div class="flex justify-center items-center">
                            <img src="{{ url('images/djambe.jpg') }}" alt="Deskripsi Gambar" class="w-20 md:w-32 lg:w-40">
                        </div>
                        <h1 class="text-md sm:text-lg text-center font-bold">
                            Menambah Kenjantanan
                        </h1>
                        <p class="text-xs sm:text-xs lg:text-md">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="bg-white h-fit p-4 shadow-xl rounded-xl">
                        <div class="flex justify-center items-center">
                            <img src="{{ url('images/djambe.jpg') }}" alt="Deskripsi Gambar" class="w-20 md:w-32 lg:w-40">
                        </div>
                        <h1 class="text-md sm:text-lg text-center font-bold">
                            Menambah Kenjantanan
                        </h1>
                        <p class="text-xs sm:text-xs lg:text-md">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
            </div>
            <footer id="kontakkami" class="bg-green-900 py-4 text-white px-4 sm:px-20">
                <div class="grid xl:grid-cols-4 gap-5">
                    <div class="mx-auto sm:col-span-2">
                        <h1 class="text-center font-bold py-2">GOOGLE MAPS</h1>
                        <iframe class="block sm:hidden" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.8230462143915!2d114.30464207590772!3d-8.320375991715345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd157005cbd5e87%3A0x3e4e6f82bc63732e!2sDJAMBEWANGI!5e0!3m2!1sid!2sid!4v1706186049699!5m2!1sid!2sid" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <iframe class="sm:block hidden" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.8230462143915!2d114.30464207590774!3d-8.320375991715355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd157005cbd5e87%3A0x3e4e6f82bc63732e!2sDJAMBEWANGI!5e0!3m2!1sid!2sid!4v1706184199813!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="my-10">
                        <h1 class="text-center font-bold py-2">KONTAK KAMI</h1>
                        <div class="py-4">
                            <a class="hover:text-gray-400 hover:underline text-center font-bold" target="_blank" href="https://wa.me/6282229749706">WhatsApp : +62 822-2974-9706</a>
                        </div>
                        <div class="py-4">
                            <a class="hover:text-gray-400 hover:underline text-center font-bold" target="_blank" href="https://www.instagram.com/djambewangi/">Instagram : djambewangi</a>
                        </div>
                        <div class="py-4">
                            <a class="hover:text-gray-400 hover:underline text-center font-bold" target="_blank" href="https://www.facebook.com/profile.php?id=100095671022761">Facebook : UD Djambe Wangi</a>
                        </div>
                        <div class="py-4">
                            <a class="hover:text-gray-400 hover:underline text-center font-bold" target="_blank" href="https://www.tiktok.com/@djambewangi_grup?_t=8jKMTIBbr6n&_r=1">Tiktok : djambewangi_grup</a>
                        </div>
                    </div>
                    <div class="my-20">
                        <div class="py-4">
                            <a href="#home" class="hover:text-gray-400 hover:underline text-center font-bold">HOME</a>
                        </div>
                        <div class="py-4">
                            <a href="#manfaat" class="hover:text-gray-400 hover:underline text-center font-bold">MANFAAT</a>
                        </div>
                        <div class="py-4">
                            <a href="#gallery" class="hover:text-gray-400 hover:underline text-center font-bold">GALLERY</a>
                        </div>
                        <div class="py-4">
                            <a href="#review" class="hover:text-gray-400 hover:underline text-center font-bold">REVIEW</a>
                        </div>
                        <div class="py-4">
                            <a href="#kontakkami" class="hover:text-gray-700 hover:underline text-center font-bold">KONTAK KAMI</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- Content -->
            <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </body>
</html>
