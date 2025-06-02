<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donasi Produk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6 text-center">Donasi Produk</h1>
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow p-6">
            <!-- Chat Section -->
            <div class="mb-6">
                <div class="flex flex-col space-y-4 max-h-64 overflow-y-auto" id="chat-messages">
                    <!-- Contoh pesan -->
                    <div class="flex items-start">
                        <div class="bg-blue-100 text-blue-800 px-4 py-2 rounded-lg max-w-xs">
                            Halo, saya ingin berdonasi produk makanan.
                        </div>
                    </div>
                    <div class="flex items-end justify-end">
                        <div class="bg-green-100 text-green-800 px-4 py-2 rounded-lg max-w-xs">
                            Terima kasih! Silakan klik tombol "Inginkan" jika Anda ingin produk ini.
                        </div>
                    </div>
                </div>
                <form class="mt-4 flex" id="chat-form">
                    <input type="text" class="flex-1 border rounded-l-lg px-4 py-2 focus:outline-none" placeholder="Ketik pesan..." />
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r-lg hover:bg-blue-600">Kirim</button>
                </form>
            </div>
            <!-- Produk Section -->
            <div class="border-t pt-6">
                <div class="flex items-center space-x-4">
                    <img src="https://via.placeholder.com/80" alt="Produk" class="w-20 h-20 rounded object-cover">
                    <div>
                        <h2 class="text-xl font-semibold">Nama Produk</h2>
                        <p class="text-gray-600">Deskripsi singkat produk yang didonasikan.</p>
                        <div class="mt-2 flex space-x-2">
                            <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Inginkan</button>
                            <button class="bg-gray-200 text-gray-800 px-4 py-2 rounded hover:bg-gray-300">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>