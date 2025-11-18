<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/css/head_foot.css', 'resources/js/app.js', 'resources/css/basket.css'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <title>Корзина</title>
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

    <!-- БЛОК С ТОВАРАМИ НАЧАЛО-->
    <div class="basket_title">
        <p class="bt_text">Корзина</p>
        <p class="count">3 товара</p>
    </div>

    <div class="basket_main">
        <div class="basket_items">

        </div>
        <div class="basket_payment">

        </div>
    </div>

    <div class="basket_footer">

    </div>
    <!-- БЛОК С ТОВАРАМИ КОНЕЦ-->

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
</body>
</html>