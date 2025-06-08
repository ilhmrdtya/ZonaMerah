<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <!-- navbar -->
     @include('navbar')

     <!-- content -->
    <div id="tukar_Tambah" class="mt-24 min-100vh max-100vh mx-2 md:mx-3 lg:mx-4 mb-2 md:mb-3 lg:mb-4 p-5">
        <h1 class="text-3xl font-bold text text-center mb-6">Pesan</h1>
        <div class="mx-auto border-b-4 border-[#3F72AF] my-3 w-[220px]"></div>


        <div class="Pesan flex flex-col gap-3 m-10 bg-blue-200 p-6 rounded-lg shadow-lg">
            <div class="bg-gradient-to-r from-pink-500 to-pink-600 w-full flex justify-between items-center p-4 rounded-xl shadow-lg mb-4 border border-pink-300">
                <!-- Bagian Kiri: Konten Penawaran + Icon Message -->
                <div class="flex items-start gap-3">
                    <!-- Icon Tawar-menawar -->
                    <div class="bg-pink-100 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    
                    <!-- Teks Penawaran -->
                    <div class="flex-1">
                        <p class="text-white font-semibold">Pino menawar produk Anda</p>
                        <p class="text-pink-100 text-sm">"Judul Produk"</p>
                    </div>

                    <!-- Icon Message dengan teks muncul saat hover -->
                    <div class="relative group ml-2">
                    <a href="{{ route('message') }}" class="text-pink-200 hover:text-white transition-colors" title="Lanjut ke Chat">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.77 9.77 0 01-4-.8L3 21l1.8-4A7.963 7.963 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </a>
                    <span class="absolute top-full left-1/2 -translate-x-1/2 mt-1 px-2 py-1 text-xs text-white bg-pink-700 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                        Message
                    </span>
                    </div>

                </div>

                <!-- Bagian Kanan: Aksi -->
                <div class="flex gap-2">
                    <button class="bg-white text-pink-600 px-4 py-2 rounded-lg font-medium hover:bg-pink-50 transition-colors shadow-sm">
                        Terima
                    </button>
                    <button class="bg-pink-800 text-white px-4 py-2 rounded-lg font-medium hover:bg-pink-900 transition-colors shadow-sm">
                        Tolak
                    </button>
                </div>
            </div>
   
        </div>
    </div>    

    <!-- Footer -->
    @include('footer')

    

</body>
