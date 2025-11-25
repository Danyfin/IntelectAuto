<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products with search functionality
     */
    public function index(Request $request) // Добавляем Request для получения параметров
    { 
        // Получаем поисковый запрос из URL параметра 'search'
        $search = $request->input('search');
        
        // Создаем базовый запрос
        $query = Product::query();
        
        // ПОИСК: Если есть поисковый запрос
        if ($search) {
            $query->where(function($q) use ($search) {
                // Ищем в нескольких полях одновременно
                $q->where('name', 'LIKE', "%{$search}%")           // По названию товара
                  ->orWhere('article', 'LIKE', "%{$search}%")      // По артикулу
                  ->orWhere('brend', 'LIKE', "%{$search}%")        // По бренду
                  ->orWhere('catigories', 'LIKE', "%{$search}%")   // По категории
                  ->orWhere('description', 'LIKE', "%{$search}%"); // По описанию
            });
        }
        
        // ПАГИНАЦИЯ: Разбиваем результат на страницы по 12 товаров
        $products = $query->paginate(12);
        
        // КАТЕГОРИИ: Получаем уникальные категории для фильтра
        $categories = Product::distinct()
            ->whereNotNull('catigories')
            ->where('catigories', '!=', '')
            ->pluck('catigories')
            ->unique()
            ->values();
            
        // БРЕНДЫ: Получаем уникальные бренды для фильтра
        $brands = Product::distinct()
            ->whereNotNull('brend')
            ->where('brend', '!=', '')
            ->pluck('brend')
            ->unique()
            ->values();

        // ПЕРЕДАЧА ДАННЫХ В ШАБЛОН
        return view('products.index', compact('products', 'categories', 'brands', 'search'));
    }

    /**
     * Display the specified product.
     * Показывает детальную страницу одного товара
     */
    public function show($id)
    {
        // Находим товар по ID или возвращаем 404 ошибку
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for creating a new product.
     * Показывает форму создания нового товара (для админки)
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created product.
     * Сохраняет новый товар в базу данных
     */
    public function store(Request $request)
    {
        // ВАЛИДАЦИЯ: Проверяем обязательные поля
        $validated = $request->validate([
            'article' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'brend' => 'required|string|max:255',
            'catigories' => 'required|string|max:255',
            'RRC' => 'required|numeric', // Исправлено на RRC вместо price_rrc
        ]);

        // СОХРАНЕНИЕ: Создаем новый товар
        Product::create($validated);

        // ПЕРЕНАПРАВЛЕНИЕ: Возвращаемся к списку товаров с сообщением об успехе
        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }
}