    <!-- Navbar -->
    <nav class="fixed top-6 left-6 right-6 z-50 w-auto backdrop-blur-lg transition-colors duration-300 md:px-10 lg:px-10 rounded-full shadow-lg" style="background-color: #146C94;">
      <div class="container mx-auto flex h-20 items-center justify-between px-4">
        <!-- Logo and Home Link -->
        <!-- <a href="#" class="flex items-center">
          <img class="h-10 w-auto" src="https://little-joy-studio.vercel.app/studio.png" width="999" height="999" alt="little joys studio" />
        </a> -->
        <a href="/" class="flex items-center shrink-0 ">
                <img class="w-40" src="{{ asset('img/logo barterin.png') }}" alt="Barterin Logo" >
        </a>
    
        <!-- Desktop Menu Links -->
        <div class="hidden md:flex items-center md:gap-8 text-white">
          <a href="/" class="text-sm font-medium hover:text-purple-400 transition">Beranda</a>
          <a href="{{ route('Tentang') }}" class="text-sm font-medium hover:text-purple-400 transition">Tentang</a>
          <a href="{{ route('tukar_tambah') }}" class="text-sm font-medium hover:text-purple-400 transition">Tukar/Tambah</a>
          <a href="{{ route('donasiProduk') }}" class="text-sm font-medium hover:text-purple-400 transition">Produk gratis</a>
          <a href="{{ route("pesan") }}" class="text-sm font-medium hover:text-purple-400 transition">Pesan ( Chat )</a>
          <a href="{{ route("kontak") }}" class="text-sm font-medium hover:text-purple-400 transition">Kontak</a>
            <div class="auth">
<div class="auth flex items-center gap-2">
  @auth
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="cursor-pointer rounded-full border-2 py-2 px-6 border-white bg-white text-purple-900 hover:bg-red-600 hover:text-white hover:shadow-lg transition duration-300 ease-in-out">
        Logout
      </button>
    </form>
  @else
    <a href="{{ route('login') }}" class="cursor-pointer me-2 rounded-full border-2 py-2 px-6 border-white bg-white text-purple-900 hover:bg-sky-600 hover:text-white hover:shadow-lg transition duration-300 ease-in-out">
      Masuk
    </a>
    <a href="{{ route('registrasi.tampil') }}" class="cursor-pointer rounded-full border-2 py-2 px-6 border-white bg-white text-purple-900 hover:bg-fuchsia-600 hover:text-white hover:shadow-lg transition duration-300 ease-in-out">
      Daftar
    </a>
  @endauth
</div>

            </div>
        </div>
    
        <!-- Mobile Menu Button -->
        <div class="md:hidden">
          <button class="text-2xl text-white" onclick="setIsMenuOpen(!isMenuOpen)">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </nav>
