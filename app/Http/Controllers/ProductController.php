<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
        public function create()
        {
            // Ambil semua produk untuk ditampilkan bersama form
            $products = Product::where('user_id', auth()->id())->latest()->get();
            return view('products.create', compact('products'));
        }

    public function store(Request $request)
    {
        $validated = $this->validateProduct($request);

        // Handle file upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        // Set price to null if product is FREE
        if ($request->type === 'FREE') {
            $validated['price'] = null;
        }

        // Associate product with authenticated user
        $validated['user_id'] = Auth::id();

        Product::create($validated);

        return redirect()->back()->with('success', 'Produk berhasil disimpan!');
    }

public function edit(Product $product)
{
    return view('products.edit', ['product' => $product]);
}


public function update(Request $request, Product $product)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'type' => 'required|in:free,Ditukar,DiTambah',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('image')) {
        // Hapus gambar lama jika ada
        if ($product->image) {
            Storage::delete('public/'.$product->image);
        }
        // Simpan gambar baru
        $validated['image'] = $request->file('image')->store('products', 'public');
    }

    $product->update($validated);

    return redirect()->route('Lihatproduk')->with('success', 'Produk berhasil diupdate');
}

    public function destroy(Product $product)
{
    try {
        // Hapus file gambar jika ada
        if ($product->image && Storage::exists('public/' . $product->image)) {
            Storage::delete('public/' . $product->image);
        }
        
        $product->delete();
        
        return redirect()->route('lihat.produk')
            ->with('success', 'Produk berhasil dihapus');
    } catch (\Exception $e) {
        return redirect()->back()
            ->with('error', 'Gagal menghapus produk: ' . $e->getMessage());
    }
}

    public function show($id) {
    $product = Product::findOrFail($id);
    return view('product.show', compact('product'));
}


    protected function validateProduct(Request $request, $product = null)
    {
        return $request->validate([
            'image' => $product ? 'nullable|image|mimes:jpg,png,webp|max:2048' : 'required|image|mimes:jpg,png,webp|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|in:Ditukar,diTambah,FREE',
            'price' => $request->type !== 'FREE' ? 'required|numeric|min:0' : 'nullable|numeric|min:0'
        ]);
    }

public function Lihatproduk()
{
    $products = Product::paginate(10); // atau ->all() jika tidak paginate
    return view('Lihatproduk', compact('products')); // ⬅️ ini yang penting
}


}