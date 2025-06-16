<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
        <!-- FontAwesome CDN -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />

    <!-- CSS SweetAlert -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>

</head>
<body>
<div class="container mx-auto px-4 py-8">
<h1 class="text-3xl font-bold text-gray-900 mb-8 flex items-center gap-4">
    <button onclick="window.history.back()" class="flex items-center justify-center w-10 h-10 rounded-full  text-gray-700">
        <i class="fas fa-arrow-left"></i>
    </button>
    <span class="flex items-center">
        <i class="fas fa-box-open text-blue-500 mr-3 text-2xl"></i>
        <span class="bg-gradient-to-r from-blue-600 to-blue-400 bg-clip-text text-transparent">
            Daftar Produk 
        </span>
    </span>
</h1>

    <!-- Product Table -->
<div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-100">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <i class="fas fa-image mr-1"></i> Foto
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <i class="fas fa-tag mr-1"></i> Nama Produk
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <i class="fas fa-align-left mr-1"></i> Deskripsi
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <i class="fas fa-info-circle mr-1"></i> Status
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <i class="fas fa-money-bill-wave mr-1"></i> Harga
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <i class="fas fa-cog mr-1"></i> Aksi
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($products as $product)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex-shrink-0 h-12 w-12">
                            <img class="h-12 w-12 rounded-lg object-cover border border-gray-200" 
                                 src="{{ asset('storage/'.$product->image) }}" 
                                 alt="{{ $product->title }}">
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm font-semibold text-gray-900">{{ $product->title }}</div>
                        <div class="text-xs text-gray-500">ID: {{ $product->id }}</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-600 line-clamp-2">{{ $product->description }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($product->type == 'FREE')
                        <span class="px-2.5 py-1 inline-flex text-xs leading-4 font-semibold rounded-full bg-green-100 text-green-800">
                            <i class="fas fa-check-circle mr-1"></i> FREE
                        </span>
                        @elseif($product->type == 'Ditukar')
                        <span class="px-2.5 py-1 inline-flex text-xs leading-4 font-semibold rounded-full bg-blue-100 text-blue-800">
                            <i class="fas fa-exchange-alt mr-1"></i> TUKAR
                        </span>
                        @else
                        <span class="px-2.5 py-1 inline-flex text-xs leading-4 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            <i class="fas fa-plus-circle mr-1"></i> TAMBAH
                        </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex items-center space-x-2">
                            <!-- Tombol Edit -->
                            <a href="{{ route('products.edit', $product->id) }}" class="text-blue-600 hover:text-blue-800 p-1.5 rounded-full hover:bg-blue-50 transition">
                                <i class="fas fa-edit"></i>
                            </a>
                            
                            <!-- Tombol Delete -->
                            <form id="delete-form-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="button" 
                                        onclick="confirmDelete({{ $product->id }})" 
                                        class="text-red-600 hover:text-red-800 p-1.5 rounded-full hover:bg-red-50 transition">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                            
                            <!-- Tombol View -->
                            <button class="text-purple-600 hover:text-purple-800 p-1.5 rounded-full hover:bg-purple-50 transition">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Table Footer with Pagination -->
    <div class="bg-gray-50 px-6 py-3 flex items-center justify-between border-t border-gray-200">
        <div class="text-sm text-gray-500">
            Menampilkan <span class="font-medium">{{ $products->firstItem() }}-{{ $products->lastItem() }}</span> dari <span class="font-medium">{{ $products->total() }}</span> produk
        </div>
        <div class="flex space-x-2">
            @if($products->onFirstPage())
                <button class="px-3 py-1 border rounded-md text-sm font-medium text-gray-400 bg-white cursor-not-allowed">
                    Sebelumnya
                </button>
            @else
                <a href="{{ $products->previousPageUrl() }}" class="px-3 py-1 border rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                    Sebelumnya
                </a>
            @endif

            @foreach(range(1, $products->lastPage()) as $i)
                @if($i == $products->currentPage())
                    <span class="px-3 py-1 border rounded-md text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">
                        {{ $i }}
                    </span>
                @else
                    <a href="{{ $products->url($i) }}" class="px-3 py-1 border rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                        {{ $i }}
                    </a>
                @endif
            @endforeach

            @if($products->hasMorePages())
                <a href="{{ $products->nextPageUrl() }}" class="px-3 py-1 border rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                    Selanjutnya
                </a>
            @else
                <button class="px-3 py-1 border rounded-md text-sm font-medium text-gray-400 bg-white cursor-not-allowed">
                    Selanjutnya
                </button>
            @endif
        </div>
    </div>
</div>
</div>

<!-- Di bagian bawah sebelum </body> -->
<script>
function confirmDelete(id) {
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Data akan dihapus permanen!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-'+id).submit();
        }
    });
}
</script>

<!-- JavaScript SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>