@extends('layouts.management')
@section('content')
    <section class="management">
        <h1 class="management-title">Добавить запись</h1>
        <form class=""  action="{{ route('news.management.store') }}" method="POST" role="form">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="title">Введите заголовок: </label>
                <input type="text" class="form-control" name="title" id="title" >
            </div>
            <div class="form-group">
                <label for="text">Введите текст: </label>
                <textarea type="" class="form-control" name="text" id="text"></textarea>
            </div>
            <div class="d-flex flex-column">
                <h4>Опубликовать запись? </h4>
                <label>
                    <input type="radio" name="published" id="" value="1"
                    checked="checked">
                    Да
                </label>
                <label>
                    <input type="radio" name="published" id="" value="0">
                    Нет
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Редактировать</button>
        </form>
    </section>
@endsection
