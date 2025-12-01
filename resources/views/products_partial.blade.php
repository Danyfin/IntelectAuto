@if(isset($products) && $products->count() > 0)
    @foreach ($products as $product)
        @php
            $nameParts = explode(',', $product->name, 2);
            $mainName = trim($nameParts[0]);
            $description = isset($nameParts[1]) ? trim($nameParts[1]) : 'пласт. (уп. по 50 шт)';
        @endphp
    
        <div class="card">
            <div class="foto">
                <img class="aspect-square object-cover" src="{{ $product->photo1 }}" alt="{{ $mainName }}">
            </div>
            <h3 class="description">{{ $mainName }}</h3>
            <p class="description1">{{ $description }}</p>

            <div class="priceAndBasket">
                <div class="Price">
                    <div class="NewPrice">{{ number_format($product->RRC, 0, '.', ',') }} ₽</div>
                    <div class="OldPrice">15 000 ₽</div>
                </div>
                <button>Купить</button>
            </div>
        </div>
    @endforeach
@else
    <div class="no-products">
        <p>Товары не найдены</p>
    </div>
@endif