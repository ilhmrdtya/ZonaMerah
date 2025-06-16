<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="min-h-screen bg-gray-50 py-8 px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <!-- Header Section -->
            <div class="px-6 py-5 border-b border-gray-200 bg-gradient-to-r from-blue-500 to-blue-600">
                <div class="flex items-center justify-between">
                    <button onclick="window.history.back()" class="text-white hover:text-blue-100 transition-colors">
                        <i class="fas fa-arrow-left mr-2"></i> Back
                    </button>
                    <h2 class="text-xl font-bold text-white">Edit Produk</h2>
                    <div class="w-6"></div> <!-- Spacer for alignment -->
                </div>
            </div>

            <!-- Form Section -->
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
                @csrf
                @method('PUT')
                
                <!-- Product Name -->
                <div class="space-y-2">
                    <label for="title" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $product->title) }}"
                           class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                    @error('title')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description -->
                <div class="space-y-2">
                    <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea id="description" name="description" rows="4"
                              class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-150">{{ old('description', $product->description) }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Type and Price Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Product Type -->
                    <div class="space-y-2">
                        <label for="type" class="block text-sm font-medium text-gray-700">Tipe Produk</label>
                        <select id="type" name="type"
                                class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                            <option value="free" {{ $product->type == 'free' ? 'selected' : '' }}>Free</option>
                            <option value="Ditukar" {{ $product->type == 'Ditukar' ? 'selected' : '' }}>Ditukar</option>
                            <option value="DiTambah" {{ $product->type == 'DiTambah' ? 'selected' : '' }}>DiTambah</option>
                        </select>
                    </div>

                    <!-- Price -->
                    <div class="space-y-2">
                        <label for="price" class="block text-sm font-medium text-gray-700">Harga (Rp)</label>
                        <input type="number" id="price" name="price" value="{{ old('price', $product->price) }}"
                               class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                        @error('price')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Image Upload -->
                <div class="space-y-4">
                    <label class="block text-sm font-medium text-gray-700">Gambar Produk</label>
                    
                    <!-- Current Image Preview -->
                    @if($product->image)
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0 h-20 w-20 rounded-md overflow-hidden border border-gray-200">
                            <img src="{{ asset('storage/'.$product->image) }}" alt="Current product image" class="h-full w-full object-cover">
                        </div>
                        <div class="text-sm text-gray-500">
                            <p>Current image</p>
                            <label class="flex items-center text-blue-600 hover:text-blue-800 cursor-pointer mt-1">
                                <input type="checkbox" name="remove_image" class="hidden">
                                <i class="fas fa-trash-alt mr-1"></i>
                                <span>Remove image</span>
                            </label>
                        </div>
                    </div>
                    @endif

                    <!-- New Image Upload -->
                    <div class="mt-2">
                        <div class="flex items-center justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none">
                                        <span>Upload a file</span>
                                        <input id="image" name="image" type="file" class="sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">
                                    PNG, JPG, GIF up to 2MB
                                </p>
                            </div>
                        </div>
                        @error('image')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="flex justify-end space-x-3 pt-6 border-t border-gray-200">
                    <button type="button" onclick="window.history.back()" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150">
                        Cancel
                    </button>
                    <button type="submit" class="inline-flex justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150">
                        <i class="fas fa-save mr-2"></i> Update Produk
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Include AlpineJS for interactive elements -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script>
    // Simple image preview functionality
    document.getElementById('image').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const preview = document.getElementById('image-preview');
                if (preview) {
                    preview.src = event.target.result;
                    preview.classList.remove('hidden');
                }
            };
            reader.readAsDataURL(file);
        }
    });
</script>
</body>

