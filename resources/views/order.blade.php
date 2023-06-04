@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('orderCreate')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputAdres" class="form-label">Куда доставить</label>
                <input type="name" class="form-control" name="exampleInputAdres" id="exampleInputAdres" aria-describedby="adresHelp">
                <div id="adresHelp" class="form-text">Введите адресс</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputDate" class="form-label">Когда доставить</label>
                <input type="date" class="form-control" name="exampleInputDate" id="exampleInputDate">
            </div>
            <button type="submit" class="btn btn-primary">Оформить</button>
        </form>
    </div>

@endsection
