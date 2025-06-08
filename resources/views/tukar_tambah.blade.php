<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tukar/Tambah Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
        <h1 class="text-3xl font-bold text text-center mb-6">Tukar/Tambah Produk</h1>
        <div class="mx-auto border-b-4 border-[#3F72AF] my-3 w-[220px]"></div>

        <!-- Tombol -->
        <div id="tombol-tambah" class="flex align-end justify-end">
            <button class="bg-pink-500  p-4 text-white rounded-lg hover:bg-pink-600 hover:shadow-lg"><a href="{{ route('Lihatproduk') }}">Lihat Produk</a></button>
            <button onclick="showForm()" class="bg-blue-500 ms-4 p-4 text-white rounded-xl hover:bg-blue-600 hover:shadow-lg">Tambah Produk</button>
        </div>
        
        <!-- Form Tambah Produk -->
        <div id="form-produk" class="max-w-lg mx-auto mt-8 bg-white p-8 rounded-xl shadow hidden">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Form Tambah Produk</h2>
            <form>
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
                        <option value="Di Tukar Tambahkan">Di Tukar Tambahkan</option>
                        <option value="Tersedia">Tersedia</option>
                    </select>
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
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

                <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col">
                    <img src="{{ asset('img/image Registrasi.png') }}" alt="Produk 2" class="w-full h-48 object-cover">
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Nama Produk</h3>
                        <h4 class="text-gray-700 mb-2 text-orange-500">Status : Di Tukar Tambahkan</h4>
                        <p class="text-gray-600 mb-4 flex-1">Deskripsi singkat produk yang bisa ditukar atau ditambah.</p>
                        <div class="flex gap-2 mt-4">
                            <a href="#" class="flex-1 inline-block text-center bg-sky-600 hover:bg-sky-700 text-white font-semibold py-2 px-4 rounded-full transition">Negosiasi</a>
                            <a href="/produk/1" class="flex-1 inline-block text-center bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-full transition">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan kartu produk lain di sini jika ada -->
            </div>
        </div>
        <!-- Akhir List Produk -->

    </div>

    <!-- Footer -->
    @include('footer')
</body>
</html>