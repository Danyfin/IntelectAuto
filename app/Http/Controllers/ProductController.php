<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */

   public function index()
    { 
        // Пагинация
        $products = Product::paginate(12);
        
        // Получаем уникальные категории
        $categories = Product::distinct()
            ->whereNotNull('catigories')
            ->where('catigories', '!=', '')
            ->pluck('catigories')
            ->unique()
            ->values();
            
        // Получаем уникальные бренды
        $brands = Product::distinct()
            ->whereNotNull('brend')
            ->where('brend', '!=', '')
            ->pluck('brend')
            ->unique()
            ->values();

        return view('products.index', compact('products', 'categories', 'brands'));
    }

    /**
     * Display the specified product.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created product.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'article' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'brend' => 'required|string|max:255',
            'catigories' => 'required|string|max:255',
            'price_rrc' => 'required|numeric',
        ]);

        Product::create($validated);

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }
}