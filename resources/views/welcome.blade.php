<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
         @vite(['resources/css/app.css', 'resources/css/head_foot.css','resources/css/main.css','resources/js/app.js'])
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

  
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

     <div class="main">
            <div class="main-car">
                <div class="top">
                    <div class="top-text">
                    <h2 class="text-1">Запчасти для коммерческой техники и спецтехники</h2>
                </div>
                <div class="top-down">
                    <p class="text-2">Ваш транспорт — это инструмент, который должен работать, а не стоять в ремонте. Мы помогаем механикам, автопаркам и сервисным центрам держать технику в строю, поставляя качественные запчасти для грузовиков, автобусов, спецтехники и прицепов — точно в срок и по лучшей цене.</p>
                </div>
                <div class="top-button">
                    <input class="button-main" type="submit" value="Стать клиентом">
                </div>
                </div>
            </div>
        <div class="info-block">
            <div class="block">
                <div class="text-up">Широкий ассортимент</div>
                <div class="text-down">Запчасти для европейских, российских и китайских марок: от двигателя до подвески.</div>
            </div>
            <img class="img-info-block" src="/images/line.svg" alt="">
             <div class="block">
                <div class="text-up">Проверенные поставщики</div>
                <div class="text-down">Оригинал и надежные аналоги от ведущих брендов.</div>
            </div>
            <img class="img-info-block" src="/images/line.svg" alt="">

             <div class="block">
                <div class="text-up">Быстрая доставка по РФ</div>
                <div class="text-down">Работаем с надежными ТК, отправляем в день заказа.</div>
            </div>
            <img class="img-info-block" src="/images/line.svg" alt="">

             <div class="block">
                <div class="text-up">Помощь в подборе</div>
                <div class="text-down">Наши специалисты помогут найти нужную деталь по VIN, артикулу или фото.</div>
            </div>
            <img class="img-info-block" src="/images/line.svg" alt="">

             <div class="block">
                <div class="text-up">Оплата, как удобно</div>
                <div class="text-down">Для юрлиц и ИП, безналичный расчет, отсрочка постоянным клиентам.</div>
            </div>
        </div>
        <div class="stocks">
            <div class="stocks-inside">
            <div class="theme"><h3>Акции и скидки</h3></div>
            <div class="blocks">
                <div class="block1">
                    <div class="b1-inside">
                        <div class="b1-info">
                            <div class="b1-description">
                                <div class="b1-description-up">Новинка 2025</div>
                                <div class="b1-description-down">Мега скидка 30% на все фильтры</div>
                            </div>
                            <div class="b1-percent">-30%</div>
                        </div>
                        <div class="b1-button">
                            <a class="b1-detailed" href="#"> Подробнее</a>
                            <img class="b1-img" src="/images/arrow.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="block2">
                    <div class="b2-inside">
                        <div class="b2-description">
                            <div class="b2-text">
                                <div class="b2-description-up">Мега скидки</div>
                                <div class="b2-description-down">Бесплатная доставка при заказе от 10 000 ₽</div>
                            </div>
                            <div class="b2-img-block">
                                <img class="b2-img" src="/images/screw.svg" alt="">
                            </div>
                        </div>
                        <div class="b2-button">
                            <a class="b2-detailed" href="#"> Подробнее</a>
                            <img class="b2-img" src="/images/arrow.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="block-double">
                    <div class="block3">
                        <div class="b3-block">
                            <div class="b3-info">
                                <div class="b3-description">
                                    <div class="b3-description-up">Мега скидки</div>
                                    <div class="b3-description-down">Сезонное ТО со скидкой</div>
                                </div>
                                <div class="b3-button">
                                    <a class="b3-detailed" href="#"> Подробнее</a>
                                    <img class="b3-img" src="/images/arrow2.svg" alt="">
                                </div>
                            </div>
                            <div class="b3-block-img">
                                <img src="/images/tire.svg" alt="" class="b3-img">
                            </div>
                        </div>
                    </div>
                    <div class="block4">
                        <did class="b4-info">
                            <div class="b4-button">
                                <a class="b4-detailed" href="#"> Подробнее</a>
                                <img class="b4-img" src="/images/arrow.svg" alt="">
                            </div>
                            <div class="b4-description">
                                <div class="b4-description-up">Мега скидки</div>
                                <div class="b4-description-down">Мега скидки Второй товар — со скидкой 50%</div>
                            </div>
                        </did>
                    </div>
                </div>
            </div>
        </div>    
        </div>
        <div class="popular">
            <div class="p-block1">
                <div class="p-text"><h2>Популярные товары</h2></div>
                    <div class="arrows">
                        <img src="/images/arrowL.svg" alt="">
                        <img src="/images/line2.svg" alt="">
                        <img src="/images/arrowR.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="p-block2">
                (сюда доабвить карточки)
            </div>
        </div>
        <div class="forms">
            <div class="f1-info">
                <div class="f1-description-up">Работайте с техникой — работайте с профессионалами</div>
                <div class="f1-description-down">Оставьте заявку или позвоните нам — наши специалисты быстро подберут запчасти под ваш транспорт.</div>
            </div>
            <div class="f2-info">
                <form class="f2-info" action="">
                   <div class="dropdown">
                        <button class="dropbtn">Услуги <img class="drop-img" src="/images/Vector1.svg" alt=""></button>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Марка <img class="drop-img" src="/images/Vector1.svg" alt=""></button>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Дата и время <img class="drop-img" src="/images/Vector1.svg" alt=""></button>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Филиал <img class="drop-img" src="/images/Vector1.svg" alt=""></button>
                    </div>
                    <div class="dropdown2">
                        <input type="text" class="dropbtn2" placeholder="E-mail">
                    </div>
                    <div class="dropdown2">
                        <input type="text" class="dropbtn2" placeholder="Имя">
                    </div>
                    <div class="dropdown3">
                        <button class="dropbtn3">Отправить</button>
                    </div>
                </form>
                
            </div>
        </div>
        <div class="news">
            <div class="p-block1">
                <div class="p-text"><h2>Новости</h2></div>
                    <div class="arrows">
                        <img src="/images/arrowL.svg" alt="">
                        <img src="/images/line2.svg" alt="">
                        <img src="/images/arrowR.svg" alt="">
                    </div>
                </div>
                <div class="news-blocks">
                    <div class="new-block">
                        <div class="new-img"><img src="/images/new-img1.png" alt=""></div>
                        <div class="new-info">
                            <div class="new-info-up"> Новая поставка оригинальных запчастей</div>
                            <div class="new-info-down">Мы обновили склад — в наличии новые позиции. Быстрая отгрузка и гарантия качества на все детали.</div>
                        </div>
                    </div>
                    <div class="new-block">
                        <div class="new-img"><img src="/images/new-img2.png" alt=""></div>
                        <div class="new-info">
                            <div class="new-info-up"> Теперь доставка в день заказа!</div>
                            <div class="new-info-down">Для клиентов из Челябинска и области — экспресс-доставка автозапчастей прямо в ваш сервис или на стоянку.</div>
                        </div>
                    </div>
                    <div class="new-block">
                        <div class="new-img"><img src="/images/new-img1.png" alt=""></div>
                        <div class="new-info">
                            <div class="new-info-up"> Теперь доставка в день заказа!</div>
                            <div class="new-info-down">Для клиентов из Челябинска и области — экспресс-доставка автозапчастей прямо в ваш сервис или на стоянку.</div>
                        </div>
                    </div>
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
