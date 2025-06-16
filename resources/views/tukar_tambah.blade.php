<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Donasi Produk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <style>
        body { background: #f5f6f8; }
        .form-x-close:hover { color: #333 !important; }
    </style>
</head>
<body>
    @include('navbar')
    <div id="donasi_produk" class="mt-24 mx-2 md:mx-3 lg:mx-4 mb-2 md:mb-3 lg:mb-4 p-5">

        <!-- Tombol kanan atas -->
        <div id="tombol-tambah" class="flex justify-end gap-4 mb-6">
            <a href="{{ route('Lihatproduk') }}" class="bg-pink-500 px-6 py-3 text-white rounded-lg hover:bg-pink-600 hover:shadow-lg font-semibold transition-all">Lihat Produk</a>
            <button type="button" onclick="showForm()" class="bg-blue-500 px-6 py-3 text-white rounded-lg hover:bg-blue-600 hover:shadow-lg font-semibold transition-all">Tambah Produk</button>
        </div>

        <!-- FORM DONASI PRODUK (full frame, NOT centered) -->
        <form id="product-form" action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}" method="POST" enctype="multipart/form-data" class="w-full hidden">
            @csrf
            @if(isset($product))
                @method('PUT')
            @endif

        <!-- Upload Gambar -->
        <div class="mb-8 w-full">
            <label class="block text-[#1a232f] font-semibold mb-2">Foto Produk @if(!isset($product))*@endif</label>
            <div class="flex items-center w-full">
                <label class="w-full h-44 flex flex-col items-center justify-center border-2 border-dashed border-gray-300 hover:border-blue-400 rounded-xl cursor-pointer transition-all">
                    <div id="image-preview" class="@if(!isset($product->image)) hidden @endif mb-2">
                        <img src="{{ isset($product->image) ? asset('storage/'.$product->image) : '' }}" alt="Preview" class="h-32 object-cover rounded-lg">
                    </div>
                    <div id="upload-icon" class="@if(isset($product->image)) hidden @endif">
                        <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-2"></i>
                        <p class="text-base text-gray-500">Unggah maksimal 1 foto (jpg/png/webp)</p>
                    </div>
                    <input type="file" name="image" id="image-input" class="hidden" accept="image/*" @if(!isset($product))) required @endif>
                </label>
            </div>
            @error('image')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Nama Produk -->
        <div class="mb-6 w-full">
            <label for="title" class="block text-[#1a232f] font-semibold mb-2">Nama Produk</label>
            <input type="text" id="title" name="title" value="{{ old('title', $product->title ?? '') }}" class="w-full px-5 py-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 bg-[#fafdff] text-[#1a232f]" placeholder="Masukkan nama produk" required>
            @error('title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Deskripsi Produk -->
        <div class="mb-6 w-full">
            <label for="description" class="block text-[#1a232f] font-semibold mb-2">Deskripsi Produk</label>
            <textarea id="description" name="description" rows="3" class="w-full px-5 py-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 bg-[#fafdff] text-[#1a232f]" placeholder="Masukkan deskripsi produk" required>{{ old('description', $product->description ?? '') }}</textarea>
            @error('description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Tipe Produk -->
        <div class="mb-6 w-full">
            <label for="type" class="block text-[#1a232f] font-semibold mb-2">Tipe Produk</label>
            <select id="type" name="type" class="w-full px-5 py-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 bg-[#fafdff] text-[#1a232f]" required>
                <option value="">Pilih tipe</option>
                <option value="Ditukar" @if(old('type', $product->type ?? '') == 'Ditukar') selected @endif>Ditukar</option>
                <option value="diTambah" @if(old('type', $product->type ?? '') == 'diTambah') selected @endif>diTambah</option>
            </select>
            @error('type')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Harga -->
        <div class="mb-10 w-full" id="price-field">
            <label for="price" class="block text-[#1a232f] font-semibold mb-2">Harga</label>
            <input type="number" id="price" name="price" step="0.01" value="{{ old('price', $product->price ?? '') }}" class="w-full px-5 py-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 bg-[#fafdff] text-[#1a232f]" placeholder="Masukkan harga produk">
            @error('price')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Tombol Aksi -->
        <div class="flex flex-col sm:flex-row gap-4 w-full">
            <button type="submit" id="submit-btn" class="flex-1 bg-blue-500 text-white font-bold py-4 px-6 rounded-lg hover:bg-blue-600 hover:shadow-lg transition-all text-lg flex items-center justify-center">
                <span id="btn-text">{{ isset($product) ? 'Update Produk' : 'Simpan Produk' }}</span>
                <svg id="loading-spinner" class="hidden w-5 h-5 ml-2 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </button>
            <button type="button" onclick="window.history.back()" class="flex-1 bg-gray-300 text-gray-800 font-bold py-4 px-6 rounded-lg hover:bg-gray-400 hover:shadow-lg transition-all text-lg">Batal</button>
        </div>
        </form>

        <!-- Daftar Produk -->
        <div id="produk-list" class="mt-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($products as $product)
                <div class="group bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 flex flex-col">
                    <div class="relative overflow-hidden h-60">
                        @if($product->image)
                        <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->title }}" 
            class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105">
                        @else
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30" alt="Produk Donasi" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                        <span class="absolute top-4 right-4 bg-white/90 text-amber-500 text-xs font-bold px-3 py-1 rounded-full">
                            {{ $product->type }}
                        </span>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 rounded-full bg-gray-200 mr-3 overflow-hidden">
                                @if($product->user->profile_photo_path)
                                <img src="{{ asset('storage/'.$product->user->profile_photo_path) }}" alt="Seller" class="w-full h-full object-cover">
                                @else
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($product->user->name) }}&color=7F9CF5&background=EBF4FF" alt="Seller" class="w-full h-full object-cover">
                                @endif
                            </div>
                            <span class="text-sm text-gray-600">{{ $product->user->name }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $product->title }}</h3>
                        <p class="text-gray-600 mb-4 flex-1">{{ Str::limit($product->description, 100) }}</p>
                        <div class="pt-4 border-t border-gray-100">
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-sm font-medium text-gray-500">Jumlah Nilai :</span>
                                <span class="text-lg font-bold text-amber-600">
                                    @if($product->type === 'FREE')
                                    Rp 0
                                    @else
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                    @endif
                                </span>
                            </div>
                            <div class="flex gap-3">
                                <a href="#" class="flex-1 inline-flex items-center justify-center gap-2 bg-amber-500 hover:bg-amber-600 text-white font-semibold py-3 px-4 rounded-lg transition-all">
                                    <i class="bi bi-chat-dots"></i>
                                    Negosiasi
                                </a>
                                <a href="{{ route('products.show', $product->id) }}" class="flex items-center justify-center w-12 h-12 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-lg transition">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>

    @include('footer')

    <script>


        function showForm() {
            document.getElementById('product-form').classList.remove('hidden');
            document.getElementById('produk-list').classList.add('hidden');
            document.getElementById('tombol-tambah').classList.add('hidden');
        }
        function hideForm() {
            document.getElementById('product-form').classList.add('hidden');
            document.getElementById('produk-list').classList.remove('hidden');
            document.getElementById('tombol-tambah').classList.remove('hidden');
            document.getElementById('preview-image').src = '';
            document.getElementById('preview-image').classList.add('hidden');
        }
        function previewImage(input) {
            const image = document.getElementById('preview-image');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    image.src = e.target.result;
                    image.classList.remove('hidden');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }


    // Toggle price field based on product type
    function togglePriceField() {
        const type = document.getElementById('type').value;
        const priceField = document.getElementById('price-field');
        const priceInput = document.getElementById('price');
        
        if (type === 'FREE') {
            priceField.style.display = 'none';
            priceInput.removeAttribute('required');
            priceInput.value = '';
        } else {
            priceField.style.display = 'block';
            if (type === 'Ditukar' || type === 'diTambah') {
                priceInput.setAttribute('required', 'required');
            } else {
                priceInput.removeAttribute('required');
            }
        }
    }

    // Image preview
    document.getElementById('image-input').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                document.getElementById('image-preview').innerHTML = 
                    `<img src="${event.target.result}" alt="Preview" class="h-32 object-cover rounded-lg">`;
                document.getElementById('image-preview').classList.remove('hidden');
                document.getElementById('upload-icon').classList.add('hidden');
            };
            reader.readAsDataURL(file);
        }
    });

    // Form submission
    document.getElementById('product-form').addEventListener('submit', function() {
        const submitBtn = document.getElementById('submit-btn');
        const spinner = document.getElementById('loading-spinner');
        const btnText = document.getElementById('btn-text');
        
        submitBtn.disabled = true;
        spinner.classList.remove('hidden');
        btnText.textContent = 'Memproses...';
    });

    // Initialize
    document.addEventListener('DOMContentLoaded', function() {
        togglePriceField();
        document.getElementById('type').addEventListener('change', togglePriceField);
    });
</script>
</body>
</html>