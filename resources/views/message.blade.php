<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
    <!-- navbar -->
     @include('navbar')

    <!-- Message -->
<div class="message mt-32 min-h-screen mx-2 md:mx-3 lg:mx-4 mb-4 p-5">
  <div class="flex flex-col gap-4">

    <!-- Card Utama -->
    <div class="bg-white p-6 rounded-xl shadow-lg">

      <!-- Pesan -->
      <div class="space-y-4">

        <!-- Pesan dari orang lain -->
        <div class="flex">
          <div class="bg-blue-100 p-3 rounded-lg shadow text-gray-800 max-w-xs">
            <p>Halo, saya tertarik dengan produk Anda. Apakah masih tersedia?</p>
            <span class="text-xs text-gray-500 block mt-1 text-right">10:30 AM</span>
          </div>
        </div>

        <!-- Pesan dari kita -->
        <div class="flex justify-end">
          <div class="bg-blue-500 text-white p-3 rounded-lg shadow max-w-xs">
            <p>Ya, produk masih tersedia. Silakan dipesan!</p>
            <span class="text-xs text-blue-100 block mt-1 text-right">10:32 AM</span>
          </div>
        </div>

      </div>

      <!-- Form Balasan -->
      <form action="#" class="mt-6">
        <div class="flex items-center gap-3">
          <input type="text" id="message" placeholder="Tulis pesan..." class="flex-1 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
          <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition">
            Kirim
          </button>
        </div>
      </form>

    </div>
  </div>
</div>


     <!-- footer -->
      @include('footer')
</body>
</html>