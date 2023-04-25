@extends('layouts.admin')
@section('content')
    <div class="container mb-3">
        <div class="wrapper_button_prod">
            <a href="{{route('admin.product.create')}}"><button class="btn btn-primary" type="button">Добавить товар</button></a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Наименование</th>
                <th scope="col">Категория</th>
                <th scope="col">Действие</th>
            </tr>
            </thead>
            <tbody>

            @if($product)

                @foreach($product as $key=>$item)
                    <tr>
                       <th scope="row"> {{$item['id']}}</th>
                       <td>{{$item['name']}}</td>
                       <td>{{$item['category_name']}}</td>
                       <td>Изменить</td>
                    </tr>
                @endforeach

            @endif

            </tbody>
        </table>

    </div>
@endsection
