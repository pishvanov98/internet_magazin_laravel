@extends('layouts.admin')
@section('content')
    <div class="container mt-3">
        <div class="mb-3">
            <label for="exampleFormControlInputName" class="form-label">Наименование товара</label>
            <input type="name" class="form-control" id="exampleFormControlInputName" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInputCategory" class="form-label">Категория</label>
            <input type="name" class="form-control" id="exampleFormControlInputCategory" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInputArt" class="form-label">Артикул</label>
            <input type="name" class="form-control" id="exampleFormControlInputArt" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInputBrand" class="form-label">Производитель</label>
            <input type="name" class="form-control" id="exampleFormControlInputBrand" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInputQuantity" class="form-label">Наличие</label>
            <input type="number" class="form-control" id="exampleFormControlInputQuantity" placeholder="">
        </div>
        <select class="form-select  mb-3" >
            <option selected>Статус</option>
            <option value="1">Активный</option>
            <option value="2">Не активный</option>
        </select>
        <div class="mb-3">
            <label for="exampleFormControlInputPrice" class="form-label">Стоимость</label>
            <input type="number" class="form-control" id="exampleFormControlInputPrice" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextareaDescription" class="form-label">Описание товара</label>
            <textarea class="form-control" id="exampleFormControlTextareaDescription" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Выберите картинку</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="wrapper_save_prod">
            <a href="#"><button class="btn btn-primary" type="button">Добавить</button></a>
        </div>
    </div>
@endsection
