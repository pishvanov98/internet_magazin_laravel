@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="wrapper_button_prod">
            <a href="{{route('admin.product.create')}}"><button class="btn btn-primary" type="button">Добавить товар</button></a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Наименование</th>
                <th scope="col">Категория</th>
                <th scope="col">Действие</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>MSI</td>
                <td>Ноутбуки</td>
                <td>Изменить</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>MSI</td>
                <td>Ноутбуки</td>
                <td>Изменить</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>MSI</td>
                <td>Ноутбуки</td>
                <td>Изменить</td>
            </tr>
            </tbody>
        </table>

    </div>
@endsection
