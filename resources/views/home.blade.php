@extends('layouts.app')

@section('content')

    @push('js')
        <script src="{{ asset('js/slick.min.js') }}" ></script>
    @endpush


    @push('css')
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
    @endpush
<div class="container">
    <div class="block_slider">
        <div class="slider single-item">
            <div><img src="{{asset("/img/slider/avto.png")}}"></div>
            <div><img src="{{asset("/img/slider/book.png")}}"></div>
            <div><img src="{{asset("/img/slider/gadjet.png")}}"></div>
        </div>
    </div>
    <div class="wrapper_goods">
    <div class="goods">
        <span class="wishlist_icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
            </svg>
        </span>
        <img src="{{asset("/img/no_photo.png")}}">
        <span class="price">2 334 р</span>
        <span class="title">Органайзер для хранения документов с кодовым замком А4 (Серый) дорожный папка сумка в поездку контейнер для вещей файлы кофр</span>
    </div>
        <div class="goods">
        <span class="wishlist_icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
            </svg>
        </span>
        <img src="{{asset("/img/no_photo.png")}}">
        <span class="price">2 334 р</span>
        <span class="title">Органайзер для хранения документов с кодовым замком А4 (Серый) дорожный папка сумка в поездку контейнер для вещей файлы кофр</span>
    </div>
        <div class="goods">
        <span class="wishlist_icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
            </svg>
        </span>
        <img src="{{asset("/img/no_photo.png")}}">
        <span class="price">2 334 р</span>
        <span class="title">Органайзер для хранения документов с кодовым замком А4 (Серый) дорожный папка сумка в поездку контейнер для вещей файлы кофр</span>
    </div>
        <div class="goods">
        <span class="wishlist_icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
            </svg>
        </span>
        <img src="{{asset("/img/no_photo.png")}}">
        <span class="price">2 334 р</span>
        <span class="title">Органайзер для хранения документов с кодовым замком А4 (Серый) дорожный папка сумка в поездку контейнер для вещей файлы кофр</span>
    </div>
        <div class="goods">
        <span class="wishlist_icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
            </svg>
        </span>
        <img src="{{asset("/img/no_photo.png")}}">
        <span class="price">2 334 р</span>
        <span class="title">Органайзер для хранения документов с кодовым замком А4 (Серый) дорожный папка сумка в поездку контейнер для вещей файлы кофр</span>
    </div>
        <div class="goods">
        <span class="wishlist_icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
            </svg>
        </span>
        <img src="{{asset("/img/no_photo.png")}}">
        <span class="price">2 334 р</span>
        <span class="title">Органайзер для хранения документов с кодовым замком А4 (Серый) дорожный папка сумка в поездку контейнер для вещей файлы кофр</span>
    </div>
        <div class="goods">
        <span class="wishlist_icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
            </svg>
        </span>
        <img src="{{asset("/img/no_photo.png")}}">
        <span class="price">2 334 р</span>
        <span class="title">Органайзер для хранения документов с кодовым замком А4 (Серый) дорожный папка сумка в поездку контейнер для вещей файлы кофр</span>
    </div>
        <div class="goods">
        <span class="wishlist_icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
            </svg>
        </span>
        <img src="{{asset("/img/no_photo.png")}}">
        <span class="price">2 334 р</span>
        <span class="title">Органайзер для хранения документов с кодовым замком А4 (Серый) дорожный папка сумка в поездку контейнер для вещей файлы кофр</span>
    </div>
        <div class="goods">
        <span class="wishlist_icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
            </svg>
        </span>
        <img src="{{asset("/img/no_photo.png")}}">
        <span class="price">2 334 р</span>
        <span class="title">Органайзер для хранения документов с кодовым замком А4 (Серый) дорожный папка сумка в поездку контейнер для вещей файлы кофр</span>
    </div>
        <div class="goods">
        <span class="wishlist_icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
            </svg>
        </span>
        <img src="{{asset("/img/no_photo.png")}}">
        <span class="price">2 334 р</span>
        <span class="title">Органайзер для хранения документов с кодовым замком А4 (Серый) дорожный папка сумка в поездку контейнер для вещей файлы кофр</span>
    </div>
        <div class="goods">
        <span class="wishlist_icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
            </svg>
        </span>
        <img src="{{asset("/img/no_photo.png")}}">
        <span class="price">2 334 р</span>
        <span class="title">Органайзер для хранения документов с кодовым замком А4 (Серый) дорожный папка сумка в поездку контейнер для вещей файлы кофр</span>
    </div>
        <div class="goods">
        <span class="wishlist_icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
            </svg>
        </span>
        <img src="{{asset("/img/no_photo.png")}}">
        <span class="price">2 334 р</span>
        <span class="title">Органайзер для хранения документов с кодовым замком А4 (Серый) дорожный папка сумка в поездку контейнер для вещей файлы кофр</span>
    </div>
        <div class="goods">
        <span class="wishlist_icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
            </svg>
        </span>
        <img src="{{asset("/img/no_photo.png")}}">
        <span class="price">2 334 р</span>
        <span class="title">Органайзер для хранения документов с кодовым замком А4 (Серый) дорожный папка сумка в поездку контейнер для вещей файлы кофр</span>
    </div>
        <div class="goods">
        <span class="wishlist_icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
            </svg>
        </span>
        <img src="{{asset("/img/no_photo.png")}}">
        <span class="price">2 334 р</span>
        <span class="title">Органайзер для хранения документов с кодовым замком А4 (Серый) дорожный папка сумка в поездку контейнер для вещей файлы кофр</span>
    </div>
        <div class="goods">
        <span class="wishlist_icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
            </svg>
        </span>
        <img src="{{asset("/img/no_photo.png")}}">
        <span class="price">2 334 р</span>
        <span class="title">Органайзер для хранения документов с кодовым замком А4 (Серый) дорожный папка сумка в поездку контейнер для вещей файлы кофр</span>
    </div>
    </div>

</div>
<script>
    $('.single-item').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
        arrows:false,
        slidesToShow: 1,
        slidesToScroll: 1
    });

</script>
@endsection
