<footer id="footer" class="m-4 p-8 rounded-3xl border shadow-lg bg-[#0B3A50]">
    <div class="container mx-auto text-left md:text-left text-white">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8">

        <!-- Column 1 - Logo & About -->
        <div class="md:col-span-3">
            <img src="{{ asset('img/logo barterin.png') }}" alt="Logo" class="w-56 mb-4">
            <p class="font-normal text-base leading-relaxed text-white/80 mb-4">
                Barterin adalah platform digital modern untuk pelaku UMKM menukar dan mendonasikan produk secara mudah.
            </p>
            <div class="flex items-center text-white/70">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="text-base">Bojonegoro, Jawa Timur</span>
            </div>
        </div>

        <!-- Column 2 - Navigation -->
        <div class="md:col-span-3 md:pl-4">
            <h5 class="text-lg font-semibold mb-5 text-white uppercase tracking-wider">Navigasi</h5>
            <ul class="space-y-3">
                <li><a href="{{ route('tukar_tambah') }}" class="text-base text-white/80 hover:text-sky-300 transition">Tukar/Tambah</a></li>
                <li><a href="{{ route('donasiProduk') }}" class="text-base text-white/80 hover:text-sky-300 transition">Produk Gratis</a></li>
                <li><a href="{{ route('pesan') }}" class="text-base text-white/80 hover:text-sky-300 transition">Chat/Pesan</a></li>
            </ul>
        </div>

        <!-- Column 3 - About -->
        <div class="md:col-span-3 md:pl-4">
            <h5 class="text-lg font-semibold mb-5 text-white uppercase tracking-wider">Tentang</h5>
            <ul class="space-y-3">
                <li><a href="{{ route('Tentang') }}" class="text-base text-white/80 hover:text-sky-300 transition">Tentang Kami</a></li>
                <li><a href="/" class="text-base text-white/80 hover:text-sky-300 transition">Beranda</a></li>
                <li><a href="#keunggulan" class="text-base text-white/80 hover:text-sky-300 transition">Keunggulan</a></li>
            </ul>
        </div>

        <!-- Column 4 - Support -->
        <div class="md:col-span-3 md:pl-4">
            <h5 class="text-lg font-semibold mb-5 text-white uppercase tracking-wider">Dukungan</h5>
            <ul class="space-y-3">
                <li><a href="#faq" class="text-base text-white/80 hover:text-sky-300 transition">FAQ</a></li>
                <li><a href="{{ route('kontak') }}" class="text-base text-white/80 hover:text-sky-300 transition">Kontak</a></li>
                <li><a href="#testimoni" class="text-base text-white/80 hover:text-sky-300 transition">Testimoni</a></li>
            </ul>
        </div>

        </div>

        <hr class="my-3 border-white/20">

        <!-- Footer Bottom -->
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="text-white/70 text-md mb-4 md:mb-0">
                © 2024 Barterin. All Rights Reserved.
            </div>
            <div class="flex space-x-6">
                <a href="https://facebook.com/" class="text-white/70 hover:text-blue-400 transition text-2xl">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/" class="text-white/70 hover:text-sky-400 transition text-2xl">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://instagram.com/" class="text-white/70 hover:text-pink-400 transition text-2xl">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://linkedin.com/" class="text-white/70 hover:text-blue-500 transition text-2xl">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>
</footer>