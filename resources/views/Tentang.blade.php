<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
     <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body style="background-color: #F6F1F1;">

    <!-- Navbar -->
    @include('navbar')

    <!-- Tentang -->
    <section id="tentang-kami" class="bg-gray-100">
    <div class="m-2 md:m-3 lg:m-3 ms-2 md:ms-3 lg:ms-4 me-2 md:me-3 lg:me-4 mb-2 md:mb-3 lg:mb-5 p-5">
        <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-10">
        
        <!-- Teks -->
        <div>
            <div class="lg:pr-10">
            <h1 class="text-4xl font-bold text-[#3F72AF] mb-4">
                Tentang Kami
                <div class="border-b-4 border-[#3F72AF] my-3 w-[120px]"></div>
            </h1>
            <p class="text-lg font-normal text-gray-800 mb-4">
                <span class="font-bold text-[#3F72AF]">Akira</span> adalah platform digital yang dirancang untuk memudahkan siapa saja dalam menjelajahi dunia literasi.
            </p>
            <p class="text-lg text-gray-700">
                Kami menyediakan akses ke ribuan buku dari berbagai genre—mulai dari fiksi, nonfiksi, edukasi, hingga referensi teknologi terkini. Akira hadir untuk mendukung kebiasaan membaca masyarakat Indonesia, khususnya pelajar dan generasi muda. Kami percaya bahwa membaca adalah langkah awal menuju perubahan besar.
            </p>
            <button class="flex items-center mt-6 p-3 rounded-full shadow bg-[#3F72AF] hover:bg-[#355f93] transition">
                <i class="bi bi-book text-white text-2xl me-3"></i>
                <span class="text-white font-semibold text-base">Temukan dunia literasi tanpa batas</span>
            </button>
            </div>
        </div>

        <!-- Gambar -->
        <div class="flex justify-center lg:justify-end relative">
            <div class="relative max-w-[500px]">
            <img src="img/Untitled design.png" alt="Tentang Akira" class="rounded-xl shadow-lg border-4 border-white -rotate-3">

            <!-- Decorative 1 -->
            <div class="absolute -top-3 -start-3">
                <div class="bg-[#3F72AF] p-3 rounded-full shadow opacity-90">
                <i class="bi bi-bookmark-star-fill text-white text-xl"></i>
                </div>
            </div>

            <!-- Decorative 2 -->
            <div class="absolute -bottom-3 -end-3">
                <div class="bg-[#3F72AF] p-3 rounded-full shadow opacity-90">
                <i class="bi bi-heart-fill text-white text-xl"></i>
                </div>
            </div>

            <!-- Floating Book -->
            <div class="absolute -bottom-4 -start-4 -z-10 -rotate-[15deg] translate-x-[-30%] translate-y-[30%]">
                <div class="bg-white p-2 rounded shadow-sm w-20 h-24">
                <div class="w-full h-full border-2 border-[#3F72AF] rounded"></div>
                </div>
            </div>

            </div>
        </div>

        </div>
    </div>
    </section>



    <!-- Footer -->
    @include('footer')
    
</body>
</html>