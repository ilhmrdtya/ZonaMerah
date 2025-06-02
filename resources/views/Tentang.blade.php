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
    <nav class="fixed top-6 left-6 right-6 z-50 w-auto backdrop-blur-lg transition-colors duration-300 md:px-10 lg:px-10 rounded-full shadow-lg" style="background-color: #146C94;">
      <div class="container mx-auto flex h-20 items-center justify-between px-4">
        <!-- Logo and Home Link -->
        <!-- <a href="#" class="flex items-center">
          <img class="h-10 w-auto" src="https://little-joy-studio.vercel.app/studio.png" width="999" height="999" alt="little joys studio" />
        </a> -->
        <a href="/" class="flex items-center shrink-0">
                <!-- <img class="w-10" height="100" width="100" src="https://tailwindflex.com/images/logo.svg" alt="Talwindflex logo"> -->
                <span class="md:flex text-2xl mt-0.5 font-bold text-primary-600 text-white">
                   Barterin
                </span>
            </a>
    
        <!-- Desktop Menu Links -->
        <div class="hidden md:flex items-center md:gap-8 text-white">
          <a href="/" class="text-sm font-medium hover:text-purple-400 transition">Beranda</a>
          <a href="#about" class="text-sm font-medium hover:text-purple-400 transition">Tentang</a>
          <a href="#services" class="text-sm font-medium hover:text-purple-400 transition">Tukar/Tambah</a>
          <a href="#portfolio" class="text-sm font-medium hover:text-purple-400 transition">Produk gratis</a>
          <a href="#portfolio" class="text-sm font-medium hover:text-purple-400 transition">Pesan ( Chat )</a>
          <a href="#contact" class="text-sm font-medium hover:text-purple-400 transition">Kontak</a>
            <div class="auth">
          <a href="#contact" class="cursor-pointer me-2 rounded-full border-2 py-2 px-6 border-white bg-white text-purple-900 hover:bg-sky-600 hover:text-white hover:shadow-lg transition duration-300 ease-in-out">
            Masuk
          </a>
          <a href="#contact" class="cursor-pointer rounded-full border-2 py-2 px-6 border-white bg-white text-purple-900 hover:bg-fuchsia-600 hover:text-white hover:shadow-lg transition duration-300 ease-in-out">
            Daftar
          </a>
            </div>
        </div>
    
        <!-- Mobile Menu Button -->
        <div class="md:hidden">
          <button class="text-2xl text-white" onclick="setIsMenuOpen(!isMenuOpen)">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </nav>

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
    <footer class="bg-sky-900 text-white py-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center md:text-left">
                <div>
                    <h4 class="font-bold mb-4">Barterin</h4>
                    <p class="text-gray-300">Platform barter dan produk gratis untuk komunitas Indonesia.</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Navigasi</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="hover:underline">Beranda</a></li>
                        <li><a href="#about" class="hover:underline">Tentang</a></li>
                        <li><a href="#services" class="hover:underline">Tukar/Tambah</a></li>
                        <li><a href="#portfolio" class="hover:underline">Produk Gratis</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Kontak</h4>
                    <ul class="space-y-2">
                        <li>Email: <a href="mailto:info@barterin.com" class="hover:underline">info@barterin.com</a></li>
                        <li>Telepon: 0812-3456-7890</li>
                        <li>Alamat: Jakarta, Indonesia</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Ikuti Kami</h4>
                    <div class="flex justify-center md:justify-start space-x-4">
                        <a href="#" class="hover:text-sky-400"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22.46 6c-.77.35-1.6.59-2.47.7a4.3 4.3 0 0 0 1.88-2.37 8.59 8.59 0 0 1-2.72 1.04A4.28 4.28 0 0 0 16.11 4c-2.37 0-4.29 1.92-4.29 4.29 0 .34.04.67.11.99A12.13 12.13 0 0 1 3.15 5.13a4.29 4.29 0 0 0 1.33 5.72c-.7-.02-1.36-.21-1.94-.53v.05c0 2.01 1.43 3.68 3.33 4.06-.35.1-.72.16-1.1.16-.27 0-.53-.03-.78-.07.53 1.66 2.07 2.87 3.89 2.9A8.6 8.6 0 0 1 2 19.54a12.13 12.13 0 0 0 6.56 1.92c7.88 0 12.2-6.53 12.2-12.2 0-.19 0-.38-.01-.57A8.7 8.7 0 0 0 24 4.59a8.5 8.5 0 0 1-2.54.7z"/></svg></a>
                        <a href="#" class="hover:text-sky-400"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.04c-5.5 0-9.96 4.46-9.96 9.96 0 4.41 3.6 8.07 8.19 8.93v-6.32h-2.47v-2.61h2.47v-2c0-2.44 1.46-3.78 3.7-3.78 1.07 0 2.19.19 2.19.19v2.41h-1.23c-1.21 0-1.59.75-1.59 1.52v1.66h2.7l-.43 2.61h-2.27v6.32c4.59-.86 8.19-4.52 8.19-8.93 0-5.5-4.46-9.96-9.96-9.96z"/></svg></a>
                        <a href="#" class="hover:text-sky-400"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M21.35 11.1c0-5.05-4.1-9.15-9.15-9.15S3.05 6.05 3.05 11.1c0 4.54 3.29 8.29 7.6 9.04v-6.4h-2.29v-2.64h2.29V9.41c0-2.27 1.36-3.52 3.44-3.52.99 0 2.03.18 2.03.18v2.23h-1.14c-1.12 0-1.47.7-1.47 1.42v1.7h2.5l-.4 2.64h-2.1v6.4c4.31-.75 7.6-4.5 7.6-9.04z"/></svg></a>
                    </div>
                </div>
            </div>
            <div class="mt-8 text-center text-gray-400 text-sm">
                &copy; {{ date('Y') }} Barterin. All rights reserved.
            </div>
        </div>
    </footer>
    
</body>
</html>