<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tukar/Tambah Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    @include('navbar')

    <!-- Main Content -->
    <div id="tukar_Tambah" class="mt-24 min-100vh max-100vh mx-2 md:mx-3 lg:mx-4 mb-2 md:mb-3 lg:mb-4 p-5">
        <h1 class="text-3xl font-bold text text-center mb-6">Tukar/Tambah Produk</h1>
        <div class="mx-auto border-b-4 border-[#3F72AF] my-3 w-[220px]"></div>

        <div class="flex align-end justify-end">
            <button class="bg-pink-500  p-4 text-white rounded-lg hover:bg-pink-600 hover:shadow-lg">Lihat Produk</button>
            <button class="bg-blue-500 ms-4 p-4 text-white rounded-xl hover:bg-blue-600 hover:shadow-lg">Tambah Produk</button>
        </div>

        <div class="produk mt-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

                <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col">
                    <img src="{{ asset('img/image Registrasi.png') }}" alt="Produk 2" class="w-full h-48 object-cover">
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Nama Produk</h3>
                        <h4 class="text-gray-700 mb-2 text-orange-500">Status : Di Tukar Tambahkan</h4>
                        <p class="text-gray-600 mb-4 flex-1">Deskripsi singkat produk yang bisa ditukar atau ditambah.</p>
                        <div class="flex gap-2 mt-4">
                            <a href="#" class="flex-1 inline-block text-center bg-sky-600 hover:bg-sky-700 text-white font-semibold py-2 px-4 rounded-full transition">Negosiasi</a>
                            <a href="#" class="flex-1 inline-block text-center bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-full transition">Selengkapnya</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>

    <!-- Footer -->
    @include('footer')


</body>

