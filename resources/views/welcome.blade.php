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
      <div class="relative z-10 container mx-auto px-4 text-center text-dark">
        <h1 class="mb-6 text-4xl font-bold tracking-tight sm:text-5xl md:text-6xl lg:text-7xl" style="line-height: 1.2">
          WELCOME TO <span class="relative whitespace-nowrap text-sky-600 dark:text-sky-600">
            <svg aria-hidden="true" viewBox="0 0 418 42" class="absolute top-2/3 left-0 h-[0.58em] w-full fill-sky-400/70 dark:fill-sky-300/60" preserveAspectRatio="none">
              <path d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.780 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.540-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.810 23.239-7.825 27.934-10.149 28.304-14.005 .417-4.348-3.529-6-16.878-7.066Z"></path>
            </svg>
            <span class="relative">Barterin</span>
          </span> Website
        </h1>
        <p class="mx-auto mb-8 max-w-2xl text-lg">
          Website Tukar/tambah ataupun donasi produk yang memudahkan Anda untuk menukar, menambah, atau mendonasikan barang-barang Anda dengan mudah dan cepat.
        </p>
    
        <!-- Simple & Elegant UMKM Counter -->
        <div class="flex justify-center gap-8 mt-8">
        <!-- UMKM Counter -->
        <div class="text-center" data-aos="fade-up">
            <div class="text-5xl font-bold text-sky-600 mb-2">
            <span class="counter" data-target="102">102</span>+
            </div>
            <div class="text-lg font-medium text-gray-700 flex items-center justify-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>
            UMKM Terdaftar
            </div>
        </div>

        <!-- Transaction Counter -->
        <div class="text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="text-5xl font-bold text-purple-600 mb-2">
            <span class="counter" data-target="524">200</span>+
            </div>
            <div class="text-lg font-medium text-gray-700 flex items-center justify-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
            </svg>
            Transaksi Sukses
            </div>
        </div>
        </div>


      </div>
    


      <div class="absolute sm:bottom-14 bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
        <a href="#services" class="cursor-pointer">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </a>
      </div>
      </div>   
    </section>

    <!-- Tukar/tambah -->
    <section id="services" class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-14">
                <h2 class="inline-block px-4 py-2 text-sky-600 bg-sky-100 rounded-full text-3xl font-bold mb-4">Tukar/Tambah Produk</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Temukan produk menarik untuk ditukar atau tambahkan nilai dengan barang Anda</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <div class="group bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 flex flex-col">
                    <div class="relative overflow-hidden h-60">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30" alt="Produk 2" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                        <span class="absolute top-4 right-4 bg-white/90 text-purple-600 text-xs font-bold px-3 py-1 rounded-full">TAMBAH</span>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 rounded-full bg-gray-200 mr-3 overflow-hidden">
                                <img src="#" alt="Seller" class="w-full h-full object-cover">
                            </div>
                            <span class="text-sm text-gray-600">Budi Store</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Kamera Mirrorless</h3>
                        <p class="text-gray-600 mb-4 flex-1">Kondisi 90%, lengkap dengan lensa kit dan tas.</p>
                        <div class="pt-4 border-t border-gray-100">
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-sm font-medium text-gray-500">Jumlah Nilai :</span>
                                <span class="text-lg font-bold text-purple-600">Rp 2.500.000</span>
                            </div>
                            <div class="flex gap-3">
                                <a href="#" class="flex-1 inline-flex items-center justify-center gap-2 bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 px-4 rounded-lg transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                    </svg>
                                    Negosiasi
                                </a>
                                <a href="#" class="flex items-center justify-center w-12 h-12 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-lg transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-end mt-12">
                <a href="{{ route('tukar_tambah') }}" class="inline-flex items-center justify-center gap-2 border-2 border-sky-600 text-sky-600 hover:bg-sky-600 hover:text-white font-semibold py-3 px-8 rounded-full transition-all">
                    Lihat Semua Produk
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Produk Gratis -->
    <section id="produkFree" class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-14">
                <h2 class="inline-block px-4 py-2 text-emerald-600 bg-emerald-100 rounded-full text-3xl font-bold mb-4">Donasi Produk Free</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Temukan produk menarik Dari Donatur Untuk Dimanfaatkan</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <div class="group bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 flex flex-col">
                    <div class="relative overflow-hidden h-60">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30" alt="Produk 2" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                        <span class="absolute top-4 right-4 bg-white/90 text-amber-500 text-xs font-bold px-3 py-1 rounded-full">FREE</span>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 rounded-full bg-gray-200 mr-3 overflow-hidden">
                                <img src="#" alt="Seller" class="w-full h-full object-cover">
                            </div>
                            <span class="text-sm text-gray-600">Budi Store</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Kamera Mirrorless</h3>
                        <p class="text-gray-600 mb-4 flex-1">Kondisi 90%, lengkap dengan lensa kit dan tas.</p>
                        <div class="pt-4 border-t border-gray-100">
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-sm font-medium text-gray-500">Jumlah Nilai :</span>
                                <span class="text-lg font-bold text-amber-600">Rp 0</span>
                            </div>
                            <div class="flex gap-3">
                                <a href="#" class="flex-1 inline-flex items-center justify-center gap-2 bg-amber-500 hover:bg-amber-600  text-white font-semibold py-3 px-4 rounded-lg transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                    </svg>
                                    Negosiasi
                                </a>
                                <a href="#" class="flex items-center justify-center w-12 h-12 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-lg transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-end mt-12">
                <a href="{{ route('tukar_tambah') }}" class="inline-flex items-center justify-center gap-2 border-2 border-sky-600 text-sky-600 hover:bg-sky-600 hover:text-white font-semibold py-3 px-8 rounded-full transition-all">
                    Lihat Semua Produk
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
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