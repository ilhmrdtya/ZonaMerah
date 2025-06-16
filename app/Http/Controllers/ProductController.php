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
        $this->authorize('update', $product);
        return view('products.form', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $this->authorize('update', $product);

        $validated = $this->validateProduct($request, $product);

        // Handle file upload if new image is provided
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        // Set price to null if product is FREE
        if ($request->type === 'FREE') {
            $validated['price'] = null;
        }

        $product->update($validated);

        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui!');
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
}