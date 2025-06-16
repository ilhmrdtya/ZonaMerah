<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tukar/Tambah Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script>
        function showForm() {
            document.getElementById('form-produk').classList.remove('hidden');
            document.getElementById('produk-list').classList.add('hidden');
            document.getElementById('tombol-tambah').classList.add('hidden');
        }
        function hideForm() {
            document.getElementById('form-produk').classList.add('hidden');
            document.getElementById('produk-list').classList.remove('hidden');
            document.getElementById('tombol-tambah').classList.remove('hidden');
        }
    </script>

</head>
  
<body>
    <!-- Navbar --> 
    @include('navbar')

    <!-- Main Content -->
    <div id="tukar_Tambah" class="mt-24 min-100vh max-100vh mx-2 md:mx-3 lg:mx-4 mb-2 md:mb-3 lg:mb-4 p-5">

        <!-- Tombol -->
        <div id="tombol-tambah" class="flex align-end justify-end">
            <button class="bg-pink-500  p-4 text-white rounded-lg hover:bg-pink-600 hover:shadow-lg"><a href="{{ route('Lihatproduk') }}">Lihat Produk</a></button>
            <button onclick="showForm()" class="bg-blue-500 ms-4 p-4 text-white rounded-xl hover:bg-blue-600 hover:shadow-lg">Tambah Produk</button>
        </div>
        
        <!-- Form Tambah Produk -->
        <div id="form-produk" class="max-w-lg mx-auto mt-8 bg-white p-8 rounded-xl shadow hidden">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Tukar/Tambah Produk</h2>
            <form>
                <!-- Upload Gambar -->
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Foto Produk*</label>
                    <div class="flex items-center justify-center w-full">
                        <label class="flex flex-col w-full h-32 border-2 border-dashed border-gray-300 hover:border-blue-400 rounded-lg cursor-pointer">
                            <div class="flex flex-col items-center justify-center pt-7">
                                <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                                <p class="text-sm text-gray-500">Unggah maksimal 1 foto</p>
                            </div>
                            <input type="file" class="hidden" multiple accept="image/*">
                        </label>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="nama_produk" class="block text-gray-700 font-semibold mb-2">Nama Produk</label>
                    <input type="text" id="nama_produk" name="nama_produk" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan nama produk">
                </div>
                <div class="mb-4">
                    <label for="deskripsi" class="block text-gray-700 font-semibold mb-2">Deskripsi Produk</label>
                    <textarea id="deskripsi" name="deskripsi" rows="3" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan deskripsi produk"></textarea>
                </div>
                <div class="mb-4">
                    <label for="status" class="block text-gray-700 font-semibold mb-2">Status Produk</label>
                    <select id="status" name="status" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option value="">Pilih status</option>
                        <option value="Di Tukar Tambahkan">Tukar</option>
                        <option value="Tersedia">Tambah</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="deskripsi" class="block text-gray-700 font-semibold mb-2">Harga</label>
                    <input type="number" id="harga" name="harga" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan harga produk">
                </div>
                <div class="flex gap-2">
                    <button type="submit" class="flex-1 bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600 transition">Simpan Produk</button>
                    <button type="button" onclick="hideForm()" class="flex-1 bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-lg hover:bg-gray-400 transition">Batal</button>
                </div>
            </form>
        </div>
        <!-- Akhir Form Tambah Produk -->

        <!-- List Produk -->
        <div id="produk-list" class="produk mt-12">
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
                                <a href="" class="flex-1 inline-flex items-center justify-center gap-2 bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 px-4 rounded-lg transition-all">
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
        <!-- Akhir List Produk -->

    </div>

    <!-- Footer -->
    @include('footer')
</body>
</html>