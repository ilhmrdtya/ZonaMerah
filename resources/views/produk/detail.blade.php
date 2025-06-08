<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk GLOW#29</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    @include('navbar')

    <div class="container mx-auto py-10">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Bagian Kiri: Gambar & Judul Produk -->
            <div class="flex-1 bg-white rounded-xl shadow-lg p-6 flex flex-col items-center">
                <img src="{{ asset('img/image Registrasi.png') }}" alt="Produk GLOW#29" class="w-full max-w-md h-80 object-cover rounded-xl mb-6">
                <div class="w-full">
                    <h2 class="text-2xl font-bold text-yellow-400 mb-2">GLOW#29</h2>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Nama Produk: Kamera Mirrorless Sony A6000</h3>
                    <span class="inline-block bg-orange-200 text-orange-700 text-xs px-3 py-1 rounded mb-3">
                        Status: Di Tukar Tambahkan
                    </span>
                </div>
            </div>
            <!-- Bagian Kanan: Detail Ringkas Produk -->
            <div class="w-full max-w-xs bg-white rounded-xl shadow-lg p-6">
                <div class="mb-6">
                    <div class="flex items-center mb-4">
                        <span class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 mr-3">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M8 7V3M16 7V3M4 11h16M4 19h16M4 15h16"></path>
                            </svg>
                        </span>
                        <div>
                            <div class="font-bold text-gray-700 text-sm">Status</div>
                            <div class="text-gray-500 text-sm">Di Tukar Tambahkan</div>
                        </div>
                    </div>
                    <div class="flex items-center mb-4">
                        <span class="w-8 h-8 flex items-center justify-center rounded-full bg-green-100 mr-3">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 8v4l3 3"></path>
                            </svg>
                        </span>
                        <div>
                            <div class="font-bold text-gray-700 text-sm">Kondisi</div>
                            <div class="text-gray-500 text-sm">Like New, 99%</div>
                        </div>
                    </div>
                    <div class="flex items-center mb-4">
                        <span class="w-8 h-8 flex items-center justify-center rounded-full bg-purple-100 mr-3">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M17 20h5v-2a3 3 0 00-5.356-1.857"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M17 20H7a2 2 0 01-2-2v-5a2 2 0 012-2h10a2 2 0 012 2v5a2 2 0 01-2 2z"></path>
                            </svg>
                        </span>
                        <div>
                            <div class="font-bold text-gray-700 text-sm">Kapasitas Stok</div>
                            <div class="text-gray-500 text-sm">3 Unit</div>
                        </div>
                    </div>
                    <div class="flex items-center mb-4">
                        <span class="w-8 h-8 flex items-center justify-center rounded-full bg-yellow-100 mr-3">
                            <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <rect x="3" y="11" width="18" height="7" rx="2"></rect>
                                <path d="M16 11V7a4 4 0 1 0-8 0v4"></path>
                            </svg>
                        </span>
                        <div>
                            <div class="font-bold text-gray-700 text-sm">Garansi</div>
                            <div class="text-gray-500 text-sm">Masih berlaku 5 bulan</div>
                        </div>
                    </div>
                    <div class="flex items-center mb-4">
                        <span class="w-8 h-8 flex items-center justify-center rounded-full bg-pink-100 mr-3">
                            <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M12 8c-1.657 0-3 1.343-3 3 0 1.657 1.343 3 3 3 1.657 0 3-1.343 3-3 0-1.657-1.343-3-3-3z"></path>
                                <path d="M12 2v2M12 20v2M4.93 4.93l1.414 1.414M17.657 17.657l1.414 1.414M2 12h2m16 0h2M4.93 19.07l1.414-1.414M17.657 6.343l1.414-1.414"></path>
                            </svg>
                        </span>
                        <div>
                            <div class="font-bold text-gray-700 text-sm">Biaya</div>
                            <div class="text-green-600 font-bold text-lg">GRATIS</div>
                        </div>
                    </div>
                </div>
                <div class="border-t pt-4">
                    <div class="flex items-center mb-2">
                        <span class="w-8 h-8 flex items-center justify-center rounded-full bg-indigo-100 mr-3">
                            <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M21 10.5a8.38 8.38 0 01-.9 3.8A8.5 8.5 0 113 10.5"></path>
                            </svg>
                        </span>
                        <div>
                            <div class="font-bold text-gray-700 text-sm">Brand</div>
                            <div class="text-gray-500 text-sm">Sony</div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 mr-3">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M12 4v16m8-8H4"></path>
                            </svg>
                        </span>
                        <div>
                            <div class="font-bold text-gray-700 text-sm">Kategori</div>
                            <div class="text-gray-500 text-sm">Kamera Mirrorless</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Detail Produk Scrollable -->
        <div class="bg-white rounded-xl shadow-lg mt-8 p-8 max-h-80 overflow-y-auto">
            <h3 class="text-xl font-bold mb-4 text-gray-800">Detail Produk</h3>
            <p class="text-gray-700 mb-4">
                Kamera Mirrorless Sony A6000 adalah pilihan tepat bagi kamu yang sedang mencari kamera ringan dengan kualitas profesional. Produk ini masih sangat mulus (99%), semua fungsi berjalan normal, dan dilengkapi dengan garansi resmi yang masih berlaku 5 bulan lagi.
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-4">
                <li>24.3 MP Exmor APS HD CMOS sensor</li>
                <li>ISO hingga 25600 untuk hasil maksimal di segala kondisi cahaya</li>
                <li>Fast Hybrid AF dengan 179 titik fokus</li>
                <li>Layar LCD 3 inch dapat diputar</li>
                <li>Termasuk 2 baterai & charger original Sony</li>
                <li>Tas kamera eksklusif Sony</li>
                <li>Stok terbatas, GRATIS biaya tukar tambah</li>
            </ul>
            <p class="text-gray-700">
                Hubungi kami untuk negosiasi atau informasi lebih lanjut terkait produk dan proses tukar tambah.
            </p>
        </div>
        <!-- Tombol Kembali -->
        <div class="flex justify-end mt-6">
            <a href="/tukar_tambah" class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded transition">Kembali</a>
        </div>
    </div>

    @include('footer')
</body>
</html>