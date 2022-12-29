<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Tamaza' }}</title>
    <link rel="stylesheet" href="./css/{{ $style }}.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>

<body>
<header>
    <!-- ===NAV STARTS=== -->
    <nav class="nav pe-2 ps-2">
        <a href="{{ route('index') }}"><img src="img/nav-logo.png" alt=""></a>

        <ul class="list__content">
            <li><a href="{{ route('index') }}" class="{{ Request::path() == '/' ? 'active' : '' }}">{{__("Главная")}}</a></li>
            <li><a href="{{ route('about') }}" class="{{ Request::path() == 'about' ? 'active' : '' }}">{{__("О нас")}}</a></li>
            <li><a href="{{ route('catalog') }}" class="{{ Request::path() == 'catalog' ? 'active' : '' }}">{{__("Каталог")}}</a></li>
            <li><a href="{{ route('contacts') }}" class="{{ Request::path() == 'contacts' ? 'active' : '' }}">{{__("Контакты")}}</a></li>

            @foreach($all_locales as $lang)
                <li><a href="{{ route('locale', ['lang'=>$lang]) }}" class="text-uppercase">{{ $lang }}</a></li>
            @endforeach

        </ul>

        <div class="admin">
            <a href="#" class="user"><i class="ri-user-fill"></i>Логин</a>

            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </nav>
    <!-- ===NAV FINISHED=== -->

    {{ $header__content }}

</header>

<main>

    {{ $slot }}


</main>

<footer>
    <section class="footer__contacts pb-5">
        <div class="container">
            <div class="row pt-5">
                <div class="col d-flex justify-content-center align-items-center footer__contacts-iframe">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192881.75937817822!2d68.8107988152588!3d40.9425435832021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae75ac5fbd77ab%3A0x4a1e178f88f8ad36!2z0JrRg9C50LjRh9C40YDRh9C40LrRgdC60LjQuSDRgNCw0LnQvtC9LCDQo9C30LHQtdC60LjRgdGC0LDQvQ!5e0!3m2!1sru!2s!4v1670662962923!5m2!1sru!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col">
                    <p class="footer__info-text text-center mt-5 mt-lg-0">Так же Вы можете написать свое сообщения прямо здесь!
                        Вам необходио заполнить все поля!</p>
                    <div id="form-main d-flex flex-column justify-content-center align-items-center">
                        <div id="form-div">
                            <form class="form" id="form1">

                                <p class="name">
                                    <input name="name" type="text" required
                                           class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Ф.И.О"
                                           id="name" />
                                </p>

                                <p class="email">
                                    <input name="email" type="email" required class="validate[required,custom[email]] feedback-input"
                                           id="email" placeholder="Номер телефона" />
                                </p>

                                <p class="text">
                    <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment"
                              placeholder="Комментарии"></textarea>
                                </p>


                                <div class="submit d-flex justify-content-center align-items-center">
                                    <input type="submit" value="Отправить" id="button-blue" />
                                    <div class="ease"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="container">
            <div class="row footer-row d-flex justify-content-between align-items-center pt-5 pb-5">
                <div class="col footer-col1">
                    <a href=""><img src="./img/nav-logo.png" class="footer-logo" alt=""></a>
                    <p class="text-white w-75 mt-5">​По-настоящему вкусные
                        пельмени попробуйте сами !
                    </p>

                    <h3 class="text-white">
                        Соц.Сети
                    </h3>
                    <div class="footer-icons mt-3">
                        <a href="#"><i class="fa-brands fa-facebook me-3 p-2"></i></a>
                        <a href="#"><i class="fa-brands fa-telegram me-3 p-2"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram p-2"></i></a>
                    </div>
                </div>

                <div class="col mt-5 mt-lg-0">
                    <h3 class="text-white">Полезные ссылки</h3>

                    <div class="d-flex flex-column footer-list">
                        <a href="index.html" class="text-decoration-none mt-5"><span>
                  <i class="fa-solid fa-chevron-right me-2"></i>Главная</span></a>
                        <a href="pages/aboutus.html" class="text-decoration-none mt-5"><span>
                  <i class="fa-solid fa-chevron-right me-2"></i>О
                  нас</span></a>
                        <a href="./pages/catalog.html" class="text-decoration-none mt-5"><span>
                  <i class="fa-solid fa-chevron-right me-2"></i>Каталог</span></a>
                        <a href="pages/contacts.html" class="text-decoration-none mt-5"><span>
                  <i class="fa-solid fa-chevron-right me-2"></i>Контакты</span></a>
                    </div>
                </div>

                <div class="col mt-4">
                    <h3 class="text-white">Наши Контакты</h3>

                    <div class="d-flex flex-column footer-list">
                        <a href="https://goo.gl/maps/bd2AC11BALHW3FzAA" class="text-decoration-none mt-5"><span><i
                                    class="fa-solid fa-location-dot me-2"></i>Quychirchiq tumani: iyik ota mahallasi</span></a>
                        <a href="tel: +998901084040" class="text-decoration-none mt-5"><span><i
                                    class="fa-solid fa-phone me-2"></i>+998 (90) 121-65-85</span></a>
                        <a href="" class="text-decoration-none mt-5"><span><i
                                    class="fa-solid fa-envelope me-2"></i>tamaza@mail.ru</span></a>
                    </div>

                    <h4 class="text-white mt-3">Новостная Рассылка</h4>

                    <form action="">
                        <label for="">
                            <input type="text" class="footer-input" placeholder="Ваш Eamil">
                            <button class="footer-btn">Отправить</button>
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </section>
</footer>




<script type="text/javascript">
    window.addEventListener("scroll", function () {
        var nav = document.querySelector("nav");
        nav.classList.toggle("sticky", window.scrollY > 50);
    })
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>
<script src="./script/{{ $script }}.js"></script>
<script src="./script/bootstrap.bundle.min.js"></script>
<script src="./script/FontAwesome.js"></script>
</body>

</html>
