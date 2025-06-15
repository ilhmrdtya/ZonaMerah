<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barterin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
     <!-- Bootstrap Icons CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="min-h-screen flex flex-col">

    <!-- Navbar -->
    @include('navbar')

<!-- Contact Section -->
<section id="kontak-kami" class="py-16 px-4 mt-24 sm:px-6 lg:px-8 bg-gradient-to-b from-white to-blue-50">
    <div class="m-3 p-3">
        <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12 xl:gap-16">
            <!-- Contact Info -->
            <div class="w-full lg:w-1/2 text-left space-y-6">
                <div class="space-y-4">
                    <h1 class="text-4xl md:text-5xl font-bold text-[#3F72AF]">
                        <span class="relative inline-block">
                            Kontak Kami
                            <div class="border-b-4 border-[#3F72AF] my-3 w-[120px]"></div> 
                        </span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed">
                        Kami di <span class="font-semibold text-[#3F72AF]">Barterin Website</span> selalu siap membantu Anda. Jika Anda memiliki pertanyaan seputar penggunaan platform, kendala teknis, permintaan informasi, atau ingin memberikan masukan dan saran, tim kami dengan senang hati akan mendengarkan dan memberikan solusi terbaik.
                    </p>
                    
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed">
                        Layanan pelanggan tersedia setiap <span class="font-semibold">Senin – Jumat</span>, pukul <span class="font-semibold">08.00 – 17.00 WIB</span>. Di luar jam tersebut, Anda tetap dapat mengirim pesan dan kami akan membalasnya pada hari kerja berikutnya.
                    </p>
                </div>
                
                <a href="https://wa.me/6281234567890" target="_blank"
                    class="inline-flex items-center mt-6 px-8 py-4 rounded-full shadow-lg text-white text-lg font-semibold transition-all duration-300 hover:bg-[#2c5a8f] hover:shadow-xl hover:-translate-y-1"
                    style="background-color: #3F72AF;">
                    <i class="bi bi-whatsapp mr-3 text-2xl"></i> 
                    <span>Kontak Melalui WhatsApp</span>
                </a>
            </div>
            
            <!-- Contact Image -->
            <div class="w-full lg:w-1/2 flex justify-center transform hover:scale-105 transition duration-500">
                <div class="relative w-full max-w-lg">
                    <img src="{{ asset('img/kontak.png') }}" 
                         alt="Kontak Kami" 
                         class="relative w-full h-auto">
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Footer -->
    @include('footer')

</body>

</html>