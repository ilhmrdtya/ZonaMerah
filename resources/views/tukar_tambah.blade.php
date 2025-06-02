@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold mb-6 text-center">Tukar/Tambah Produk</h1>
    <div class="bg-white shadow rounded-lg p-6">
        <form action="{{ route('tukar-tambah.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Produk Lama</label>
                <input type="text" name="produk_lama" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Kondisi Produk Lama</label>
                <select name="kondisi_lama" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                    <option value="">Pilih Kondisi</option>
                    <option value="baik">Baik</option>
                    <option value="rusak ringan">Rusak Ringan</option>
                    <option value="rusak berat">Rusak Berat</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Produk Baru yang Diinginkan</label>
                <input type="text" name="produk_baru" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Catatan Tambahan</label>
                <textarea name="catatan" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-md hover:bg-indigo-700 transition">Kirim Permintaan</button>
            </div>
        </form>
    </div>
</div>
@endsection