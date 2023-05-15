@extends('layouts.app')
@section('content')
    <div><h1>Корзина</h1><span>3 товара</span></div>
    <div><input type="checkbox" id="cheese"><label for="cheese">Выбрать все</label>  <span>Удалить</span></div>

    <div class="cart_item">
        <input type="checkbox" id="cheese">
        <img src="{{asset("/img/resize/".$products[0]['image'][1])}}">
        <div class="column_cart_item">
            <p>{{$products[0]['name']}}</p>
            <p>{{$products[0]['articul']}}</p>
            <p>{{$products[0]['brand']}}</p>
            <div>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                    В избранное
                </span>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                      <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                    </svg>
                    Удалить
                </span>
            </div>
        </div>
        <div class="column_cart_item">
            <p>{{$products[0]['price']}}</p>
            <button>-</button>
            <input type="number" value="{{$products[0]['countToCart']}}" min="0">
            <button>+</button>
        </div>
    </div>

    @if($products)

        @foreach($products as $product)

{{--            {{$product['name']}}--}}
{{--            {{$product['articul']}}--}}
{{--            {{$product['price']}}--}}
{{--            {{$product['image'][1]}}--}}
{{--            {{$product['countToCart']}}--}}

        @endforeach

    @endif




@endsection
