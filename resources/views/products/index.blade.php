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
        </div>
        <div class="toolsANDcard">
            <!-- Боковая панель фильтров -->
            <div class="tools">
                <div class="slirerInputs">
                    <p>Ползунок+инпуты</p>
                </div>
                <div class="manufacturer">
                    <p>Производитель</p>
                        <div class="filter-option">
                            <input type="checkbox" id="manufacturer1" name="manufacturer" value="option1">
                            <label for="manufacturer1">Option</label>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="manufacturer2" name="manufacturer" value="option2">
                            <label for="manufacturer2">Option</label>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="manufacturer3" name="manufacturer" value="option3">
                            <label for="manufacturer3">Option</label>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="manufacturer4" name="manufacturer" value="option4">
                            <label for="manufacturer4">Option</label>
                        </div>
                        
                </div>
                <div class="brand">
                    <p>Бренд</p>
                        <div class="filter-option">
                            <input type="checkbox" id="brand1" name="brand" value="option1" checked>
                            <label for="brand1">Option</label>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="brand2" name="brand" value="option2" checked>
                            <label for="brand2">Option</label>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="brand3" name="brand" value="option3" checked>
                            <label for="brand3">Option</label>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="brand4" name="brand" value="option4" checked>
                            <label for="brand4">Option</label>
                        </div>
 
                </div>
            </div>
            
            <!-- Карточки товаров -->
            <div class="cards-wrapper">
                @foreach ($products as $product)
                    @if ($loop->index % 4 == 0)
                        <div class="cards-row">
                    @endif
                    
                    <div class="card">
                        <div class="foto">
                            <!-- Здесь должно быть изображение товара -->
                        </div>
                        <h3 class="description">{{ $product->name }}</h3>
                        <p class="description1">пласт. (уп. по 50 шт)</p>

                        <div class="priceAndBasket">
                            <div class="Price">
                                <div class="NewPrice">908.00 ₽</div>
                                <div class="OldPrice">15 000 ₽</div>
                            </div>
                            <button>Купить</button>
                        </div>
                    </div>
                    
                    @if ($loop->iteration % 4 == 0 || $loop->last)
                        </div>
                    @endif
                @endforeach
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
});
</script>
</body>
</html>