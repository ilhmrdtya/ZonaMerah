<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
     <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen flex flex-col">

    <!-- Navbar -->
    @include('navbar')

    <!-- kontak -->
    <section id="kontak-kami" class="mt-24 min-100vh max-100vh mx-2 md:mx-3 lg:mx-4 mb-2 md:mb-3 lg:mb-4 p-5 text-center">
        <div class="flex flex-col md:flex-row justify-center items-center">
            
            <div class="w-full md:w-1/2 text-left mb-4 md:mb-0">
            <h1 class="font-bold mb-3 text-[#3F72AF] text-3xl md:text-4xl">Kontak Kami</h1>
            <div class="border-b-4 border-[#3F72AF] my-3 w-[120px]"></div>
            <p class="text-base md:text-lg">
                Kami di <strong>Akira Website</strong> selalu siap membantu Anda. Jika Anda memiliki pertanyaan seputar penggunaan platform, kendala teknis, permintaan informasi, atau ingin memberikan masukan dan saran, tim kami dengan senang hati akan mendengarkan dan memberikan solusi terbaik. <br><br>

                Layanan pelanggan tersedia setiap <strong>Senin – Jumat</strong>, pukul <strong>08.00 – 17.00 WIB</strong>. Di luar jam tersebut, Anda tetap dapat mengirim pesan dan kami akan membalasnya pada hari kerja berikutnya.
            </p>
            <a href="https://wa.me/6281234567890" target="_blank" 
                class="inline-block mt-4 px-6 py-3 rounded-full shadow-sm text-white text-lg font-medium"
                style="background-color: #3F72AF;">
                <i class="bi bi-whatsapp mr-2"></i> Kontak Melalui WhatsApp
            </a>
            </div>
            
            <div class="w-full md:w-1/2 flex justify-center items-center">
            <img src="{{ asset('img/kenapaBarterin.png') }}" alt="Kontak" class="w-1/2 max-w-full h-auto">
            </div>
        </div>
    </section>


    <!-- Footer -->
    @include('footer')
    
</body>
</html>