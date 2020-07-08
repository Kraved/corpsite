@extends('layouts.management')
@section('content')
    <section class="management">
        <h1 class="management-title">Редактировать запись</h1>
        <form class=""  action="{{ route('news.management.update', $data->id) }}" method="POST" role="form">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="title">Введите заголовок: </label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $data->title }}" >
            </div>
            <div class="form-group">
                <label for="text">Введите текст: </label>
                <textarea type="" class="form-control" name="text" id="text">{{ $data->text }}</textarea>
            </div>
            <div class="d-flex flex-column">
                <h4>Опубликовать запись? </h4>
            	<label>
            		<input type="radio" name="published" id="" value="1" @if ($data->published == 1)
                    checked="checked"
            		@endif>
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
