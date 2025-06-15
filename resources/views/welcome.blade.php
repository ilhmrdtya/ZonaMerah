<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barterin</title>
     <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
    <!-- FontAwesome CDN -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />

</head>
<body>
    <!-- Navbar -->
     @include('navbar')

    <!-- Hero Section -->
    <section class="hero w-full flex items-center justify-center min-h-screen overflow-hidden" style="background-image: url('{{ asset('img/Hero section (2).png') }}'); background-size: cover; background-position: center;">
    
      <!-- Content -->
      <div class="relative z-10 container mx-auto px-4 text-center text-white">
        <h1 class="mb-6 text-4xl font-bold tracking-tight sm:text-5xl md:text-6xl lg:text-7xl" style="line-height: 1.2">
          WELCOME TO <span class="relative whitespace-nowrap text-sky-400 dark:text-sky-400">
            <svg aria-hidden="true" viewBox="0 0 418 42" class="absolute top-2/3 left-0 h-[0.58em] w-full fill-sky-400/70 dark:fill-sky-300/60" preserveAspectRatio="none">
              <path d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.780 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.540-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.810 23.239-7.825 27.934-10.149 28.304-14.005 .417-4.348-3.529-6-16.878-7.066Z"></path>
            </svg>
            <span class="relative">Barterin</span>
          </span> Website
        </h1>
        <p class="mx-auto mb-8 max-w-2xl text-lg">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam similique suscipit aut voluptatum perferendis, in a quam facere aliquam quae?
        </p>
        </p>
    
        <!-- CTA Button -->
        <div class="flex justify-center items-center mt-8" data-aos="fade-up" data-aos-delay="400">
          <p 
            class="relative flex items-center justify-center px-6 py-3 bg-sky-600 hover:bg-sky-700 text-white text-lg font-semibold rounded-full shadow-lg transform hover:scale-105 transition-transform duration-200">
            <span class="absolute inset-0 rounded-full bg-purple-600 opacity-50 animate-ping"></span>
            <span class="relative z-10 pr-2">Lihat Selengkapnya!!!</span>
          </p>
        </div>
      </div>
    
      <!-- Scroll Down Icon -->
      <div class="absolute sm:bottom-14 bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
        <a href="#about" class="cursor-pointer">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </a>
      </div>
    </section>

    <!-- Tukar/tambah -->
    <section id="services" class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Tukar/Tambah</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col">
                    <img src="https://source.unsplash.com/400x250/?product,swap" alt="Produk 1" class="w-full h-48 object-cover">
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Nama Produk</h3>
                        <p class="text-gray-600 mb-4 flex-1">Deskripsi singkat produk yang bisa ditukar atau ditambah.</p>
                        <div class="flex gap-2 mt-4">
                            <a href="#" class="flex-1 inline-block text-center bg-sky-600 hover:bg-sky-700 text-white font-semibold py-2 px-4 rounded-full transition">Negosiasi</a>
                            <a href="#" class="flex-1 inline-block text-center bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-full transition">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col">
                    <img src="https://source.unsplash.com/400x250/?item,exchange" alt="Produk 2" class="w-full h-48 object-cover">
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Nama Produk</h3>
                        <p class="text-gray-600 mb-4 flex-1">Deskripsi singkat produk yang bisa ditukar atau ditambah.</p>
                        <div class="flex gap-2 mt-4">
                            <a href="#" class="flex-1 inline-block text-center bg-sky-600 hover:bg-sky-700 text-white font-semibold py-2 px-4 rounded-full transition">Negosiasi</a>
                            <a href="#" class="flex-1 inline-block text-center bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-full transition">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col">
                    <img src="https://source.unsplash.com/400x250/?barter,goods" alt="Produk 3" class="w-full h-48 object-cover">
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Nama Produk</h3>
                        <p class="text-gray-600 mb-4 flex-1">Deskripsi singkat produk yang bisa ditukar atau ditambah.</p>
                        <div class="flex gap-2 mt-4">
                            <a href="#" class="flex-1 inline-block text-center bg-sky-600 hover:bg-sky-700 text-white font-semibold py-2 px-4 rounded-full transition">Negosiasi</a>
                            <a href="#" class="flex-1 inline-block text-center bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-full transition">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Produk Gratis -->
    <section id="portfolio" class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Produk Gratis</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col">
                    <img src="https://source.unsplash.com/400x250/?gift,free" alt="Produk Gratis 1" class="w-full h-48 object-cover">
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Nama Produk Gratis</h3>
                        <p class="text-gray-600 mb-4 flex-1">Deskripsi singkat produk gratis yang bisa diambil oleh pengguna.</p>
                        <div class="flex gap-2 mt-4">
                            <a href="#" class="flex-1 inline-block text-center bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-full transition">Inginkan</a>
                            <a href="#" class="flex-1 inline-block text-center bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-full transition">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col">
                    <img src="https://source.unsplash.com/400x250/?free,stuff" alt="Produk Gratis 2" class="w-full h-48 object-cover">
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Nama Produk Gratis</h3>
                        <p class="text-gray-600 mb-4 flex-1">Deskripsi singkat produk gratis yang bisa diambil oleh pengguna.</p>
                        <div class="flex gap-2 mt-4">
                            <a href="#" class="flex-1 inline-block text-center bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-full transition">Inginkan</a>
                            <a href="#" class="flex-1 inline-block text-center bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-full transition">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col">
                    <img src="https://source.unsplash.com/400x250/?giveaway,product" alt="Produk Gratis 3" class="w-full h-48 object-cover">
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Nama Produk Gratis</h3>
                        <p class="text-gray-600 mb-4 flex-1">Deskripsi singkat produk gratis yang bisa diambil oleh pengguna.</p>
                        <div class="flex gap-2 mt-4">
                            <a href="#" class="flex-1 inline-block text-center bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-full transition">Inginkan</a>
                            <a href="#" class="flex-1 inline-block text-center bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-full transition">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- kenapa harus barterin -->
    <section id="kenapa-barterin" class="m-4 p-6 rounded-3xl shadow-xl bg-[#AFD3E2]">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
        
        <!-- Image Column -->
        <div class="flex justify-center">
        <img src="{{ asset('img/kenapaBarterin.png') }}" alt="Ilustrasi Barter" class="w-4/6">
        </div>
        
        <!-- Content Column -->
        <div class="lg:pl-6">
        <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-2 text-center lg:text-left">Kenapa Harus Memilih Barterin?</h2>
        <div class="w-56 h-1.5 bg-gray-800 mb-6"></div>
    
        <!-- Feature 1 -->
        <div class="flex items-start gap-4 mb-4 p-4 bg-white/80 rounded-xl">
            <i class="bi bi-box text-3xl text-gray-700"></i>
            <div>
            <h4 class="text-xl font-bold text-gray-800">Tukar Barang Tanpa Ribet</h4>
            <p class="text-gray-700">Barterin memudahkanmu menukar barang bekas layak pakai dengan barang yang kamu butuhkan.</p>
            </div>
        </div>
        
        <!-- Feature 2 -->
        <div class="flex items-start gap-4 mb-4 p-4 bg-white/80 rounded-xl">
            <i class="bi bi-people text-3xl text-gray-700"></i>
            <div>
            <h4 class="text-xl font-bold text-gray-800">Komunitas Aktif</h4>
            <p class="text-gray-700">Terhubung dengan ribuan pengguna lain untuk barter barang secara aman dan terpercaya.</p>
            </div>
        </div>
        
        <!-- Feature 3 -->
        <div class="flex items-start gap-4 mb-4 p-4 bg-white/80 rounded-xl">
            <i class="bi bi-shield-check text-3xl text-gray-700"></i>
            <div>
            <h4 class="text-xl font-bold text-gray-800">Keamanan Terjamin</h4>
            <p class="text-gray-700">Sistem verifikasi pengguna dan ulasan membantu menjaga kepercayaan dalam setiap transaksi.</p>
            </div>
        </div>
        </div>

    </div>
    </section>


    <!-- feedbeck -->
    <section id="feedback" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Feedback Pengguna</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feedback Card 1 -->
                <div class="bg-sky-50 rounded-xl shadow-lg p-6 flex flex-col items-center text-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User 1" class="w-20 h-20 rounded-full mb-4 shadow">
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Andi Pratama</h3>
                    <p class="text-gray-600 mb-4">"Barterin sangat membantu saya menukar barang yang sudah tidak terpakai. Prosesnya mudah dan komunitasnya ramah!"</p>
                    <div class="flex space-x-1">
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                    </div>
                </div>
                <!-- Feedback Card 2 -->
                <div class="bg-sky-50 rounded-xl shadow-lg p-6 flex flex-col items-center text-center">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User 2" class="w-20 h-20 rounded-full mb-4 shadow">
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Siti Rahma</h3>
                    <p class="text-gray-600 mb-4">"Saya mendapatkan banyak barang gratis yang masih bagus. Sangat direkomendasikan untuk yang ingin hidup hemat."</p>
                    <div class="flex space-x-1">
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9734;</span>
                    </div>
                </div>
                <!-- Feedback Card 3 -->
                <div class="bg-sky-50 rounded-xl shadow-lg p-6 flex flex-col items-center text-center">
                    <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="User 3" class="w-20 h-20 rounded-full mb-4 shadow">
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Budi Santoso</h3>
                    <p class="text-gray-600 mb-4">"Konsep barter dan gratisnya sangat inovatif. Saya bisa menukar barang tanpa ribet dan tanpa biaya tambahan."</p>
                    <div class="flex space-x-1">
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">FAQ - Pertanyaan Umum</h2>
            <div class="max-w-2xl mx-auto space-y-4">
                <div x-data="{ open: false }" class="border rounded-lg shadow-sm">
                    <button @click="open = !open" class="w-full flex justify-between items-center px-6 py-4 text-left text-lg font-medium text-sky-700 focus:outline-none">
                        Apa itu Barterin?
                        <svg :class="{'rotate-180': open}" class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" class="px-6 pb-4 text-gray-600">
                        Barterin adalah platform untuk menukar atau memberikan barang secara gratis dengan mudah, aman, dan tanpa biaya tersembunyi.
                    </div>
                </div>
                <div x-data="{ open: false }" class="border rounded-lg shadow-sm">
                    <button @click="open = !open" class="w-full flex justify-between items-center px-6 py-4 text-left text-lg font-medium text-sky-700 focus:outline-none">
                        Bagaimana cara menukar barang di Barterin?
                        <svg :class="{'rotate-180': open}" class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" class="px-6 pb-4 text-gray-600">
                        Daftarkan akun, unggah barang yang ingin ditukar, lalu negosiasikan dengan pengguna lain melalui fitur chat atau tombol negosiasi.
                    </div>
                </div>
                <div x-data="{ open: false }" class="border rounded-lg shadow-sm">
                    <button @click="open = !open" class="w-full flex justify-between items-center px-6 py-4 text-left text-lg font-medium text-sky-700 focus:outline-none">
                        Apakah ada biaya untuk menggunakan Barterin?
                        <svg :class="{'rotate-180': open}" class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" class="px-6 pb-4 text-gray-600">
                        Tidak, semua layanan di Barterin gratis tanpa biaya tersembunyi.
                    </div>
                </div>
                <div x-data="{ open: false }" class="border rounded-lg shadow-sm">
                    <button @click="open = !open" class="w-full flex justify-between items-center px-6 py-4 text-left text-lg font-medium text-sky-700 focus:outline-none">
                        Apakah saya bisa memberikan barang secara gratis?
                        <svg :class="{'rotate-180': open}" class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" class="px-6 pb-4 text-gray-600">
                        Ya, Anda bisa memberikan barang secara gratis agar dapat dimanfaatkan oleh pengguna lain.
                    </div>
                </div>
                <div x-data="{ open: false }" class="border rounded-lg shadow-sm">
                    <button @click="open = !open" class="w-full flex justify-between items-center px-6 py-4 text-left text-lg font-medium text-sky-700 focus:outline-none">
                        Bagaimana keamanan transaksi di Barterin?
                        <svg :class="{'rotate-180': open}" class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" class="px-6 pb-4 text-gray-600">
                        Barterin menyediakan sistem chat dan negosiasi langsung antar pengguna untuk memastikan transparansi dan keamanan transaksi.
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
        </div>
    </section>

    <!-- Footer -->
    @include('footer')


    
</body>
</html>