@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="title_cart"><h1>Корзина</h1><span class="small" >3 товара</span></div>

        <div class="left_panel_cart">
            <div class="wrapper_top_item_cart"><div class="input_block"><input type="checkbox" id="all"><label for="all">Выбрать все</label></div>
                <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                      <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                </svg>
                Удалить
            </span>
            </div>

            @if($products)

                @foreach($products as $product)

                    <div class="cart_item item{{$product['id']}}">
                        <input type="checkbox" id="cheese">
                        <img src="{{asset("/img/resize/".$product['image'][1])}}">
                        <div class="column_cart_item" style="width: 50%;">
                            <div>
                                <p>{{$products[0]['name']}}</p>
                                <p>Артикул: {{$products[0]['articul']}}</p>
                                <p>{{$products[0]['brand']}}</p>
                            </div>
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
                        <div class="column_cart_item" style="min-width: 80px;">
                            <p>{{$product['price']}}</p>
                            <div class="count_cart_item">
                                <button class="minus" data-id="{{$product['id']}}">-</button>
                                <input  type="number" data-id="{{$product['id']}}"  class="countToCart" value="{{$product['countToCart']}}" min="0" max="99" />
                                <button class="plus"  data-id="{{$product['id']}}" >+</button>
                            </div>
                        </div>
                    </div>

                @endforeach

            @endif

        </div>

    </div>

<script>



$(".minus").on('click',function (){

   var id=$(this).data("id");
   var value=$(".item"+id+" .countToCart").attr("value");
   value= value - 1;

   $(".item"+id+" .countToCart").attr("value", value);

});



    </script>



@endsection
