<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the products with search functionality
     */
    public function index(Request $request)
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
            'RRC' => 'required|numeric',
        ]);

        // СОХРАНЕНИЕ: Создаем новый товар
        Product::create($validated);

        // ПЕРЕНАПРАВЛЕНИЕ: Возвращаемся к списку товаров с сообщением об успехе
        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

   public function filter(Request $request)
{
    try {
        $query = Product::query();
        
        Log::info('Filter request data:', $request->all());
        
        // Определяем поле для цены - используем price_rrc
        $priceField = 'price_rrc';
        
        // Фильтрация по цене
        if ($request->min_price && $request->min_price > 0) {
            $query->where($priceField, '>=', (float)$request->min_price);
        }
        
        if ($request->max_price && $request->max_price > 0) {
            $query->where($priceField, '<=', (float)$request->max_price);
        }
        
        // Фильтрация по категориям
        if ($request->categories && !empty($request->categories)) {
            // Проверяем, является ли categories массивом или JSON строкой
            $categories = $request->categories;
            if (is_string($categories)) {
                $categories = json_decode($categories, true);
            }
            
            if (is_array($categories) && !empty($categories)) {
                $query->whereIn('catigories', $categories);
            }
        }
        
        // Фильтрация по брендам
        if ($request->brands && !empty($request->brands)) {
            // Проверяем, является ли brands массивом или JSON строкой
            $brands = $request->brands;
            if (is_string($brands)) {
                $brands = json_decode($brands, true);
            }
            
            if (is_array($brands) && !empty($brands)) {
                $query->whereIn('brend', $brands);
            }
        }
        
        // Используем пагинацию вместо get()
        $products = $query->paginate(12);
        
        // Возвращаем JSON с HTML для товаров и пагинации
        return response()->json([
            'products_html' => view('products_partial', compact('products'))->render(),
            'pagination_html' => $products->links()->render()
        ]);
        
    } catch (\Exception $e) {
        Log::error('Filter error: ' . $e->getMessage());
        Log::error('Filter error trace: ' . $e->getTraceAsString());
        return response()->json([
            'error' => 'Ошибка фильтрации: ' . $e->getMessage()
        ], 500);
    }

}
}