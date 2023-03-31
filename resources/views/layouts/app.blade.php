<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.js') }}" ></script>
    <script src="{{ asset('js/slick.min.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('/img/NeYandex.png')}}">
                </a>
                <div class="wrapper_search_block_desktop">
                    <span class="button_catalog">
                        <span class="navbar-toggler-icon"></span>Каталог
                    </span>
                    <div class="wrapper_search">
                    <input id="header-search" type="text">
                    <span class="button_search">Найти</span>
                    </div>
                    </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Войти</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Зарегистрироваться</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Выйти
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="container">
        <div class="wrapper_item">
            <div class="item_top">
                Покупателям
            </div>
            <ul>
                <li><a href="#">Как выбрать товар</a></li>
                <li><a href="#">Оплата и доставка</a></li>
                <li><a href="#">Обратная связь</a></li>
                <li><a href="#">Покупайте как юрлицо</a></li>
                <li><a href="#">О сервисе</a></li>
            </ul>
        </div>
        <div class="wrapper_item">
            <div class="item_top">
                Продавцам
            </div>
            <ul>
                <li><a href="#">Личный кабинет продавца</a></li>
                <li><a href="#">Продавайте на Маркете</a></li>
                <li><a href="#">Документация для партнёров</a></li>
                <li><a href="#">Покупайте как юрлицо</a></li>
            </ul>
        </div>
        <div class="wrapper_item">
            <div class="item_top">
                Сотрудничество
            </div>
            <ul>
                <li><a href="#">Новости компании</a></li>
                <li><a href="#">Производителям</a></li>
                <li><a href="#">Пункт выдачи заказов</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
