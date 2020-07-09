@extends('layouts.management')
@section('content')
    <section class="management">
        <h1 class="management-title mb-2">Редактировать запись</h1>
            <div class="news-edit d-flex">
                <div class="news-edit__form col-6 card card-body mr-2">
                    <form action="{{ route('news.management.update', $data->id) }}" method="POST" role="form">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <h4><label for="title">Введите заголовок: </label></h4>
                            <input type="text" class="form-control" name="title" id="title" value="{{ $data->title }}" >
                        </div>
                        <div class="form-group">
                            <h4><label for="text">Введите текст: </label></h4>
                            <textarea class="form-control" name="text" id="text">{{ $data->text }}</textarea>
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
                </div>

                <div class="news-edit__add col-6 card card-body">
                    <div class="d-flex m-auto flex-column w-75">
                        <label>
                            Автор:
                            <input class="form-control" type="text" value="{{ $data->user->name }}" disabled>
                        </label>
                        <label>
                            Создано:
                            <input class="form-control" type="text" value="{{ $data->created_at }}" disabled>
                        </label>
                        <label>
                            Обновлено:
                            <input class="form-control" type="text" value="{{ $data->updated_at }}" disabled>
                        </label>
                    </div>

                    <div>
                        <form action="{{ route('news.management.destroy', $data->id) }}" method="POST" role="form">
                            @csrf
                            @method('DELETE')
                        	<button type="submit" class="btn btn-danger">Удалить запись</button>
                        </form>
                    </div>
                </div>
            </div>

    </section>
@endsection
