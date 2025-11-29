<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/css/head_foot.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!-- ШАПКА НАЧАЛО -->
     <div class="obert">
        <header class="main-header_footer">
        <div class="Headtop"> <!-- верняя часть -->
            <div class="top1">
            <p>Ваш город:</p>
                <div class="city-selector">
                    <div class="selected-city">
                        <span>Челябинск</span>
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none">
                            <path d="M1 1L5 5L9 1" stroke="#929292" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <div class="cities-dropdown">
                        <div class="city-option" data-city="Челябинск">Челябинск</div>
                        <div class="city-option" data-city="Москва">Москва</div>
                        <div class="city-option" data-city="Санкт-Петербург">Санкт-Петербург</div>
                        <div class="city-option" data-city="Екатеринбург">Екатеринбург</div>
                        <div class="city-option" data-city="Новосибирск">Новосибирск</div>
                    </div>
                </div>
            </div>
            <div class="top2">
                <ul>
                    <li><a href="">Акции</a></li>
                    <li><a href="">О компании</a></li>
                    <li><a href="">Доставка</a></li>
                    <li><a href="">Адреса</a></li>
                    <li><a href="">Контакты</a></li>
                </ul>
            </div>
            <div class="top3">
                <a href="tel:89000000000">8 (900) 000 00 00</a>
            </div>
        </div>
        <div class="line"></div>
        <div class="Headbottom"> <!-- нижняя -->
            <div class="bottom1">
                <a href="/">
                    <img src="/images/logo.svg" alt="Logo">
                </a>
            </div>
            <div class="bottom2">
                <div class="catalog">
                    <button>
                        <img src="/images/toolbar.svg" alt="toolbar">
                        Каталог
                    </button>    
                </div> 
                <div class="search">
                    <img src="/images/search.svg" alt="search">
                    <input type="text" placeholder="Поиск">
                </div>
            </div>
        </div>
        <div class="max-920-header">
            <a href="/">
                <img src="/images/logo.svg" alt="Logo">
            </a>
            <div class="bm">
                <img src="/images/bm.svg" alt="menu">
            </div>
        </div>
        </header>
     </div>
    <!-- ШАПКА КОНЕЦ -->

    <div class="container">
        <div class="tools-info"> <!-- Навигация -->
            <a href="">Главная</a> / <a href="">Каталог товаров</a>
            <h2>Каталог товаров</h2>
            <div class="all-mob">
                <div class="search-mob">
                    <img src="/images/search.svg" alt="search">
                    <input type="text" placeholder="Поиск">
                </div>
                <div class="foto-mob">
                    <img src="/images/button-mob.svg" alt="search">
                </div>
            </div>
        </div>
        <div class="toolsANDcard">
            <!-- Боковая панель фильтров -->
            <div class="tools">
                <div class="filter-section">
                    <div class="filter__subtitle">
                        <p>Цена</p>
                        <img class="plus" src="/images/Vector.svg" alt="">
                    </div>
                    <div class="price-slider">
                        <div class="progress" id="price-progress"></div>
                        <input type="range" min="0" max="170000" value="0" class="range-min" id="range-min">
                        <input type="range" min="0" max="170000" value="170000" class="range-max" id="range-max">
                    </div>
                    <div class="price-inputs">
                        <input type="number" class="price-input" placeholder="от 0" id="min-price">
                        <input type="number" class="price-input" placeholder="до 170000" id="max-price">
                    </div>
                </div>

                <!-- Категории -->
                <div class="filter-section">
                    <div class="filter__subtitle">
                        <p>Категории</p>
                        <img class="plus" src="/images/Vector.svg" alt="">
                    </div>
                    @foreach($categories as $category)
                    <div class="filter-item">
                        <input type="checkbox" class="filter-checkbox" id="category-{{ $loop->index }}" name="categories[]" value="{{ $category }}">
                        <label for="category-{{ $loop->index }}" class="filter-label">
                            <span class="grey">{{ $category }}</span>
                        </label>
                    </div>
                    @endforeach
                </div>

                <!-- Бренды -->
                <div class="filter-section">
                    <div class="filter__subtitle">
                        <p>Бренд</p>
                        <img class="plus" src="/images/Vector.svg" alt="">
                    </div>
                    @foreach($brands as $brand)
                    <div class="filter-item">
                        <input type="checkbox" class="filter-checkbox" id="brand-{{ $loop->index }}" name="brands[]" value="{{ $brand }}">
                        <label for="brand-{{ $loop->index }}" class="filter-label">
                            <span class="grey">{{ $brand }}</span>
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Карточки товаров -->
             <div class="card-pag-wrapper">
                            <div class="cards-wrapper">
                @foreach ($products as $product)
                    @php
                        // Разделяем название по первой запятой
                        $nameParts = explode(',', $product->name, 2);
                        $mainName = trim($nameParts[0]);
                        $description = isset($nameParts[1]) ? trim($nameParts[1]) : 'пласт. (уп. по 50 шт)';
                    @endphp
                
                    <div class="card">
                        <div class="foto">
                            <img class="aspect-square object-cover" src="{{ $product->photo1 }}" alt="">
                        </div>
                        <h3 class="description">{{ $mainName }}</h3>
                        <p class="description1">{{ $description }}</p>

                        <div class="priceAndBasket">
                            <div class="Price">
                                <div class="NewPrice">{{ number_format($product->price_rrc, 0, '.', ',') }} ₽</div>
                                <div class="OldPrice">15 000 ₽</div>
                            </div>
                            <button>Купить</button>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pagination-container">
                {{ $products->links() }}
            </div>
             </div>
        </div>  
    </div>

    <!-- ФУТЕР НАЧАЛО -->
     <div class="obert">
        <footer class="main-header_footer1">
            <div class="leftfot">
                <div class="fotofot">
                    <a href="/">
                        <img src="/images/logo.svg" alt="Logo">
                    </a>
                </div>
                <div class="socialfot">
                    <a href="" target="_blank"><img src="/images/vk.svg" alt="Logo"></a>
                    <a href="" target="_blank"><img src="/images/email.svg" alt="Logo"></a>
                    <a href="" target="_blank"><img src="/images/tg.svg" alt="Logo"></a>
                </div>
                <div class="copyfoot">
                    <p>© ООО Интеллект-Авто 2025</p>
                </div>
            </div>
            <div class="rightfot">
                <div class="info1fot">
                    <p>Покупателям</p>
                    <ul>
                        <li><a href="#">Акции</a></li>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Доставка</a></li>
                    </ul>
                </div>
                <div class="info2fot">
                    <p>Информация</p>
                    <ul>
                        <li><a href="#">Реквизиты</a></li>
                        <li><a href="#">Офферта</a></li>
                        <li><a href="#">Политика конфиденциальности</a></li>
                    </ul> 
                </div>
                <div class="info3fot">
                    <p>Контакты</p>
                    <ul>
                        <li><a href="tel:89000000000">8 (900) 000 00 00</a></li>
                        <li><a href="mailto:email@gmail.com">email@gmail.com</a></li>
                        <li><a href="#">г. Челябинск, ул. Разина, д. 3 офис 908/19</a></li>
                        <li class="vpz">© ООО Интеллект-Авто 2025</li>
                    </ul>
                </div>
            </div>
        </footer>
     </div>
    <!-- ФУТЕР КОНЕЦ -->

    <script>
    document.addEventListener('DOMContentLoaded', function() {
            // Город
            const cityOptions = document.querySelectorAll('.city-option');
            const selectedCity = document.querySelector('.selected-city span');
            
            cityOptions.forEach(option => {
                option.addEventListener('click', function() {
                    const city = this.getAttribute('data-city');
                    selectedCity.textContent = city;
                    
                    localStorage.setItem('selectedCity', city);
                });
            });
            
            const savedCity = localStorage.getItem('selectedCity');
            if (savedCity) {
                selectedCity.textContent = savedCity;
            }

            // Фильтр цены
            const rangeMin = document.getElementById('range-min');
            const rangeMax = document.getElementById('range-max');
            const priceMin = document.getElementById('min-price');
            const priceMax = document.getElementById('max-price');
            const progress = document.getElementById('price-progress');

            function updatePriceSlider() {
                const minVal = parseInt(rangeMin.value);
                const maxVal = parseInt(rangeMax.value);
                
                // Проверяем, чтобы минимальное значение не было больше максимального
                if (minVal > maxVal) {
                    rangeMin.value = maxVal;
                    priceMin.value = maxVal;
                }
                
                // Проверяем, чтобы максимальное значение не было меньше минимального
                if (maxVal < minVal) {
                    rangeMax.value = minVal;
                    priceMax.value = minVal;
                }
                
                // Обновляем поля ввода
                priceMin.value = rangeMin.value;
                priceMax.value = rangeMax.value;
                
                // Обновляем прогресс-бар (синюю полосу)
                const minPercent = (minVal / rangeMin.max) * 100;
                const maxPercent = 100 - (maxVal / rangeMax.max) * 100;
                
                progress.style.left = minPercent + "%";
                progress.style.right = maxPercent + "%";
            }

            // Обработчики для ползунков
            rangeMin.addEventListener('input', updatePriceSlider);
            rangeMax.addEventListener('input', updatePriceSlider);

            // Обработчики для полей ввода с задержкой (чтобы не обновлять на каждый символ)
            let timeout;
            priceMin.addEventListener('input', function() {
                clearTimeout(timeout);
                timeout = setTimeout(() => {
                    let value = parseInt(this.value) || 0;
                    
                    // Проверяем границы
                    if (value < 0) value = 0;
                    if (value > 170000) value = 170000;
                    
                    this.value = value;
                    rangeMin.value = value;
                    updatePriceSlider();
                }, 500);
            });

            priceMax.addEventListener('input', function() {
                clearTimeout(timeout);
                timeout = setTimeout(() => {
                    let value = parseInt(this.value) || 0;
                    
                    // Проверяем границы
                    if (value < 0) value = 0;
                    if (value > 170000) value = 170000;
                    
                    this.value = value;
                    rangeMax.value = value;
                    updatePriceSlider();
                }, 500);
            });

            // Обработчики для потери фокуса (мгновенное обновление)
            priceMin.addEventListener('blur', function() {
                let value = parseInt(this.value) || 0;
                if (value < 0) value = 0;
                if (value > 170000) value = 170000;
                this.value = value;
                rangeMin.value = value;
                updatePriceSlider();
            });

            priceMax.addEventListener('blur', function() {
                let value = parseInt(this.value) || 0;
                if (value < 0) value = 0;
                if (value > 170000) value = 170000;
                this.value = value;
                rangeMax.value = value;
                updatePriceSlider();
            });

            // Инициализация слайдера
            updatePriceSlider();
        });
</script>
</body>
</html>