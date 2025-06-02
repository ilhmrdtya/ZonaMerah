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

    <!-- kontak -->
    <section id="kontak-kami" class="mx-2 md:mx-3 lg:mx-4 mb-2 md:mb-3 lg:mb-4 p-5 text-center">
        <div class="flex flex-col md:flex-row justify-center items-center">
            
            <div class="w-full md:w-1/2 text-left mb-4 md:mb-0">
            <h1 class="font-bold mb-3 text-[#3F72AF] text-3xl md:text-4xl">Kontak Kami</h1>
            <p class="text-base md:text-lg">
                Kami di <strong>Akira Website</strong> selalu siap membantu Anda. Jika Anda memiliki pertanyaan seputar penggunaan platform, kendala teknis, permintaan informasi, atau ingin memberikan masukan dan saran, tim kami dengan senang hati akan mendengarkan dan memberikan solusi terbaik. <br><br>

                Layanan pelanggan tersedia setiap <strong>Senin – Jumat</strong>, pukul <strong>08.00 – 17.00 WIB</strong>. Di luar jam tersebut, Anda tetap dapat mengirim pesan dan kami akan membalasnya pada hari kerja berikutnya.
            </p>
            <a href="https://wa.me/6281234567890" target="_blank" 
                class="inline-block mt-4 px-6 py-3 rounded-full shadow-sm text-white text-lg font-medium"
                style="background-color: #3F72AF;">
                <i class="bi bi-whatsapp mr-2"></i> Kontak Melalui WhatsApp
            </a>
            </div>
            
            <div class="w-full md:w-1/2 flex justify-center items-center">
            <img src="img/section kontak.png" alt="Kontak" class="w-full max-w-full h-auto">
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