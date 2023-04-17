@extends('layouts.admin')
@section('content')
    <div class="container mt-3 mb-3">
        <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInputName" class="form-label">Наименование товара</label>
                <input type="name" name="name" class="form-control" id="exampleFormControlInputName" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInputCategory" class="form-label">Категория</label>
                <input type="name" name="category_name" class="form-control" id="exampleFormControlInputCategory" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInputArt" class="form-label">Артикул</label>
                <input type="name" name="articul" class="form-control" id="exampleFormControlInputArt" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInputBrand" class="form-label">Производитель</label>
                <input type="name" name="brand" class="form-control" id="exampleFormControlInputBrand" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInputQuantity" class="form-label">Наличие</label>
                <input type="number" name="quantity" class="form-control" id="exampleFormControlInputQuantity" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlSelectStatus" class="form-label">Статус</label>
                <select name="status" class="form-select mb-3" id="exampleFormControlSelectStatus" >
                    <option value="1">Активный</option>
                    <option value="2">Не активный</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInputPrice" class="form-label">Стоимость</label>
                <input name="price" type="number" class="form-control" id="exampleFormControlInputPrice" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextareaDescription" class="form-label">Описание товара</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextareaDescription" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Выберите картинку</label>
                <input name="image" class="form-control" type="file" id="formFile">
            </div>
            <div class="wrapper_save_prod">
               <input type="submit" class="btn btn-primary" value="Добавить">
            </div>
        </form>
    </div>
@endsection
