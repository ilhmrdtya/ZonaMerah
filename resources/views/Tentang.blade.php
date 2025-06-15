<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barterin</title>
     <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

    <!-- Navbar -->
    @include('navbar')

    <!-- Tentang -->
    <section id="tentang-kami" class="mt-24 min-100vh max-100vh mx-2 md:mx-3 lg:mx-4 mb-2 md:mb-3 lg:mb-4 p-5">
    <div class="m-2 md:m-3 lg:m-3 ms-2 md:ms-3 lg:ms-4 me-2 md:me-3 lg:me-4 mb-2 md:mb-3 lg:mb-5 p-5">
        <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-10">
        
<!-- Teks Tentang Kami -->
<div>
    <div class="lg:pr-10">
        <h1 class="text-4xl font-bold text-[#3F72AF] mb-4">
            Tentang Kami
            <div class="border-b-4 border-[#3F72AF] my-3 w-[120px]"></div>
        </h1>
        <p class="text-lg font-normal text-gray-800 mb-4">
            <span class="font-bold text-[#3F72AF]">Barterin</span> adalah platform digital yang dirancang untuk memudahkan pertukaran dan donasi produk antar pengguna.
        </p>
        <p class="text-lg text-gray-700">
            Kami menyediakan wadah bagi masyarakat untuk saling bertukar barang yang sudah tidak terpakai atau mendonasikan produk yang masih layak pakai. Barterin hadir untuk mendukung ekonomi sirkular dan mengurangi limbah dengan memaksimalkan penggunaan produk. Kami percaya bahwa setiap barang memiliki nilai dan bisa bermanfaat bagi orang lain.
        </p>
        <button class="flex items-center mt-6 p-3 rounded-full shadow bg-[#3F72AF] hover:bg-[#355f93] transition">
            <i class="bi bi-arrow-repeat text-white text-2xl me-3"></i>
            <span class="text-white font-semibold text-base">Mulai Bertukar Sekarang</span>
        </button>
    </div>
</div>

        <!-- Gambar -->
        <div class="flex justify-center lg:justify-end relative">
            <div class="relative max-w-[900px]">
            <img src="{{ asset('img/tentang.png') }}" alt="Tentang Akira" class="rounded-xl shadow-2xl border-4 border-white -rotate-2 transform hover:scale-105 transition duration-500">


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