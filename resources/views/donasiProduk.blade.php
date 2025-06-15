<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donasi Produk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    @include('navbar')

    <!-- main content -->
    <div id="tukar_Tambah" class="mt-24 min-100vh max-100vh mx-2 md:mx-3 lg:mx-4 mb-2 md:mb-3 lg:mb-4 p-5">

        <div class="flex align-end justify-end">
            <button class="bg-pink-500  p-4 text-white rounded-lg hover:bg-pink-600 hover:shadow-lg">Lihat Produk</button>
            <button class="bg-blue-500 ms-4 p-4 text-white rounded-xl hover:bg-blue-600 hover:shadow-lg">Tambah Produk</button>
        </div>

        <div class="produk mt-12">
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
                                <a href="" class="flex-1 inline-flex items-center justify-center gap-2 bg-amber-500 hover:bg-amber-600  text-white font-semibold py-3 px-4 rounded-lg transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                    </svg>
                                    Negosiasi
                                </a>
                                <a href="/produk/1" class="flex items-center justify-center w-12 h-12 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-lg transition">
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
        </div>


    </div>

    <!-- Footer -->
    @include('footer')
</body>
</html>